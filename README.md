# bizAdmin
<br>

### 项目介绍

基于laravel12、amis6、mysql8/pgsql17前后端分离开发的, 快速且灵活的后台管理框架

- 基于 amis 以 json 的方式在后端构建页面，减少前端开发工作量，提升开发效率。
- 在 amis 150多个组件都不满足的情况下, 可自行开发前端。
- 框架为前后端分离 (不用再因为框架而束手束脚~)。

<br>

### 内置功能

- 基础后台功能
    - 后台用户管理
    - 角色管理
    - 权限管理
    - 菜单管理
- **代码生成器**
    - 保存生成记录
    - 导入/导出生成记录
    - 可使用命令清除生成的内容
    - 无需更改代码即可生成完整功能
- `amis` 全组件封装 150+ , 无需前端开发即可完成复杂页面
- 多模块支持
- 图形化扩展管理


<br>

### 安装

> 👉 __注意: `bizAdmin` 是 `laravel` 的扩展包, 安装前请确保你会使用 `laravel12，PHP8.3+`版本以上`__

##### 1. 创建 `laravel` 项目

```php
composer create-project --prefer-dist laravel/laravel my-app 12.*
```

##### 2. 配置数据库信息并安装 `api` 模块

```dotenv
# .env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=biz_admin
DB_USERNAME=postgres
DB_PASSWORD=xxxxxx
```

安装`api` 模块

```shell
php artisan install:api
```

##### 3. 获取 `Biz Admin`

```shell
composer require dagasmart/bizadmin
```

##### 4. 安装

```shell
# 先发布框架资源
php artisan admin:publish
# 执行安装 (可以在执行安装命令前在 config/admin.php 中修改部分配置)
php artisan admin:install
```

##### 5. 运行项目

启动服务, 访问 `/admin` 路由即可 <br>
_初始账号密码都是 `admin`_

<br>




