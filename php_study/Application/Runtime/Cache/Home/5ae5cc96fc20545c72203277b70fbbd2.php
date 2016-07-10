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
 
   <!-- PHP学习栏目 --> 
   <div class="php_background"> 
    <div class="container"> 
     <div class="row"> 
      <!--左侧教程导航部分--> 
      <div class="col-md-3 col-xs-6"> 
       <!--PHP基础--> 
       <div class="row php_jc"> 
        <!--标签云 标题--> 
        <h3><a class="button button-glow button-rounded button-highlight">PHP基础</a></h3> 
        <!--标签云 标签--> 
        <div class="tag_cloud_fu"> 
         <ul id="myTab" class="nav nav-pills tag_cloud"> 
          <li class="active"> <a href="#ambient" data-toggle="tab">安装</a> </li> 
          <li> <a href="#grammar" data-toggle="tab">语法</a> </li> 
          <li> <a href="#variable" data-toggle="tab">变量</a> </li> 
          <li> <a href="#echo" data-toggle="tab">Echo / Print</a> </li> 
          <li> <a href="#datatype" data-toggle="tab">数据类型</a> </li> 
          <li> <a href="#char" data-toggle="tab">字符串变量</a> </li> 
          <li> <a href="#constant" data-toggle="tab">常量</a> </li> 
          <li> <a href="#operator" data-toggle="tab">运算符</a> </li> 
          <li> <a href="#if" data-toggle="tab">If...Else</a> </li> 
          <li> <a href="#Switch" data-toggle="tab">Switch</a> </li> 
          <li> <a href="#While" data-toggle="tab">While 循环</a> </li> 
          <li> <a href="#For" data-toggle="tab">For 循环</a> </li> 
          <li> <a href="#function" data-toggle="tab">函数</a> </li> 
          <li> <a href="#array" data-toggle="tab">数组</a> </li> 
          <li> <a href="#Array_sort" data-toggle="tab">数组排序</a> </li> 
         </ul> 
        </div> 
       </div> 
       <!--PHP表单--> 
       <div class="row php_jc"> 
        <!--标签云 标题--> 
        <h3><a class="button button-glow button-rounded button-royal">PHP表单</a></h3> 
        <!--标签云 标签--> 
        <div class="tag_cloud_fu"> 
         <ul id="myTab" class="nav nav-pills tag_cloud"> 
          <li class="active"> <a href="#form" data-toggle="tab">表单</a> </li> 
          <li> <a href="#form_yanzheng" data-toggle="tab">表单验证</a> </li> 
          <li> <a href="#form_bitian" data-toggle="tab">表单必填字段</a> </li> 
          <li> <a href="#form_url" data-toggle="tab">表单URL/E-mail</a> </li> 
          <li> <a href="#form_wancheng" data-toggle="tab">表单完成</a> </li> 
          <li> <a href="#form_get" data-toggle="tab">$_GET 变量</a> </li> 
          <li> <a href="#form_post" data-toggle="tab">$_POST 变量</a> </li> 
         </ul> 
        </div> 
       </div> 
       <!--PHP高级--> 
       <div class="row php_jc"> 
        <!--标签云 标题--> 
        <h3><a class="button button-glow button-rounded button-caution">PHP高级</a></h3> 
        <!--标签云 标签--> 
        <div class="tag_cloud_fu"> 
         <ul id="myTab" class="nav nav-pills tag_cloud"> 
          <li class="active"> <a href="#array_duowei" data-toggle="tab">多维数组</a> </li> 
          <li> <a href="#date" data-toggle="tab">日期</a> </li> 
          <li> <a href="#baohan" data-toggle="tab">包含</a> </li> 
          <li> <a href="#file" data-toggle="tab">文件</a> </li> 
          <li> <a href="#file_upload" data-toggle="tab">文件上传</a> </li> 
          <li> <a href="#Cookies" data-toggle="tab">Cookies</a> </li> 
          <li> <a href="#Sessions" data-toggle="tab">Sessions</a> </li> 
          <li> <a href="#Error" data-toggle="tab">Error</a> </li> 
          <li> <a href="#Exception" data-toggle="tab">Exception</a> </li> 
          <li> <a href="#guolvqi" data-toggle="tab">过滤器</a> </li> 
          <li> <a href="#gaoji_guolv" data-toggle="tab">高级过滤器</a> </li> 
          <li> <a href="#Json" data-toggle="tab">JSON数据</a> </li> 
         </ul> 
        </div> 
       </div> 
       <!--PHP数据库--> 
       <div class="row php_jc"> 
        <!--标签云 标题--> 
        <h3><a class="button button-glow button-rounded button-highlight">PHP MySQL 数据库</a></h3> 
        <!--标签云 标签--> 
        <div class="tag_cloud_fu"> 
         <ul id="myTab" class="nav nav-pills tag_cloud"> 
          <li class="active"> <a href="#jianjie" data-toggle="tab">简介</a> </li> 
          <li> <a href="#lianjie" data-toggle="tab">连接</a> </li> 
          <li> <a href="#create_DB" data-toggle="tab">创建数据库</a> </li> 
          <li> <a href="#create_table" data-toggle="tab">创建数据表</a> </li> 
          <li> <a href="#insert_data" data-toggle="tab">插入数据</a> </li> 
          <li> <a href="#insert_duotiao" data-toggle="tab">插入多条数据</a> </li> 
          <li> <a href="#yuchuli" data-toggle="tab">预处理语句</a> </li> 
          <li> <a href="#duqu" data-toggle="tab">读取数据</a> </li> 
          <li> <a href="#where" data-toggle="tab">Where</a> </li> 
          <li> <a href="#OrderBy" data-toggle="tab">Order By(关键词)</a> </li> 
          <li> <a href="#Update" data-toggle="tab">Update(更新)</a> </li> 
          <li> <a href="#Delete" data-toggle="tab">Delete(删除)</a> </li> 
          <li> <a href="#PHPODBC" data-toggle="tab">PHP ODBC</a> </li> 
         </ul> 
        </div> 
       </div> 
      </div> 
      <!--右侧教程主体内容--> 
      <div class="col-md-9 col-xs-6 php_right"> 
       <div id="myTabContent" class="tab-content"> 
        <div class="tab-pane fade in active" id="ambient"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>PHP 安装</h3> 
           <h2>您需要做什么？</h2> 
           <h5>为了开始使用 PHP，您可以：</h5> 
           <ul> 
            <li><p>找一个支持 PHP 和 MySQL 的 Web 主机</p></li> 
            <li><p>在您自己的 PC 机上安装 Web 服务器，然后安装 PHP 和 MySQL</p></li> 
           </ul> 
           <h2>使用支持 PHP 的 Web 主机</h2> 
           <p>如果您的服务器支持 PHP，那么您不需要做任何事情。<br /> 只要在您的 web 目录中创建 .php 文件即可，服务器将自动为您解析这些文件。<br /> 您不需要编译任何软件，或安装额外的工具。<br /> 由于 PHP 是免费的，大多数的 Web 主机都提供对 PHP 的支持。</p> 
           <h2>在您自己的 PC 机上建立 PHP</h2> 
           <p>然而，如果您的服务器不支持 PHP，您必须：</p> 
           <ul> 
            <li><p>安装 Web 服务器</p></li> 
            <li><p>安装 PHP</p></li> 
            <li><p>安装数据库，比如 MySQL</p></li> 
            <li><p>官方PHP网站（PHP.net）有 PHP 的安装说明:<a href="http://php.net/manual/en/install.php" target="_blank">单击下载</a></p></li> 
           </ul> 
           <h2>PHP 服务器组件</h2> 
           <p>对于初学者建议使用集成的服务器组件，它已经包含了 PHP、Apache、Mysql 等服务,免去了开发人员将时间花费在繁琐的配置环境过程。</p> 
           <h2>WampServer</h2> 
           <p>Window 系统可以使用 WampServer，下载地址：<a href="http://www.wampserver.com/" target="_blank">单击下载</a>，支持32位和64位系统，根据自己的系统选择版本。 WampServer 安装也简单，你只需要一直点击 &quot;Next&quot; 就可以完成安装了。</p> 
           <h2>XAMPP</h2> 
           <p>XAMPP 支持 Mac OS 和 Window 系统，下载地址：<a href="https://www.apachefriends.org/zh_cn/index.html">单击下载</a></p> 
           <h2>IDE (Integrated Development Environment,集成开发环境)<br /> Eclipse for PHP（免费）</h2> 
           <p>Eclipse 是一个开放源代码的、基于Java的可扩展开发平台(如果未安装JDK，则需要先 下载 JDK 安装)。就其本身而言，它只是一个框架和一组服务， 用于通过插件组件构建开发环境。幸运的是，Eclipse 附带了一个标准的插件集，包括Java开发工具（Java Development Kit，JDK）。<br /> 支持 Window、Linux 和 Mac OS 平台。<br /> Eclipse for PHP 官方下载地址：<a href="http://www.eclipse.org/downloads/packages/eclipse-php-developers/heliosr" target="_blank">单击下载</a></p> 
           <h2>PhpStorm（收费）</h2> 
           <p>PhpStorm是一个轻量级且便捷的PHP IDE，其旨在提供用户效率，可深刻理解用户的编码，提供智能代码补全，快速导航以及即时错误检查。<br /> PhpStorm 非常适合于PHP开发人员及前端工程师。提供诸于：智能HTML/CSS/JavaScript/PHP编辑、代码质量分析、版本控制集成（SVN、GIT）、调试和测试等功能</p>
           <br /> 支持 Window、Linux 和 Mac OS 平台。
           <br /> PhpStorm 官方下载地址：
           <a href="http://www.jetbrains.com/phpstorm/download/" target="_blank">单击下载</a>
           <p></p> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="grammar"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>PHP 语法</h3> 
           <p>PHP 脚本在服务器上执行，然后将纯 HTML 结果发送回浏览器。</p> 
           <h2>基本的 PHP 语法</h2> 
           <p>PHP 脚本可以放在文档中的任何位置。<br /> PHP 脚本以 
            <!--?php 开始，以 ?--> 结束：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> // 在这里输入你的 PHP代码(已注释) 
            <br /> ?&gt; 
            <br /> 
           </div> 
           <p> PHP 文件的默认文件扩展名是 &quot;.php&quot;。<br /> PHP 文件通常包含 HTML 标签和一些 PHP 脚本代码。<br /> 下面，我们提供了一个简单的 PHP 文件实例，它可以向浏览器输出文本 &quot;Hello World!&quot;：<br /> </p>
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;!DOCTYPE html&gt; 
            <br /> &lt;html&gt;
            <br /> &lt;body&gt;
            <br /> &lt;h1&gt;My first PHP page&lt;/h1&gt;
            <br /> &lt;?php
            <br /> echo &quot;Hello World!&quot;;
            <br /> ?&gt;
            <br /> &lt;/body&gt;
            <br /> &lt;/html&gt;
            <br /> 
           </div> 
           <p></p> 
           <p> PHP 中的每个代码行都必须以分号结束。分号是一种分隔符，用于把指令集区分开来。<br /> 通过 PHP，有两种在浏览器输出文本的基础指令：echo 和 print。<br /> </p> 
           <h2>PHP 中的注释</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">    &lt;?php 
            <br /> // 这是 PHP 单行注释 
            <br /> /*
            <br /> 这是
            <br /> PHP 多行
            <br /> 注释
            <br /> */
            <br /> ?&gt;
            <br />   
           </div> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="variable"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>PHP变量</h3> 
           <p>变量是用于存储信息的&quot;容器&quot;：</p> 
           <div> 
            <h2>实例</h2> 
            <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
              &lt;?php
             <br /> $x=5;
             <br /> $y=6;
             <br /> $z=$x+$y;
             <br /> echo $z;
             <br /> ?&gt; 
            </div> 
            <br /> 
           </div> 
           <h2>与代数类似</h2> 
           <p>x=5<br /> y=6<br /> z=x+y</p> 
           <p>在代数中，我们使用字母（如 x），并给它赋值（如 5）。</p> 
           <p>从上面的表达式 z=x+y ，我们可以计算出 z 的值为 11。</p> 
           <p>在 PHP 中，这些字母被称为<b>变量</b>。</p> 
           <br />
           <hr /> 
           <h2>PHP 变量</h2> 
           <p>与代数类似，可以给 PHP 变量赋予某个值（x=5）或者表达式（z=x+y）。</p> 
           <p>变量可以是很短的名称（如 x 和 y）或者更具描述性的名称（如 age、carname、totalvolume）。</p> 
           <p>PHP 变量规则：</p> 
           <ul> 
            <li>变量以 $ 符号开始，后面跟着变量的名称</li> 
            <li>变量名必须以字母或者下划线字符开始</li> 
            <li>变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）</li> 
            <li>变量名不能包含空格</li> 
            <li>变量名是区分大小写的（$y 和 $Y 是两个不同的变量）</li> 
           </ul> 
           <p>PHP 语句和 PHP 变量都是区分大小写的。</p> 
           <hr /> 
           <h2>创建（声明）PHP 变量</h2> 
           <p>PHP 没有声明变量的命令。</p> 
           <p>变量在您第一次赋值给它的时候被创建：</p> 
           <div> 
            <h2>实例</h2> 
            <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
              &lt;?php
             <br /> $txt=&quot;Hello world!&quot;;
             <br /> $x=5;
             <br />$y=10.5;
             <br /> ?&gt; 
            </div> 
           </div> 
           <p>在上面的语句执行中，变量 <b>txt</b> 将保存值 <b>Hello world!</b>，且变量 <strong>x</strong> 将保存值 <strong>5</strong>。</p> 
           <p><b>注释：</b>当您赋一个文本值给变量时，请在文本值两侧加上引号。</p> 
           <hr /> 
           <h2>PHP 是一门弱类型语言</h2> 
           <p>在上面的实例中，我们注意到，不必向 PHP 声明该变量的数据类型。</p> 
           <p>PHP 会根据变量的值，自动把变量转换为正确的数据类型。</p> 
           <p>在强类型的编程语言中，我们必须在使用变量前先声明（定义）变量的类型和名称。</p> 
           <hr /> 
           <h2>PHP 变量作用域</h2> 
           <p>变量的作用域是脚本中变量可被引用/使用的部分。</p> 
           <p>PHP 有四种不同的变量作用域：</p> 
           <ul> 
            <li>local</li> 
            <li>global</li> 
            <li>static</li> 
            <li>parameter</li> 
           </ul> 
           <hr /> 
           <h2>局部和全局作用域</h2> 
           <p> 在所有函数外部定义的变量，拥有全局作用域。除了函数外，全局变量可以被脚本中的任何部分访问，要在一个函数中访问一个全局变量，需要使用 global 关键字。 </p>
           <p> 在 PHP 函数内部声明的变量是局部变量，仅能在函数内部访问： </p> 
           <div> 
            <h2>实例</h2> 
            <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
              &lt;?php
             <br />$x=5; // 全局变量
             <br />
             <br />function myTest()
             <br />{
             <br />$y=10; // 局部变量
             <br />echo &quot;&lt;p&gt;Test variables inside the function:&lt;p&gt;&quot;;
             <br />echo &quot;Variable x is: $x&quot;;
             <br />echo &quot;&lt;br&gt;&quot;;
             <br />echo &quot;Variable y is: $y&quot;;
             <br />} 
             <br /> 
             <br />myTest();
             <br />
             <br />echo &quot;&lt;p&gt;Test variables outside the function:&lt;p&gt;&quot;;
             <br /> echo &quot;Variable x is: $x&quot;;
             <br />echo &quot;&lt;br&gt;&quot;;
             <br />echo &quot;Variable y is: $y&quot;;
             <br />?&gt; 
            </div> 
           </div>
           <p> 在以上实例中 myTest() 函数定义了 $x 和 $y 变量。 $x 变量在函数外声明，所以它是全局变量 ， $y 变量在函数内声明所以它是局部变量。</p>
           <p> 当我们调用myTest()函数并输出两个变量的值, 函数将会输出局部变量 $y 的值，但是不能输出 $x 的值，因为 $x 变量在函数外定义，无法在函数内使用，如果要在一个函数中访问一个全局变量，需要使用 global 关键字。 </p> 
           <p> </p>
           <p>然后我们在myTest()函数外输出两个变量的值，函数将会输出全局部变量 $x 的值，但是不能输出 $y 的值，因为 $y 变量在函数中定义，属于局部变量。</p> 你可以在不同函数中使用相同的变量名称，因为这些函数内定义的变量名是局部变量，只作用于该函数内。
           <p></p> 
           <hr />
           <h2> PHP global 关键字</h2>
           <p> global 关键字用于函数内访问全局变量。</p> 
           <p>在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：</p> 
           <div> 
            <h2>实例</h2> 
            <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
              &lt;?php
             <br /> $x=5;
             <br />$y=10;
             <br />
             <br /> function myTest()
             <br /> {
             <br /> global $x,$y;
             <br /> $y=$x+$y;
             <br /> }
             <br />
             <br /> myTest();
             <br /> echo $y; // 输出 15
             <br /> ?&gt; 
            </div> 
           </div> 
           <p>PHP 将所有全局变量存储在一个名为 $GLOBALS[<i>index</i>] 的数组中。 <em>index</em> 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。</p> 
           <p>上面的实例可以写成这样：</p> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $x=5;
            <br /> $y=10;
            <br />
            <br /> function myTest()
            <br /> {
            <br /> $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
            <br /> } 
            <br />
            <br /> myTest();
            <br /> echo $y;
            <br /> ?&gt; 
           </div> 
          </div> 
          <br />
          <hr /> 
          <h2>Static 作用域</h2> 
          <p>当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。</p> 
          <p>要做到这一点，请在您第一次声明变量时使用 <b>static</b> 关键字：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <h2 class="example">实例</h2> 
           <div class="example_code notranslate">
             &lt;?php
            <br />
            <br /> function myTest()
            <br /> {
            <br /> static $x=0;
            <br /> echo $x;
            <br /> $x++;
            <br /> }
            <br />
            <br /> myTest();
            <br /> myTest();
            <br /> myTest();
            <br />
            <br /> ?&gt; 
           </div> 
          </div> 
          <p>然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。</p> 
          <p><b>注释：</b>该变量仍然是函数的局部变量。</p> 
          <hr /> 
          <h2>参数作用域</h2> 
          <p>参数是通过调用代码将值传递给函数的局部变量。</p> 
          <p>参数是在参数列表中声明的，作为函数声明的一部分：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br />
           <br /> function myTest($x)
           <br /> {
           <br /> echo $x;
           <br /> }
           <br />
           <br /> myTest(5);
           <br />
           <br /> ?&gt; 
          </div> 
         </div> 
         <p>我们将在 <a href="php-functions.html">PHP 函数</a> 章节对它做更详细的讨论。</p> 
        </div> 
        <div class="tab-pane fade" id="echo"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>echo 和 print 语句</h3> 
          <hr /> 
          <p>在 PHP 中有两个基本的输出方式： echo 和 print。</p> 
          <p>本章节中我们会详细讨论两个语句的用法，并在实例中演示如何使用 echo 和 print。</p> 
          <hr /> 
          <h2>PHP echo 和 print 语句</h2> 
          <p>echo 和 print 区别:</p> 
          <ul> 
           <li>echo - 可以输出一个或多个字符串</li> 
           <li>print - 只允许输出一个字符串，返回值总为 1</li> 
          </ul> 
          <p><strong>提示：</strong>echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。</p> 
          <hr /> 
          <h2> PHP echo 语句</h2> 
          <p>echo 是一个语言结构，使用的时候可以不用加括号，也可以加上括号： echo 或 echo()。</p> 
          <p><strong>显示字符串</strong></p> 
          <p>下面的实例演示了如何使用 echo 命令输出字符串（字符串可以包含 HTML 标签）：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> echo &quot;&lt;h2&gt;PHP is fun!&lt;/h2&gt;&quot;;
            <br /> echo &quot;Hello world!&lt;br&gt;&quot;;
            <br />echo &quot;I'm about to learn PHP!&lt;br&gt;&quot;;
            <br /> echo &quot;This&quot;, &quot; string&quot;, &quot; was&quot;, &quot; made&quot;, &quot; with multiple parameters.&quot;;
            <br /> ?&gt; 
           </div> 
          </div> 
          <p><strong>显示变量</strong></p> 
          <p>下面的实例演示了如何使用 echo 命令输出变量和字符串：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$txt1=&quot;Learn PHP&quot;;
            <br />$txt2=&quot;w3cschool.cc&quot;;
            <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
            <br />
            <br />echo $txt1;
            <br />echo &quot;&lt;br&gt;&quot;;
            <br />echo &quot;Study PHP at $txt2&quot;;
            <br />echo &quot;My car is a <?php echo ($cars[0]); ?>&quot;;
            <br /> ?&gt; 
           </div> 
          </div> 
          <br />
          <hr /> 
          <h2> PHP print 语句</h2> 
          <p>print 同样是一个语言结构，可以使用括号，也可以不使用括号： print 或 print()。</p> 
          <p><strong>显示字符串</strong></p> 
          <p>下面的实例演示了如何使用 print 命令输出字符串（字符串可以包含 HTML 标签）：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> print &quot;&lt;h2&gt;PHP is fun!&lt;/h2&gt;&quot;;
            <br /> print &quot;Hello world!&lt;br&gt;&quot;;
            <br />print &quot;I'm about to learn PHP!&quot;;
            <br /> ?&gt; 
           </div> 
          </div> 
          <p><strong>显示变量</strong></p> 
          <p>下面的实例演示了如何使用 print 命令输出变量和字符串：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$txt1=&quot;Learn PHP&quot;;
            <br />$txt2=&quot;w3cschool.cc&quot;;
            <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
            <br />
            <br />print $txt1;
            <br />print &quot;&lt;br&gt;&quot;;
            <br /> print &quot;Study PHP at $txt2&quot;;
            <br />print &quot;My car is a <?php echo ($cars[0]); ?>&quot;;
            <br />?&gt; 
           </div> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="datatype"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>数据类型</h3> 
          <hr /> 
          <p>String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。<br /></p> 
          <hr /> 
          <h2>PHP 字符串</h2> 
          <p>一个字符串是一串字符的序列，就像 &quot;Hello world!&quot;。</p> 
          <p>你可以将任何文本放在单引号和双引号中：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$x = &quot;Hello world!&quot;;
            <br />echo $x;
            <br />echo &quot;&lt;br&gt;&quot;; 
            <br />$x = 'Hello world!';
            <br />echo $x;
            <br />?&gt;
           </div> 
          </div> 
          <br />
          <hr /> 
          <h2>PHP 整型</h2> 
          <p>整数是一个没有小数的数字。 </p> 
          <p>整数规则:</p> 
          <ul> 
           <li>整数必须至少有一个数字 (0-9)</li> 
           <li>整数不能包含逗号或空格</li> 
           <li>整数是没有小数点的</li> 
           <li>整数可以是正数或负数</li> 
           <li> 整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。</li> 
          </ul> 
          <p>在以下实例中我们将测试不同的数字。 PHP var_dump() 函数返回变量的数据类型和值：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$x = 5985;
            <br />var_dump($x);
            <br />echo &quot;&lt;br&gt;&quot;; 
            <br />$x = -345; // negative number 
            <br />var_dump($x);
            <br />echo &quot;&lt;br&gt;&quot;; 
            <br />$x = 0x8C; // hexadecimal number
            <br />var_dump($x);
            <br />echo &quot;&lt;br&gt;&quot;;
            <br />$x = 047; // octal number
            <br />var_dump($x);
            <br />?&gt;
           </div> 
          </div> 
          <br />
          <hr /> 
          <h2>PHP 浮点型</h2> 
          <p>浮点数是带小数部分的数字，或是指数形式。</p> 
          <p>在以下实例中我们将测试不同的数字。 PHP var_dump() 函数返回变量的数据类型和值：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$x = 10.365;
            <br />var_dump($x);
            <br />echo &quot;&lt;br&gt;&quot;; 
            <br />$x = 2.4e3;
            <br />var_dump($x);
            <br />echo &quot;&lt;br&gt;&quot;; 
            <br />$x = 8E-5;
            <br />var_dump($x);
            <br /> ?&gt; 
           </div> 
          </div> 
          <br />
          <hr /> 
          <h2>PHP 布尔型</h2> 
          <p>布尔型可以是 TRUE 或 FALSE。</p> 
          <div class="code"> 
           <div>
             $x=true;
            <br /> $y=false;
           </div> 
          </div> 
          <p>布尔型通常用于条件判断。在接下来的章节中你会学到更多关于条件控制的教程。</p> 
          <hr /> 
          <h2>PHP 数组</h2> 
          <p>数组可以在一个变量中存储多个值。</p> 
          <p>在以下实例中创建了一个数组， 然后使用 PHP var_dump() 函数返回数组的数据类型和值：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
            <br />var_dump($cars);
            <br /> ?&gt; 
           </div> 
          </div> 
          <p>在接下来的章节中你将学到更多关于数组的知识。</p> 
          <hr /> 
          <h2>PHP 对象</h2> 
          <p>对象数据类型也可以用于存储数据。</p> 
          <p>在 PHP 中，对象必须声明。</p> 
          <p>首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。</p> 
          <p>然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />class Car
            <br />{
            <br /> var $color;
            <br /> function Car($color=&quot;green&quot;) {
            <br /> $this-&gt;color = $color;
            <br /> }
            <br /> function what_color() {
            <br /> return $this-&gt;color;
            <br /> }
            <br />}
            <br />?&gt; 
           </div> 
          </div> 
          <p>以上实例中PHP关键字this就是指向当前对象实例的指针，不指向任何其他对象或类。</p> 
          <p>你将会在接下来的章节中学会更多关于对象的知识。</p> 
          <hr /> 
          <h2>PHP NULL 值</h2> 
          <p> NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。</p> 
          <p> NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。</p> 
          <p>可以通过设置变量值为 NULL 来清空变量数据：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$x=&quot;Hello world!&quot;;
            <br />$x=null;
            <br />var_dump($x);
            <br />?&gt; 
           </div> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="char"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>字符串变量</h3> 
          <hr /> 
          <p>字符串变量用于存储并处理文本。</p> 
          <hr /> 
          <h2>PHP 中的字符串变量</h2> 
          <p>字符串变量用于包含有字符的值。</p> 
          <p>在创建字符串之后，我们就可以对它进行操作了。您可以直接在函数中使用字符串，或者把它存储在变量中。</p> 
          <p>在下面的实例中，我们创建一个名为 txt 的字符串变量，并赋值为 &quot;Hello world!&quot; 。然后我们输出 txt 变量的值：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$txt&quot;Hello&nbsp;world!&quot; 
            <br />echo&nbsp; $txt ; 
            <br />?&gt; 
           </div> 
          </div> 
          <br /> 
          <p>注释：当您赋一个文本值给变量时，请记得给文本值加上单引号或者双引号。</p> 
          <p>现在，让我们来看看一些常用的操作字符串的函数和运算符。</p> 
          <hr /> 
          <h2>PHP 并置运算符</h2> 
          <p>在 PHP 中，只有一个字符串运算符。</p> 
          <p>并置运算符 (.) 用于把两个字符串值连接起来。</p> 
          <p>下面的实例演示了如何将两个字符串变量连接在一起：</p> 
          <p>字符串变量用于存储并处理文本。</p> 
          <hr /> 
          <h2>PHP 中的字符串变量</h2> 
          <p>字符串变量用于包含有字符的值。</p> 
          <p>在创建字符串之后，我们就可以对它进行操作了。您可以直接在函数中使用字符串，或者把它存储在变量中。</p> 
          <p>在下面的实例中，我们创建一个名为 txt 的字符串变量，并赋值为 &quot;Hello world!&quot; 。然后我们输出 txt 变量的值：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$txt &quot;Hello&nbsp;world!&quot;; 
            <br />echo&nbsp; $txt; 
            <br />?&gt; 
           </div>
          </div> 
          <br /> 
          <p>注释：当您赋一个文本值给变量时，请记得给文本值加上单引号或者双引号。</p> 
          <p>现在，让我们来看看一些常用的操作字符串的函数和运算符。</p> 
          <hr /> 
          <h2>PHP 并置运算符</h2> 
          <p>在 PHP 中，只有一个字符串运算符。</p> 
          <p>并置运算符 (.) 用于把两个字符串值连接起来。</p> 
          <p>下面的实例演示了如何将两个字符串变量连接在一起：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$txt1 &quot;Hello&nbsp;world!&quot;; 
            <br />$txt2 &quot;What&nbsp;a&nbsp;nice&nbsp;day!&quot;; 
            <br />echo&nbsp; $txt1&nbsp; .&nbsp; &quot;&nbsp;&quot;&nbsp; .&nbsp; $txt2; 
            <br /> ?&gt; 
           </div>
          </div> 
          <p>上面的代码将输出：Hello world! What a nice day! </p> 
          <p><strong>提示：</strong>在上面的代码中，我们已经使用了两次并置运算符。这是由于我们需要在两个字符串之间插入一个空格。</p> 
          <hr /> 
          <h2>PHP strlen() 函数</h2> 
          <p>有时知道字符串值的长度是很有用的。</p> 
          <p>strlen() 函数返回字符串的长度（字符数）。</p> 
          <p>下面的实例返回字符串 &quot;Hello world!&quot; 的长度：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> echo&nbsp; strlen &quot;Hello&nbsp;world!&quot;; 
            <br /> ?&gt; 
           </div>
          </div> 
          <p>上面的代码将输出：12</p> 
          <p><strong>提示：</strong>strlen() 常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的。（例如，在循环中，我们需要在字符串中的最后一个字符之后结束循环。）</p> 
          <hr /> 
          <h2>PHP strpos() 函数</h2> 
          <p>strpos() 函数用于在字符串内查找一个字符或一段指定的文本。</p> 
          <p>如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。</p> 
          <p>下面的实例在字符串 &quot;Hello world!&quot; 中查找文本 &quot;world&quot;：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> echo&nbsp; strpos &quot;Hello&nbsp;world!&quot; &quot;world&quot;; 
            <br />?&gt; 
           </div>
          </div> 
          <p>上面的代码将输出：6</p> 
          <p><strong>提示：</strong>在上面的实例中，字符串 &quot;world&quot; 的位置是 6。之所以是 6 而不是 7 的原因是，字符串中第一个字符的位置是 0，而不是 1。</p> 
          <hr /> 
          <h2>完整的 PHP String 参考手册</h2> 
          <p>如需查看所有字符串函数的完整参考手册，请访问我们的 <a href="php-ref-string.html">PHP String 参考手册</a>。</p> 
          <p>该参考手册提供了每个函数的简要描述和应用实例！</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br />$txt1 &quot;Hello&nbsp;world!&quot;; 
           <br /> $txt2 &quot;What&nbsp;a&nbsp;nice&nbsp;day!&quot;; 
           <br />echo&nbsp; $txt1&nbsp; .&nbsp; &quot;&nbsp;&quot;&nbsp; .&nbsp; $txt2; 
           <br /> ?&gt; 
          </div> 
          <p>上面的代码将输出：Hello world! What a nice day! </p> 
          <p><strong>提示：</strong>在上面的代码中，我们已经使用了两次并置运算符。这是由于我们需要在两个字符串之间插入一个空格。</p> 
          <hr /> 
          <h2>PHP strlen() 函数</h2> 
          <p>有时知道字符串值的长度是很有用的。</p> 
          <p>strlen() 函数返回字符串的长度（字符数）。</p> 
          <p>下面的实例返回字符串 &quot;Hello world!&quot; 的长度：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> echo&nbsp; strlen &quot;Hello&nbsp;world!&quot;; 
            <br />?&gt; 
           </div> 
          </div> 
          <p>上面的代码将输出：12</p> 
          <p><strong>提示：</strong>strlen() 常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的。（例如，在循环中，我们需要在字符串中的最后一个字符之后结束循环。）</p> 
          <hr /> 
          <h2>PHP strpos() 函数</h2> 
          <p>strpos() 函数用于在字符串内查找一个字符或一段指定的文本。</p> 
          <p>如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。</p> 
          <p>下面的实例在字符串 &quot;Hello world!&quot; 中查找文本 &quot;world&quot;：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> echo&nbsp; strpos &quot;Hello&nbsp;world!&quot; &quot;world&quot;; 
            <br />?&gt; 
           </div> 
          </div> 
          <p>上面的代码将输出：6</p> 
          <p><strong>提示：</strong>在上面的实例中，字符串 &quot;world&quot; 的位置是 6。之所以是 6 而不是 7 的原因是，字符串中第一个字符的位置是 0，而不是 1。</p> 
          <hr /> 
          <h2>完整的 PHP String 参考手册</h2> 
          <p>如需查看所有字符串函数的完整参考手册，请访问我们的 <a href="php-ref-string.html">PHP String 参考手册</a>。</p> 
          <p>该参考手册提供了每个函数的简要描述和应用实例！</p> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="constant"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>常量</h3> 
          <hr /> 
          <p>常量值被定义后，在脚本的其他任何地方都不能被改变。</p> 
          <hr /> 
          <h2>PHP 常量</h2> 
          <p>常量是一个简单值的标识符。该值在脚本中不能改变。</p> 
          <p>一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。</p> 
          <p><strong>注意：</strong> 常量在整个脚本中都可以使用。</p> 
          <hr /> 
          <h2>设置 PHP 常量</h2> 
          <p>设置常量，使用 define() 函数，函数语法如下：</p> 
          <div>
            define(string constant_name, mixed value, case_sensitive = true)
          </div> 
          <p>该函数有三个参数: </p> 
          <ul> 
           <li> <strong>constant_name：</strong>必选参数，常量名称，即标志符。</li>
           <li> <strong>value：</strong>必选参数，常量的值。</li>
           <li> <strong>case_sensitive</strong>：可选参数，指定是否大小写敏感，设定为 true 表示不敏感。</li>
          </ul> 
          <p>以下实例我们创建一个 <strong>区分大小写的常量</strong>, 常量值为 &quot;欢迎访问 Runoob.com&quot;：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php // 区分大小写的常量名 
           <br /> define(&quot;GREETING&quot;, &quot;欢迎访问 Runoob.com&quot;);
           <br /> echo GREETING; // 输出 &quot;欢迎访问 Runoob.com&quot;
           <br /> echo '&lt;br&gt;';
           <br /> echo greeting; // 输出 &quot;greeting&quot;
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以下实例我们创建一个 <strong>不区分大小写的常量</strong>, 常量值为 &quot;欢迎访问 Runoob.com&quot;：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php // 不区分大小写的常量名
           <br /> define(&quot;GREETING&quot;, &quot;欢迎访问 Runoob.com&quot;, true);
           <br /> echo greeting; // 输出 &quot;欢迎访问 Runoob.com&quot;
           <br /> ?&gt;
           <br /> 
          </div> 
          <hr /> 
          <h2>常量是全局的</h2> 
          <p>常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。</p> 
          <p>以下实例演示了在函数内使用常量，即便常量定义在函数外也可以正常使用常量。</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> define(&quot;GREETING&quot;, &quot;欢迎访问 Runoob.com&quot;);
           <br /> function myTest() {
           <br /> echo GREETING;
           <br /> }
           <br /> myTest(); // 输出 &quot;欢迎访问 Runoob.com&quot;
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="operator"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>运算符</h3> 
          <hr /> 
          <p>本章节我们将讨论 PHP 中不同运算符的应用。</p> 
          <p>在 PHP 中，赋值运算符 = 用于给变量赋值。</p> 
          <p>在 PHP 中，算术运算符 + 用于把值加在一起。</p> 
          <hr /> 
          <h2>PHP 算术运算符</h2> 
          <table class="reference"> 
           <tbody>
            <tr> 
             <th width="13%" align="left">运算符</th> 
             <th width="20%" align="left">名称</th> 
             <th width="30%" align="left">描述</th> 
             <th width="27%" align="left">实例</th> 
             <th width="10%" align="left">结果</th> 
            </tr> 
            <tr> 
             <td>x + y</td> 
             <td>加</td> 
             <td>x 和 y 的和</td> 
             <td>2 + 2</td> 
             <td>4</td> 
            </tr> 
            <tr> 
             <td>x - y</td> 
             <td>减</td> 
             <td>x 和 y 的差</td> 
             <td>5 - 2</td> 
             <td>3</td> 
            </tr> 
            <tr> 
             <td>x * y</td> 
             <td>乘</td> 
             <td>x 和 y 的积</td> 
             <td>5 * 2</td> 
             <td>10</td> 
            </tr> 
            <tr> 
             <td>x / y</td> 
             <td>除</td> 
             <td>x 和 y 的商</td> 
             <td>15 / 5</td> 
             <td>3</td> 
            </tr> 
            <tr> 
             <td>x % y</td> 
             <td>模（除法的余数）</td> 
             <td>x 除以 y 的余数</td> 
             <td>5 % 2<br />10 % 8<br />10 % 2</td> 
             <td>1<br />2<br />0</td> 
            </tr> 
            <tr> 
             <td>- x</td> 
             <td>取反</td> 
             <td>x 取反</td> 
             <td>- 2</td> 
             <td> </td> 
            </tr> 
            <tr> 
             <td>a . b </td> 
             <td>并置</td> 
             <td>连接两个字符串</td> 
             <td>&quot;Hi&quot; . &quot;Ha&quot;</td> 
             <td>HiHa</td> 
            </tr> 
           </tbody>
          </table> 
          <p>以下实例演示了使用不同算术运算符得到的不同结果：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$x=10; 
            <br />$y=6;
            <br />echo ($x + $y); // 输出16
            <br />echo ($x - $y); // 输出4
            <br />echo ($x * $y); // 输出60
            <br />echo ($x / $y); // 输出1.6666666666667 
            <br />echo ($x % $y); // 输出4 
            <br />?&gt;
           </div> 
           <br /> 
          </div> 
          <p>PHP7+ 版本新增整除运算符 <strong>intdiv()</strong>,使用实例：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> var_dump(intdiv(10, 3));
           <br /> ?&gt;
           <br /> 
          </div>
          <p> 以上实例会输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            int(3) 
          </div> 
          <hr /> 
          <h2>PHP 赋值运算符</h2> 
          <p>在 PHP 中，基本的赋值运算符是 &quot;=&quot;。它意味着左操作数被设置为右侧表达式的值。也就是说，&quot;$x = 5&quot; 的值是 5。</p> 
          <table class="reference"> 
           <tbody>
            <tr> 
             <th width="13%" align="left">运算符</th> 
             <th width="20%" align="left">等同于</th> 
             <th width="67%" align="left">描述</th> 
            </tr> 
            <tr> 
             <td>x = y</td> 
             <td>x = y</td> 
             <td>左操作数被设置为右侧表达式的值</td> 
            </tr> 
            <tr> 
             <td>x += y</td> 
             <td>x = x + y</td> 
             <td>加</td> 
            </tr> 
            <tr> 
             <td>x -= y</td> 
             <td>x = x - y</td> 
             <td>减</td> 
            </tr> 
            <tr> 
             <td>x *= y</td> 
             <td>x = x * y</td> 
             <td>乘</td> 
            </tr> 
            <tr> 
             <td>x /= y</td> 
             <td>x = x / y</td> 
             <td>除</td> 
            </tr> 
            <tr> 
             <td>x %= y</td> 
             <td>x = x % y</td> 
             <td>模（除法的余数）</td> 
            </tr> 
            <tr> 
             <td>a .= b</td> 
             <td>a = a . b</td> 
             <td>连接两个字符串</td> 
            </tr> 
           </tbody>
          </table> 
          <p>以下实例演示了使用不同赋值运算符得到的不同结果：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br />$x=10; 
            <br />echo $x; // 输出10
            <br />
            <br />$y=20; 
            <br />$y += 100;
            <br /> echo $y; // 输出120
            <br />
            <br />$z=50;
            <br />$z -= 25;
            <br />echo $z; // 输出25
            <br /> 
            <br />$i=5;
            <br />$i *= 6;
            <br />echo $i; // 输出30
            <br />
            <br />$j=10;
            <br />$j /= 5;
            <br /> echo $j; // 输出2
            <br />
            <br />$k=15;
            <br />$k %= 4;
            <br />echo $k; // 输出3
            <br /> ?&gt;
           </div> 
           <br />
           <a target="_blank" class="showbtn" href="/try/showphp.php?filename=demo_operator_assignment">尝试一下 &raquo;</a> 
          </div> 
          <p>以下实例演示了使用不同字符串运算符得到的不同结果：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$a = &quot;Hello&quot;;
            <br />$b = $a . &quot; world!&quot;;
            <br />echo $b; // 输出Hello world! 
            <br />
            <br />$x=&quot;Hello&quot;;
            <br />$x .= &quot; world!&quot;;
            <br />echo $x; // 输出Hello world! 
            <br />?&gt;
           </div> 
           <br />
           <a target="_blank" class="showbtn" href="/try/showphp.php?filename=demo_operator_string">尝试一下 &raquo;</a> 
          </div> 
          <hr /> 
          <h2>PHP 递增/递减运算符</h2> 
          <table class="reference" id="table1"> 
           <tbody>
            <tr> 
             <th width="13%" align="left">运算符</th> 
             <th width="20%" align="left">名称</th> 
             <th width="67%" align="left">描述</th> 
            </tr> 
            <tr> 
             <td>++ x</td> 
             <td>预递增</td> 
             <td>x 加 1，然后返回 x</td> 
            </tr> 
            <tr> 
             <td>x ++</td> 
             <td>后递增</td> 
             <td>返回 x，然后 x 加 1</td> 
            </tr> 
            <tr> 
             <td>-- x</td> 
             <td>预递减</td> 
             <td>x 减 1，然后返回 x</td> 
            </tr> 
            <tr> 
             <td>x --</td> 
             <td>后递减</td> 
             <td>返回 x，然后 x 减 1</td> 
            </tr> 
           </tbody>
          </table> 
          <p>以下实例演示了使用递增/递减运算符得到的结果：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$x=10; 
            <br />echo ++$x; // 输出11
            <br />
            <br />$y=10; 
            <br />echo $y++; // 输出10
            <br />
            <br />$z=5;
            <br />echo --$z; // 输出4
            <br />
            <br />$i=5;
            <br />echo $i--; // 输出5
            <br />?&gt;
           </div> 
           <br /> 
          </div> 
          <hr /> 
          <h2>PHP 比较运算符</h2> 
          <p>比较操作符可以让您比较两个值：</p> 
          <table class="reference"> 
           <tbody>
            <tr> 
             <th width="13%" align="left">运算符</th> 
             <th width="20%" align="left">名称</th> 
             <th width="37%" align="left">描述</th> 
             <th width="30%" align="left">实例</th> 
            </tr> 
            <tr> 
             <td>x == y</td> 
             <td>等于</td> 
             <td>如果 x 等于 y，则返回 true</td> 
             <td>5==8 返回 false</td> 
            </tr> 
            <tr> 
             <td>x === y</td> 
             <td>恒等于</td> 
             <td>如果 x 等于 y，且它们类型相同，则返回 true</td> 
             <td>5===&quot;5&quot; 返回 false</td> 
            </tr> 
            <tr> 
             <td>x != y</td> 
             <td>不等于</td> 
             <td>如果 x 不等于 y，则返回 true</td> 
             <td>5!=8 返回 true</td> 
            </tr> 
            <tr> 
             <td>x &lt;&gt; y</td> 
             <td>不等于</td> 
             <td>如果 x 不等于 y，则返回 true</td> 
             <td>5&lt;&gt;8 返回 true</td> 
            </tr> 
            <tr> 
             <td>x !== y</td> 
             <td>不恒等于</td> 
             <td>如果 x 不等于 y，或它们类型不相同，则返回 true</td> 
             <td>5!==&quot;5&quot; 返回 true</td> 
            </tr> 
            <tr> 
             <td>x &gt; y</td> 
             <td>大于</td> 
             <td>如果 x 大于 y，则返回 true</td> 
             <td>5&gt;8 返回 false</td> 
            </tr> 
            <tr> 
             <td>x &lt; y</td> 
             <td>小于</td> 
             <td>如果 x 小于 y，则返回 true</td> 
             <td>5&lt;8 返回 true</td> 
            </tr> 
            <tr> 
             <td>x &gt;= y</td> 
             <td>大于等于</td> 
             <td>如果 x 大于或者等于 y，则返回 true</td> 
             <td>5&gt;=8 返回 false</td> 
            </tr> 
            <tr> 
             <td>x &lt;= y</td> 
             <td>小于等于</td> 
             <td>如果 x 小于或者等于 y，则返回 true</td> 
             <td>5&lt;=8 返回 true</td> 
            </tr> 
           </tbody>
          </table>
          <p>以下实例演示了使用一些比较运算符得到的不同结果：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$x=100; 
            <br />$y=&quot;100&quot;;
            <br />
            <br />var_dump($x == $y);
            <br /> echo &quot;&lt;br&gt;&quot;;
            <br />var_dump($x === $y);
            <br />echo &quot;&lt;br&gt;&quot;;
            <br />var_dump($x != $y);
            <br />echo &quot;&lt;br&gt;&quot;;
            <br />var_dump($x !== $y);
            <br />echo &quot;&lt;br&gt;&quot;;
            <br />
            <br />$a=50;
            <br />$b=90;
            <br />
            <br />var_dump($a &gt; $b);
            <br />echo &quot;&lt;br&gt;&quot;;
            <br />var_dump($a &lt; $b);
            <br />?&gt;
           </div> 
           <br /> 
          </div> 
          <hr /> 
          <h2>PHP 逻辑运算符</h2> 
          <table class="reference"> 
           <tbody>
            <tr> 
             <th width="13%" align="left">运算符</th> 
             <th width="20%" align="left">名称</th> 
             <th width="37%" align="left">描述</th> 
             <th width="30%" align="left">实例</th> 
            </tr> 
            <tr> 
             <td>x and y</td> 
             <td>与</td> 
             <td>如果 x 和 y 都为 true，则返回 true</td> 
             <td> x=6<br />y=3 <br /> (x &lt; 10 and y &gt; 1) 返回 true</td> 
            </tr> 
            <tr> 
             <td>x or y</td> 
             <td>或</td> 
             <td>如果 x 和 y 至少有一个为 true，则返回 true</td> 
             <td> x=6<br />y=3 <br /> (x==6 or y==5) 返回 true</td> 
            </tr> 
            <tr> 
             <td>x xor y</td> 
             <td>异或</td> 
             <td>如果 x 和 y 有且仅有一个为 true，则返回 true</td> 
             <td> x=6<br />y=3 <br /> (x==6 xor y==3) 返回 false</td> 
            </tr> 
            <tr> 
             <td>x &amp;&amp; y</td> 
             <td>与</td> 
             <td>如果 x 和 y 都为 true，则返回 true</td> 
             <td> x=6<br />y=3<br /> (x &lt; 10 &amp;&amp; y &gt; 1) 返回 true</td> 
            </tr> 
            <tr> 
             <td>x || y</td> 
             <td>或</td> 
             <td>如果 x 和 y 至少有一个为 true，则返回 true</td> 
             <td> x=6<br />y=3<br /> (x==5 || y==5) 返回 false</td> 
            </tr> 
            <tr> 
             <td>! x</td> 
             <td>非</td> 
             <td>如果 x 不为 true，则返回 true</td> 
             <td> x=6<br />y=3<br /> !(x==y) 返回 true</td> 
            </tr> 
           </tbody>
          </table> 
          <hr /> 
          <h2>PHP 数组运算符</h2> 
          <table class="reference" id="table2"> 
           <tbody>
            <tr> 
             <th width="13%" align="left">运算符</th> 
             <th width="20%" align="left">名称</th> 
             <th width="67%" align="left">描述</th> 
            </tr> 
            <tr> 
             <td>x + y</td> 
             <td>集合</td> 
             <td>x 和 y 的集合</td> 
            </tr> 
            <tr> 
             <td>x == y</td> 
             <td>相等</td> 
             <td>如果 x 和 y 具有相同的键/值对，则返回 true</td> 
            </tr> 
            <tr> 
             <td>x === y</td> 
             <td>恒等</td> 
             <td>如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true</td> 
            </tr> 
            <tr> 
             <td>x != y</td> 
             <td>不相等</td> 
             <td>如果 x 不等于 y，则返回 true</td> 
            </tr> 
            <tr> 
             <td>x &lt;&gt; y</td> 
             <td>不相等</td> 
             <td>如果 x 不等于 y，则返回 true</td> 
            </tr> 
            <tr> 
             <td>x !== y</td> 
             <td>不恒等</td> 
             <td>如果 x 不等于 y，则返回 true</td> 
            </tr> 
           </tbody>
          </table> 
          <p>以下实例演示了使用一些数组运算符得到的不同结果：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br />$x = array(&quot;a&quot; =&gt; &quot;red&quot;, &quot;b&quot; =&gt; &quot;green&quot;); 
            <br />$y = array(&quot;c&quot; =&gt; &quot;blue&quot;, &quot;d&quot; =&gt; &quot;yellow&quot;); 
            <br />$z = $x + $y; // $x 和 $y 数组合并
            <br />var_dump($z);
            <br />var_dump($x == $y);
            <br />var_dump($x === $y);
            <br /> var_dump($x != $y);
            <br />var_dump($x &lt;&gt; $y);
            <br />var_dump($x !== $y);
            <br />?&gt;
           </div> 
           <br /> 
          </div> 
          <hr /> 
          <h2>三元运算符</h2> 
          <p>另一个条件运算符是&quot;?:&quot;（或三元）运算符 。</p> 
          <h3>语法格式</h3> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            (expr1) ? (expr2) : (expr3) 
          </div> 
          <p>对 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。</p> 
          <p>自 PHP 5.3 起，可以省略三元运算符中间那部分。表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。</p> 
          <h3>实例</h3> 
          <p>以下实例中通过判断 $_GET 请求中含有 user 值，如果有返回 $_GET['user']，否则返回 nobody：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $test = '教程';
           <br /> // 普通写法
           <br /> $username = isset($test) ? $test : 'nobody';
           <br /> echo $username, PHP_EOL;
           <br /> // PHP 5.3+ 版本写法
           <br /> $username = $test ?: 'nobody';
           <br /> echo $username, PHP_EOL;
           <br /> ?&gt;
           <br /> 
          </div> 
          <p><b>注意：</b>PHP_EOL 是一个换行符，兼容更大平台。</p> 
          <p>在 PHP7+ 版本多了一个 NULL 合并运算符，实例如下：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> // 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
           <br /> $username = $_GET['user'] ?? 'nobody';
           <br /> // 类似的三元运算符
           <br /> $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
           <br /> ?&gt;
           <br /> 
          </div> 
          <hr /> 
          <h2>组合比较符(PHP7+)</h2> 
          <p>PHP7+ 支持组合比较符，实例如下：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> // 整型
           <br /> echo 1 &lt;=&gt; 1; // 0
           <br /> echo 1 &lt;=&gt; 2; // -1
           <br /> echo 2 &lt;=&gt; 1; // 1
           <br /> // 浮点型
           <br /> echo 1.5 &lt;=&gt; 1.5; // 0
           <br /> echo 1.5 &lt;=&gt; 2.5; // -1
           <br /> echo 2.5 &lt;=&gt; 1.5; // 1
           <br /> // 字符串
           <br /> echo &quot;a&quot; &lt;=&gt; &quot;a&quot;; // 0
           <br /> echo &quot;a&quot; &lt;=&gt; &quot;b&quot;; // -1
           <br /> echo &quot;b&quot; &lt;=&gt; &quot;a&quot;; // 1
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="if"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>If...Else语句</h3> 
          <hr /> 
          <p>条件语句用于根据不同条件执行不同动作。</p> 
          <hr /> 
          <h2>PHP 条件语句</h2> 
          <p>当您编写代码时，您常常需要为不同的判断执行不同的动作。您可以在代码中使用条件语句来完成此任务。</p> 
          <p>在 PHP 中，提供了下列条件语句：</p> 
          <ul> 
           <li> <b>if 语句</b> - 在条件成立时执行代码</li> 
           <li> <b>if...else 语句</b> - 在条件成立时执行一块代码，条件不成立时执行另一块代码</li> 
           <li> <b>if...else if....else 语句</b> - 在若干条件之一成立时执行一个代码块</li> 
           <li> <b>switch 语句</b> - 在若干条件之一成立时执行一个代码块</li> 
          </ul> 
          <hr /> 
          <h2>PHP - if 语句</h2> 
          <p>if 语句用于<strong>仅当指定条件成立时执行代码</strong>。</p> 
          <h3>语法</h3> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            if (
           <i>条件</i>)
           <br /> {
           <i><br /> 条件成立时要执行的代码</i>;
           <i><br /> </i>} 
          </div> 
          <p>如果当前时间小于 20，下面的实例将输出 &quot;Have a good day!&quot;：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $t=date(&quot;H&quot;);
            <br /> if ($t&lt;&quot;20&quot;)
            <br /> {
            <br /> echo &quot;Have a good day!&quot;;
            <br /> }
            <br /> ?&gt; 
           </div> 
           <br /> 
          </div> 
          <br />
          <hr /> 
          <h2>PHP - if...else 语句</h2> 
          <p><strong>在条件成立时执行一块代码，条件不成立时执行另一块代码</strong>，请使用 if....else 语句。</p> 
          <h3>语法</h3> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            if (
           <i>条件</i>)
           <br /> {
           <br /> 
           <i>条件成立时执行的代码;</i>
           <br /> }
           <br /> else
           <br /> {
           <br /> 
           <i>条件不成立时执行的代码;<br /> </i>} 
          </div> 
          <p>如果当前时间小于 20，下面的实例将输出 &quot;Have a good day!&quot;，否则输出 &quot;Have a good night!&quot;：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $t=date(&quot;H&quot;);
            <br /> if ($t&lt;&quot;20&quot;)
            <br /> {
            <br /> echo &quot;Have a good day!&quot;;
            <br /> }
            <br /> else
            <br /> {
            <br /> echo &quot;Have a good night!&quot;;
            <br /> }
            <br /> ?&gt; 
           </div> 
           <br /> 
          </div> 
          <br />
          <hr /> 
          <h2>PHP - if...else if....else 语句</h2> 
          <p><strong>在若干条件之一成立时执行一个代码块</strong>，请使用 if....else if...else 语句。.</p> 
          <h3>语法</h3> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            if (
           <i>条件</i>)
           <br /> {
           <br /> 
           <i>if 条件成立时执行的代码;<br /> </i>}
           <br /> else if (
           <i>条件</i>)
           <br /> {
           <br /> 
           <i>elseif 条件成立时执行的代码;<br /> </i>}
           <i><br /></i>else
           <br /> {
           <br /> 
           <i>条件不成立时执行的代码;<br /></i> } 
          </div> 
          <p>如果当前时间小于 10，下面的实例将输出 &quot;Have a good morning!&quot;，如果当前时间不小于 10 且小于 20，则输出 &quot;Have a good day!&quot;，否则输出 &quot;Have a good night!&quot;：</p> 
          <div> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $t=date(&quot;H&quot;);
            <br /> if ($t&lt;&quot;10&quot;)
            <br /> {
            <br /> echo &quot;Have a good morning!&quot;;
            <br /> }
            <br /> else if ($t&lt;&quot;20&quot;)
            <br /> {
            <br /> echo &quot;Have a good day!&quot;;
            <br /> }
            <br />else
            <br /> {
            <br /> echo &quot;Have a good night!&quot;;
            <br /> }
            <br /> ?&gt; 
           </div> 
           <br /> 
          </div> 
          <br />
          <hr /> 
          <h2>PHP - switch 语句</h2> 
          <p>switch 语句将在下一章进行讲解。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Switch"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Switch 循环</h3> 
          <p>switch 语句用于根据多个不同条件执行不同动作。</p> 
          <h2>PHP Switch 语句</h2> 
          <p>如果您希望有选择地执行若干代码块之一，请使用 switch 语句。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            switch (n) 
           <br /> { 
           <br /> case label1: 
           <br /> 如果 n=label1，此处代码将执行; 
           <br /> break; 
           <br /> case label2: 
           <br /> 如果 n=label2，此处代码将执行; 
           <br /> break; 
           <br /> default: 
           <br /> 如果 n 既不等于 label1 也不等于 label2，此处代码将执行; 
           <br /> } 
           <br /> 
          </div> 
          <p>工作原理：首先对一个简单的表达式 n（通常是变量）进行一次计算。将表达式的值与结构中每个 case 的值进行比较。如果存在匹配，则执行与 case 关联的代码。代码执行后，使用 break 来阻止代码跳入下一个 case 中继续执行。default 语句用于不存在匹配（即没有 case 为真）时执行。 实例</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $favcolor=&quot;red&quot;; 
           <br /> switch ($favcolor) 
           <br /> { 
           <br /> case &quot;red&quot;: 
           <br /> echo &quot;Your favorite color is red!&quot;; 
           <br /> break; 
           <br /> case &quot;blue&quot;: 
           <br /> echo &quot;Your favorite color is blue!&quot;; 
           <br /> break; 
           <br /> case &quot;green&quot;: 
           <br /> echo &quot;Your favorite color is green!&quot;; 
           <br /> break; 
           <br /> default: 
           <br /> echo &quot;Your favorite color is neither red, blue, or green!&quot;; 
           <br /> } 
           <br /> ?&gt; 
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="While"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>While 循环</h3> 
          <p>循环执行代码块指定的次数，或者当指定的条件为真时循环执行代码块。</p> 
          <h2>PHP 循环</h2> 
          <p>在您编写代码时，您经常需要让相同的代码块一次又一次地重复运行。我们可以在代码中使用循环语句来完成这个任务。</p> 
          <p>在 PHP 中，提供了下列循环语句：</p> 
          <ul> 
           <li>while - 只要指定的条件成立，则循环执行代码块</li> 
           <li>do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环</li> 
           <li>for - 循环执行代码块指定的次数</li> 
           <li>foreach - 根据数组中每个元素来循环代码块</li> 
          </ul> 
          <h2>while 循环</h2> 
          <p>while 循环将重复执行代码块，直到指定的条件不成立。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            while (条件)
           <br /> {
           <br /> 要执行的代码;
           <br /> }
           <br /> 
          </div> 
          <h2>实例</h2> 
          <p>下面的实例首先设置变量 i 的值为 1 ($i=1;)。</p> 
          <p>然后，只要 i 小于或者等于 5，while 循环将继续运行。循环每运行一次，i 就会递增 1：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> $i=1;
           <br /> while($i&lt;=5)
           <br /> {
           <br /> echo &quot;The number is &quot; . $i . &quot;
           <br />&quot;;
           <br /> $i++;
           <br /> }
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            The number is 1
           <br /> The number is 2
           <br /> The number is 3
           <br /> The number is 4
           <br /> The number is 5
           <br /> 
          </div> 
          <h2>do...while 语句</h2> 
          <p>do...while 语句会至少执行一次代码，然后检查条件，只要条件成立，就会重复进行循环。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            do 
           <br /> {
           <br /> 要执行的代码;
           <br /> }
           <br /> while (条件);
           <br /> 
          </div> 
          <h2>实例</h2> 
          <p>下面的实例首先设置变量 i 的值为 1 ($i=1;)。</p> 
          <p>然后，开始 do...while 循环。循环将变量 i 的值递增 1，然后输出。 先检查条件（i 小于或者等于 5），只要 i 小于或者等于 5，循环将继续运行：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> $i=1;
           <br /> do
           <br /> {
           <br /> $i++;
           <br /> echo &quot;The number is &quot; . $i . &quot;
           <br />&quot;;
           <br /> }
           <br /> while ($i&lt;=5);
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            The number is 2
           <br /> The number is 3
           <br /> The number is 4
           <br /> The number is 5
           <br /> The number is 6
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="For"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>For 循环</h3> 
          <p>循环执行代码块指定的次数，或者当指定的条件为真时循环执行代码块。</p> 
          <h2>for 循环</h2> 
          <p>for 循环用于您预先知道脚本需要运行的次数的情况。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            for (初始值; 条件; 增量)
           <br /> {
           <br /> 要执行的代码;
           <br /> }
           <br /> 
          </div> 
          <p>参数：</p> 
          <ul> 
           <li>初始值：主要是初始化一个变量值，用于设置一个计数器（但可以是任何在循环的开始被执行一次的代码）。</li> 
           <li>条件：循环执行的限制条件。如果为 TRUE，则循环继续。如果为 FALSE，则循环结束。</li> 
           <li>增量：主要用于递增计数器（但可以是任何在循环的结束被执行的代码）。</li> 
          </ul> 
          <p>注释：上面的初始值和增量参数可为空，或者有多个表达式（用逗号分隔）。</p> 
          <h2>实例</h2> 
          <p>下面的实例定义一个初始值为 i=1 的循环。只要变量 i 小于或者等于 5，循环将继续运行。循环每运行一次，变量 i 就会递增 1：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> for ($i=1; $i&lt;=5; $i++)
           <br /> {
           <br /> echo &quot;The number is &quot; . $i . &quot;&lt;br/&gt;&quot;;
           <br /> }
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            The number is 1 
           <br /> The number is 2
           <br /> The number is 3
           <br /> The number is 4
           <br /> The number is 5
           <br /> 
          </div> 
          <h2>foreach 循环</h2> 
          <p>foreach 循环用于遍历数组。</p> 
          <h2>Syntax</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            foreach ($array as $value)
           <br /> {
           <br /> 要执行代码;
           <br /> }
           <br /> 
          </div> 
          <p>每进行一次循环，当前数组元素的值就会被赋值给 $value 变量（数组指针会逐一地移动），在进行下一次循环时，您将看到数组中的下一个值。</p> 
          <h2>实例</h2> 
          <p>下面的实例演示了一个输出给定数组的值的循环：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> $x=array(&quot;one&quot;,&quot;two&quot;,&quot;three&quot;);
           <br /> foreach ($x as $value)
           <br /> {
           <br /> echo $value . &quot;&lt;br/&gt;&quot;;
           <br /> }
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            one
           <br /> two
           <br /> three
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="function"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>函数</h3> 
          <p>PHP 的真正威力源自于它的函数。</p> 
          <p>在 PHP 中，提供了超过 1000 个内建的函数.</p> 
          <h2>PHP 内建函数</h2> 
          <p>如需查看所有数组函数的完整参考手册和实例，请访问我们的 PHP 参考手册。</p> 
          <h2>PHP 函数</h2> 
          <p>在本章中，我们将为您讲解如何创建自己的函数。</p> 
          <p>如要在页面加载时执行脚本，您可以把它放到函数里。</p> 
          <p> 函数是通过调用函数来执行的。</p> 
          <p>你可以在页面的任何位置调用函数。</p> 
          <h2>创建 PHP 函数</h2> 
          <p>函数是通过调用函数来执行的。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            function functionName()
           <br /> {
           <br /> 要执行的代码;
           <br /> }
           <br /> 
          </div> 
          <p>PHP 函数准则：</p> 
          <ul> 
           <li>函数的名称应该提示出它的功能</li> 
           <li>函数名称以字母或下划线开头（不能以数字开头）</li> 
          </ul> 
          <h2>实例</h2> 
          <p>一个简单的函数，在其被调用时能输出我的名称：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> function writeName()
           <br /> {
           <br /> echo &quot;Kai Jim Refsnes&quot;;
           <br /> }
           <br /> echo &quot;My name is &quot;;
           <br /> writeName();
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            My name is Kai Jim Refsnes 
          </div> 
          <h2>PHP 函数 - 添加参数</h2> 
          <p>为了给函数添加更多的功能，我们可以添加参数。参数类似变量。</p> 
          <p>参数就在函数名称后面有一个括号内指定。</p> 
          <h2>实例 1</h2> 
          <p>下面的实例将输出不同的名字，但姓是相同的：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> function writeName($fname)
           <br /> {
           <br /> echo $fname . &quot; Refsnes.&lt;br&gt;&quot;;
           <br /> }
           <br /> echo &quot;My name is &quot;;
           <br /> writeName(&quot;Kai Jim&quot;);
           <br /> echo &quot;My sister's name is &quot;;
           <br /> writeName(&quot;Hege&quot;);
           <br /> echo &quot;My brother's name is &quot;;
           <br /> writeName(&quot;Stale&quot;);
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            My name is Kai Jim Refsnes.
           <br /> My sister's name is Hege Refsnes.
           <br /> My brother's name is Stale Refsnes.
           <br /> 
          </div> 
          <h2>实例 2</h2> 
          <p>下面的函数有两个参数：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php 
           <br /> function writeName($fname,$punctuation)
           <br /> {
           <br /> echo $fname . &quot; Refsnes&quot; . $punctuation . &quot;
           <br />&quot;;
           <br /> }
           <br /> echo &quot;My name is &quot;;
           <br /> writeName(&quot;Kai Jim&quot;,&quot;.&quot;);
           <br /> echo &quot;My sister's name is &quot;;
           <br /> writeName(&quot;Hege&quot;,&quot;!&quot;);
           <br /> echo &quot;My brother's name is &quot;;
           <br /> writeName(&quot;St&aring;le&quot;,&quot;?&quot;);
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            My name is Kai Jim Refsnes.
           <br /> My sister's name is Hege Refsnes!
           <br /> My brother's name is St&aring;le Refsnes?
           <br /> 
          </div> 
          <h2>PHP 函数 - 返回值</h2> 
          <p>如需让函数返回一个值，请使用 return 语句。</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <br /> 
           <br /> &lt;?php
           <br /> function add($x,$y)
           <br /> {
           <br /> $total=$x+$y;
           <br /> return $total;
           <br /> }
           <br /> echo &quot;1 + 16 = &quot; . add(1,16);
           <br /> ?&gt;
           <br /> 
           <br /> 
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            1 + 16 = 17 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="array"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>数组</h3> 
          <p>数组能够在单个变量中存储多个值：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
           <br /> echo &quot;I like &quot; . $cars[0] . &quot;, &quot; . $cars[1] . &quot; and &quot; . $cars[2] . &quot;.&quot;;
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>数组是什么？</h2> 
          <p>数组是一个能在单个变量中存储多个值的特殊变量。</p> 
          <p>如果您有一个项目清单（例如：车名字的清单），将其存储到单个变量中，如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $cars1=&quot;Volvo&quot;;
           <br /> $cars2=&quot;BMW&quot;;
           <br /> $cars3=&quot;Toyota&quot;;
           <br /> 
          </div> 
          <p>然而，如果您想要遍历数组并找出特定的一个呢？如果数组的项不只 3 个而是 300 个呢？</p> 
          <p>解决办法是创建一个数组！</p> 
          <p>数组可以在单个变量中存储多个值，并且您可以根据键访问其中的值。</p> 
          <h2>在 PHP 中创建数组</h2> 
          <p>在 PHP 中，array() 函数用于创建数组：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            array(); 
           <br /> 
          </div> 
          <p>在 PHP 中，有三种类型的数组：</p> 
          <ul> 
           <li>数值数组 - 带有数字 ID 键的数组</li> 
           <li>关联数组 - 带有指定的键的数组，每个键关联一个值</li> 
           <li>多维数组 - 包含一个或多个数组的数组</li> 
          </ul> 
          <h2>PHP 数值数组</h2> 
          <p>这里有两种创建数值数组的方法：</p> 
          <p>自动分配 ID 键（ID 键总是从 0 开始）：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;); 
          </div> 
          <p>人工分配 ID 键：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $cars[0]=&quot;Volvo&quot;;
           <br /> $cars[1]=&quot;BMW&quot;;
           <br /> $cars[2]=&quot;Toyota&quot;;
           <br /> 
          </div> 
          <p>下面的实例创建一个名为 $cars 的数值数组，并给数组分配三个元素,然后打印一段包含数组值的文本：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
           <br /> echo &quot;I like &quot; . $cars[0] . &quot;, &quot; . $cars[1] . &quot; and &quot; . $cars[2] . &quot;.&quot;;
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>获取数组的长度 - count() 函数</h2> 
          <p>count() 函数用于返回数组的长度（元素的数量）：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
           <br /> echo count($cars);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>遍历数值数组</h2> 
          <p>遍历并打印数值数组中的所有值，您可以使用 for 循环，如下所示：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
           <br /> $arrlength=count($cars);
           <br /> for($x=0;$x&lt;$arrlength;$x++)
           <br /> {
           <br /> echo $cars[$x];
           <br /> echo &quot;&lt;br&gt;&quot;;
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>PHP 关联数组</h2> 
          <p>关联数组是使用您分配给数组的指定的键的数组。</p> 
          <p>这里有两种创建关联数组的方法：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> 
          </div> 
          <p>or:</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $age['Peter']=&quot;35&quot;;
           <br /> $age['Ben']=&quot;37&quot;;
           <br /> $age['Joe']=&quot;43&quot;;
           <br /> 
          </div> 
          <p>随后可以在脚本中使用指定的键：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> echo &quot;Peter is &quot; . $age['Peter'] . &quot; years old.&quot;;
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>遍历关联数组</h2> 
          <p>遍历并打印关联数组中的所有值，您可以使用 foreach 循环，如下所示：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> foreach($age as $x=&gt;$x_value)
           <br /> {
           <br /> echo &quot;Key=&quot; . $x . &quot;, Value=&quot; . $x_value;
           <br /> echo &quot;&lt;br&gt;&quot;;
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Array_sort"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>数组排序</h3> 
          <p>数组中的元素可以按字母或数字顺序进行降序或升序排列。</p> 
          <h2>PHP - 数组排序函数</h2> 
          <p>在本章中，我们将一一介绍下列 PHP 数组排序函数：</p> 
          <ul> 
           <li>sort() - 对数组进行升序排列</li> 
           <li>rsort() - 对数组进行降序排列</li> 
           <li>asort() - 根据关联数组的值，对数组进行升序排列</li> 
           <li>ksort() - 根据关联数组的键，对数组进行升序排列</li> 
           <li>arsort() - 根据关联数组的值，对数组进行降序排列</li> 
           <li>krsort() - 根据关联数组的键，对数组进行降序排列</li> 
          </ul> 
          <h2>sort() - 对数组进行升序排列</h2> 
          <p>下面的实例将 $cars 数组中的元素按照字母升序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
           <br /> sort($cars);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>下面的实例将 $numbers 数组中的元素按照数字升序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $numbers=array(4,6,2,22,11);
           <br /> sort($numbers);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>rsort() - 对数组进行降序排列</h2> 
          <p>下面的实例将 $cars 数组中的元素按照字母降序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $cars=array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);
           <br /> rsort($cars);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>下面的实例将 $numbers 数组中的元素按照数字降序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $numbers=array(4,6,2,22,11);
           <br /> rsort($numbers);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>asort() - 根据数组的值，对数组进行升序排列</h2> 
          <p>下面的实例根据数组的值，对关联数组进行升序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> asort($age);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>ksort() - 根据数组的键，对数组进行升序排列</h2> 
          <p>下面的实例根据数组的键，对关联数组进行升序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> ksort($age);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>arsort() - 根据数组的值，对数组进行降序排列</h2> 
          <p>下面的实例根据数组的值，对关联数组进行降序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> arsort($age);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>krsort() - 根据数组的键，对数组进行降序排列</h2> 
          <p>下面的实例根据数组的键，对关联数组进行降序排列：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $age=array(&quot;Peter&quot;=&gt;&quot;35&quot;,&quot;Ben&quot;=&gt;&quot;37&quot;,&quot;Joe&quot;=&gt;&quot;43&quot;);
           <br /> krsort($age);
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <!--php 表单部分--> 
        <div class="tab-pane fade" id="form"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>表单</h3> 
           <p>PHP 中的 $_GET 和 $_POST 变量用于检索表单中的信息，比如用户输入。</p> 
           <h2>PHP 表单处理</h2> 
           <p>有一点很重要的事情值得注意，当处理 HTML 表单时， PHP 能把来自 HTML 页面中的表单元素自动变成可供 PHP 脚本使用。</p> 
           <h2>实例</h2> 
           <p>下面的实例包含了一个 HTML 表单，带有两个输入框和一个提交按钮：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
            <br /> 
            <br /> &lt;form action=&quot;welcome.php&quot; method=&quot;post&quot;&gt;
            <br /> Name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;
            <br /> Age: &lt;input type=&quot;text&quot; name=&quot;age&quot;&gt;
            <br /> &lt;input type=&quot;submit&quot;&gt;
            <br /> &lt;/form&gt;
            <br /> 
            <br /> 
            <br /> 
           </div> 
           <p>当用户填写完上面的表单并点击提交按钮时，表单的数据会被送往名为 &quot;welcome.php&quot; 的 PHP 文件：</p> 
           <p>&quot;welcome.php&quot; 文件如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">   Welcome &lt;?php echo $_POST[&quot;fname&quot;]; ?&gt;!&lt;br&gt;
            <br /> You are &lt;?php echo $_POST[&quot;age&quot;]; ?&gt; years old.
            <br />   
           </div> 
           <p>输出如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             Welcome John!
            <br /> You are 28 years old.
            <br /> 
           </div> 
           <p>我们将在下一章中讲解 PHP 中的 $_GET 和 $_POST 变量。</p> 
           <h2>表单验证</h2> 
           <p>应该在任何可能的时候对用户输入进行验证（通过客户端脚本）。 浏览器验证速度更快，并且可以减轻服务器的负载。 如果用户输入需要插入数据库，您应该考虑使用服务器验证。 在服务器验证表单的一种好的方式是，把表单传给它自己，而不是跳转到不同的页面。 这样用户就可以在同一张表单页面得到错误信息。用户也就更容易发现错误了。 </p> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="form_yanzheng"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>表单验证</h3> 
           <p>本章节我们将介绍如何使用PHP验证客户端提交的表单数据。</p> 
           <h2>PHP 表单验证</h2> 
           <p> 在处理PHP表单时我们需要考虑安全性。<br /> 本章节我们将展示PHP表单数据安全处理，为了防止黑客及垃圾信息我们需要对表单进行数据安全验证。 </p> 
           <p>在本章节介绍的HTML表单中包含以下输入字段： 必须与可选文本字段，单选按钮，及提交按钮：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
            <h2>PHP Form Validation Example</h2> 
            <p><span class="error">* required field.</span></p> 
            <form method="post" action="/try/demo_source/demo_form_validation_complete.php">
              Name: 
             <input type="text" name="name" value="dsadasda" /> 
             <span class="error">* </span> 
             <br />
             <br /> E-mail: 
             <input type="text" name="email" value="dsada" /> 
             <span class="error">* Invalid email format</span> 
             <br />
             <br /> Website: 
             <input type="text" name="website" value="dsa" /> 
             <span class="error">Invalid URL</span> 
             <br />
             <br /> Comment: 
             <textarea name="comment" rows="5" cols="40">das</textarea> 
             <br />
             <br /> Gender: 
             <input type="radio" name="gender" checked="" value="female" />Female 
             <input type="radio" name="gender" value="male" />Male 
             <span class="error">* </span> 
             <br />
             <br /> 
             <input type="submit" name="submit" value="Submit" /> 
            </form> 
            <h2>Your Input:</h2>dsadasda
            <br />dsada
            <br />dsa
            <br />das
            <br />female 
           </div> 
           <p>上述表单验证规则如下：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
            <table> 
             <tbody>
              <tr> 
               <td width="15%">字段</td> 
               <td width="15%">验证规则</td> 
              </tr> 
              <tr> 
               <td>Name</td> 
               <td>必须。 +只能包含字母和空格</td> 
              </tr> 
              <tr> 
               <td>E-mail</td> 
               <td>必须。 + 必须是一个有效的电子邮件地址（包含'@'和'.'）</td> 
              </tr> 
              <tr> 
               <td>Website</td> 
               <td>必须。如果存在，它必须包含一个有效的URL</td> 
              </tr> 
              <tr> 
               <td>Comment</td> 
               <td>必须。 多行输入字段（文本域）</td> 
              </tr> 
              <tr> 
               <td>Gender</td> 
               <td>必须。 必须选择一个</td> 
              </tr> 
             </tbody>
            </table> 
           </div> 
           <p>首先让我们先看看纯HTML的表单代码：</p> 
           <h2>文本字段</h2> 
           <p>name, email, 及 website 字段为文本输入元素， comment 字段是 textarea。HTML代码如下所示:</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;
            <br /> E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;
            <br /> Website: &lt;input type=&quot;text&quot; name=&quot;website&quot;&gt;
            <br /> Comment: &lt;textarea name=&quot;comment&quot; rows=&quot;5&quot; cols=&quot;40&quot;&gt;&lt;/textarea&gt;
            <br /> 
           </div> 
           <h2>单选按钮</h2> 
           <p>gender 字段是单选按钮，HTML代码如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;female&quot;&gt;Female
            <br /> &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot;&gt;Male
            <br /> 
           </div> 
           <h2>表单元素</h2> 
           <p>HTML 表单代码如下所示:</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo htmlspecialchars($_SERVER[&quot;PHP_SELF&quot;]);?&gt;&quot;&gt; 
           </div> 
           <p>该表单使用 method=&quot;post&quot; 方法来提交数据。<br /> 什么是 $_SERVER[&quot;PHP_SELF&quot;] 变量?<br /> $_SERVER[&quot;PHP_SELF&quot;]是超级全局变量，返回当前正在执行脚本的文件名，与 document root相关。<br /></p> 
           <p>所以， $_SERVER[&quot;PHP_SELF&quot;] 会发送表单数据到当前页面，而不是跳转到不同的页面。</p> 
           <p>什么是 htmlspecialchars()方法?<br /> htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体。<br /> 预定义的字符是：<br /></p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
            <ul> 
             <li>&amp; （和号） 成为 &amp;</li> 
             <li>&quot; （双引号） 成为 &quot;</li> 
             <li>' （单引号） 成为 '</li> 
             <li>&lt; （小于） 成为 &lt;</li> 
             <li>&gt; （大于） 成为 &gt;</li> 
            </ul> 
           </div> 
           <h2>PHP表单中需引起注重的地方？</h2> 
           <p>$_SERVER[&quot;PHP_SELF&quot;] 变量有可能会被黑客使用！<br /> 当黑客使用跨网站脚本的HTTP链接来攻击时，$_SERVER[&quot;PHP_SELF&quot;]服务器变量也会被植入脚本。 原因就是跨网站脚本是附在执行文件的路径后面的，因此$_SERVER[&quot;PHP_SELF&quot;]的字符串就会包含HTTP链 接后面的JavaScript程序代码。</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             XSS又叫 CSS (Cross-Site Script) ,跨站脚本攻击。恶意攻击者往Web页面里插入恶意html代码，当用户浏览该页之时，嵌入其中Web里面的html代码会被执行，从而达到恶意用户的特殊目的。 
           </div> 
           <p>指定以下表单文件名为 &quot;test_form.php&quot;:</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo $_SERVER[&quot;PHP_SELF&quot;]; ?&gt;&quot;&gt; 
           </div> 
           <p>现在，我们使用URL来指定提交地址 &quot;test_form.php&quot;,以上代码修改为如下所示:</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;form method=&quot;post&quot; action=&quot;test_form.php&quot;&gt; 
           </div> 
           <p>这样做就很好了。<br /> 但是，考虑到用户会在浏览器地址栏中输入以下地址:</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             http://www.runoob.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E 
           </div> 
           <p>以上的 URL 中，将被解析为如下代码并执行：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;form method=&quot;post&quot; action=&quot;test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt; 
           </div> 
           <p>代码中添加了 script 标签，并添加了alert命令。 当页面载入时会执行该Javascript代码（用户会看到弹出框）。 这仅仅只是一个简单的实例来说明PHP_SELF变量会被黑客利用。<br /> 请注意， 任何JavaScript代码可以添加在&lt;script&gt;标签中！ 黑客可以利用这点重定向页面到另外一台服务器的页面上，页面 代码文件中可以保护恶意代码，代码可以修改全局变量或者获取用户的表单数据，实例：</p> 
           <h2>如何避免 $_SERVER[&quot;PHP_SELF&quot;] 被利用?</h2> 
           <p>$_SERVER[&quot;PHP_SELF&quot;] 可以通过 htmlspecialchars() 函数来避免被利用。<br /> form 代码如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo htmlspecialchars($_SERVER[&quot;PHP_SELF&quot;]); ?&gt;&quot;&gt;; 
           </div> 
           <p>htmlspecialchars() 把一些预定义的字符转换为 HTML 实体。现在如果用户想利用 PHP_SELF 变量, 结果将输出如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;form method=&quot;post&quot; action=&quot;test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;&quot;&gt; 
           </div> 
           <p>尝试该漏洞失败！</p> 
           <h2>使用 PHP 验证表单数据</h2> 
           <p>首先我们对用户所有提交的数据都通过 PHP 的 htmlspecialchars() 函数处理。<br /> 当我们使用 htmlspecialchars() 函数时，在用户尝试提交以下文本域:<br /> &lt;script&gt;location.href('http://www.runoob.com')&lt;/script&gt;<br /> - 该代码将不会被执行，因为它会被保存为HTML转义代码，如下所示：<br /> &lt;script&gt;location.href('http://www.runoob.com')&lt;/script&gt;<br /> 以上代码是安全的，可以正常在页面显示或者插入邮件中。<br /> 当用户提交表单时，我们将做以下两件事情，：<br /> 1.使用 PHP trim() 函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。<br /> 2.使用PHP stripslashes()函数去除用户输入数据中的反斜杠 (\)<br /> 接下来让我们将这些过滤的函数写在一个我们自己定义的函数中，这样可以大大提高代码的复用性。<br /> 将函数命名为 test_input()。<br /> 现在，我们可以通过test_input()函数来检测 $_POST 中的所有变量, 脚本代码如下所示：<br /> </p> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> // 定义变量并默认设置为空值
            <br /> $name = $email = $gender = $comment = $website = &quot;&quot;;
            <br /> if ($_SERVER[&quot;REQUEST_METHOD&quot;] == &quot;POST&quot;)
            <br /> {
            <br /> $name = test_input($_POST[&quot;name&quot;]);
            <br /> $email = test_input($_POST[&quot;email&quot;]);
            <br /> $website = test_input($_POST[&quot;website&quot;]);
            <br /> $comment = test_input($_POST[&quot;comment&quot;]);
            <br /> $gender = test_input($_POST[&quot;gender&quot;]);
            <br /> }
            <br /> function test_input($data)
            <br /> {
            <br /> $data = trim($data);
            <br /> $data = stripslashes($data);
            <br /> $data = htmlspecialchars($data);
            <br /> return $data;
            <br /> }
            <br /> ?&gt;
            <br /> 
           </div> 
           <p> 注意我们在执行以上脚本时，会通过$_SERVER[&quot;REQUEST_METHOD&quot;]来检测表单是否被提交 。 如果 REQUEST_METHOD 是 POST, 表单将被提交 - 数据将被验证。如果表单未提交将跳过验证并显示空白。<br /> 在以上实例中使用输入项都是可选的，即使用户不输入任何数据也可以正常显示。<br /> 在接下来的章节中我们将介绍如何对用户输入的数据进行验证。<br /> </p> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="form_bitian"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>表单必填字段</h3> 
          <p>本章节我们将介绍如何设置表单必需字段及错误信息。</p> 
          <h2>PHP - 必需字段</h2> 
          <p>在上一章节我们已经介绍了表的验证规则，我们可以看到&quot;Name&quot;, &quot;E-mail&quot;, 和 &quot;Gender&quot; 字段是必须的，各字段不能为空。</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <table> 
            <tbody>
             <tr> 
              <td width="15%">字段</td> 
              <td width="15%">验证规则</td> 
             </tr> 
             <tr> 
              <td>Name</td> 
              <td>必须。 +只能包含字母和空格</td> 
             </tr> 
             <tr> 
              <td>E-mail</td> 
              <td>必须。 + 必须是一个有效的电子邮件地址（包含'@'和'.'）</td> 
             </tr> 
             <tr> 
              <td>Website</td> 
              <td>必须。如果存在，它必须包含一个有效的URL</td> 
             </tr> 
             <tr> 
              <td>Comment</td> 
              <td>必须。 多行输入字段（文本域）</td> 
             </tr> 
             <tr> 
              <td>Gender</td> 
              <td>必须。 必须选择一个</td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <h2>PHP - 显示错误信息</h2> 
          <p>在以下的HTML实例表单中，我们为每个字段中添加了一些脚本， 各个脚本会在信息输入错误时显示错误信息。 (如果用户未填写信息就提交表单则会输出错误信息):</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo htmlspecialchars($_SERVER[&quot;PHP_SELF&quot;]);?&gt;&quot;&gt;
           <br /> Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;
           <br /> &lt;span class=&quot;error&quot;&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
           <br /> &lt;br&gt;&lt;br&gt;
           <br /> E-mail:
           <br /> &lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;
           <br /> &lt;span class=&quot;error&quot;&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
           <br /> &lt;br&gt;&lt;br&gt;
           <br /> Website:
           <br /> &lt;input type=&quot;text&quot; name=&quot;website&quot;&gt;
           <br /> &lt;span class=&quot;error&quot;&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
           <br /> &lt;br&gt;&lt;br&gt;
           <br /> &lt;label&gt;Comment: &lt;textarea name=&quot;comment&quot; rows=&quot;5&quot; cols=&quot;40&quot;&gt;&lt;/textarea&gt;
           <br /> &lt;br&gt;&lt;br&gt;
           <br /> Gender:
           <br /> &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;female&quot;&gt;Female
           <br /> &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot;&gt;Male
           <br /> &lt;span class=&quot;error&quot;&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
           <br /> &lt;br&gt;&lt;br&gt;
           <br /> &lt;input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;Submit&quot;&gt;
           <br /> &lt;/form&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="form_url"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>表单URL/Email</h3> 
          <h2>PHP - 验证名字</h2> 
          <p>以下代码展示的简单方法检查 name 字段是否包含字母和空格。如果 name 字段无效，则存储一条错误消息：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $name = test_input($_POST[&quot;name&quot;]);
           <br /> if (!preg_match(&quot;/^[a-zA-Z ]*$/&quot;,$name)) {
           <br /> $nameErr = &quot;只允许字母和空格！&quot;;
           <br /> }
           <br /> 
          </div> 
          <p>注释：preg_match() 函数检索字符串的模式，如果模式存在则返回 true，否则返回 false。</p> 
          <h2>PHP - 验证 E-mail</h2> 
          <p>以下代码展示的简单方法检查 e-mail 地址语法是否有效。如果无效则存储一条错误消息：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $email = test_input($_POST[&quot;email&quot;]);
           <br /> if (!preg_match(&quot;/([\w\-]+\@[\w\-]+\.[\w\-]+)/&quot;,$email)) {
           <br /> $emailErr = &quot;无效的 email 格式！&quot;;
           <br /> }
           <br /> 
          </div> 
          <h2>PHP - 验证 URL</h2> 
          <p>以下代码展示的方法检查 URL 地址语法是否有效（这条正则表达式同时允许 URL 中的斜杠）。如果 URL 地址语法无效，则存储一条错误消息：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $website = test_input($_POST[&quot;website&quot;]);
           <br /> if (!preg_match(&quot;/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%
           <br /> =~_|]/i&quot;,$website)) {
           <br /> $websiteErr = &quot;无效的 URL&quot;;
           <br /> }
           <br /> 
          </div> 
          <h2>PHP - 验证 Name、E-mail、以及 URL</h2> 
          <p>现在，脚本是这样的：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <img alt="300x200" src="/php_study/Application/Public/Bootstrap/img/php_form_yanzhengURL.png" />
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="form_wancheng"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>表单完成</h3> 
          <h2>PHP - 保留表单中的值</h2> 
          <p>如需在用户点击提交按钮后在输入字段中显示值，我们在以下输入字段的 value 属性中增加了一小段 PHP 脚本 ：name、email 以及 website。在 comment 文本框字段中，我们把脚本放到了 &lt;textarea&gt; 与 &lt;/textarea&gt; 之间。这些脚本输出 $name、$email、$website 和 $comment 变量的值。<br /> 然后，我们还需要显示选中了哪个单选按钮。对此，我们必须操作 checked 属性（而非单选按钮的 value 属性）：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Name: &lt;input type=&quot;text&quot; name=&quot;name&quot; value=&quot;&lt;?php echo $name;?&gt;&quot;&gt;
           <br /> E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot; value=&quot;&lt;?php echo $email;?&gt;&quot;&gt;
           <br /> Website: &lt;input type=&quot;text&quot; name=&quot;website&quot; value=&quot;&lt;?php echo $website;?&gt;&quot;&gt;
           <br /> Comment: &lt;textarea name=&quot;comment&quot; rows=&quot;5&quot; cols=&quot;40&quot;&gt;&lt;?php echo $comment;?&gt;&lt;/textarea&gt;
           <br /> Gender:
           <br /> &lt;input type=&quot;radio&quot; name=&quot;gender&quot;
           <br /> &lt;?php if (isset($gender) &amp;&amp; $gender==&quot;female&quot;) echo &quot;checked&quot;;?&gt;
           <br /> value=&quot;female&quot;&gt;Female
           <br /> &lt;input type=&quot;radio&quot; name=&quot;gender&quot;
           <br /> &lt;?php if (isset($gender) &amp;&amp; $gender==&quot;male&quot;) echo &quot;checked&quot;;?&gt;
           <br /> value=&quot;male&quot;&gt;Male
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="form_get"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>$_GET 变量</h3> 
          <p>在 PHP 中，预定义的 $_GET 变量用于收集来自 method=&quot;get&quot; 的表单中的值。</p> 
          <p>预定义的 $_GET 变量用于收集来自 method=&quot;get&quot; 的表单中的值。<br /> 从带有 GET 方法的表单发送的信息，对任何人都是可见的（会显示在浏览器的地址栏），并且对发送信息的量也有限制。</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;form action=&quot;welcome.php&quot; method=&quot;get&quot;&gt;
           <br /> Name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;
           <br /> Age: &lt;input type=&quot;text&quot; name=&quot;age&quot;&gt;
           <br /> &lt;input type=&quot;submit&quot;&gt;
           <br /> &lt;/form&gt;
           <br /> 
          </div> 
          <p>&quot;welcome.php&quot; 文件现在可以通过 $_GET 变量来收集表单数据了（请注意，表单域的名称会自动成为 $_GET 数组中的键）：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Welcome &lt;?php echo $_GET[&quot;fname&quot;]; ?&gt;.&lt;br&gt;
           <br /> You are &lt;?php echo $_GET[&quot;age&quot;]; ?&gt; years old!
           <br /> 
          </div> 
          <h2>何时使用 method=&quot;get&quot;？</h2> 
          <p>在 HTML 表单中使用 method=&quot;get&quot; 时，所有的变量名和值都会显示在 URL 中。<br /> 注释：所以在发送密码或其他敏感信息时，不应该使用这个方法！<br /> 然而，正因为变量显示在 URL 中，因此可以在收藏夹中收藏该页面。在某些情况下，这是很有用的。<br /> 注释：HTTP GET 方法不适合大型的变量值。它的值是不能超过 2000 个字符的。<br /></p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="form_post"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>$_POSt 变量</h3> 
          <p>在 PHP 中，预定义的 $_POST 变量用于收集来自 method=&quot;post&quot; 的表单中的值。</p> 
          <p>预定义的 $_POST 变量用于收集来自 method=&quot;post&quot; 的表单中的值。 从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。<br /> 注释：然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;form action=&quot;welcome.php&quot; method=&quot;post&quot;&gt;
           <br /> Name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;
           <br /> Age: &lt;input type=&quot;text&quot; name=&quot;age&quot;&gt;
           <br /> &lt;input type=&quot;submit&quot;&gt;
           <br /> &lt;/form&gt;
           <br /> 
          </div> 
          <p>&quot;welcome.php&quot; 文件现在可以通过 $_POST 变量来收集表单数据了（请注意，表单域的名称会自动成为 $_POST 数组中的键）：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Welcome &lt;?php echo $_GET[&quot;fname&quot;]; ?&gt;.&lt;br&gt;
           <br /> You are &lt;?php echo $_GET[&quot;age&quot;]; ?&gt; years old!
           <br /> 
          </div> 
          <h2>何时使用 method=&quot;post&quot;？</h2> 
          <p>从带有 POST 方法的表单发送的信息，对任何人都是不可见的，并且对发送信息的量也没有限制。 然而，由于变量不显示在 URL 中，所以无法把页面加入书签。</p> 
          <h2>PHP $_REQUEST 变量</h2> 
          <p>预定义的 $_REQUEST 变量包含了 $_GET、$_POST 和 $_COOKIE 的内容。 $_REQUEST 变量可用来收集通过 GET 和 POST 方法发送的表单数据。</p> 
          <br /> 
         </div> 
        </div> 
        <!--php高级--> 
        <div class="tab-pane fade" id="array_duowei"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>多维数组</h3> 
           <p>一个数组中的值可以是另一个数组，另一个数组的值也可以是一个数组。依照这种方式，我们可以创建二维或者三维数组：</p> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> // A two-dimensional array:
            <br /> $cars = array
            <br /> (
            <br /> array(&quot;Volvo&quot;,100,96),
            <br /> array(&quot;BMW&quot;,60,59),
            <br /> array(&quot;Toyota&quot;,110,100)
            <br /> );
            <br /> ?&gt;
            <br /> 
           </div> 
           <h2>PHP - 多维数组</h2> 
           <p>多维数组是包含一个或多个数组的数组。<br /> 在多维数组中，主数组中的每一个元素也可以是一个数组，子数组中的每一个元素也可以是一个数组。</p> 
           <h2>实例</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             $families = array
            <br /> (
            <br /> &quot;Griffin&quot;=&gt;array
            <br /> (
            <br /> &quot;Peter&quot;,
            <br /> &quot;Lois&quot;,
            <br /> &quot;Megan&quot;
            <br /> ),
            <br /> &quot;Quagmire&quot;=&gt;array
            <br /> (
            <br /> &quot;Glenn&quot;
            <br /> ),
            <br /> &quot;Brown&quot;=&gt;array
            <br /> (
            <br /> &quot;Cleveland&quot;,
            <br /> &quot;Loretta&quot;,
            <br /> &quot;Junior&quot;
            <br /> )
            <br /> );
            <br /> 
           </div> 
           <p>上面的数组将输出如下：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             Array
            <br /> (
            <br /> [Griffin] =&gt; Array
            <br /> (
            <br /> [0] =&gt; Peter
            <br /> [1] =&gt; Lois
            <br />
            <br /> [2] =&gt; Megan
            <br /> )
            <br /> [Quagmire] =&gt; Array
            <br /> (
            <br /> [0] =&gt; Glenn
            <br /> )
            <br /> [Brown] =&gt; Array
            <br /> (
            <br /> [0] =&gt; Cleveland
            <br /> [1] =&gt; Loretta
            <br /> [2] =&gt; Junior
            <br /> )
            <br /> )
            <br /> 
           </div> 
           <h2>实例 2</h2> 
           <p>让我们试着显示上面数组中的某个值：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             echo &quot;Is &quot; . $families['Griffin'][2] .
            <br /> &quot; a part of the Griffin family?&quot;;
            <br /> 
           </div> 
           <p>上面的代码将输出：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             Is Megan a part of the Griffin family?
            <br /> 
           </div> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="date"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>Date()函数</h3> 
           <p>PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。<br /> Tip时间戳是一个字符序列，表示一定的事件发生的日期/时间。</p> 
           <h2>语法</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             date(format,timestamp) 
           </div> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
            <table> 
             <tbody>
              <tr> 
               <td width="10%">参数 </td> 
               <td width="10%">描述</td> 
              </tr> 
              <tr> 
               <td>format </td> 
               <td>必需。规定时间戳的格式。</td> 
              </tr> 
              <tr> 
               <td>timestamp </td> 
               <td>可选。规定时间戳。默认是当前的日期和时间。</td> 
              </tr> 
             </tbody>
            </table> 
           </div> 
           <h2>PHP Date() - 格式化日期</h2> 
           <p>date() 函数的第一个必需参数 format 规定了如何格式化日期/时间。<br /> 这里列出了一些可用的字符：</p> 
           <ul> 
            <li>d - 代表月中的天 (01 - 31)</li> 
            <li>m - 代表月 (01 - 12)</li> 
            <li>Y - 代表年 (四位数)</li> 
           </ul> 
           <p>如需了解 format 参数中可用的所有字符列表，请查阅我们的 PHP Date 参考手册，date() 函数。 可以在字母之间插入其他字符，比如 &quot;/&quot;、&quot;.&quot; 或者 &quot;-&quot;，这样就可以增加附加格式了：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> echo date(&quot;Y/m/d&quot;) . &quot;&lt;br&gt;&quot;;
            <br /> echo date(&quot;Y.m.d&quot;) . &quot;&lt;br&gt;&quot;;
            <br /> echo date(&quot;Y-m-d&quot;);
            <br /> ?&gt;
            <br /> 
           </div> 
           <p>上面代码的输出如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             2009/05/11 
            <br /> 2009.05.11
            <br /> 2009-05-11
            <br /> 
           </div> 
           <h2>PHP Date() - 添加时间戳</h2> 
           <p>date() 函数的第二个可选参数 timestamp 规定了一个时间戳。如果您没有提供时间戳，将使用当前的日期和时间。<br /> mktime() 函数可为指定的日期返回 Unix 时间戳。<br /> Unix 时间戳包含了 Unix 纪元（1970-01-01 00:00:00 GMT）和指定时间之间的秒数。<br /></p> 
           <h2>mktime() 语法</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             mktime(hour,minute,second,month,day,year,is_dst) 
           </div> 
           <p>如需获得某一天的时间戳，我们只要设置 mktime() 函数的 day 参数就可以了：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             &lt;?php 
            <br /> $tomorrow = mktime(0,0,0,date(&quot;m&quot;),date(&quot;d&quot;)+1,date(&quot;Y&quot;));
            <br /> echo &quot;Tomorrow is &quot;.date(&quot;Y/m/d&quot;, $tomorrow);
            <br /> ?&gt;
            <br /> 
           </div> 
           <p>上面代码的输出如下所示：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
             Tomorrow is 2009/05/12 
           </div> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="baohan"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>PHP 包含文件</h3> 
          <h2>PHP include 和 require 语句</h2> 
          <p>在 PHP 中，您可以在服务器执行 PHP 文件之前在该文件中插入一个文件的内容。<br /> include 和 require 语句用于在执行流中插入写在其他文件中的有用的代码。<br /> include 和 require 除了处理错误的方式不同之外，在其他方面都是相同的：<br /></p> 
          <ul> 
           <li>require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。</li> 
           <li>include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。</li> 
          </ul> 
          <p>因此，如果您希望继续执行，并向用户输出结果，即使包含文件已丢失，那么请使用 include。 否则，在框架、CMS 或者复杂的 PHP 应用程序编程中，请始终使用 require 向执行流引用关键文件。 这有助于提高应用程序的安全性和完整性，在某个关键文件意外丢失的情况下。<br /> 包含文件省去了大量的工作。这意味着您可以为所有网页创建标准页头、页脚或者菜单文件。 然后，在页头需要更新时，您只需更新这个页头包含文件即可。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            include 'filename';
           <br /> 或者
           <br /> require 'filename';
           <br /> 
          </div> 
          <h2>PHP include 和 require 语句</h2> 
          <h2>实例</h2> 
          <p>假设您有一个标准的页头文件，名为 &quot;header.php&quot;。如需在页面中引用这个页头文件，请使用 include/require</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php include 'header.php'; ?&gt;
           <br /> &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;
           <br /> &lt;p&gt;Some text.&lt;/p&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="file"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>文件</h3> 
          <p>PHP 拥有的多种函数可供创建、读取、上传以及编辑文件。<br /> 注意：请谨慎操作文件！<br /> 当您操作文件时必须非常小心。如果您操作失误，可能会造成非常严重的破坏。常见的错误是：<br /></p> 
          <ul> 
           <li>编辑错误的文件</li> 
           <li>被垃圾数据填满硬盘</li> 
           <li>意外删除文件内容</li> 
          </ul> 
          <h2>PHP readfile() 函数</h2> 
          <p>readfile() 函数读取文件，并把它写入输出缓冲。<br /> 假设我们有一个名为 &quot;webdictionary.txt&quot; 的文本文件，存放在服务器上，就像这样：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            AJAX = Asynchronous JavaScript and XML 
           <br /> CSS = Cascading Style Sheets
           <br /> HTML = Hyper Text Markup Language
           <br /> PHP = PHP Hypertext Preprocessor
           <br /> SQL = Structured Query Language
           <br /> SVG = Scalable Vector Graphics
           <br /> XML = EXtensible Markup Language
           <br /> 
          </div> 
          <p>读取此文件并写到输出流的 PHP 代码如下（如读取成功则 readfile() 函数返回字节数）：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> echo readfile(&quot;webdictionary.txt&quot;);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>如果您想做的所有事情就是打开一个文件并读取器内容，那么 readfile() 函数很有用。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="file_upload"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>文件上传</h3> 
          <h2>创建一个文件上传表单</h2> 
          <p>允许用户从表单上传文件是非常有用的。<br /> 请看下面这个供上传文件的 HTML 表单：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;form action=&quot;upload_file.php&quot; method=&quot;post&quot;
           <br /> enctype=&quot;multipart/form-data&quot;&gt;
           <br /> &lt;label for=&quot;file&quot;&gt;Filename: &lt;/label&gt;
           <br /> &lt;input type=&quot;file&quot; name=&quot;file&quot; id=&quot;file&quot; /&gt;
           <br /> &lt;br /&gt;
           <br /> &lt;input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;Submit&quot; /&gt;
           <br /> &lt;/form&gt;
           <br /> 
          </div> 
          <p>请留意如下有关此表单的信息：<br /> &lt;form&gt; 标签的 enctype 属性规定了在提交表单时要使用哪种内容类型。在表单需要二进制数据时，比如文件内容，请使用 &quot;multipart/form-data&quot;。<br /> &lt;input&gt; 标签的 type=&quot;file&quot; 属性规定了应该把输入作为文件来处理。举例来说，当在浏览器中预览时，会看到输入框旁边有一个浏览按钮。<br /> 注释：允许用户上传文件是一个巨大的安全风险。请仅仅允许可信的用户执行文件上传操作。 </p> 
          <h2>创建上传脚本 </h2> 
          <p>&quot;upload_file.php&quot; 文件含有供上传文件的代码：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> if ($_FILES[&quot;file&quot;][&quot;error&quot;] &gt; 0)
           <br /> {
           <br /> echo &quot;Error: &quot; . $_FILES[&quot;file&quot;][&quot;error&quot;] . &quot;&lt;br /&gt;&quot;;
           <br /> }
           <br /> else
           <br /> {
           <br /> echo &quot;Upload: &quot; . $_FILES[&quot;file&quot;][&quot;name&quot;] . &quot;&lt;br /&gt;&quot;;
           <br /> echo &quot;Type: &quot; . $_FILES[&quot;file&quot;][&quot;type&quot;] . &quot;&lt;br /&gt;&quot;;
           <br /> echo &quot;Size: &quot; . ($_FILES[&quot;file&quot;][&quot;size&quot;] / 1024) . &quot; Kb &lt;br /&gt;&quot;;
           <br /> echo &quot;Stored in: &quot; . $_FILES[&quot;file&quot;][&quot;tmp_name&quot;];
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>通过使用 PHP 的全局数组 $_FILES，你可以从客户计算机向远程服务器上传文件。<br /> 第一个参数是表单的 input name，第二个下标可以是 &quot;name&quot;、&quot;type&quot;、&quot;size&quot;、&quot;tmp_name&quot; 或 &quot;error&quot;。如下所示：</p> 
          <ul> 
           <li>$_FILES[&quot;file&quot;][&quot;name&quot;] - 被上传文件的名称</li> 
           <li>$_FILES[&quot;file&quot;][&quot;type&quot;] - 被上传文件的类型</li> 
           <li>$_FILES[&quot;file&quot;][&quot;size&quot;] - 被上传文件的大小，以字节计</li> 
           <li> $_FILES[&quot;file&quot;][&quot;tmp_name&quot;] - 存储在服务器的文件的临时副本的名称</li> 
           <li>$_FILES[&quot;file&quot;][&quot;error&quot;] - 由文件上传导致的错误代码</li> 
          </ul> 
          <p>这是一种非常简单文件上传方式。基于安全方面的考虑，您应当增加有关允许哪些用户上传文件的限制。</p> 
          <h2>上传限制</h2> 
          <p>在这个脚本中，我们增加了对文件上传的限制。用户只能上传 .gif 和 .jpeg 文件，文件大小必须小于 20 kB：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $allowedExts = array(&quot;gif&quot;, &quot;jpeg&quot;, &quot;jpg&quot;, &quot;png&quot;);
           <br /> $temp = explode(&quot;.&quot;, $_FILES[&quot;file&quot;][&quot;name&quot;]);
           <br /> $extension = end($temp);
           <br /> if ((($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/gif&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/jpeg&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/jpg&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/pjpeg&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/x-png&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/png&quot;))
           <br /> &amp;&amp; ($_FILES[&quot;file&quot;][&quot;size&quot;] &lt; 20000)
           <br /> &amp;&amp; in_array($extension, $allowedExts))
           <br /> {
           <br /> if ($_FILES[&quot;file&quot;][&quot;error&quot;] &gt; 0)
           <br /> {
           <br /> echo &quot;Error: &quot; . $_FILES[&quot;file&quot;][&quot;error&quot;] . &quot;&lt;br&gt;&quot;; }
           <br /> else
           <br /> {
           <br /> echo &quot;Upload: &quot; . $_FILES[&quot;file&quot;][&quot;name&quot;] . &quot;&lt;br&gt;&quot;;
           <br /> echo &quot;Type: &quot; . $_FILES[&quot;file&quot;][&quot;type&quot;] . &quot;&lt;br&gt;&quot;;
           <br /> echo &quot;Size: &quot; . ($_FILES[&quot;file&quot;][&quot;size&quot;] / 1024) . &quot; kB
           <br />&quot;;
           <br /> echo &quot;Stored in: &quot; . $_FILES[&quot;file&quot;][&quot;tmp_name&quot;];
           <br /> }
           <br /> }
           <br /> else
           <br /> {
           <br /> echo &quot;Invalid file&quot;;
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>保存被上传的文件</h2> 
          <p>上面的实例在服务器的 PHP 临时文件夹中创建了一个被上传文件的临时副本。<br /> 这个临时的副本文件会在脚本结束时消失。要保存被上传的文件，我们需要把它拷贝到另外的位置：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $allowedExts = array(&quot;gif&quot;, &quot;jpeg&quot;, &quot;jpg&quot;, &quot;png&quot;);
           <br /> $temp = explode(&quot;.&quot;, $_FILES[&quot;file&quot;][&quot;name&quot;]);
           <br /> $extension = end($temp);
           <br /> if ((($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/gif&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/jpeg&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/jpg&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/pjpeg&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/x-png&quot;)
           <br /> || ($_FILES[&quot;file&quot;][&quot;type&quot;] == &quot;image/png&quot;))
           <br /> &amp;&amp; ($_FILES[&quot;file&quot;][&quot;size&quot;] &lt; 20000)
           <br /> &amp;&amp; in_array($extension, $allowedExts))
           <br /> {
           <br /> if ($_FILES[&quot;file&quot;][&quot;error&quot;] &gt; 0)
           <br /> {
           <br /> echo &quot;Error: &quot; . $_FILES[&quot;file&quot;][&quot;error&quot;] . &quot;&lt;br&gt;&quot;;
           <br /> }
           <br /> else
           <br /> {
           <br /> echo &quot;Upload: &quot; . $_FILES[&quot;file&quot;][&quot;name&quot;] . &quot;&lt;br&gt;&quot;;
           <br /> echo &quot;Type: &quot; . $_FILES[&quot;file&quot;][&quot;type&quot;] . &quot;&lt;br&gt;&quot;;
           <br /> echo &quot;Size: &quot; . ($_FILES[&quot;file&quot;][&quot;size&quot;] / 1024) . &quot; kB&lt;br&gt;&quot;;
           <br /> echo &quot;Stored in: &quot; . $_FILES[&quot;file&quot;][&quot;tmp_name&quot;];
           <br /> }
           <br /> }
           <br /> else
           <br /> {
           <br /> echo &quot;Invalid file&quot;;
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Cookies"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Cookies</h3> 
          <h2>Cookie 是什么？</h2> 
          <p>cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。</p> 
          <h2>如何创建 Cookie？</h2> 
          <p>setcookie() 函数用于设置 cookie。<br /> 注释：setcookie() 函数必须位于 &lt;html&gt; 标签之前。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            setcookie(name, value, expire, path, domain); 
          </div> 
          <h2>实例 1</h2> 
          <p>在下面的例子中，我们将创建名为 &quot;user&quot; 的 cookie，并为它赋值 &quot;Alex Porter&quot;。我们也规定了此 cookie 在一小时后过期：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> setcookie(&quot;user&quot;, &quot;Alex Porter&quot;, time()+3600);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>注释：在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码。（为防止 URL 编码，请使用 setrawcookie() 取而代之。）</p> 
          <h2>实例 2</h2> 
          <p>您还可以通过另一种方式设置 cookie 的过期时间。这也许比使用秒表示的方式简单。</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $expire=time()+60*60*24*30;
           <br /> setcookie(&quot;user&quot;, &quot;Alex Porter&quot;, $expire);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>在上面的实例中，过期时间被设置为一个月（60 秒 * 60 分 * 24 小时 * 30 天）。</p> 
          <h2>如何取回 Cookie 的值？</h2> 
          <p>PHP 的 $_COOKIE 变量用于取回 cookie 的值。<br /> 在下面的实例中，我们取回了名为 &quot;user&quot; 的 cookie 的值，并把它显示在了页面上：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> // Print a cookie
           <br /> echo $_COOKIE[&quot;user&quot;];
           <br /> // A way to view all cookies
           <br /> print_r($_COOKIE);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>在下面的实例中，我们使用 isset() 函数来确认是否已设置了 cookie：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> if (isset($_COOKIE[&quot;user&quot;]))
           <br /> echo &quot;Welcome &quot; . $_COOKIE[&quot;user&quot;] . &quot;!&lt;br&gt;&quot;;
           <br /> else
           <br /> echo &quot;Welcome guest!&lt;br&gt;&quot;;
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>如何删除 Cookie？</h2> 
          <p>当删除 cookie 时，您应当使过期日期变更为过去的时间点。<br /> 删除的实例：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> // set the expiration date to one hour ago 
           <br /> setcookie(&quot;user&quot;, &quot;&quot;, time()-3600);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>如果浏览器不支持 Cookie 该怎么办？</h2> 
          <p>如果您的应用程序需要与不支持 cookie 的浏览器打交道，那么您不得不使用其他的办法在您的应用程序中的页面之间传递信息。一种方式是通过表单传递数据（有关表单和用户输入的内容，在本教程的前面章节中我们已经介绍过了）。 <br />下面的表单在用户单点击 &quot;Submit&quot; 按钮时，向 &quot;welcome.php&quot; 提交了用户输入：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;form action=&quot;welcome.php&quot; method=&quot;post&quot;&gt; Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt; Age: &lt;input type=&quot;text&quot; name=&quot;age&quot;&gt; &lt;input type=&quot;submit&quot;&gt; &lt;/form&gt; 
          </div> 
          <p>取回 &quot;welcome.php&quot; 文件中的值，如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Welcome &lt;?php echo $_POST[&quot;name&quot;]; ?&gt;.&lt;br&gt; You are &lt;?php echo $_POST[&quot;age&quot;]; ?&gt; years old. 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Sessions"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Sessions</h3> 
          <p>PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置。 Session 变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的。</p> 
          <h2>PHP Session 变量</h2> 
          <p>您在计算机上操作某个应用程序时，您打开它，做些更改，然后关闭它。这很像一次对话（Session）。计算机知道您是谁。它清楚您在何时打开和关闭应用程序。然而，在因特网上问题出现了：由于 HTTP 地址无法保持状态，Web 服务器并不知道您是谁以及您做了什么。<br /> PHP session 解决了这个问题，它通过在服务器上存储用户信息以便随后使用（比如用户名称、购买商品等）。然而，会话信息是临时的，在用户离开网站后将被删除。如果您需要永久存储信息，可以把数据存储在数据库中。<br /> Session 的工作机制是：为每个访客创建一个唯一的 id (UID)，并基于这个 UID 来存储变量。UID 存储在 cookie 中，或者通过 URL 进行传导。</p> 
          <h2>开始 PHP Session</h2> 
          <p>在您把用户信息存储到 PHP session 中之前，首先必须启动会话。<br /> 注释：session_start() 函数必须位于  标签之前：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php session_start(); ?&gt;
           <br /> &lt;html&gt;
           <br /> &lt;body&gt;
           <br /> &lt;/body&gt;
           <br /> &lt;/html&gt;
           <br /> 
          </div> 
          <p>上面的代码会向服务器注册用户的会话，以便您可以开始保存用户信息，同时会为用户会话分配一个 UID。</p> 
          <h2>存储 Session 变量</h2> 
          <p>存储和取回 session 变量的正确方法是使用 PHP $_SESSION 变量：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> session_start();
           <br /> // store session data
           <br /> $_SESSION['views']=1;
           <br /> ?&gt; &lt;html&gt;
           <br /> &lt;body&gt;
           <br /> &lt;?php
           <br /> //retrieve session data
           <br /> echo &quot;Pageviews=&quot;. $_SESSION['views'];
           <br /> ?&gt;
           <br /> &lt;/body&gt;
           <br /> &lt;/html&gt;
           <br /> 
          </div> 
          <p>输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Pageviews=1 
          </div> 
          <p>在下面的实例中，我们创建了一个简单的 page-view 计数器。isset() 函数检测是否已设置 &quot;views&quot; 变量。如果已设置 &quot;views&quot; 变量，我们累加计数器。如果 &quot;views&quot; 不存在，则创建 &quot;views&quot; 变量，并把它设置为 1：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> session_start();
           <br /> if(isset($_SESSION['views']))
           <br /> $_SESSION['views']=$_SESSION['views']+1;
           <br /> else
           <br /> $_SESSION['views']=1;
           <br /> echo &quot;Views=&quot;. $_SESSION['views'];
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>销毁 Session</h2> 
          <p>如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。<br /> unset() 函数用于释放指定的 session 变量：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> session_start();
           <br /> if(isset($_SESSION['views']))
           <br /> unset($_SESSION['views']);
           <br /> ?&gt; 
          </div> 
          <p>您也可以通过调用 session_destroy() 函数彻底销毁 session：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> session_destroy(); ?&gt; 
          </div> 
          <p>注释：session_destroy() 将重置 session，您将失去所有已存储的 session 数据。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Error"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>PHP 错误处理</h3> 
          <p>在 PHP 中，默认的错误处理很简单。一条错误消息会被发送到浏览器，这条消息带有文件名、行号以及描述错误的消息。</p> 
          <h2>PHP 错误处理</h2> 
          <p>在创建脚本和 Web 应用程序时，错误处理是一个重要的部分。如果您的代码缺少错误检测编码，那么程序看上去很不专业，也为安全风险敞开了大门。<br /> 本教程介绍了 PHP 中一些最为重要的错误检测方法。<br /> 我们将为您讲解不同的错误处理方法：</p> 
          <ul> 
           <li>简单的 &quot;die()&quot; 语句</li> 
           <li>自定义错误和错误触发器</li> 
           <li> 错误报告</li> 
          </ul> 
          <h2>基本的错误处理：使用 die() 函数</h2> 
          <p>第一个实例展示了一个打开文本文件的简单脚本：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $file=fopen(&quot;welcome.txt&quot;,&quot;r&quot;);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>如果文件不存在，您会得到类似这样的错误：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            File not found 
          </div> 
          <p>相比之前的代码，上面的代码更有效，这是由于它采用了一个简单的错误处理机制在错误之后终止了脚本。 然而，简单地终止脚本并不总是恰当的方式。让我们研究一下用于处理错误的备选的 PHP 函数。</p> 
          <h2>创建自定义错误处理器</h2> 
          <p>创建一个自定义的错误处理器非常简单。我们很简单地创建了一个专用函数，可以在 PHP 中发生错误时调用该函数。<br /> 该函数必须有能力处理至少两个参数 (error level 和 error message)，但是可以接受最多五个参数（可选的：file, line-number 和 error context）：</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            error_function(error_level,error_message,
           <br /> error_file,error_line,error_context) 
          </div> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <img src="/php_study/Application/Public/Bootstrap/img/php_error1.jpg" alt="" />
          </div> 
          <h2>错误报告级别</h2> 
          <p>这些错误报告级别是用户自定义的错误处理程序处理的不同类型的错误：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <img src="/php_study/Application/Public/Bootstrap/img/php_error2.jpg" alt="" />
          </div> 
          <p>现在，让我们创建一个处理错误的函数：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            function customError($errno, $errstr)
           <br /> {
           <br /> echo &quot;&lt;b&gt;Error:&lt;/b&gt; [$errno] $errstr&lt;br&gt;&quot;;
           <br /> echo &quot;Ending Script&quot;;
           <br /> die();
           <br /> }
           <br /> 
          </div> 
          <p>上面的代码是一个简单的错误处理函数。当它被触发时，它会取得错误级别和错误消息。然后它会输出错误级别和消息，并终止脚本。 现在，我们已经创建了一个错误处理函数，我们需要确定在何时触发该函数。</p> 
          <h2>设置错误处理程序</h2> pPHP 的默认错误处理程序是内建的错误处理程序。我们打算把上面的函数改造为脚本运行期间的默认错误处理程序。
          <br /> 可以修改错误处理程序，使其仅应用到某些错误，这样脚本就能以不同的方式来处理不同的错误。然而，在本例中，我们打算针对所有错误来使用我们自定义的错误处理程序： 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            set_error_handler(&quot;customError&quot;); 
          </div> 
          <p>由于我们希望我们的自定义函数能处理所有错误，set_error_handler() 仅需要一个参数，可以添加第二个参数来规定错误级别。</p> 
          <h2>实例</h2> 
          <p>通过尝试输出不存在的变量，来测试这个错误处理程序：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> //error handler function
           <br /> function customError($errno, $errstr)
           <br /> {
           <br /> echo &quot;&lt;b&gt;Error:&lt;/b&gt; [$errno] $errstr&quot;;
           <br /> }
           <br /> //set error handler
           <br /> set_error_handler(&quot;customError&quot;);
           <br /> //trigger error
           <br /> echo($test);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以上代码的输出如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Error: [8] Undefined variable: test 
          </div> 
          <h2>触发错误</h2> 
          <p>在脚本中用户输入数据的位置，当用户的输入无效时触发错误是很有用的。在 PHP 中，这个任务由 trigger_error() 函数完成。</p> 
          <h2>实例</h2> 
          <p>在本例中，如果 &quot;test&quot; 变量大于 &quot;1&quot;，就会发生错误：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $test=2;
           <br /> if ($test&gt;1)
           <br /> {
           <br /> trigger_error(&quot;Value must be 1 or below&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以上代码的输出如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Notice: Value must be 1 or below 
           <br /> in C:webfoldertest.php on line 6 
          </div> 
          <h2>错误记录</h2> 
          <p>在默认的情况下，根据在 php.ini 中的 error_log 配置，PHP 向服务器的记录系统或文件发送错误记录。通过使用 error_log() 函数，您可以向指定的文件或远程目的地发送错误记录。<br /> 通过电子邮件向您自己发送错误消息，是一种获得指定错误的通知的好办法。</p> 
          <h2>通过 E-Mail 发送错误消息</h2> 
          <p>在下面的例子中，如果特定的错误发生，我们将发送带有错误消息的电子邮件，并结束脚本：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> //error handler function 
           <br /> function customError($errno, $errstr)
           <br /> {
           <br /> echo &quot;&lt;b&gt;Error:&lt;/b&gt; [$errno] $errstr&lt;br&gt;&quot;; 
           <br /> echo &quot;Webmaster has been notified&quot;;
           <br /> error_log(&quot;Error: [$errno] $errstr&quot;,1,
           <br /> &quot;someone@example.com&quot;,&quot;From: webmaster@example.com&quot;);
           <br /> }
           <br /> //set error handler
           <br /> set_error_handler(&quot;customError&quot;,E_USER_WARNING);
           <br /> //trigger error
           <br /> $test=2;
           <br /> if ($test&gt;1)
           <br /> {
           <br /> trigger_error(&quot;Value must be 1 or below&quot;,E_USER_WARNING);
           <br /> }
           <br /> ?&gt; 
           <br /> 
          </div> 
          <p>以上代码的输出如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Error: [512] Value must be 1 or below 
           <br /> Ending Script 
          </div> 
          <p>接收自以上代码的邮件如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Error: [512] Value must be 1 or below 
          </div> 
          <p>这个方法不适合所有的错误。常规错误应当通过使用默认的 PHP 记录系统在服务器上进行记录。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Exception"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>PHP 异常处理</h3> 
          <p>异常用于在指定的错误发生时改变脚本的正常流程。</p> 
          <h2>异常是什么</h2> 
          <p>PHP 5 提供了一种新的面向对象的错误处理方法。<br /> 异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。<br /> 当异常被触发时，通常会发生：</p> 
          <ul> 
           <li>当前代码状态被保存</li> 
           <li>代码执行被切换到预定义（自定义）的异常处理器函数</li> 
           <li>根据情况，处理器也许会从保存的代码状态重新开始执行代码，终止脚本执行，或从代码中另外的位置继续执行脚本 我们将展示不同的错误处理方法： </li> 
           <li>异常的基本使用</li> 
           <li>创建自定义的异常处理器</li> 
           <li>多个异常</li> 
           <li>重新抛出异常</li> 
           <li>设置顶层异常处理器</li> 
          </ul> 
          <p>注释：异常应该仅仅在错误情况下使用，而不应该用于在一个指定的点跳转到代码的另一个位置。</p> 
          <h2>异常的基本使用</h2> 
          <p>当异常被抛出时，其后的代码不会继续执行，PHP 会尝试查找匹配的 &quot;catch&quot; 代码块。<br /> 如果异常没有被捕获，而且又没用使用 set_exception_handler() 作相应的处理的话，那么将发生一个严重的错误（致命错误），并且输出 &quot;Uncaught Exception&quot; （未捕获异常）的错误消息。<br /> 让我们尝试抛出一个异常，同时不去捕获它：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> //create function with an exception 
           <br /> function checkNum($number)
           <br /> {
           <br /> if($number&gt;1)
           <br /> {
           <br /> throw new Exception(&quot;Value must be 1 or below&quot;);
           <br /> }
           <br /> return true;
           <br /> }
           <br /> //trigger exception
           <br /> checkNum(2);
           <br /> ?&gt; 
           <br /> 
          </div> 
          <p>上面的代码会得到类似这样的一个错误：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Fatal error: Uncaught exception 'Exception' 
           <br /> with message 'Value must be 1 or below' in C:webfoldertest.php:6
           <br /> Stack trace: #0 C:webfoldertest.php(12):
           <br /> checkNum(28) #1 {main} thrown in C:webfoldertest.php on line 6
           <br /> 
          </div> 
          <h2>Try、throw 和 catch</h2> 
          <p>要避免上面实例中出现的错误，我们需要创建适当的代码来处理异常。<br /> 适当的处理异常代码应该包括：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>Try - 使用异常的函数应该位于 &quot;try&quot; 代码块内。如果没有触发异常，则代码将照常继续执行。但是如果异常被触发，会抛出一个异常。</li> 
           <li>Throw - 里规定如何触发异常。每一个 &quot;throw&quot; 必须对应至少一个 &quot;catch&quot;。</li> 
           <li>Catch - &quot;catch&quot; 代码块会捕获异常，并创建一个包含异常信息的对象。</li> 
          </ol> 
          <p>让我们触发一个异常：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> //create function with an exception 
           <br /> function checkNum($number)
           <br /> {
           <br /> if($number&gt;1)
           <br /> {
           <br /> throw new Exception(&quot;Value must be 1 or below&quot;);
           <br /> }
           <br /> return true;
           <br /> }
           <br /> //trigger exception in a &quot;try&quot; block
           <br /> try
           <br /> {
           <br /> checkNum(2);
           <br /> //If the exception is thrown, this text will not be shown
           <br /> echo 'If you see this, the number is 1 or below';
           <br /> } 
           <br /> //catch exception
           <br /> catch(Exception $e)
           <br /> {
           <br /> echo 'Message: ' .$e-&gt;getMessage();
           <br /> }
           <br /> ?&gt; 
           <br /> 
          </div> 
          <p>上面代码将得到类似这样一个错误：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Message: Value must be 1 or below 
          </div> 
          <h2>实例解释：</h2> 
          <p>上面的代码抛出了一个异常，并捕获了它：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>创建 checkNum() 函数。它检测数字是否大于 1。如果是，则抛出一个异常。</li> 
           <li>在 &quot;try&quot; 代码块中调用 checkNum() 函数。</li> 
           <li>checkNum() 函数中的异常被抛出。</li> 
           <li>&quot;catch&quot; 代码块接收到该异常，并创建一个包含异常信息的对象 ($e)。</li> 
           <li>通过从这个 exception 对象调用 $e-&gt;getMessage()，输出来自该异常的错误消息。</li> 
          </ol> 
          <p>然而，为了遵循 &quot;每个 throw 必须对应一个 catch&quot; 的原则，可以设置一个顶层的异常处理器来处理漏掉的错误。</p> 
          <h2>创建一个自定义的 Exception 类</h2> 
          <p>创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。<br /> 这个自定义的 exception 类继承了 PHP 的 exception 类的所有属性，您可向其添加自定义的函数。<br /> 我们开始创建 exception 类：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> class customException extends Exception
           <br /> {
           <br /> public function errorMessage()
           <br /> {
           <br /> //error message
           <br /> $errorMsg = 'Error on line '.$this-&gt;getLine().' in '.$this-&gt;getFile()
           <br /> .': &lt;b&gt;'.$this-&gt;getMessage().'&lt;/b&gt; is not a valid E-Mail address';
           <br /> return $errorMsg;
           <br /> }
           <br /> }
           <br /> $email = &quot;someone@example...com&quot;; 
           <br /> try
           <br /> {
           <br /> //check if
           <br /> if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
           <br /> {
           <br /> //throw exception if email is not valid
           <br /> throw new customException($email);
           <br /> }
           <br /> }
           <br /> catch (customException $e)
           <br /> {
           <br /> //display custom message
           <br /> echo $e-&gt;errorMessage();
           <br /> } 
           <br /> ?&gt; 
           <br /> 
          </div> 
          <p>这个新的类是旧的 exception 类的副本，外加 errorMessage() 函数。正因为它是旧类的副本，因此它从旧类继承了属性和方法， 我们可以使用 exception 类的方法，比如 getLine()、getFile() 和 getMessage()。</p> 
          <h2>实例解释：</h2> 
          <p>上面的代码抛出了一个异常，并通过一个自定义的 exception 类来捕获它：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧的 exception 类的所有属性和方法。</li> 
           <li>创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一条错误消息。</li> 
           <li>把 $email 变量设置为不合法的 e-mail 地址字符串。</li> 
           <li>执行 &quot;try&quot; 代码块，由于 e-mail 地址不合法，因此抛出一个异常。</li> 
           <li>&quot;catch&quot; 代码块捕获异常，并显示错误消息。</li> 
          </ol> 
          <h2>多个异常</h2> 
          <p>可以为一段脚本使用多个异常，来检测多种情况。<br /> 可以使用多个 if..else 代码块，或一个 switch 代码块，或者嵌套多个异常。这些异常能够使用不同的 exception 类，并返回不同的错误消息：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> class customException extends Exception 
           <br /> { 
           <br /> public function errorMessage() 
           <br /> { 
           <br /> //error message 
           <br /> $errorMsg = 'Error on line '.$this-&gt;getLine().' in '.$this-&gt;getFile() 
           <br /> .': &lt;b&gt;'.$this-&gt;getMessage().' &lt;/b&gt; is not a valid E-Mail address'; 
           <br /> return $errorMsg; 
           <br /> } 
           <br /> } 
           <br /> $email = &quot;someone@example.com&quot;; 
           <br /> try 
           <br /> { 
           <br /> //check if 
           <br /> if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) 
           <br /> { 
           <br /> //throw exception if email is not valid 
           <br /> throw new customException($email); 
           <br /> } 
           <br /> //check for &quot;example&quot; in mail address 
           <br /> if(strpos($email, &quot;example&quot;) !== FALSE) 
           <br /> { 
           <br /> throw new Exception(&quot;$email is an example e-mail&quot;); 
           <br /> } 
           <br /> } 
           <br /> catch (customException $e) 
           <br /> { 
           <br /> echo $e-&gt;errorMessage(); 
           <br /> } 
           <br /> catch(Exception $e) 
           <br /> { 
           <br /> echo $e-&gt;getMessage(); 
           <br /> } 
           <br /> ?&gt; 
           <br /> 
          </div> 
          <h2>实例解释：</h2> 
          <p>上面的代码测试了两种条件，如果其中任何一个条件不成立，则抛出一个异常：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧的 exception 类的所有属性和方法。</li> 
           <li>创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一个错误消息。</li> 
           <li>把 $email 变量设置为一个字符串，该字符串是一个有效的 e-mail 地址，但包含字符串 &quot;example&quot;。</li> 
           <li>执行 &quot;try&quot; 代码块，在第一个条件下，不会抛出异常。</li> 
           <li>由于 e-mail 含有字符串 &quot;example&quot;，第二个条件会触发异常。</li> 
           <li>&quot;catch&quot; 代码块会捕获异常，并显示恰当的错误消息。</li> 
          </ol> 
          <p>如果 customException 类抛出了异常，但没有捕获 customException，仅仅捕获了 base exception，则在那里处理异常。</p> 
          <h2>重新抛出异常</h2> 
          <p>有时，当异常被抛出时，您也许希望以不同于标准的方式对它进行处理。可以在一个 &quot;catch&quot; 代码块中再次抛出异常。<br /> 脚本应该对用户隐藏系统错误。对程序员来说，系统错误也许很重要，但是用户对它们并不感兴趣。为了让用户更容易使用，您可以再次抛出带有对用户比较友好的消息的异常：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> class customException extends Exception
           <br /> {
           <br /> public function errorMessage()
           <br /> {
           <br /> //error message
           <br /> $errorMsg = $this-&gt;getMessage().' is not a valid E-Mail address.';
           <br /> return $errorMsg;
           <br /> }
           <br /> } 
           <br /> $email = &quot;someone@example.com&quot;;
           <br /> try
           <br /> {
           <br /> try
           <br /> {
           <br /> //check for &quot;example&quot; in mail address
           <br /> if(strpos($email, &quot;example&quot;) !== FALSE)
           <br /> {
           <br /> //throw exception if email is not valid
           <br /> throw new Exception($email);
           <br /> }
           <br /> }
           <br /> catch(Exception $e)
           <br /> {
           <br /> //re-throw exception
           <br /> throw new customException($email);
           <br /> }
           <br /> }
           <br /> catch (customException $e)
           <br /> {
           <br /> //display custom message
           <br /> echo $e-&gt;errorMessage();
           <br /> }
           <br /> ?&gt; 
           <br /> 
          </div> 
          <h2>实例解释：</h2> 
          <p>上面的代码检测在邮件地址中是否含有字符串 &quot;example&quot;。如果有，则再次抛出异常：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧的 exception 类的所有属性和方法。</li> 
           <li>创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一个错误消息。</li> 
           <li>把 $email 变量设置为一个字符串，该字符串是一个有效的 e-mail 地址，但包含字符串 &quot;example&quot;。</li> 
           <li>&quot;try&quot; 代码块包含另一个 &quot;try&quot; 代码块，这样就可以再次抛出异常。</li> 
           <li>由于 e-mail 包含字符串 &quot;example&quot;，因此触发异常。</li> 
           <li>&quot;catch&quot; 代码块捕获到该异常，并重新抛出 &quot;customException&quot;。</li> 
           <li>捕获到 &quot;customException&quot;，并显示一条错误消息。</li> 
          </ol> 
          <p>如果在当前的 &quot;try&quot; 代码块中异常没有被捕获，则它将在更高层级上查找 catch 代码块。</p> 
          <h2>设置顶层异常处理器</h2> 
          <p>set_exception_handler() 函数可设置处理所有未捕获异常的用户定义函数。</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> function myException($exception) 
           <br /> {
           <br /> echo &quot;&lt;b&gt;Exception:&lt;/b&gt; &quot; , $exception-&gt;getMessage();
           <br /> }
           <br /> set_exception_handler('myException');
           <br /> throw new Exception('Uncaught Exception occurred');
           <br /> ?&gt; 
           <br /> 
          </div> 
          <p>以上代码的输出如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Exception: Uncaught Exception occurred 
          </div> 
          <p>在上面的代码中，不存在 &quot;catch&quot; 代码块，而是触发顶层的异常处理程序。应该使用此函数来捕获所有未被捕获的异常。</p> 
          <h2>异常的规则</h2> 
          <ul> 
           <li>需要进行异常处理的代码应该放入 try 代码块内，以便捕获潜在的异常。</li> 
           <li>每个 try 或 throw 代码块必须至少拥有一个对应的 catch 代码块。</li> 
           <li>使用多个 catch 代码块可以捕获不同种类的异常。</li> 
           <li>可以在 try 代码块内的 catch 代码块中抛出（再次抛出）异常。</li> 
          </ul> 
          <p>简而言之：如果抛出了异常，就必须捕获它。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="guolvqi"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>PHP 过滤器</h3> 
          <p>PHP 过滤器用于验证和过滤来自非安全来源的数据，比如用户的输入。</p> 
          <h2>什么是 PHP 过滤器？</h2> 
          <p>PHP 过滤器用于验证和过滤来自非安全来源的数据。<br /> 测试、验证和过滤用户输入或自定义数据是任何 Web 应用程序的重要组成部分。<br /> PHP 的过滤器扩展的设计目的是使数据过滤更轻松快捷。<br /> </p> 
          <h2>为什么使用过滤器？</h2> 
          <p>几乎所有的 Web 应用程序都依赖外部的输入。这些数据通常来自用户或其他应用程序（比如 web 服务）。通过使用过滤器，您能够确保应用程序获得正确的输入类型。<br /> 您应该始终对外部数据进行过滤！<br /> 输入过滤是最重要的应用程序安全课题之一。<br /> 什么是外部数据？</p> 
          <ul> 
           <li>来自表单的输入数据</li> 
           <li>Cookies</li> 
           <li>Web services data</li> 
           <li>服务器变量</li> 
           <li>数据库查询结果</li> 
          </ul> 
          <h2>函数和过滤器</h2> 
          <p>如需过滤变量，请使用下面的过滤器函数之一：</p> 
          <ul> 
           <li>filter_var() - 通过一个指定的过滤器来过滤单一的变量</li> 
           <li>filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量</li> 
           <li>filter_input - 获取一个输入变量，并对它进行过滤</li> 
           <li>filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤</li> 
          </ul> 
          <p>在下面的实例中，我们用 filter_var() 函数验证了一个整数：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $int = 123;
           <br /> if(!filter_var($int, FILTER_VALIDATE_INT))
           <br /> {
           <br /> echo(&quot;Integer is not valid&quot;);
           <br /> }
           <br /> else
           <br /> {
           <br /> echo(&quot;Integer is valid&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>上面的代码使用了 &quot;FILTER_VALIDATE_INT&quot; 过滤器来过滤变量。由于这个整数是合法的，因此上面的代码将输出：&quot;Integer is valid&quot;。 如果我们尝试使用一个非整数的变量（比如 &quot;123abc&quot;），则将输出：&quot;Integer is not valid&quot;。</p> 
          <h2>Validating 和 Sanitizing</h2> 
          <p>有两种过滤器：<br /> Validating 过滤器：</p> 
          <ul> 
           <li>用于验证用户输入</li> 
           <li>严格的格式规则（比如 URL 或 E-Mail 验证）</li> 
           <li>如果成功则返回预期的类型，如果失败则返回 FALSE</li> 
          </ul> 
          <p>Sanitizing 过滤器：</p> 
          <ul> 
           <li>用于允许或禁止字符串中指定的字符Are used to allow or disallow specified characters in a string</li> 
           <li>无数据格式规则</li> 
           <li>始终返回字符串</li> 
          </ul> 
          <h2>选项和标志</h2> 
          <p>选项和标志用于向指定的过滤器添加额外的过滤选项。<br /> 不同的过滤器有不同的选项和标志。<br /> 在下面的实例中，我们用 filter_var() 和 &quot;min_range&quot; 以及 &quot;max_range&quot; 选项验证了一个整数：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $var=300;
           <br /> $int_options = array(
           <br /> &quot;options&quot;=&gt;array
           <br /> (
           <br /> &quot;min_range&quot;=&gt;0,
           <br /> &quot;max_range&quot;=&gt;256
           <br /> )
           <br /> );
           <br /> if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
           <br /> {
           <br /> echo(&quot;Integer is not valid&quot;);
           <br /> }
           <br /> else
           <br /> {
           <br /> echo(&quot;Integer is valid&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>就像上面的代码一样，选项必须放入一个名为 &quot;options&quot; 的相关数组中。如果使用标志，则不需在数组内。<br /> 由于整数是 &quot;300&quot;，它不在指定的范围内，以上代码的输出将是 &quot;Integer is not valid&quot;。</p> 
          <h2>验证输入</h2> 
          <p>让我们试着验证来自表单的输入。<br /> 我们需要做的第一件事情是确认是否存在我们正在查找的输入数据。<br /> 然后我们用 filter_input() 函数过滤输入的数据。<br /> 在下面的实例中，输入变量 &quot;email&quot; 被传到 PHP 页面：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> if(!filter_has_var(INPUT_GET, &quot;email&quot;))
           <br /> {
           <br /> echo(&quot;Input type does not exist&quot;);
           <br /> }
           <br /> else
           <br /> {
           <br /> if (!filter_input(INPUT_GET, &quot;email&quot;, FILTER_VALIDATE_EMAIL))
           <br /> {
           <br /> echo &quot;E-Mail is not valid&quot;;
           <br /> }
           <br /> else
           <br /> {
           <br /> echo &quot;E-Mail is valid&quot;;
           <br /> }
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例解释</h2> 
          <p>上面的实例有一个通过 &quot;GET&quot; 方法传送的输入变量 (email)：</p> 
          <ul> 
           <li>检测是否存在 &quot;GET&quot; 类型的 &quot;email&quot; 输入变量</li> 
           <li>如果存在输入变量，检测它是否是有效的 e-mail 地址</li> 
          </ul> 
          <h2>净化输入</h2> 
          <p>让我们试着清理一下从表单传来的 URL。<br /> 首先，我们要确认是否存在我们正在查找的输入数据。<br /> 然后，我们用 filter_input() 函数来净化输入数据。<br /> 在下面的实例中，输入变量 &quot;url&quot; 被传到 PHP 页面：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> if(!filter_has_var(INPUT_POST, &quot;url&quot;))
           <br /> {
           <br /> echo(&quot;Input type does not exist&quot;);
           <br /> }
           <br /> else
           <br /> {
           <br /> $url = filter_input(INPUT_POST,
           <br /> &quot;url&quot;, FILTER_SANITIZE_URL);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例解释</h2> 
          <p>上面的实例有一个通过 &quot;POST&quot; 方法传送的输入变量 (url)：</p> 
          <ul> 
           <li>检测是否存在 &quot;POST&quot; 类型的 &quot;url&quot; 输入变量</li> 
           <li>如果存在此输入变量，对其进行净化（删除非法字符），并将其存储在 $url 变量中</li> 
          </ul> 
          <h2>过滤多个输入</h2> 
          <p>表单通常由多个输入字段组成。为了避免对 filter_var 或 filter_input 函数重复调用，我们可以使用 filter_var_array 或 the filter_input_array 函数。<br /> 在本例中，我们使用 filter_input_array() 函数来过滤三个 GET 变量。接收到的 GET 变量是一个名字、一个年龄以及一个 e-mail 地址：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $filters = array
           <br /> (
           <br /> &quot;name&quot; =&gt; array
           <br /> (
           <br /> &quot;filter&quot;=&gt;FILTER_SANITIZE_STRING
           <br /> ),
           <br /> &quot;age&quot; =&gt; array
           <br /> (
           <br /> &quot;filter&quot;=&gt;FILTER_VALIDATE_INT,
           <br /> &quot;options&quot;=&gt;array
           <br /> (
           <br /> &quot;min_range&quot;=&gt;1,
           <br /> &quot;max_range&quot;=&gt;120
           <br /> )
           <br /> ),
           <br /> &quot;email&quot;=&gt; FILTER_VALIDATE_EMAIL
           <br /> );
           <br /> $result = filter_input_array(INPUT_GET, $filters);
           <br /> if (!$result[&quot;age&quot;])
           <br /> {
           <br /> echo(&quot;Age must be a number between 1 and 120.
           <br />&quot;);
           <br /> }
           <br /> elseif(!$result[&quot;email&quot;])
           <br /> {
           <br /> echo(&quot;E-Mail is not valid.
           <br />&quot;);
           <br /> }
           <br /> else
           <br /> {
           <br /> echo(&quot;User input is valid&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例解释</h2> 
          <p>上面的实例有三个通过 &quot;GET&quot; 方法传送的输入变量 (name、age 和 email)：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>设置一个数组，其中包含了输入变量的名称和用于指定的输入变量的过滤器</li> 
           <li>调用 filter_input_array() 函数，参数包括 GET 输入变量及刚才设置的数组</li> 
           <li>检测 $result 变量中的 &quot;age&quot; 和 &quot;email&quot; 变量是否有非法的输入。（如果存在非法输入，在使用 filter_input_array() 函数之后，输入变量为 FALSE。）</li> 
          </ol> 
          <p>filter_input_array() 函数的第二个参数可以是数组或单一过滤器的 ID。<br /> 如果该参数是单一过滤器的 ID，那么这个指定的过滤器会过滤输入数组中所有的值。<br /> 如果该参数是一个数组，那么此数组必须遵循下面的规则：</p> 
          <ul> 
           <li>必须是一个关联数组，其中包含的输入变量是数组的键（比如 &quot;age&quot; 输入变量)</li> 
           <li>此数组的值必须是过滤器的 ID ，或者是规定了过滤器、标志和选项的数组</li> 
          </ul> 
          <h2>使用 Filter Callback</h2> 
          <p>通过使用 FILTER_CALLBACK 过滤器，可以调用自定义的函数，把它作为一个过滤器来使用。这样，我们就拥有了数据过滤的完全控制权。<br /> 您可以创建自己的自定义函数，也可以使用已存在的 PHP 函数。<br /> 将您准备用到的过滤器的函数，按指定选项的规定方法进行规定。在关联数组中，带有名称 &quot;options&quot;。<br /> 在下面的实例中，我们使用了一个自定义的函数把所有 &quot;_&quot; 转换为空格：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> function convertSpace($string)
           <br /> {
           <br /> return str_replace(&quot;_&quot;, &quot; &quot;, $string);
           <br /> }
           <br /> $string = &quot;Peter_is_a_great_guy!&quot;;
           <br /> echo filter_var($string, FILTER_CALLBACK,
           <br /> array(&quot;options&quot;=&gt;&quot;convertSpace&quot;));
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>上面代码的结果如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Peter is a great guy! 
          </div> 
          <h2>实例解释</h2> 
          <p>上面的实例把所有 &quot;_&quot; 转换成空格：</p> 
          <ol style="list-style-type: decimal;"> 
           <li>创建一个把 &quot;_&quot; 替换为空格的函数</li> 
           <li>调用 filter_var() 函数，它的参数是 FILTER_CALLBACK 过滤器以及包含我们的函数的数组</li> 
          </ol> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="gaoji_guolv"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>高级过滤器</h3> 
          <h2>检测一个数字是否在一个范围内</h2> 
          <p>以下实例使用了 filter_var() 函数来检测一个 INT 型的变量是否在 1 到 200 内:</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $int = 122;
           <br /> $min = 1;
           <br /> $max = 200;
           <br /> if (filter_var($int, FILTER_VALIDATE_INT, array(&quot;options&quot; =&gt; array(&quot;min_range&quot;=&gt;$min, &quot;max_range&quot;=&gt;$max))) === false) {
           <br /> echo(&quot;变量值不在合法范围内&quot;);
           <br /> } else {
           <br /> echo(&quot;变量值在合法范围内&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>检测 IPv6 地址</h2> 
          <p>以下实例使用了 filter_var() 函数来检测一个 $ip 变量是否是 IPv6 地址:</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $ip = &quot;2001:0db8:85a3:08d3:1319:8a2e:0370:7334&quot;;
           <br /> if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
           <br /> echo(&quot;$ip 是一个 IPv6 地址&quot;);
           <br /> } else {
           <br /> echo(&quot;$ip 不是一个 IPv6 地址&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>检测 URL - 必须包含QUERY_STRING（查询字符串）</h2> 
          <p>以下实例使用了 filter_var() 函数来检测 $url 是否包含查询字符串：</p> 
          <h2>实例</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $url = &quot;http://www.runoob.com&quot;;
           <br /> if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
           <br /> echo(&quot;$url 是一个合法的 URL&quot;);
           <br /> } else {
           <br /> echo(&quot;$url 不是一个合法的 URL&quot;);
           <br /> }
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>移除 ASCII 值大于 127 的字符</h2> 
          <p>以下实例使用了 filter_var() 函数来移除字符串中 ASCII 值大于 127 的字符，同样它也能移除 HTML 标签：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $str = &quot;
           <h1>Hello World&AElig;&Oslash;&Aring;!</h1>&quot;;
           <br /> $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
           <br /> echo $newstr;
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Json"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Json</h3> 
          <h2>环境配置</h2> 
          <p>在 php5.2.0 及以上版本已经内置 JSON 扩展。</p> 
          <h2>JSON 函数</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <table> 
            <tbody>
             <tr> 
              <td width="10%">函数</td> 
              <td width="10%">描述</td> 
             </tr> 
             <tr> 
              <td>json_encode </td> 
              <td>对变量进行 JSON 编码</td> 
             </tr> 
             <tr> 
              <td>json_decode</td> 
              <td>对 JSON 格式的字符串进行解码，转换为 PHP 变量</td> 
             </tr> 
             <tr> 
              <td>json_last_error </td> 
              <td>返回最后发生的错误</td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <h2>json_encode</h2> 
          <p>PHP json_encode() 用于对变量进行 JSON 编码，该函数如果执行成功返回 JSON 数据，否则返回 FALSE 。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            string json_encode ( $value [, $options = 0 ] ) 
          </div> 
          <h2>参数</h2> 
          <ul> 
           <li>value: 要编码的值。该函数只对 UTF-8 编码的数据有效。</li> 
           <li>options:由以下常量组成的二进制掩码：JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_NUMERIC_CHECK,JSON_PRETTY_PRINT, JSON_UNESCAPED_SLASHES, JSON_FORCE_OBJECT</li> 
          </ul> 
          <h2>实例</h2> 
          <p>以下实例演示了如何将 PHP 数组转换为 JSON 格式数据：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $arr = array('a' =&gt; 1, 'b' =&gt; 2, 'c' =&gt; 3, 'd' =&gt; 4, 'e' =&gt; 5);
           <br /> echo json_encode($arr); ?&gt;
           <br /> 
          </div> 
          <p>以上代码执行结果为：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            {&quot;a&quot;:1,&quot;b&quot;:2,&quot;c&quot;:3,&quot;d&quot;:4,&quot;e&quot;:5} 
          </div> 
          <p>以下实例演示了如何将 PHP 对象转换为 JSON 格式数据：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> class Emp {
           <br /> public $name = &quot;&quot;;
           <br /> public $hobbies = &quot;&quot;;
           <br /> public $birthdate = &quot;&quot;;
           <br /> }
           <br /> $e = new Emp();
           <br /> $e-&gt;name = &quot;sachin&quot;;
           <br /> $e-&gt;hobbies = &quot;sports&quot;;
           <br /> $e-&gt;birthdate = date('m/d/Y h:i:s a', &quot;8/5/1974 12:20:03 p&quot;);
           <br /> $e-&gt;birthdate = date('m/d/Y h:i:s a', strtotime(&quot;8/5/1974 12:20:03&quot;));
           <br /> echo json_encode($e);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以上代码执行结果为：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            {&quot;name&quot;:&quot;sachin&quot;,&quot;hobbies&quot;:&quot;sports&quot;,&quot;birthdate&quot;:&quot;08/05/1974 12:20:03 pm&quot;} 
          </div> 
          <h2>json_decode</h2> 
          <p>PHP json_decode() 函数用于对 JSON 格式的字符串进行解码，并转换为 PHP 变量。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            mixed json_decode ($json [,$assoc = false [, $depth = 512 [, $options = 0 ]]]) 
          </div> 
          <h2>参数</h2> 
          <ul> 
           <li>json_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据</li> 
           <li>assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。</li> 
           <li>depth: 整数类型的参数，它指定递归深度</li> 
           <li>options: 二进制掩码，目前只支持 JSON_BIGINT_AS_STRING 。</li> 
          </ul> 
          <h2>实例</h2> 
          <p>以下实例演示了如何解码 JSON 数据：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $json = '{&quot;a&quot;:1,&quot;b&quot;:2,&quot;c&quot;:3,&quot;d&quot;:4,&quot;e&quot;:5}';
           <br /> var_dump(json_decode($json));
           <br /> var_dump(json_decode($json, true));
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以上代码执行结果为：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            object(stdClass)#1 (5) {
           <br /> [&quot;a&quot;] =&gt; int(1)
           <br /> [&quot;b&quot;] =&gt; int(2)
           <br /> [&quot;c&quot;] =&gt; int(3)
           <br /> [&quot;d&quot;] =&gt; int(4)
           <br /> [&quot;e&quot;] =&gt; int(5)
           <br /> }
           <br /> 
           <br /> array(5) {
           <br /> [&quot;a&quot;] =&gt; int(1)
           <br /> [&quot;b&quot;] =&gt; int(2)
           <br /> [&quot;c&quot;] =&gt; int(3)
           <br /> [&quot;d&quot;] =&gt; int(4)
           <br /> [&quot;e&quot;] =&gt; int(5)
           <br /> }
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <!--php Mysql 数据库--> 
        <div class="tab-pane fade" id="jianjie"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>PHP MySQL 简介</h3> 
           <p>通过 PHP，您可以连接和操作数据库。<br /> MySQL 是跟 PHP 配套使用的最流行的开源数据库系统。</p> 
           <h2>MySQL 是什么？</h2> 
           <ul> 
            <li>MySQL 是一种在 Web 上使用的数据库系统。</li> 
            <li>MySQL 是一种在服务器上运行的数据库系统。</li> 
            <li>MySQL 不管在小型还是大型应用程序中，都是理想的选择。</li> 
            <li>MySQL 是非常快速，可靠，且易于使用的。</li> 
            <li>MySQL 支持标准的 SQL。</li> 
            <li>MySQL 在一些平台上编译。</li> 
            <li>MySQL 是免费下载使用的。</li> 
            <li>MySQL 是由 Oracle 公司开发、发布和支持的。</li> 
            <li>MySQL 是以公司创始人 Monty Widenius's daughter: My 命名的。</li> 
           </ul> 
           <p>MySQL 中的数据存储在表中。表格是一个相关数据的集合，它包含了列和行。<br /> 在分类存储信息时，数据库非常有用。一个公司的数据库可能拥有以下表：</p> 
           <ul> 
            <li>Employees</li> 
            <li>Products</li> 
            <li>Customers</li> 
            <li>Orders</li> 
           </ul> 
           <h2>PHP + MySQL</h2> 
           <p>PHP 与 MySQL 结合是跨平台的。（您可以在 Windows 上开发，在 Unix 平台上应用。）</p> 
           <h2>查询</h2> 
           <p>查询是一种询问或请求。<br /> 通过 MySQL，我们可以向数据库查询具体的信息，并得到返回的记录集。<br /> 请看下面的查询（使用标准 SQL）：</p> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                     border-radius: 15px;padding:30px;">
             SELECT LastName FROM Employees 
           </div> 
           <p>上面的查询选取了 &quot;Employees&quot; 表中 &quot;LastName&quot; 列的所有数据。</p> 
           <h2>下载 MySQL 数据库</h2> 
           <p>如果您的 PHP 服务器没有 MySQL 数据库，可以在此免费下载 MySQL： http://www.mysql.com。</p> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="lianjie"> 
         <div class="row"> 
          <div class="col-md-12 col-xs-12 php_center"> 
           <h3>PHP 连接 MySQL</h3> 
           <p>PHP 5 及以上版本建议使用以下方式连接 MySQL :</p> 
           <ul> 
            <li>MySQLi extension (&quot;i&quot; 意为 improved)</li> 
            <li>PDO (PHP Data Objects)</li> 
           </ul> 
           <p>在 PHP 早起版本中我们使用 MySQL 扩展。但该扩展在 2012 年开始不建议使用。</p> 
           <h2>我是该用 MySQLi ，还是 PDO?</h2> 
           <p>如果你需要一个简短的回答，即 &quot;你习惯哪个就用哪个&quot;。<br /> MySQLi 和 PDO 有它们自己的优势：<br /> PDO 应用在 12 种不同数据库中， MySQLi 只针对 MySQL 数据库。<br /> 所以，如果你的项目需要在多种数据库中切换，建议使用 PDO ，这样你只需要修改连接字符串和部门查询语句即可。 使用 MySQLi, 如果不同数据库，你需要重新所有代码，包括查询。<br /> 两者都是面向对象, 但 MySQLi 还提供了 API 接口。<br /> 两者都支持预处理语句。 预处理语句可以防止 SQL 注入，对于 web 项目的安全性是非常重要的。</p> 
           <h2>MySQLi 和 PDO 连接 MySQL 实例</h2> 
           <p>在本章节及接下来的章节中，我们会使用以下三种方式来演示 PHP 操作 MySQL:</p> 
           <ul> 
            <li>MySQLi (面向对象)</li> 
            <li>MySQLi (面向过程)</li> 
            <li>PDO</li> 
           </ul> 
           <h2>MySQLi Installation</h2> 
           <p>Linux 和 Windows: 在 php5 mysql 包安装时 MySQLi 扩展多数情况下是自动安装的。<br /> 安装详细信息，请查看： http://php.net/manual/en/mysqli.installation.php </p> 
           <h2>PDO 安装</h2> 
           <p>For 安装详细信息，请查看： http://php.net/manual/en/pdo.installation.php </p> 
           <h2>连接 MySQL</h2> 
           <p>在我们访问 MySQL 数据库前，我们需要先连接到数据库服务器：</p> 
           <h2>实例 (MySQLi - 面向对象)</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                    border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $servername = &quot;localhost&quot;;
            <br /> $username = &quot;username&quot;;
            <br /> $password = &quot;password&quot;;
            <br /> // 创建连接
            <br /> $conn = new mysqli($servername, $username, $password);
            <br /> // 检测连接
            <br /> if ($conn-&gt;connect_error) {
            <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
            <br /> }
            <br /> echo &quot;Connected successfully&quot;;
            <br /> ?&gt;
            <br /> 
           </div> 
           <p>注意在以上面向对象的实例中 $connect_error 是在 PHP 5.2.9 和 5.3.0 中添加的。如果你需要兼容更早版本 请使用以下代码替换: <br /> // 检测连接<br /> if (mysqli_connect_error()) {<br /> die(&quot;Database connection failed: &quot; . mysqli_connect_error());<br /> }<br /> </p> 
           <h2>实例 (MySQLi - 面向过程)</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                    border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $servername = &quot;localhost&quot;;
            <br /> $username = &quot;username&quot;;
            <br /> $password = &quot;password&quot;;
            <br /> // 创建连接
            <br /> $conn = mysqli_connect($servername, $username, $password);
            <br /> // 检测连接
            <br /> if (!$conn) {
            <br /> die(&quot;Connection failed: &quot; . mysqli_connect_error());
            <br /> }
            <br /> echo &quot;Connected successfully&quot;;
            <br /> ?&gt;
            <br /> 
           </div> 
           <h2>实例 (PDO)</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                    border-radius: 15px;padding:30px;">
             &lt;?php
            <br /> $servername = &quot;localhost&quot;;
            <br /> $username = &quot;username&quot;;
            <br /> $password = &quot;password&quot;;
            <br /> try {
            <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=myDB&quot;, $username, $password);
            <br /> echo &quot;Connected successfully&quot;;
            <br /> }
            <br /> catch(PDOException $e)
            <br /> {
            <br /> echo $e-&gt;getMessage();
            <br /> }
            <br /> ?&gt;
            <br /> 
           </div> 
           <p>注意在以上 PDO 实例中我们已经指定了数据库 (myDB)。PDO 在连接过程需要设置数据库名。如果没有指定，则会抛出异常。</p> 
           <h2>关闭连接</h2> 
           <p>连接在脚本执行完后会自动关闭。你也可以使用以下代码来关闭连接：</p> 
           <h2>实例 (MySQLi - 面向对象)</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                    border-radius: 15px;padding:30px;">
             $conn-&gt;close(); 
           </div> 
           <h2>实例 (MySQLi - 面向过程)</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                    border-radius: 15px;padding:30px;">
             mysqli_close($conn); 
           </div> 
           <h2>实例 (PDO)</h2> 
           <div style="border: 1px solid #bebebe;background-color: #fff;
                                    border-radius: 15px;padding:30px;">
             $conn = null; 
           </div> 
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="create_DB"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>创建数据库</h3> 
          <p>数据库存有一个或多个表。<br /> 你需要 CREATE 权限来创建或删除 MySQL 数据库。</p> 
          <h2>使用 MySQLi 和 PDO 创建 MySQL 数据库</h2> 
          <p>CREATE DATABASE 语句用于在 MySQL 中创建数据库。<br /> 在下面的实例中，创建了一个名为 &quot;myDB&quot; 的数据库：</p> 
          <h2>实例 (MySQLi - 面向对象)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> // 创建连接
           <br /> $conn = new mysqli($servername, $username, $password);
           <br /> // 检测连接
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> }
           <br /> // Create database
           <br /> $sql = &quot;CREATE DATABASE myDB&quot;;
           <br /> if ($conn-&gt;query($sql) === TRUE) {
           <br /> echo &quot;Database created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error creating database: &quot; . $conn-&gt;error;
           <br /> }
           <br /> $conn-&gt;close();
           <br /> ?&gt; 
          </div> 
          <p>注意： 当你创建一个新的数据库时，你必须为 mysqli 对象指定三个参数 (servername, username 和 password)。<br /> Tip: 如果你使用其他端口（默认为3306），为数据库参数添加空字符串，如: new mysqli(&quot;localhost&quot;, &quot;username&quot;, &quot;password&quot;, &quot;&quot;, port)</p> 
          <h2>实例 (MySQLi Procedural)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> // 创建连接
           <br /> $conn = mysqli_connect($servername, $username, $password);
           <br /> // 检测连接
           <br /> if (!$conn) {
           <br /> die(&quot;Connection failed: &quot; . mysqli_connect_error());
           <br /> }
           <br /> // Create database
           <br /> $sql = &quot;CREATE DATABASE myDB&quot;;
           <br /> if (mysqli_query($conn, $sql)) {
           <br /> echo &quot;Database created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error creating database: &quot; . mysqli_error($conn);
           <br /> } 
           <br /> mysqli_close($conn);
           <br /> ?&gt; 
          </div> 
          <p>注意： 以下使用 PDO 实例创建数据库 &quot;myDBPDO&quot;:</p> 
          <h2>实例 (PDO)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> try {
           <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=myDB&quot;, $username, $password);
           <br /> // 设置 PDO 错误模式为异常
           <br /> $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           <br /> $sql = &quot;CREATE DATABASE myDBPDO&quot;;
           <br /> // 使用 exec() ，因为没有结果返回
           <br /> $conn-&gt;exec($sql);
           <br /> echo &quot;Database created successfully&lt;br&gt;&quot;;
           <br /> }
           <br /> catch(PDOException $e)
           <br /> {
           <br /> echo $sql . &quot;
           <br />&quot; . $e-&gt;getMessage();
           <br /> }
           <br /> $conn = null;
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>提示： 使用 PDO 的最大好处是在数据库查询过程出现问题时可以使用异常类来 处理问题。如果 try{ } 代码块出现异常， 脚本会停止执行并会跳到第一个 catch(){ } 代码块执行代码。 在以上捕获的代码块中我们输出了 SQL 语句并生成错误信息。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="create_table"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>创建数据表</h3> 
          <p>一个数据表有一个唯一名称，并有行和列组成。</p> 
          <h2>使用 MySQLi 和 PDO 创建 MySQL 表</h2> 
          <p>CREATE TABLE 语句用于创建 MySQL 表。<br /> 我们将创建一个名为 &quot;MyGuests&quot; 的表，有 5 个列： &quot;id&quot;, &quot;firstname&quot;, &quot;lastname&quot;, &quot;email&quot; 和 &quot;reg_date&quot;:</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            CREATE TABLE MyGuests (
           <br /> id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           <br /> firstname VARCHAR(30) NOT NULL,
           <br /> lastname VARCHAR(30) NOT NULL,
           <br /> email VARCHAR(50),
           <br /> reg_date TIMESTAMP
           <br /> )
           <br /> 
          </div> 
          <p>上表中的注意事项: <br /> 数据类型指定列可以存储什么类型的数据。完整的数据类型请参考我们的 数据类型参考手册。<br /> 在设置了数据类型后，你可以为没个列指定其他选项的属性：</p> 
          <ul> 
           <li>NOT NULL - 没一行都必须含有值（不能为空），null 值是不允许的。</li> 
           <li>DEFAULT value - 设置默认值</li> 
           <li>UNSIGNED - 使用无符号数值类型，0 及正数</li> 
           <li>AUTO INCREMENT - 设置 MySQL 字段的值在新增记录时每次自动增长 1</li> 
           <li>PRIMARY KEY - 设置数据表中每条记录的唯一标识。 通常列的 PRIMARY KEY 设置为 ID 数值，与 AUTO_INCREMENT 一起使用。</li> 
          </ul> 
          <p>每个表都应该有一个主键(本列为 &quot;id&quot; 列)，主键必须包含唯一的值。<br /> 以下实例展示了如何在 PHP 中创建表：</p> 
          <h2>实例 (MySQLi - 面向对象)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建连接
           <br /> $conn = new mysqli($servername, $username, $password, $dbname);
           <br /> // 检测连接
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> }
           <br /> // sql to create table
           <br /> $sql = &quot;CREATE TABLE MyGuests (
           <br /> id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           <br /> firstname VARCHAR(30) NOT NULL,
           <br /> lastname VARCHAR(30) NOT NULL,
           <br /> email VARCHAR(50),
           <br /> reg_date TIMESTAMP
           <br /> )&quot;;
           <br /> if ($conn-&gt;query($sql) === TRUE) {
           <br /> echo &quot;Table MyGuests created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error creating table: &quot; . $conn-&gt;error;
           <br /> }
           <br /> $conn-&gt;close();
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例 (MySQLi - 面向过程)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建连接
           <br /> $conn = mysqli_connect($servername, $username, $password, $dbname);
           <br /> // 检测连接
           <br /> if (!$conn) {
           <br /> die(&quot;Connection failed: &quot; . mysqli_connect_error());
           <br /> }
           <br /> // sql to create table
           <br /> $sql = &quot;CREATE TABLE MyGuests (
           <br /> id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           <br /> firstname VARCHAR(30) NOT NULL,
           <br /> lastname VARCHAR(30) NOT NULL,
           <br /> email VARCHAR(50),
           <br /> reg_date TIMESTAMP
           <br /> )&quot;;
           <br /> if (mysqli_query($conn, $sql)) {
           <br /> echo &quot;Table MyGuests created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error creating table: &quot; . mysqli_error($conn);
           <br /> } 
           <br /> mysqli_close($conn);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例 (PDO)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDBPDO&quot;;
           <br /> try {
           <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=$dbname&quot;, $username, $password);
           <br /> // set the PDO error mode to exception
           <br /> $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           <br /> // sql to create table
           <br /> $sql = &quot;CREATE TABLE MyGuests (
           <br /> id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           <br /> firstname VARCHAR(30) NOT NULL,
           <br /> lastname VARCHAR(30) NOT NULL,
           <br /> email VARCHAR(50),
           <br /> reg_date TIMESTAMP
           <br /> )&quot;;
           <br /> // use exec() because no results are returned
           <br /> $conn-&gt;exec($sql);
           <br /> echo &quot;Table MyGuests created successfully&quot;;
           <br /> }
           <br /> catch(PDOException $e)
           <br /> {
           <br /> echo $sql . &quot;
           <br />&quot; . $e-&gt;getMessage();
           <br /> }
           <br /> $conn = null;
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="insert_data"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>插入数据</h3> 
          <p>在创建完数据库和表后，我们可以向表中添加数据。<br /> 以下为一些语法规则：</p> 
          <ul> 
           <li>PHP 中 SQL 查询语句必须使用引号</li> 
           <li>在 SQL 查询语句中的字符串值必须加引号</li> 
           <li>数值的值不需要引号</li> 
           <li>NULL 值不需要引号</li> 
          </ul> 
          <p>INSERT INTO 语句通常用于向 MySQL 表添加新的记录：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            INSERT INTO table_name (column1, column2, column3,...)
           <br /> VALUES (value1, value2, value3,...) 
          </div> 
          <p>在前面的几个章节中我们已经创建了表 &quot;MyGuests&quot;，表字段有: &quot;id&quot;, &quot;firstname&quot;, &quot;lastname&quot;, &quot;email&quot; 和 &quot;reg_date&quot;。 现在，让我们开始向表填充数据。<br /> 注意： 如果列设置 AUTO_INCREMENT (如 &quot;id&quot; 列) 或 TIMESTAMP (如 &quot;reg_date&quot; 列),，我们就不需要在 SQL 查询语句中指定值； MySQL 会自动为该列添加值。<br /> 以下实例向 &quot;MyGuests&quot; 表添加了新的记录:</p> 
          <h2>实例 (MySQLi - 面向对象)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建连接
           <br /> $conn = new mysqli($servername, $username, $password, $dbname);
           <br /> // 检测连接
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> }
           <br /> $sql = &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('John', 'Doe', 'john@example.com')&quot;;
           <br /> if ($conn-&gt;query($sql) === TRUE) {
           <br /> echo &quot;New record created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error: &quot; . $sql . &quot;
           <br />&quot; . $conn-&gt;error;
           <br /> }
           <br /> $conn-&gt;close();
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例 (MySQLi - 面向过程)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建连接
           <br /> $conn = mysqli_connect($servername, $username, $password, $dbname);
           <br /> // 检测连接
           <br /> if (!$conn) {
           <br /> die(&quot;Connection failed: &quot; . mysqli_connect_error());
           <br /> }
           <br /> $sql = &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('John', 'Doe', 'john@example.com')&quot;;
           <br /> if (mysqli_query($conn, $sql)) {
           <br /> echo &quot;New record created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error: &quot; . $sql . &quot;
           <br />&quot; . mysqli_error($conn);
           <br /> }
           <br /> mysqli_close($conn);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例 (PDO)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDBPDO&quot;;
           <br /> try {
           <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=$dbname&quot;, $username, $password);
           <br /> // set the PDO error mode to exception
           <br /> $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           <br /> $sql = &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('John', 'Doe', 'john@example.com')&quot;;
           <br /> // use exec() because no results are returned
           <br /> $conn-&gt;exec($sql);
           <br /> echo &quot;New record created successfully&quot;;
           <br /> }
           <br /> catch(PDOException $e)
           <br /> {
           <br /> echo $sql . &quot;
           <br />&quot; . $e-&gt;getMessage();
           <br /> }
           <br /> $conn = null;
           <br /> ?&gt;
           <br /> 
          </div> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="insert_duotiao"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>插入多条数据</h3> 
          <p>mysqli_multi_query() 函数可用来执行多条SQL语句。<br /> 以下实例向 &quot;MyGuests&quot; 表添加了三条新的记录:</p> 
          <h2>实例 (MySQLi - 面向对象)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建链接
           <br /> $conn = new mysqli($servername, $username, $password, $dbname);
           <br /> // 检查链接
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> }
           <br /> $sql = &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('John', 'Doe', 'john@example.com');&quot;;
           <br /> $sql .= &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('Mary', 'Moe', 'mary@example.com');&quot;;
           <br /> $sql .= &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('Julie', 'Dooley', 'julie@example.com')&quot;;
           <br /> if ($conn-&gt;multi_query($sql) === TRUE) {
           <br /> echo &quot;New records created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error: &quot; . $sql . &quot;
           <br />&quot; . $conn-&gt;error;
           <br /> }
           <br /> $conn-&gt;close();
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>请注意，每个SQL语句必须用分号隔开。</p> 
          <h2>实例 (MySQLi - 面向过程)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建链接
           <br /> $conn = mysqli_connect($servername, $username, $password, $dbname);
           <br /> // 检查链接
           <br /> if (!$conn) {
           <br /> die(&quot;Connection failed: &quot; . mysqli_connect_error());
           <br /> } 
           <br /> $sql = &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('John', 'Doe', 'john@example.com');&quot;;
           <br /> $sql .= &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('Mary', 'Moe', 'mary@example.com');&quot;;
           <br /> $sql .= &quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('Julie', 'Dooley', 'julie@example.com')&quot;;
           <br /> if (mysqli_multi_query($conn, $sql)) {
           <br /> echo &quot;New records created successfully&quot;;
           <br /> } else {
           <br /> echo &quot;Error: &quot; . $sql . &quot;
           <br />&quot; . mysqli_error($conn);
           <br /> }
           <br /> mysqli_close($conn);
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>实例 (PDO)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDBPDO&quot;;
           <br /> try {
           <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=$dbname&quot;, $username, $password);
           <br /> // set the PDO error mode to exception
           <br /> $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           <br /> // 开始事务
           <br /> $conn-&gt;beginTransaction();
           <br /> // SQL 语句
           <br /> $conn-&gt;exec(&quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('John', 'Doe', 'john@example.com')&quot;);
           <br /> $conn-&gt;exec(&quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('Mary', 'Moe', 'mary@example.com')&quot;);
           <br /> $conn-&gt;exec(&quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES ('Julie', 'Dooley', 'julie@example.com')&quot;);
           <br /> // commit the transaction
           <br /> $conn-&gt;commit();
           <br /> echo &quot;New records created successfully&quot;;
           <br /> }
           <br /> catch(PDOException $e)
           <br /> {
           <br /> // roll back the transaction if something failed
           <br /> $conn-&gt;rollback();
           <br /> echo $sql . &quot;&lt;br&gt;&quot; . $e-&gt;getMessage();
           <br /> }
           <br /> $conn = null;
           <br /> ?&gt;
           <br /> 
          </div> 
          <h2>使用预处理语句</h2> 
          <p>mysqli 扩展提供了第二种方式用于插入语句。<br /> 我们可以预处理语句及绑定参数。<br /> mysql 扩展可以不带数据发送语句或查询到mysql数据库。 你可以向列关联或 &quot;绑定&quot; 变量。</p> 
          <h2>Example (MySQLi 使用预处理语句)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // Create connection
           <br /> $conn = new mysqli($servername, $username, $password, $dbname);
           <br /> // Check connection
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> } else {
           <br /> $sql = &quot;INSERT INTO MyGuests VALUES(?, ?, ?)&quot;;
           <br /> // 为 mysqli_stmt_prepare() 初始化 statement 对象
           <br /> $stmt = mysqli_stmt_init($conn);
           <br /> //预处理语句
           <br /> if (mysqli_stmt_prepare($stmt, $sql)) {
           <br /> // 绑定参数
           <br /> mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);
           <br /> // 设置参数并执行
           <br /> $firstname = 'John';
           <br /> $lastname = 'Doe';
           <br /> $email = 'john@example.com';
           <br /> mysqli_stmt_execute($stmt); 
           <br /> $firstname = 'Mary';
           <br /> $lastname = 'Moe';
           <br /> $email = 'mary@example.com';
           <br /> mysqli_stmt_execute($stmt);
           <br /> $firstname = 'Julie';
           <br /> $lastname = 'Dooley';
           <br /> $email = 'julie@example.com';
           <br /> mysqli_stmt_execute($stmt);
           <br /> }
           <br /> } 
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>我们可以看到以上实例中使用模块化来处理问题。我们可以通过创建代码块实现更简单的读取和管理。<br /> 注意参数的绑定。让我们看下 mysqli_stmt_bind_param() 中的代码：<br /> mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);<br /> 该函数绑定参数查询并将参数传递给数据库。第二个参数是 &quot;sss&quot; 。以下列表展示了参数的类型。 s 字符告诉 mysql 参数是字符串。<br /> This argument may be one of four types:</p> 
          <ul> 
           <li>i - integer</li> 
           <li>d - double</li> 
           <li>s - string</li> 
           <li>b - BLOB</li> 
          </ul> 
          <p>每个参数必须指定类型，来保证数据的安全性。通过类型的判断可以减少SQL注入漏洞带来的风险。</p> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="yuchuli"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>预处理语句</h3> 
          <p>预处理语句对于防止 MySQL 注入是非常有用的。</p> 
          <h2>预处理语句及绑定参数</h2> 
          <p>预处理语句用于执行多个相同的 SQL 语句，并且执行效率更高。<br /> 预处理语句的工作原理如下：</p> 
          <ul> 
           <li>预处理：创建 SQL 语句模板并发送到数据库。预留的值使用参数 &quot;?&quot; 标记 。例如：INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?) </li> 
           <li>数据库解析，编译，对SQL语句模板执行查询优化，并存储结果不输出</li> 
           <li>执行：最后，将应用绑定的值传递给参数（&quot;?&quot; 标记），数据库执行语句。应用可以多次执行语句，如果参数的值不一样。</li> 
          </ul> 
          <p>相比于直接执行SQL语句，预处理语句有两个主要优点：</p> 
          <ul> 
           <li>预处理语句大大减少了分析时间，只做了一次查询（虽然语句多次执行）</li> 
           <li>绑定参数减少了服务器带宽，你只需要发送查询的参数，而不是整个语句</li> 
           <li>预处理语句针对SQL注入是非常有用的，因为 参数值发送后使用不同的协议，保证了数据的合法性。</li> 
          </ul> 
          <h2>MySQLi 预处理语句 </h2> 
          <p>以下实例在 MySQLi 中使用了预处理语句，并绑定了相应的参数:</p> 
          <h2>实例 (MySQLi 使用预处理语句)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建连接
           <br /> $conn = new mysqli($servername, $username, $password, $dbname);
           <br /> // 检测连接
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> }
           <br /> // prepare and bind
           <br /> $stmt = $conn-&gt;prepare(&quot;INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)&quot;);
           <br /> $stmt-&gt;bind_param(&quot;sss&quot;, $firstname, $lastname, $email);
           <br /> // 设置参数并执行
           <br /> $firstname = &quot;John&quot;;
           <br /> $lastname = &quot;Doe&quot;;
           <br /> $email = &quot;john@example.com&quot;;
           <br /> $stmt-&gt;execute();
           <br /> $firstname = &quot;Mary&quot;;
           <br /> $lastname = &quot;Moe&quot;;
           <br /> $email = &quot;mary@example.com&quot;;
           <br /> $stmt-&gt;execute();
           <br /> $firstname = &quot;Julie&quot;;
           <br /> $lastname = &quot;Dooley&quot;;
           <br /> $email = &quot;julie@example.com&quot;;
           <br /> $stmt-&gt;execute();
           <br /> echo &quot;New records created successfully&quot;;
           <br /> $stmt-&gt;close();
           <br /> $conn-&gt;close();
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>解析以下实例的每行代码:</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &quot;INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)&quot; 
          </div> 
          <p>在 SQL 语句中，我们使用了问号 (?)，在此我们可以将问号替换为整型，字符串，双精度浮点型和布尔值。<br /> 接下来，让我们来看下 bind_param() 函数：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $stmt-&gt;bind_param(&quot;sss&quot;, $firstname, $lastname, $email); 
          </div> 
          <p>该函数绑定了 SQL 的参数，且告诉数据库参数的值。 &quot;sss&quot; 参数列处理其余参数的数据类型。s 字符告诉数据库该参数为字符串。 参数有以下四种类型:</p> 
          <ul> 
           <li>i - integer（整型）</li> 
           <li>d - double（双精度浮点型）</li> 
           <li>s - string（字符串）</li> 
           <li>b - BLOB（布尔值）</li> 
          </ul> 
          <p>每个参数都需要指定类型。<br /> 通过告诉数据库参数的数据类型，可以降低 SQL 注入的风险。<br /> 注意： 如果你想插入其他数据（用户输入），对数据的验证是非常重要的。</p> 
          <h2>PDO 中的预处理语句</h2> 
          <p>以下实例我们在 PDO 中使用了预处理语句并绑定参数:</p> 
          <h2>实例 (PDO 使用预处理语句)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDBPDO&quot;;
           <br /> try {
           <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=$dbname&quot;, $username, $password);
           <br /> // 设置 PDO 错误模式为异常
           <br /> $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           <br /> // 预处理 SQL 并绑定参数
           <br /> $stmt = $conn-&gt;prepare(&quot;INSERT INTO MyGuests (firstname, lastname, email)
           <br /> VALUES (:firstname, :lastname, :email)&quot;);
           <br /> $stmt-&gt;bindParam(':firstname', $firstname);
           <br /> $stmt-&gt;bindParam(':lastname', $lastname);
           <br /> $stmt-&gt;bindParam(':email', $email);
           <br /> // 插入行
           <br /> $firstname = &quot;John&quot;;
           <br /> $lastname = &quot;Doe&quot;;
           <br /> $email = &quot;john@example.com&quot;;
           <br /> $stmt-&gt;execute();
           <br /> // 插入其他行
           <br /> $firstname = &quot;Mary&quot;;
           <br /> $lastname = &quot;Moe&quot;;
           <br /> $email = &quot;mary@example.com&quot;;
           <br /> $stmt-&gt;execute();
           <br /> // 插入其他行
           <br /> $firstname = &quot;Julie&quot;;
           <br /> $lastname = &quot;Dooley&quot;;
           <br /> $email = &quot;julie@example.com&quot;;
           <br /> $stmt-&gt;execute();
           <br /> echo &quot;New records created successfully&quot;;
           <br /> }
           <br /> catch(PDOException $e)
           <br /> {
           <br /> echo $sql . &quot;&lt;br&gt;&quot; . $e-&gt;getMessage();
           <br /> }
           <br /> $conn = null;
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="duqu"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>读取数据</h3> 
          <h2>从 MySQL 数据库读取数据</h2> 
          <p>SELECT 语句用于从数据表中读取数据:</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            SELECT column_name(s) FROM table_name 
          </div> 
          <p>以下实例中我们从表 MyGuests 读取了 id, firstname 和 lastname 列的数据并显示在页面上：</p> 
          <h2>实例 (MySQLi - 面向对象)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDB&quot;;
           <br /> // 创建连接
           <br /> $conn = new mysqli($servername, $username, $password, $dbname);
           <br /> // 检测连接
           <br /> if ($conn-&gt;connect_error) {
           <br /> die(&quot;Connection failed: &quot; . $conn-&gt;connect_error);
           <br /> }
           <br /> $sql = &quot;SELECT id, firstname, lastname FROM MyGuests&quot;;
           <br /> $result = $conn-&gt;query($sql); 
           <br /> if ($result-&gt;num_rows &gt; 0) {
           <br /> // 输出每行数据
           <br /> while($row = $result-&gt;fetch_assoc()) {
           <br /> echo &quot;&lt;br&gt; id: &quot;. $row[&quot;id&quot;]. &quot; - Name: &quot;. $row[&quot;firstname&quot;]. &quot; &quot; . $row[&quot;lastname&quot;];
           <br /> }
           <br /> } else {
           <br /> echo &quot;0 results&quot;;
           <br /> }
           <br /> $conn-&gt;close();
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以下实例读取了 MyGuests 表的所有记录并显示在 HTML 表格中：</p> 
          <h2>实例 (PDO)</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> echo &quot;&lt;table style='border: solid 1px black;'&gt;&quot;;
           <br /> echo &quot;&lt;tr&gt;&lt;th&gt;Id&lt;/th&gt;&lt;th&gt;Firstname&lt;/th&gt;&lt;th&gt;Lastname&lt;/th&gt;&lt;th&gt;Email&lt;/th&gt;&lt;th&gt;Reg date&lt;/th&gt;&lt;/tr&gt;&quot;;
           <br /> class TableRows extends RecursiveIteratorIterator {
           <br /> function __construct($it) {
           <br /> parent::__construct($it, self::LEAVES_ONLY);
           <br /> }
           <br /> function current() {
           <br /> return &quot;&lt;td style='width: 150px; border: 1px solid black;'&gt;&quot; . parent::current(). &quot;&lt;/td&gt;&quot;;
           <br /> }
           <br /> function beginChildren() {
           <br /> echo &quot;&lt;tr&gt;&quot;;
           <br /> }
           <br /> function endChildren() {
           <br /> echo &quot;&lt;/tr&gt;&quot; . &quot;\n&quot;;
           <br /> }
           <br /> }
           <br /> $servername = &quot;localhost&quot;;
           <br /> $username = &quot;username&quot;;
           <br /> $password = &quot;password&quot;;
           <br /> $dbname = &quot;myDBPDO&quot;;
           <br /> try {
           <br /> $conn = new PDO(&quot;mysql:host=$servername;dbname=$dbname&quot;, $username, $password);
           <br /> $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           <br /> $stmt = $conn-&gt;prepare(&quot;SELECT * FROM MyGuests&quot;);
           <br /> $stmt-&gt;execute();
           <br /> // 设置结果集为关联数组
           <br /> $result = $stmt-&gt;setFetchMode(PDO::FETCH_ASSOC); 
           <br /> foreach(new TableRows(new RecursiveArrayIterator($stmt-&gt;fetchAll())) as $k=&gt;$v) {
           <br /> echo $v;
           <br /> }
           <br /> $dsn = null;
           <br /> }
           <br /> catch(PDOException $e)
           <br /> {
           <br /> echo &quot;Error: &quot; . $e-&gt;getMessage();
           <br /> }
           <br /> $conn = null;
           <br /> echo &quot;&lt;/table&gt;&quot;;
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="where"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>where</h3> 
          <p>WHERE 子句用于过滤记录。</p> 
          <h2>WHERE 子句</h2> 
          <p>WHERE 子句用于提取满足指定标准的的记录。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            SELECT column_name(s)
           <br /> FROM table_name
           <br /> WHERE column_name operator value
           <br /> 
          </div> 
          <p>为了让 PHP 执行上面的语句，我们必须使用 mysqli_query() 函数。该函数用于向 MySQL 连接发送查询或命令。</p> 
          <h2>实例</h2> 
          <p>下面的实例将从 &quot;Persons&quot; 表中选取所有 FirstName='Peter' 的行：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $con=mysqli_connect(&quot;example.com&quot;,&quot;peter&quot;,&quot;abc123&quot;,&quot;my_db&quot;);
           <br /> // Check connection
           <br /> if (mysqli_connect_errno())
           <br /> {
           <br /> echo &quot;Failed to connect to MySQL: &quot; . mysqli_connect_error();
           <br /> }
           <br /> $result = mysqli_query($con,&quot;SELECT * FROM Persons
           <br /> WHERE FirstName='Peter'&quot;);
           <br /> while($row = mysqli_fetch_array($result))
           <br /> {
           <br /> echo $row['FirstName'] . &quot; &quot; . $row['LastName'];
           <br /> echo &quot;&lt;br&gt;&quot;;
           <br /> }
           <br /> ?&gt; 
           <br /> 
          </div> 
          <p>以上代码将输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Peter Griffin 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="OrderBy"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Order By</h3> 
          <p>ORDER BY 关键词用于对记录集中的数据进行排序。</p> 
          <h2>ORDER BY 关键词</h2> 
          <p>ORDER BY 关键词用于对记录集中的数据进行排序。<br /> ORDER BY 关键词默认对记录进行升序排序。<br /> 如果你想降序排序，请使用 DESC 关键字。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            SELECT column_name(s)
           <br /> FROM table_name
           <br /> ORDER BY column_name(s) ASC|DESC
           <br /> 
          </div> 
          <h2>实例</h2> 
          <p>下面的实例选取 &quot;Persons&quot; 表中存储的所有数据，并根据 &quot;Age&quot; 列对结果进行排序：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $con=mysqli_connect(&quot;example.com&quot;,&quot;peter&quot;,&quot;abc123&quot;,&quot;my_db&quot;);
           <br /> // Check connection
           <br /> if (mysqli_connect_errno())
           <br /> {
           <br /> echo &quot;Failed to connect to MySQL: &quot; . mysqli_connect_error();
           <br /> }
           <br /> $result = mysqli_query($con,&quot;SELECT * FROM Persons ORDER BY age&quot;);
           <br /> while($row = mysqli_fetch_array($result))
           <br /> {
           <br /> echo $row['FirstName'];
           <br /> echo &quot; &quot; . $row['LastName'];
           <br /> echo &quot; &quot; . $row['Age'];
           <br /> echo &quot;&lt;br&gt;&quot;;
           <br /> }
           <br /> mysqli_close($con);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>以上结果将输出：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            Glenn Quagmire 33 
           <br /> Peter Griffin 35 
          </div> 
          <h2>根据两列进行排序</h2> 
          <p>可以根据多个列进行排序。当按照多个列进行排序时，只有第一列的值相同时才使用第二列：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            SELECT column_name(s)
           <br /> FROM table_name
           <br /> ORDER BY column1, column2
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Update"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Update</h3> 
          <p>UPDATE 语句用于中修改数据库表中的数据。</p> 
          <h2>更新数据库中的数据</h2> 
          <p>UPDATE 语句用于更新数据库表中已存在的记录。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            UPDATE table_name 
           <br /> SET column1=value, column2=value2,...
           <br /> WHERE some_column=some_value
           <br /> 
          </div> 
          <p>注释：请注意 UPDATE 语法中的 WHERE 子句。WHERE 子句规定了哪些记录需要更新。如果您想省去 WHERE 子句，所有的记录都会被更新！<br /> 为了让 PHP 执行上面的语句，我们必须使用 mysqli_query() 函数。该函数用于向 MySQL 连接发送查询或命令。</p> 
          <h2>实例</h2> 
          <p>在本教程的前面章节中，我们创建了一个名为 &quot;Persons&quot; 的表，如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <table> 
            <tbody>
             <tr> 
              <td width="10%">FirstName</td> 
              <td width="10%">LastName</td> 
              <td width="10%">Age</td> 
             </tr> 
             <tr> 
              <td>Peter</td> 
              <td>Griffin</td> 
              <td>35</td> 
             </tr> 
             <tr> 
              <td>Glenn</td> 
              <td>Quagmire</td> 
              <td>33</td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <p>下面的例子更新 &quot;Persons&quot; 表的一些数据：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $con=mysqli_connect(&quot;example.com&quot;,&quot;peter&quot;,&quot;abc123&quot;,&quot;my_db&quot;);
           <br /> // 检测连接
           <br /> if (mysqli_connect_errno())
           <br /> {
           <br /> echo &quot;Failed to connect to MySQL: &quot; . mysqli_connect_error();
           <br /> }
           <br /> mysqli_query($con,&quot;UPDATE Persons SET Age=36
           <br /> WHERE FirstName='Peter' AND LastName='Griffin'&quot;);
           <br /> mysqli_close($con);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>在这次更新后，&quot;Persons&quot; 表如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <table> 
            <tbody>
             <tr> 
              <td width="10%">FirstName</td> 
              <td width="10%">LastName</td> 
              <td width="10%">Age</td> 
             </tr> 
             <tr> 
              <td>Peter</td> 
              <td>Griffin</td> 
              <td>36</td> 
             </tr> 
             <tr> 
              <td>Glenn</td> 
              <td>Quagmire</td> 
              <td>33</td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="Delete"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>Delete</h3> 
          <p>DELETE 语句用于从数据库表中删除行。</p> 
          <h2>删除数据库中的数据</h2> 
          <p>DELETE FROM 语句用于从数据库表中删除记录。</p> 
          <h2>语法</h2> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            DELETE FROM table_name 
           <br /> WHERE some_column = some_value
           <br /> 
          </div> 
          <p>注释：请注意 DELETE 语法中的 WHERE 子句。WHERE 子句规定了哪些记录需要删除。如果您想省去 WHERE 子句，所有的记录都会被删除！<br /> 为了让 PHP 执行上面的语句，我们必须使用 mysqli_query() 函数。该函数用于向 MySQL 连接发送查询或命令。</p> 
          <h2>实例</h2> 
          <p>请看下面的 &quot;Persons&quot; 表：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <table> 
            <tbody>
             <tr> 
              <td width="10%">FirstName</td> 
              <td width="10%">LastName</td> 
              <td width="10%">Age</td> 
             </tr> 
             <tr> 
              <td>Peter</td> 
              <td>Griffin</td> 
              <td>35</td> 
             </tr> 
             <tr> 
              <td>Glenn</td> 
              <td>Quagmire</td> 
              <td>33</td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <p>下面的实例删除 &quot;Persons&quot; 表中所有 LastName='Griffin' 的记录：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php
           <br /> $con=mysqli_connect(&quot;example.com&quot;,&quot;peter&quot;,&quot;abc123&quot;,&quot;my_db&quot;);
           <br /> // Check connection
           <br /> if (mysqli_connect_errno())
           <br /> {
           <br /> echo &quot;Failed to connect to MySQL: &quot; . mysqli_connect_error();
           <br /> }
           <br /> mysqli_query($con,&quot;DELETE FROM Persons WHERE LastName='Griffin'&quot;);
           <br /> mysqli_close($con);
           <br /> ?&gt;
           <br /> 
          </div> 
          <p>在这次删除后，&quot;Persons&quot; 表如下所示：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;"> 
           <table> 
            <tbody>
             <tr> 
              <td width="10%">FirstName</td> 
              <td width="10%">LastName</td> 
              <td width="10%">Age</td> 
             </tr> 
             <tr> 
              <td>Glenn</td> 
              <td>Quagmire</td> 
              <td>33</td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <br /> 
         </div> 
        </div> 
        <div class="tab-pane fade" id="PHPODBC"> 
         <div class="col-md-12 col-xs-12 php_center"> 
          <h3>PHP ODBC</h3> 
          <p>ODBC 是一种应用程序编程接口（Application Programming Interface，API），使我们有能力连接到某个数据源（比如一个 MS Access 数据库）。</p> 
          <h2>创建 ODBC 连接</h2> 
          <p>通过一个 ODBC 连接，您可以连接到您的网络中的任何计算机上的任何数据库，只要 ODBC 连接是可用的。 这是创建到达 MS Access 数据库的 ODBC 连接的方法：</p> 
          <ol style="list-style-type:decimal;"> 
           <li>在控制面板中打开管理工具图标。</li> 
           <li>双击其中的数据源(ODBC)图标。</li> 
           <li>选择系统 DSN 选项卡。</li> 
           <li>点击系统 DSN 选项卡中的添加。</li> 
           <li>选择Microsoft Access Driver。点击完成。</li> 
           <li>在下一个界面，点击选择来定位数据库。</li> 
           <li>为数据库起一个数据源名(DSN)。</li> 
           <li>点击确定。</li> 
          </ol> 
          <p>请注意，必须在您的网站所在的计算机上完成这个配置。如果您的计算机上正在运行 Internet 信息服务(IIS)， 上面的指令将会生效，但是如果您的网站位于远程服务器，您必须拥有对该服务器的物理访问权限，或者请您的主机提供商为您建立 DSN。</p> 
          <h2>连接到 ODBC</h2> 
          <p>odbc_connect() 函数用于连接到 ODBC 数据源。该函数有四个参数：数据源名、用户名、密码以及可选的指针类型。 odbc_exec() 函数用于执行 SQL 语句。</p> 
          <h2>实例</h2> 
          <p>下面的实例创建了到达名为 northwind 的 DSN 的连接，没有用户名和密码。然后创建并执行一条 SQL 语句：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $conn=odbc_connect('northwind','','');
           <br /> $sql=&quot;SELECT * FROM customers&quot;;
           <br /> $rs=odbc_exec($conn,$sql);
           <br /> 
          </div> 
          <h2>取回记录</h2> 
          <p>odbc_fetch_row() 函数用于从结果集中返回记录。如果能够返回行，则函数返回 true，否则返回 false。 该函数有两个参数：ODBC 结果标识符和可选的行号：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            odbc_fetch_row($rs) 
          </div> 
          <h2>从记录中取回字段</h2> 
          <p>odbc_result() 函数用于从记录中读取字段。该函数有两个参数：ODBC 结果标识符和字段编号或名称。 下面的代码行从记录中返回第一个字段的值：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $compname=odbc_result($rs,1); 
          </div> 
          <p>下面的代码行返回名为 &quot;CompanyName&quot; 的字段的值：</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            $compname=odbc_result($rs,&quot;CompanyName&quot;); 
          </div> 
          <h2>关闭 ODBC 连接</h2> 
          <p>odbc_close() 函数用于关闭 ODBC 连接。</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            odbc_close($conn); 
          </div> 
          <h2>ODBC 实例</h2> 
          <p>下面的实例展示了如何首先创建一个数据库连接，接着创建一个结果集，然后在 HTML 表格中显示数据。</p> 
          <div style="border: 1px solid #bebebe;background-color: #fff;
                                border-radius: 15px;padding:30px;">
            &lt;?php 
           <br /> $conn=odbc_connect('northwind','','');
           <br /> if (!$conn)
           <br /> {exit(&quot;Connection Failed: &quot; . $conn);}
           <br /> $sql=&quot;SELECT * FROM customers&quot;;
           <br /> $rs=odbc_exec($conn,$sql);
           <br /> if (!$rs)
           <br /> {exit(&quot;Error in SQL&quot;);}
           <br /> echo &quot;&lt;table&gt;&lt;tr&gt;&quot;;
           <br /> echo &quot;&lt;th&gt;Companyname&lt;/th&gt;&quot;;
           <br /> echo &quot;&lt;th&gt;Contactname&lt;/th&gt;&lt;/tr&gt;&quot;;
           <br /> while (odbc_fetch_row($rs))
           <br /> {
           <br /> $compname=odbc_result($rs,&quot;CompanyName&quot;);
           <br /> $conname=odbc_result($rs,&quot;ContactName&quot;);
           <br /> echo &quot;&lt;tr&gt;&lt;td&gt;$compname&lt;/td&gt;&quot;;
           <br /> echo &quot;&lt;td&gt;$conname&lt;/td&gt;&lt;/tr&gt;&quot;;
           <br /> }
           <br /> odbc_close($conn);
           <br /> echo &quot;&lt;/table&gt;&quot;;
           <br /> ?&gt;
           <br /> 
          </div> 
          <br /> 
         </div> 
        </div> 
       </div> 
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