<?php

namespace DagaSmart\BizAdmin\Traits;

use Illuminate\Support\Facades\Storage;

trait CommonTrait
{
    /**
     * 基本信息
     * @return object
     */
    protected function admin(): object
    {
        return auth()->guard('admin')->user();
    }

    /**
     * 订单号
     */
    protected function orderNo($mid = 0): string
    {
        return date('YmdHis'). $mid . substr(microtime(), 2, 3). mt_rand(10,99);
    }

    function object2array(object $data)
    {
        return json_decode(json_encode($data,JSON_UNESCAPED_UNICODE), true);
    }

    /**
     * 单图相对路径
     * @param $value
     * @return null|string
     */
    protected function ImagePath($value): null|string
    {
        $obj = (object) pathinfo($value);
        if($obj->basename){
            $value = Storage::url('images/') . $obj->basename;
        }
        return $value;
    }

    /**
     * 单图
     * @param $value
     * @return null|string
     */
    protected function ImageUrl($value): null|string
    {
        $tmp = (object) parse_url($value);
        if($tmp->path) {
            if(!isset($tmp->scheme)){
                $value = config('app.url') . $value;
            }
        }
        return $value;
    }

    /**
     * 多图
     * json格式
     * @param $value
     * @param int $is_url 是否远程url，0否，1是
     * @param null $type
     * @return bool|string|null
     */
    protected function ImageFormat($value, int $is_url = 0, $type=null): bool|string|null
    {
        $images = [];
        if(!$value) {
            return null;
        }
        if(!is_array($value)){//不为数组时，转换成数组
            $value = explode(',', $value);
        }
        foreach ($value as $v){
            $images[] = $is_url ? $this->ImageUrl($v) : $this->ImagePath($v);
        }
        return $type=='json' ? json_encode($images,JSON_UNESCAPED_UNICODE) : implode(',',$images);
    }

    /**
     * 多图数组
     * json格式转数组
     * @param string $value 内容
     * @param string $sep 分隔符
     * @return array
     */
    protected function unImageFormat(string $value, string $sep = ','): array
    {
        if(is_json($value)){
            return json_decode($value,true);
        }
        return explode($sep, $value);
    }

    /**
     * 多图组播数组
     * json格式转数组
     * @param string $value
     * @return array
     */
    protected function carouselFormat(string $value): array
    {
        if($value && !is_null(json_decode($value,true))){
            $data = $this->unImageFormat($value);
            $item = [];
            array_walk($data, function($v) use(&$item) {
                $item[]['image'] = $v;
            });
            return $item;
        }
        return $value =='' ? [] : explode(',',$value);
    }

    /**
     * 分页数据整理
     */
    protected function total($data)
    {
        if ($data) {
            $data = [
                'total' => $data->total(),
                'list' => $data->items()
            ];
        }
        return $data;
    }

    /**
     * 计算年龄
     * @param string|null $birthday 出生时间
     * @return int|string
     */
    protected function Age(string $birthday=null): int|string
    {
        if(!$birthday){
            return 0;
        }
        $birthday = strtotime($birthday);
        //格式化出生时间年月日
        $b_year=date('Y',$birthday);
        $b_month=date('m',$birthday);
        $b_day=date('d',$birthday);
        //格式化当前时间年月日
        $t_year=date('Y');
        $t_month=date('m');
        $t_day=date('d');
        //开始计算年龄
        $age=$t_year-$b_year;
        if($b_month>$t_month || $b_month==$t_month && $b_day>$t_day){
            $age--;
        }
        return $age;
    }

    /**
     * 计算两个经纬度之间的距离 单位 m
     * @param string|null $curr 当前位置
     * @param string|null $local 目标位置
     * @return float|int
     */
    protected function Distance(string $curr=null, string $local=null): float|int
    {
        if(!$curr || !$local){
            return 0;
        }
        $location = array_merge(explode(',',$curr),explode(',',$local));
        list($lng1,$lat1,$lng2,$lat2) = $location;
        // deg2rad()函数将角度转换为弧度
        $radLat1 = deg2rad($lat1);
        $radLat2 = deg2rad($lat2);
        $radLng1 = deg2rad($lng1);
        $radLng2 = deg2rad($lng2);
        $a       = $radLat1 - $radLat2;
        $b       = $radLng1 - $radLng2;

        $distance =  2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6371 * 1000;
        return floor($distance);
    }

    //$region = $this->addressToRegionCode('106.777691,26.557088');
    //var_dump($region['regeocode']['addressComponent']['adcode']);
    /**
     * 根据详细地址 获取城市adcode
     * @param string|null $address
     * @param bool $flag  是否显示明细
     * @return bool|mixed|string|null
     */
    protected function addressToRegionCode(string $address=null, bool $flag=false): mixed
    {
        if(!$address){
            return null;
        }
        $url = 'https://restapi.amap.com/v3/geocode/geo?key=' . env('AMAP_KEY') . '&address=' . $address;
        $res = $this->requestCurl($url);
        if($res && isset($res['geocodes'][0]['adcode'])){
            if($flag) {
                return $res['geocodes'][0];
            }
            return $res['geocodes'][0]['adcode'];
        }
        return null;
    }

    /**
     * 根据坐标经纬度 获取城市adcode
     * @param string|null $location
     * @param bool $flag 是否显示明细
     * @return bool|mixed|string|null
     */
    protected function locationToRegionCode(string $location=null, bool $flag=false): mixed
    {
        if(!$location){
            return null;
        }
        $url = 'https://restapi.amap.com/v3/geocode/regeo?key=' . env('AMAP_KEY') . '&location=' . $location;
        $res = $this->requestCurl($url);
        if($res && isset($res['regeocode']['addressComponent']['adcode'])){
            if($flag) {
                return $res['regeocode']['addressComponent'];
            }
            return $res['regeocode']['addressComponent']['adcode'];
        }
        return null;
    }

    protected function requestCurl($url, $data = [], $type='get'){
        $http_build_query = http_build_query($data);
        if($type == 'get' && $data){
            $url = $url . '?' . $http_build_query;
        }
        $headerIp = array(
            'CLIENT-IP:117.139.73.46',
            'X-FORWARDED-FOR:117.139.73.46',
        );
        $refer = 'https://www.baidu.com';
        $ch = curl_init(); // 启动一个CURL会话
        curl_setopt($ch, CURLOPT_URL, $url); // 要访问的地址
        //伪造来源refer
        curl_setopt($ch, CURLOPT_REFERER, $refer);
        //伪造来源ip
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerIp);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 对认证证书来源的检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        if($type == 'post') {
            curl_setopt($ch, CURLOPT_POST, true); // 发送一个常规的Post请求
            curl_setopt($ch, CURLOPT_POSTFIELDS, $http_build_query); // Post提交的数据包
        }
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // 设置超时限制防止死循环
        curl_setopt($ch, CURLOPT_HEADER, false); // 显示返回的Header区域内容
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取的信息以文件流的形式返回
        $output = curl_exec($ch); // 执行操作
        if (curl_errno($ch)) {
            echo curl_error($ch);
        }
        if(!is_null(json_decode($output,true))){
            $output = json_decode($output,true);
        }
        curl_close($ch); // 关键CURL会话
        return $output; // 返回数据
    }

}
