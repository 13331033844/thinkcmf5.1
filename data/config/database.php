<?php
/**
 * 配置文件
 */

return [
    // 数据库类型
    'type'     => env('DATABASE_TYPE'),
    // 服务器地址
    'hostname' => env('DATABASE_HOSTNAME'),
    // 数据库名
    'database' => env('DATABASE_DATABASE'),
    // 用户名
    'username' => env('DATABASE_USERNAME'),
    // 密码
    'password' => env('DATABASE_PASSWORD'),
    // 端口
    'hostport' => env('DATABASE_HOSTPORT'),
    // 数据库编码默认采用utf8
    'charset'  => 'utf8mb4',
    // 数据库表前缀
    'prefix'   => env('DATABASE_prefix'),
];
