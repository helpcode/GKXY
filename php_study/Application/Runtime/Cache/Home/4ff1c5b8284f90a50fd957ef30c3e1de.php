<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="极客,php,android,html,css3,html5,javascript,js,学院,WeCenter,Bootstrap" />
    <meta name="description" content="为你提供最新最好的PHP学习资源，帮助你掌握更多的编程技术提升你的思想见解，在这里你想要的都会有" />
    <link rel="shortcut icon" href="/php_study/Application/Public/Bootstrap/img/favicon.ico" type="image/x-icon" />
    <title><?php echo ($title); ?></title>

    <!--响应式样式应用-->
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/php_study/Application/Public/Bootstrap/css/buttons.css">
    <script type="text/javascript" src="/php_study/Application/Public/Bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="/php_study/Application/Public/Bootstrap/js/bootstrap.min.js"></script>
    <!--网站主要页面样式引用-->
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/css/developer.css"/>
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/css/web_learn.css"/>
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/css/php_learn.css"/>
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/css/details.css"/>
    <link rel="stylesheet" type="text/css" href="/php_study/Application/Public/Bootstrap/js/jquery.pin.js"/>
    <!--右下角回到顶部导航-->
    <link href="/php_study/Application/Public/Bootstrap/css/style.css" rel="stylesheet" type="text/css" />
    <!--jquery-ui 支持元素拖动-->
    <script type="text/javascript" src="/php_study/Application/Public/Bootstrap/js/jquery-ui.min.js"></script>

    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body >

<!--nav导航条-->
<nav class="navbar navbar-default navbar-fixed-top test" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">nav导航条</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand test" href="index.html"><img src="/php_study/Application/Public/Bootstrap/img/php-logo3.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-left navbar" style="margin-left: 10px;">
                <li class="active">
                    <a href="/php_study/Index/index.html" class="test">网站首页</a>
                </li>
                <li>
                    <a id="php_learn" href="/php_study/Index/php_learn.html" >PHP学习</a>
                </li>
                <li>
                    <a id="web_learn" href="/php_study/Index/web_learn.html">WEB前端</a>
                </li>
                <li >
                    <a id="developer" href="/php_study/Index/developer.html">开发者资讯</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right hidden-sm">
                    <li>
                        <a href="/php_study/Application/UPLOAD" target="_blank">社区 &nbsp;<span class="label label-default hot">火</span></a>
                    </li>
            </ul>
        </div>
    </div>
</nav>

<!--banner 切换-->
<div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
    <!--图片圆点-->
    <ol class="carousel-indicators">
        <li data-target="#fullcarousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#fullcarousel-example" data-slide-to="1"></li>
        <li data-target="#fullcarousel-example" data-slide-to="2"></li>
    </ol>
    <!--轮播图片-->
    <div class="carousel-inner">
        <div class="item active">
            <a href="/php_study/Index/details?nid=186" target="_blank">
                <img src="/php_study/Application/Public/Bootstrap/img/bn2.jpg">
            </a>
            <div class="carousel-caption">
                <h2>IT应聘者的简历应该是怎么样的？</h2>
                <p>从去年到现在看了几百份简历，包括产品运营和产品设计师的职位。我不是 HR...</p>
            </div>
        </div>
        <div class="item">
            <a href="/php_study/Index/details?nid=182" target="_blank">
                <img src="/php_study/Application/Public/Bootstrap/img/bn3.jpg">
            </a>
            <div class="carousel-caption">
                <h2>2016年最好的15个Web设计和开发工具</h2>
                <p>网络无处不在。世界上几乎没有地方是没有被因特网所渗透的。无孔不入的网...</p>
            </div>
        </div>
        <div class="item">
            <a href="/php_study/Index/details?nid=201" target="_blank">
                <img src="/php_study/Application/Public/Bootstrap/img/hy-lg.png">
            </a>
            <div class="carousel-caption">
                <h2>2015中国程序员生存报告 你苦你先看</h2>
                <p>上班编码，加班编码，回到家倒头就睡。别人给结婚同事包红包，他们却从来不用，因为很可能...</p>
            </div>
        </div>
    </div>
    <!--左右切换按钮-->
    <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i
            class="icon-prev fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i
            class="icon-next fa fa-angle-right"></i></a>
</div>

    <!--推荐学习-->
    <div class="xuexi">
        <div class="container">
            <div class="kfz_tuijian">
                <h2><strong>推荐学习&nbsp;<span class="label label-danger">推荐</span></strong></h2>
            </div>
            <div class="row">
                <?php for($n = 0; $n < count($data[0]); $n++){ $str = strip_tags($data[0][$n]['article_articlecontent']); $str_title = $data[0][$n]['article_articletitle']; echo '
                            <div class="col-md-3 text-center col-xs-12 border">
                                <img class="img-circle" src="'.$root.$data[0][$n]['article_articleimg'].'" width="140" height="140" />
                                <h4><a target="_blank" title="'.$data[0][$n]['article_articletitle'].'" href="/php_study/Index/details?nid='.$data[0][$n]['article_articleid'].'">'.mb_substr($str_title, 0, 10, 'utf-8').'</a></h4>
                                <p class="clear_p">'.mb_substr($str, 0, 100, 'utf-8').'</p>
                                <p><a target="_blank" title="'.$data[0][$n]['article_articletitle'].'" class="button button-pill" href="/php_study/Index/details?nid='.$data[0][$n]['article_articleid'].'">阅读</a></p>
                            </div>
                        '; } ?>
            </div>
        </div>
    </div>

    <!--PHP基础 -->
    <div class="php_xuexi">
        <div class="row">
            <div class="col-md-12">
                <a><img src="/php_study/Application/Public/Bootstrap/img/php_background.png" class="img-responsive web_img"/></a>
            </div>
        </div>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="row">
                        <?php for($n = 0; $n < count($data[1]); $n++){ $str = strip_tags($data[1][$n]['article_articlecontent']); $str_title = $data[1][$n]['article_articletitle']; echo '
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <a target="_blank" href="/php_study/Index/details?nid='.$data[1][$n]['article_articleid'].'"><img title="'.$data[1][$n]['article_articletitle'].'" alt="300x200" src="'.$root.$data[1][$n]['article_articleimg'].'"/></a>
                                            <div class="caption caption_p">
                                                <h3><a target="_blank" title="'.$data[1][$n]['article_articletitle'].'" href="/php_study/Index/details?nid='.$data[1][$n]['article_articleid'].'">'.mb_substr($str_title, 0, 10, 'utf-8').'</a></h3>
                                                <p class="clear_p">'.mb_substr($str, 0, 100, 'utf-8').'</p>
                                                <p><a href="/php_study/Index/details?nid='.$data[1][$n]['article_articleid'].'" class="button button-block button-rounded button-large" target="_blank">阅读</a></p>
                                            </div>
                                        </div>
                                    </div>
                                '; } ?>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
    </div>

    <!--程序员资讯 -->
    <div class="background">
        <div class="container">
            <div class="kfz">
                <h2><strong >程序猿生活</strong></h2>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <?php for($n = 0; $n < 4; $n++){ $str = strip_tags($data[2][$n]['article_articlecontent']); $str_title = $data[2][$n]['article_articletitle']; echo'
                                <div class="row row_background">
                                    <div class="col-md-2 col-xs-3">
                                        <a target="_blank" href="/php_study/Index/details?nid='.$data[2][$n]['article_articleid'].'" title="'.$data[2][$n]['article_articletitle'].'">
                                            <img class="img-responsive  img-circle img_xz" src="/php_study/Application/Public/Bootstrap/img/list1.jpg"/>
                                        </a>
                                    </div>
                                    <div class="col-md-10 col-xs-9">
                                        <div class="media-body">
                                            <h4 class=" media-heading"><a target="_blank" title="'.$data[2][$n]['article_articletitle'].'" href="/php_study/Index/details?nid='.$data[2][$n]['article_articleid'].'" class="wz_title">'.mb_substr($str_title, 0, 15, 'utf-8').'</a></h4>
                                            <h5 class="js_title">'.mb_substr($str, 0, 180, 'utf-8').'</h5>
                                        </div>
                                    </div>
                                </div>
                            <hr/>
                            '; } ?>
                </div>
                <?php for($n = 4; $n < 6; $n++){ $str = strip_tags($data[2][$n]['article_articlecontent']); echo '
                            <div class="col-md-3 hidden-xs">
                                <div class="thumbnail thu_xxk test">
                                    <img src="'.$root.$data[2][$n]['article_articleimg'].'" class="img-responsive"/>
                                        <div class="caption">
                                            <h3><a title="'.$data[2][$n]['article_articletitle'].'" href="/php_study/Index/details?nid='.$data[2][$n]['article_articleid'].'">'.$data[2][$n]['article_articletitle'].'</a></h3>
                                            <p>'.mb_substr($str, 0, 100, 'utf-8').'</p>
                                        </div>
                                </div>
                            </div>
                        '; } ?>
                </div>
            </div>
        </div>
    </div>

    <!--web 大前端 -->
    <div class="web_background ">
        <div class="row">
            <div class="col-md-12">
                <a><img src="/php_study/Application/Public/Bootstrap/img/web_background.png" class="img-responsive web_img"/></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php for($n = 0; $n < count($data[3]); $n++){ $str = strip_tags($data[3][$n]['article_articlecontent']); $str_title = $data[3][$n]['article_articletitle']; echo '
                            <div class="col-md-4 col-xs-12">
                                <div class="jumbotron jum_p">
                                    <h4 class="text-center web_h4_one"><a title="'.$data[3][$n]['article_articletitle'].'" href="/php_study/Index/details?nid='.$data[3][$n]['article_articleid'].'" target="_blank">'.mb_substr($str_title, 0, 15, 'utf-8').'</a></h4>
                                    <p class="w">'.mb_substr($str, 0, 100, 'utf-8').'</p>
                                    <p>
                                        <a target="_blank" href="/php_study/Index/details?nid='.$data[3][$n]['article_articleid'].'" class="button button-glow button-rounded button-highlight">阅读</a>
                                    </p>
                                </div>
                            </div>
                        '; } ?>
            </div>
        </div>
    </div>

    <!--开发环境推荐 -->
    <div class="web_ide" id="ide">
        <div class="container">
            <div class="kfz">
                <h2><strong>WEB IDE 推荐 <span class="badge">个人推荐</span></strong></h2>

            </div>
            <br />
            <div class="row">
                <div class="col-md-4 col-xs-12 wenzi-center">
                    <img src="/php_study/Application/Public/Bootstrap/img/webstorm.png" alt="WebStorm">
                    <h3 class="fea-item-title">WebStorm</h3>
                    <P class="jieshao">
                        WebStorm 是jetbrains公司旗下一款JavaScript 开发工具,
                        被广大中国JS开发者誉为"Web前端开发神器",强大的代码重构，联想查询，代码提示。
                        <br />推荐下载
                    </P>
                    <p><a class="button button-glow button-border button-rounded button-primary" href="http://www.jetbrains.com/webstorm/download/#section=windows-version" target="_blank">下载</a></p>
                </div>
                <div class="col-md-4 col-xs-12 wenzi-center">
                    <img src="/php_study/Application/Public/Bootstrap/img/nb.PNG" alt="NetBeans">
                    <h3 class="fea-item-title">NetBeans</h3>
                    <P class="jieshao">
                        免费好用且异常强大的PHP开发环境，支持Ruby、JavaScript、Groovy、Grails和C/C++等开发语言。提供丰富的帮助文档和
                        第三方插件。
                        <br/>PHP开发首选推荐....
                    </P>
                    <p><a class="button button-glow button-border button-rounded button-primary" href="https://netbeans.org/downloads/index.html" target="_blank">下载</a></p>
                </div>
                <div class="col-md-4 col-xs-12 wenzi-center">
                    <img src="/php_study/Application/Public/Bootstrap/img/hbuilder.png" alt="hbuilder">
                    <h3 class="fea-item-title">HBuilder</h3>
                    <P class="jieshao">
                        DCloud 开发的HTML5 IDE，支持自定义代码提示关键优势是 "快"，也就是所谓的编程效率！但部分代码提示较多余不智能
                        也是不错的IDE，推荐做Bootstrap开发是用它，效率可以！
                    </P>
                    <p><a class="button button-glow button-border button-rounded button-primary" href="http://www.dcloud.io/index.html" target="_blank">下载</a></p>
                </div>
                <div class="col-md-4 col-xs-12 wenzi-center">
                    <img src="/php_study/Application/Public/Bootstrap/img/ws.png" alt="WampServer">
                    <h3 class="fea-item-title">WampServer</h3>
                    <P class="jieshao">
                        法国人开发的Apache Web服务器集成 Apache+PHP+Mysql 等环境，图形可视化操作免去将时间花在繁琐的配置过程中，
                        从而腾出更多精力做开发。强烈推荐的PHP集成开发环境
                    </P>
                    <p><a class="button button-glow button-border button-rounded button-primary" href="https://sourceforge.net/projects/wampserver/?source=top3_dlp_t7" target="_blank">下载</a></p>
                </div>
                <div class="col-md-4 col-xs-12 wenzi-center">
                    <img src="/php_study/Application/Public/Bootstrap/img/sql.PNG" alt="Navicat for MySQL">
                    <h3 class="fea-item-title">Navicat for MySQL</h3>
                    <P class="jieshao">
                        极其完备友好的图形化用户界面，让你以更快捷安全简单的方式创建组织访问和共享信息。功能强大且完善受到众多程序员的喜爱，
                        被公认为全球最受欢迎的数据库前端用户界面工具
                    </P>
                    <p><a class="button button-glow button-border button-rounded button-primary" href="http://www.navicat.com/download/navicat-for-mysql" target="_blank">下载</a></p>
                </div>

                <div class="col-md-4 col-xs-12 wenzi-center">
                    <img src="/php_study/Application/Public/Bootstrap/img/Sublime.png" alt="Sublime Text">
                    <h3 class="fea-item-title">Sublime Text</h3>
                    <P class="jieshao">
                        作为一个开发者你不可能没听说过SublimeText，SublimeText是一款非常精巧的文本编辑器，适合编写代码、做笔记、写文章。它用户界面十分整洁，
                        功能非同凡响，性能快得出奇。
                    </P>
                    <p><a class="button button-glow button-border button-rounded button-primary" href="http://www.sublimetext.com/" target="_blank">下载</a></p>
                </div>
            </div>
        </div>
    </div>






<!--底部版权信息-->
<footer class="footer_background">
    <div class="container">
        <div class="row footer-top">
            <div class="col-sm-6 col-lg-8">
                <h4><a href="index.html"><img src="/php_study/Application/Public/Bootstrap/img/php-logo3.png"/></a></h4>
                <p>本站具有响应式的布局特点,能做到三屏(手机,平板,PC)同步,经测试具有良好的兼容性。
                    使用过程中遇到问题或有更好的建议均可向我们反馈,意见被采纳将发放怪客社区金币作为奖励，欢迎...<br/>
                    创想工作室(意见反馈技术交流) QQ群：<span class="label label-danger">540144097</span>
                </p>
            </div>
            <div class="col-sm-6 col-lg-4 footer_right">
                <div class="row aboutme">
                    <div class="col-xs-4">
                        <h4>开发人员</h4>
                        <ul class="nav_dh">
                            <li><a href="http://blog.sina.com.cn/danche365" title="流浪汉-单车365_新浪博客" target="_blank">刘&nbsp;&nbsp;&nbsp;&nbsp;兵</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-4">
                        <h4>指导老师</h4>
                        <ul class="nav_dh">
                            <li><a>钱政</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <h4>网站导航</h4>
                        <ul class="nav_dh">
                            <li><a href="/php_study/Index/index.html">网站首页</a></li>
                            <li><a target="_blank" href="/php_study/Application/UPLOAD">怪客社区</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row footer-bottom">
            <p class="footer-text">Copyright © 2016 信息与智能工程系&nbsp;&nbsp;技术支持：计用144-刘兵&nbsp;&nbsp;电话：18305520337&nbsp;&nbsp;|&nbsp;&nbsp;皖ICP备 12008101号</p>
        </div>
    </div>
</footer>

<!--右侧底部回到顶部-->
<script type="text/javascript">
    $(function() {
        $('#fullcarousel-example').carousel({interval: 4000});
        $( ".test" ).draggable({ opacity: 1, revert: true});
        $("[data-toggle='tooltip']").tooltip();
    });
    $(function(){
        // 页面浮动面板
        $("#floatPanel > .ctrolPanel > a.arrow").eq(0).click(function(){$("html,body").animate({scrollTop :0}, 800);return false;});
        $("#floatPanel > .ctrolPanel > a.arrow").eq(1).click(function(){$("html,body").animate({scrollTop : $(document).height()}, 800);return false;});

        var objPopPanel = $("#floatPanel > .popPanel");
        var w = objPopPanel.outerWidth();
        $("#floatPanel > .ctrolPanel > a.qrcode").bind({
            mouseover : function(){
                objPopPanel.css("width","0px").show();
                objPopPanel.animate({"width" : w + "px"},300);return false;
            },
            mouseout : function(){
                objPopPanel.animate({"width" : "0px"},300);return false;
                objPopPanel.css("width",w + "px");
            }
        });
    });
</script>
<div class="hidden-xs">
    <div id="floatPanel">
        <div class="ctrolPanel">
            <a class="arrow" href="#"><span>顶部</span></a>
            <a class="contact" href="/php_study/Application/UPLOAD/?/topic/意见反馈" target="_blank"><span>反馈</span></a>
            <a class="qrcode" href="#"><span>微信二维码</span></a>
            <a class="arrow" href="#"><span>底部</span></a>
        </div>
        <!--二维码弹出层-->
        <div class="popPanel">
            <div class="popPanel-inner">
                <div class="qrcodePanel">
                    <img src="/php_study/Application/Public/Bootstrap/img/weixin.jpg" /><br/><span>QQ扫码关注我的动态！</span></div>
                <div class="arrowPanel">
                    <div class="arrow01">
                    </div>
                    <div class="arrow02">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>