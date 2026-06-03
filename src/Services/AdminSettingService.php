<?php

namespace DagaSmart\BizAdmin\Services;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use DagaSmart\BizAdmin\Models\AdminSetting;

/**
 * 基本设置服务类
 */
class AdminSettingService extends AdminService
{
    protected string $modelName = AdminSetting::class;

    protected string $cacheKeyPrefix = 'app_setting_';

    /**
     * 保存设置
     *
     * @param $key
     * @param $value
     *
     * @return bool
     */
    public function set($key, $value = null)
    {
        try {
            $merId = admin_mer_id();
            $module = admin_current_module();

            $setting = $this->getModel()->firstOrNew(['key' => $key]);

            $setting->values = $value;
            $this->clearCache($key);
            $setting->save();
        } catch (Exception $e) {
            amis_abort($e->getMessage());
        }

        return true;
    }

    /**
     * 批量保存设置
     *
     * @param array $data
     *
     * @return bool
     */
    public function setMany(array $data)
    {
        return admin_transaction(function () use ($data) {
            if ($data) {
                foreach ($data as $key => $value) {
                    if (!$this->set($key, $value)) {
                        return throw new Exception($this->getError());
                    }
                }
                return true;
            }
            return false;
        });
    }

    /**
     * 批量保存设置项并返回后台响应格式数据
     *
     * @param array $data
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function adminSetMany(array $data)
    {
        $prefix = admin_trans('admin.save');

        if ($this->setMany($data)) {
            return admin_response()->successMessage($prefix . admin_trans('admin.successfully'));
        }

        return admin_response()->fail($prefix . admin_trans('admin.failed'), $this->getError());
    }

    /**
     * 以数组形式返回所有设置
     *
     * @return array
     */
    public function all()
    {
        return $this->getModel()
            ->pluck('values', 'key')
            ->toArray();
    }

    /**
     * 获取设置项
     *
     * @param string     $key     设置项key
     * @param mixed|null $default 默认值
     * @param bool       $fresh   是否直接从数据库获取
     *
     * @return mixed|null
     */
    public function get(string $key, mixed $default = null, bool $fresh = false)
    {
        if ($fresh) {
            return $this->getModel()->where('key', $key)->value('values') ?? $default;
        }

        $cache = Cache::rememberForever($this->getCacheKey($key), function () use ($key, $default) {
            return $this->getModel()->where('key', $key)->value('values') ?? $default;
        });

        return $cache;
    }

    /**
     * 获取模块设置项
     *
     * @param string     $key
     * @param mixed|null $default
     * @param bool       $fresh
     *
     * @return mixed|null
     */
    public function getByModule(string $key, mixed $default = null, bool $fresh = false)
    {
        $cacheKey = $this->getCacheKey($key);

        $user_id = admin_user_id(); //用户id
        if ($user_id) {
            $key .= '_' . $user_id;

            $cacheKey .= '_' . $user_id;
        }
        $res = $this->getModel()->where('key', $key)->value('values');
        // 直接读库数据
        if ($fresh) {
            return $this->getModel()->where('key', $key)->value('values') ?? $default;
        }
        // 先从缓存获取，没有时，直接读库数据
        return Cache::rememberForever($cacheKey, function () use ($key, $default) {
            return $this->getModel()->where('key', $key)->value('values') ?? $default;
        });
    }

    /**
     * 获取模块商户设置项
     *
     * @param string     $key
     * @param mixed|null $default
     * @param bool       $fresh
     *
     * @return mixed|null
     */
    public function getByModuleMerchant(string $key, mixed $default = null, bool $fresh = false)
    {
        return $this->get($this->getCacheKey($key), $default, $fresh);
    }

    /**
     * 获取支付设置项
     *
     * @param string    $key    键名
     * @param bool      $is_plat 是否平台
     * @param bool      $fresh 直接取数据
     *
     * @return mixed|null
     */
    public function pay(string $key, bool $is_plat = false, bool $fresh = false)
    {
        //排除全局条件
        $model = $this->getModel()->withOutGlobalScope('ActionScope');
        //排除全局条件
        if ($is_plat) {
            $model->withOutGlobalScope('ActionScope');
        }
        //强制查表输出
        if ($fresh) {
            return $model->where('key', $key)->value('values') ?? null;
        }
        //获取表数据并缓存
        $cache = Cache::rememberForever($this->getCacheKey($key), function () use ($key, $model) {
            return $model->where('key', $key)->value('values') ?? null;
        });
        return $cache;
    }

    /**
     * 获取设置项中的某个值
     *
     * @param string $key  设置项key
     * @param string $path 通过点号分隔的路径, 同Arr::get()
     * @param        $default
     *
     * @return array|\ArrayAccess|mixed|null
     */
    public function arrayGet(string $key, string $path, $default = null)
    {
        $value = $this->get($key);

        if (is_array($value)) {
            return Arr::get($value, $path, $default);
        }

        return $default;
    }

    /**
     * 清除指定设置项
     *
     * @param string $key
     *
     * @return bool
     */
    public function del(string $key)
    {
        if ($this->getModel()->where('key', $key)->delete()) {
            $this->clearCache($key);
            return true;
        }

        return false;
    }


    /**
     * 清除指定用户设置项的缓存
     *
     * @param $key
     *
     * @return void
     */
    public function clearUserCache($key)
    {
        Cache::forget($this->cacheKeyPrefix . $key);
    }

    /**
     * 清除指定设置项的缓存
     *
     * @param $key
     *
     * @return void
     */
    public function clearCache($key)
    {
        Cache::forget($this->getCacheKey($key));
    }

    /**
     * 获取指定设置项的缓存
     * @param $key
     * @return string
     */
    public function getCacheKey($key)
    {
        $module = admin_current_module(); //模块
        $mer_id = admin_mer_id(); //商户
        if ($module) {
            $key .=  '_' . $module;
        }
        if ($mer_id) {
            $key .= '_' . $mer_id;
        }

        return $this->cacheKeyPrefix . $key;
    }
}
