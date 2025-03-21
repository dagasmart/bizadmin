<?php

namespace DagaSmart\BizAdmin\Support\CodeGenerator;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use DagaSmart\BizAdmin\Traits\MakeTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use DagaSmart\BizAdmin\Models\AdminCodeGenerator;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class Generator
{
    use MakeTrait;

    public static array $dataTypeMap = [
        'int'                => 'integer',
        'int@unsigned'       => 'unsignedInteger',
        'tinyint'            => 'tinyInteger',
        'tinyint@unsigned'   => 'unsignedTinyInteger',
        'smallint'           => 'smallInteger',
        'smallint@unsigned'  => 'unsignedSmallInteger',
        'mediumint'          => 'mediumInteger',
        'mediumint@unsigned' => 'unsignedMediumInteger',
        'bigint'             => 'bigInteger',
        'bigint@unsigned'    => 'unsignedBigInteger',
        'date'               => 'date',
        'time'               => 'time',
        'datetime'           => 'dateTime',
        'timestamp'          => 'timestamp',
        'enum'               => 'enum',
        'json'               => 'json',
        'binary'             => 'binary',
        'float'              => 'float',
        'double'             => 'double',
        'decimal'            => 'decimal',
        'varchar'            => 'string',
        'char'               => 'char',
        'text'               => 'text',
        'mediumtext'         => 'mediumText',
        'longtext'           => 'longText',
        'integer'            => 'integer',
    ];

    public function needCreateOptions()
    {
        return [
            [
                'label' => admin_trans('admin.code_generators.create_database_migration'),
                'value' => 'need_database_migration',
            ],
            [
                'label' => admin_trans('admin.code_generators.create_table'),
                'value' => 'need_create_table',
            ],
            [
                'label' => admin_trans('admin.code_generators.create_model'),
                'value' => 'need_model',
            ],
            [
                'label' => admin_trans('admin.code_generators.create_controller'),
                'value' => 'need_controller',
            ],
            [
                'label' => admin_trans('admin.code_generators.create_service'),
                'value' => 'need_service',
            ],
        ];
    }

    public function availableFieldTypes(): array
    {
        return collect(self::$dataTypeMap)
            ->values()
            ->map(fn($value) => ['label' => $value, 'value' => $value])
            ->toArray();
    }

    public function getDatabaseColumns($db = null, $tb = null)
    {
        $databases = Arr::where(config('database.connections', []), function ($value, $key) {
            return $key == config('database.default');
        });

        $data = [];

        try {
            foreach ($databases as $connectName => $value) {
                if ($db && $db != $value['database']) continue;

                try {
                    $databaseSchemaBuilder = Schema::connection($connectName);

                    //判断模式连接
                    $schema = $value['search_path'] ?? $value['database'];

                    $tables = collect($databaseSchemaBuilder->getTables($schema))
                        ->pluck('name')
                        ->map(fn($name) => Str::replaceStart(data_get($value, 'prefix', ''), '', $name))
                        ->toArray();
                } catch (\Throwable $e) { // 连不上的跳过
                    continue;
                }

                // 键(database名称)长度超过28个字符 amis 会获取字段信息失败(sqlite)，截取一下
                $databaseKey = strlen($value['database']) > 28 ? substr_replace($value['database'], '***', 10, -15) : $value['database'];

                $data[$databaseKey] = collect($tables)
                    ->flip()
                    ->map(function ($_, $table) use ($databaseSchemaBuilder, $connectName) {
                        return collect($databaseSchemaBuilder->getColumns($table))
                            ->whereNotIn('name', ['id', 'created_at', 'updated_at', 'deleted_at'])
                            ->values()
                            ->map(function ($v) {
                                $v['type']     = Arr::get(Generator::$dataTypeMap, $v['type'], 'string');
                                $v['nullable'] = $v['nullable'] == 'YES';
                                $v['comment']  = filled($v['comment']) ? $v['comment'] : Str::studly($v['name']);
                                return $v;
                            });
                    });
            }
        } catch (\Throwable $e) {
        }

        return collect($data);
    }

    public function getDatabasePrimaryKeys($db = null, $table = null)
    {
        $databases = Arr::where(config('database.connections', []), function ($value, $key) {
            return $key == config('database.default');
        });

        $data = [];

        try {
            foreach ($databases as $connectName => $value) {
                if ($db && $db != $value['database']) continue;

                $schema = $value['search_path'] ?? $value['database'];
                $sql = sprintf("SELECT * FROM information_schema.columns WHERE 1=1", $schema);

                $bool = $value['search_path'] ?? false; //判断pgsql模式

                if($bool) { // pgsql模式
                    $sql .= sprintf(" AND table_catalog = '%s'", $value['database']);
                }

                $sql .= sprintf(" AND table_schema = '%s'", $schema);

                if ($table) {
                    if($prefix = Arr::get($value, 'prefix')){
                        $table = $prefix . $table;
                    }
                    $sql .= sprintf(" AND table_name = '%s'", $table);
                }

                $columns = DB::connection($connectName)->select($sql);

                $collection = collect($columns)->map(function ($v) use ($value) {
                    if (!$prefix = Arr::get($value, 'prefix')) {
                        return (array) $v;
                    }
                    $v = (array) $v;

                    $v['table_name'] = Str::replaceFirst($prefix, '', $v['table_name']);

                    return $v;
                });

                if ($bool) { //判断pgsql模式
                    $data[$value['database']] = $collection->groupBy('table_name')->map(function ($v) {
                        return collect($v)
                            ->keyBy('column_name')
                            ->filter(function ($v) {
                                return strpos($v['column_default'], 'nextval') !== false;
                            })
                            ->whereNotIn('column_name', ['created_at', 'updated_at', 'deleted_at'])
                            ->map(fn($v) => $v['column_name'])
                            ->values()
                            ->first();
                    });
                } else {
                    $data[$value['database']] = $collection->groupBy('TABLE_NAME')->map(function ($v) {
                        return collect($v)
                            ->keyBy('COLUMN_NAME')
                            ->where('COLUMN_KEY', 'PRI')
                            ->whereNotIn('COLUMN_NAME', ['created_at', 'updated_at', 'deleted_at'])
                            ->map(fn($v) => $v['COLUMN_NAME'])
                            ->values()
                            ->first();
                    });
                }
            }
        } catch (\Throwable $e) {
        }

        return collect($data);
    }

    public function generate($id, $needs = [])
    {
        $record = AdminCodeGenerator::find($id);
        $model  = AdminCodeGenerator::find($id);
        $needs  = collect(filled($needs) ? $needs : $record->needs);

        $successMessage = fn($type, $path) => "<b class='text-success'>{$type} generated successfully!</b><br>{$path}<br><br>";

        $paths   = [];
        $message = '';
        try {
            // Model
            if ($needs->contains('need_model')) {
                $path = ModelGenerator::make($model)->generate();

                $message .= $successMessage('Model', $path);
                $paths[] = $path;
            }

            // Controller
            if ($needs->contains('need_controller')) {
                $path = ControllerGenerator::make($record)->generate();

                $message .= $successMessage('Controller', $path);
                $paths[] = $path;
            }

            // Service
            if ($needs->contains('need_service')) {
                $path = ServiceGenerator::make($record)->generate();

                $message .= $successMessage('Service', $path);
                $paths[] = $path;
            }

            // Route
            RouteGenerator::handle($record->menu_info);

            // Migration
            $migratePath = '';
            if ($needs->contains('need_database_migration')) {
                $path = MigrationGenerator::make($record)->generate();

                $message     .= $successMessage('Migration', $path);
                $migratePath = str_replace(base_path(), '', $path);
                $paths[]     = $path;
            }

            // 创建数据库表
            if ($needs->contains('need_create_table')) {
                if (Schema::hasTable($record->table_name)) {
                    abort(HttpResponse::HTTP_BAD_REQUEST, "Table [{$record->table_name}] already exists!");
                }

                if ($migratePath) {
                    Artisan::call('migrate', ['--path' => $migratePath]);
                } else {
                    Artisan::call('migrate');
                }
                $message .= $successMessage('Table', Artisan::output());
            }
        } catch (\Throwable $e) {
            app('files')->delete($paths);

            RouteGenerator::refresh();

            admin_abort($e->getMessage());
        }

        return $message;
    }

    public function preview($id)
    {
        $record = AdminCodeGenerator::find($id);

        try {
            // Model
            $model = ModelGenerator::make($record)->preview();
            // Migration
            $migration = MigrationGenerator::make($record)->preview();
            // Controller
            $controller = ControllerGenerator::make($record)->preview();
            // Service
            $service = ServiceGenerator::make($record)->preview();
        } catch (\Exception $e) {
            admin_abort($e->getMessage());
        }

        return compact('model', 'migration', 'controller', 'service');
    }
}
