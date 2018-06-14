<?php
return array(
	//'配置项'=>'配置值'
    /* 数据库设置 */
    'DB_TYPE'         => env('DB_TYPE','mysql'),     // 数据库类型
    'DB_HOST'         => env('DB_HOST','localhost'), // 服务器地址
    'DB_NAME'         => env('DB_NAME',''),     // 数据库名
    'DB_USER'         => env('DB_USER',''),      // 用户名
    'DB_PWD'          => env('DB_PASS',''),          // 密码
    'DB_PORT'         => env('DB_PORT',''),        // 端口
    'DB_PREFIX'       => env('DB_PREFIX',3306),    // 数据库表前缀

    'SHOW_PAGE_TRACE' => true,
    /* URL设置 */
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'SITE_URL'        => env('SITE_URL'),
    //404页面
    'ERROR_PAGE'      => "",
    'TMPL_CACHE_ON'     => true ,

    /* 邮箱设置 */
    "MAIL_HOST"       => "",     //设置126邮箱服务
    "MAIL_SMTPAUTH"   => true,               //设置需要验证
    "MAIL_USERNAME"   => "", //发件人使用邮箱
    "MAIL_PASSWORD"   => "",          //设置发件人密码
    "MAIL_FROM"       => "", // 发件人邮箱
    "MAIL_FROM_NAME"  => "",            //发送者名称


    /* URL设置 */
    'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_PATHINFO_DEPR'     =>  '/',	// PATHINFO模式下，各参数之间的分割符号
    'URL_PATHINFO_FETCH'    =>  'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL', // 用于兼容判断PATH_INFO 参数的SERVER替代变量列表
    'URL_REQUEST_URI'       =>  'REQUEST_URI', // 获取当前页面地址的系统变量 默认为REQUEST_URI
    'URL_HTML_SUFFIX'       =>  'html',  // URL伪静态后缀设置
    'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg', // URL禁止访问的后缀设置
    'URL_PARAMS_BIND'       =>  true, // URL变量绑定到Action方法参数
    'URL_PARAMS_BIND_TYPE'  =>  0, // URL变量绑定的类型 0 按变量名绑定 1 按变量顺序绑定
    'URL_PARAMS_FILTER'     =>  false, // URL变量绑定过滤
    'URL_PARAMS_FILTER_TYPE'=>  '', // URL变量绑定过滤方法 如果为空 调用DEFAULT_FILTER
    'URL_ROUTE_RULES'       =>  array(

    ),
);