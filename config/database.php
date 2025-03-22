<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            //读
            'read' => [
                'host' => explode(',', env('DB_READ_HOST', 'localhost')),
            ],
            //写
            'write' => [
                'host' => explode(',', env('DB_HOST', 'localhost')),
            ],
            'sticky' => true, //读写一致性请求

            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_0900_ai_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => env('DB_ENGINE', 'InnoDB'),
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            //读
            'read' => [
                'host' => explode(',', env('DB_READ_HOST', 'localhost')),
            ],
            //写
            'write' => [
                'host' => explode(',', env('DB_HOST', 'localhost')),
            ],
            'sticky' => true, //读写一致性请求

            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => env('DB_ENGINE', 'InnoDB'),
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            //读
            'read' => [
                'host' => explode(',', env('DB_READ_HOST', 'localhost')),
            ],
            //写
            'write' => [
                'host' => explode(',', env('DB_HOST', 'localhost')),
            ],
            'pool' => env('PGSQL_POOL', 20), // 设置连接池最大连接数为10
            'min_connections' => 1, // 最小空闲连接数
            'max_connections' => 1024, // 实际最大可连接数
            'max_idle_time' => 120, // 连接在池中最长可以空闲的时间
            'options' => [
                //'persistent' => true, // 开启持久化连接,会导致资源争用，谨慎使用
                'connect_timeout' => 0, // 设置连接超时时间为5秒
            ],
            'sticky' => true, //读写一致性请求

            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'engine' => env('DB_ENGINE', 'InnoDB'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => env('DB_SEARCH'),
            'sslmode' => 'prefer',
        ],

        //连接外部pgsql业务库
        'pgbus' => [
            'driver' => env('DB_CONNECTION_BUS', 'pgsql'),
            //读
            'read' => [
                'host' => explode(',', env('DB_READ_HOST_BUS', 'localhost')),
            ],
            //写
            'write' => [
                'host' => explode(',', env('DB_HOST_BUS', 'localhost')),
            ],
            'pool' => env('PGSQL_POOL', 10), // 设置连接池最大连接数为10
            'min_connections' => 10, // 最小空闲连接数
            'max_connections' => 1024, // 实际最大可连接数
            'max_idle_time' => 10, // 连接在池中最长可以空闲的时间
            'options' => [
                'persistent' => true, // 开启持久化连接,会导致资源争用，谨慎使用
                'connect_timeout' => 5, // 设置连接超时时间为5秒
            ],
            'sticky' => true, //读写一致性请求

            'port' => env('DB_PORT_BUS', '5432'),
            'database' => env('DB_DATABASE_BUS', 'laravel'),
            'username' => env('DB_USERNAME_BUS', 'root'),
            'password' => env('DB_PASSWORD_BUS', ''),
            'charset' => env('DB_CHARSET_BUS', 'utf8mb4'),
            'engine' => env('DB_ENGINE_BUS', 'InnoDB'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => env('DB_SEARCH_BUS'),
            'sslmode' => 'prefer',
        ],
        //连接外部mysql业务库
        'mybus' => [
            'driver' => env('DB_CONNECTION_BUS', 'mysql'),
            //读
            'read' => [
                'host' => explode(',', env('DB_READ_HOST_BUS', 'localhost')),
            ],
            //写
            'write' => [
                'host' => explode(',', env('DB_HOST_BUS', 'localhost')),
            ],
            'sticky' => true, //读写一致性请求

            'port' => env('DB_PORT_BUS', '3306'),
            'database' => env('DB_DATABASE_BUS', 'laravel'),
            'username' => env('DB_USERNAME_BUS', 'root'),
            'password' => env('DB_PASSWORD_BUS', ''),
            'unix_socket' => env('DB_SOCKET_BUS', ''),
            'charset' => env('DB_CHARSET_BUS', 'utf8mb4'),
            'collation' => env('DB_COLLATION_BUS', 'utf8mb4_0900_ai_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => env('DB_ENGINE_BUS', 'InnoDB'),
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA',null),
            ]) : [],
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
