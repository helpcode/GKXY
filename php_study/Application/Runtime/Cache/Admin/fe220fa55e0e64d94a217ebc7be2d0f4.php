<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo ($title); ?></title>
    <link href="/php_study/Application/Public/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/php_study/Application/Public/Style/admin.css" rel="stylesheet">
    <link href="/php_study/Application/Public/Bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="wrapper">
    <!-- 导航条 -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/php_study/Index/index.html" style="padding:15px 0px 0px 30px">怪客学院-管理员后台</a>
        </div>
        <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user" style="margin-right: 5px"></i><?php echo ($user); ?><b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/php_study/"><i class="glyphicon glyphicon-home"></i> 怪客学院</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/php_study/Application/UPLOAD/" target="_blank"><i class="fa fa-fw fa-gear"></i>怪客社区</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="?do=logout"><i class="fa fa-fw fa-power-off"></i>注销</a>
                </li>
            </ul>
        </li>
    </ul>
        <!-- 左侧导航条部分 -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="/php_study/Index/index.html" style="background-color:#27504C;"><i class="glyphicon glyphicon-home"></i> 管理首页</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#gk_index">
                        <i class="glyphicon glyphicon-menu-hamburger"></i> 学院主页<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="gk_index" class="collapse">
                        <li>
                            <a href="/php_study/Index/table?do=create&id=1_1">推荐学习</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=1_2">PHP学习</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=1_3">程序猿生活</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=1_4">WEB前端推荐</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#gk_frontend">
                        <i class="glyphicon glyphicon-bitcoin"></i> WEB前端<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="gk_frontend" class="collapse">
                        <li>
                            <a href="/php_study/Index/table?do=create&id=2_1">CSS3特效</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=2_2">WEB框架</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=2_3">帮助手册</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#gk_news">
                        <i class="glyphicon glyphicon-console"></i> 开发者资讯<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="gk_news" class="collapse">
                        <li>
                            <a href="/php_study/Index/table?do=create&id=3_1">推荐资讯</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=3_2">业界热点</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=3_3">编程开发</a>
                        </li>
                        <li>
                            <a href="/php_study/Index/table?do=create&id=3_4">程序员人生</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#gk_admin">
                        <i class="glyphicon glyphicon-wrench"></i> 其他管理<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="gk_admin" class="collapse">
                        <li>
                            <a target="_blank" href="/php_study/Application/UPLOAD/?/admin/nav_menu/">导航管理</a>
                        </li>
                        <li>
                            <a target="_blank" href="/php_study/Application/UPLOAD/?/admin/user/list/">账户管理</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        怪客学院 <small>Guaike College</small>
                    </h1>
                    <div class="jumbotron">
                        <h1>你好,<br/>
                        欢迎访问怪客学院管理后台！</h1>
                        <p>
                            在管理后台您可以随时查看修改编辑删除网站的文章，对网站实现日常的管理协调。<br />
                            下面提供常用访问URL地址，URL开发阶段，修改localhost/php_study/为网站实际域名和项目文件名！<br /><br />
                            怪客学院访问URL地址：<a href="http://z-pw.cn">http://z-pw.cn</a><br />
                            怪客学院管理页面URL：<a href="http://z-pw.cn/admin.php/Index/Index">http://z-pw.cn/Admin.php/Index/Index</a><br/>
                            怪客社区管理页面URL：<a href="http://z-pw.cn/Application/UPLOAD/?/admin/">http://z-pw.cn/Application/UPLOAD/?/admin/</a><br/>
                            怪客社区访问URL地址：<a href="http://z-pw.cn/Application/UPLOAD/">http://z-pw.cn/Application/UPLOAD/</a><br />
                        </p>
                            <a href="http://z-pw.cn" class="btn btn-danger pull-right">怪客学院首页</a>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="/php_study/Application/Public/Bootstrap/js/jquery.min.js"></script>
    <script src="/php_study/Application/Public/Bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>