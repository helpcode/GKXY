<?php
return array(
	//'配置项'=>'配置值'

    /* 数据库默认设置 */
    'DB_TYPE'         =>      'mysql',      // 数据库类型
    'DB_HOST'         =>      '127.0.0.1',  // 服务器地址
    'DB_NAME'         =>      'guaike_home',      // 数据库名
    'DB_USER'         =>      'root',       // 用户名
    'DB_PWD'          =>      'root',           // 密码
    'DB_PORT'         =>      3306,         // 端口
    'DB_PARAMS'       =>      array(),      // 数据库连接参数
    'DB_PREFIX'       =>      'pst_',       // 数据库表前缀
    'DB_CHARSET'      =>      'utf8',       // 字符集
    'DB_DEBUG'        =>      TRUE,         //  数据库调试模式 开启后可以记录SQL日志

    /* 模板替换规则添加（最好不覆盖默认规则！） */
    'TMPL_PARSE_STRING'  =>array(
        '__APPLICATION__' => '/Application', // 添加application替换规则
    ),

    /* 默认模板设置 */
    'DEFAULT_THEME'         =>      'Default',

    /* 路由配置 */
    'URL_ROUTER_ON'   => true,      //开启路由
    'URL_MODEL'     =>      '2',    //路由模式为2 rewrite模式
    //测试路由规则配置
    //'details/:nid\d'    =>  'details/read',
    //'blog/:id'=>'Home/blog/read' // 表示路由到Home模块的blog控制器的read操作方法
    //'MODULE_ALLOW_LIST'     =>      array('index', 'admin'),

    /* 配置文件扩展 */
    'LOAD_EXT_CONFIG'   =>      'C_encryptionConfig',
);