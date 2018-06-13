
<!DOCTYPE HTML>
<html>
<title>留言板 — 个人博客</title>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="keywords" content="个人博客,王风宇个人博客,个人博客系统,老王博客,王风宇">
<meta name="description" content="Lao王博客系统，一个站在java开发之路上的草根程序员个人博客网站。">
<LINK rel="Bookmark" href="favicon.ico" >
<LINK rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/staticRes/js/html5shiv.js"></script>
<script type="text/javascript" src="/staticRes/js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/homeblog/plugin/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/homeblog/plugin/Hui-iconfont/1.0.8/iconfont.min.css" />
<link rel="stylesheet" type="text/css" href="/homeblog/css/common.css" />
<link rel="stylesheet" type="text/css" href="/homeblog/plugin/pifu/pifu.css" />
<link rel="stylesheet" type="text/css" href="/homeblog/plugin/wangEditor/css/wangEditor.min.css">
<!--[if lt IE 9]>
<link href="/staticRes/lib/h-ui/css/H-ui.ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="/homeabout/css/main.css">
<link rel="stylesheet" type="text/css" href="/homeabout/css/bootstrap.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } function showSide(){$('.navbar-nav').toggle();}</script>
</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container cl">
            <a class="navbar-logo hidden-xs" href="index.html">
                <img class="logo" src="/homeblog/img/logo.png" alt="博客" />
            </a>
            <a class="logo navbar-logo-m visible-xs" href="index.html">博客</a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:void(0);" onclick="showSide();">&#xe667;</a>
            <nav class="nav navbar-nav nav-collapse w_menu" role="navigation">
                 <ul class="cl">
                    <li class="active"> <a href="/" data-hover="首页">首页</a> </li>
                    <li> <a href="/home/about" data-hover="关于我们">关于我们</a> </li>
                    <li> <a href="/home/mood" data-hover="妙语连珠">妙语连珠</a> </li>
                    <li><a href="/home/article" data-hover="文章阅读">文章阅读</a></li>
                    <li> <a href="/home/board" data-hover="留言板">留言板</a> </li>
                </ul>
            </nav>
              <nav class="navbar-nav navbar-userbar hidden-xs hidden-sm " style="top: 0;">
                <ul class="cl">
                    <li class="userInfo dropDown dropDown_hover">
                   
                     @if( session('homeuser') ) 

            <?php
              date_default_timezone_set('Asia/Shanghai');
              $h=date("H");
              if($h<11) echo "早上好!";
              else if($h<13) echo "中午好！";
              else if($h<17) echo "下午好！";
              else echo "晚上好！";
              
              ?>

                              {{session('homeuser')['username']}}
                             

                           <a  href="/home/userinfo/userinfo" ><img class="avatar radius"  src="{{ session('homeuser')['profile'] }}"  alt="博客"></a>
                           <ul class="dropDown-menu menu radius box-shadow">
                               <li><a href="/home/logout">退出</a></li>
                           </ul>
                    @else  
                             
                             <a href="#" onclick="return tan()" ><img class="avatar size-S" src="/homeblog/img/qq.jpg" title="登入">登入</a>
                     @endif 
                          
                            
                    </li>
                </ul>
                  <script type="text/javascript">
                               

                            function tan()
                            {
                                    var index = layer.open({  
                                        type: 2,  

                                        content: '/home/login/login', 
                                        area: ['300px', '195px'],   
                                        title: false,  
                                        maxmin: true,   
                                        closeBtn: 0  
                                                });  
                                layer.full(index); 
                            }
                               
                            </script>
            </nav>
        </div>
    </div>
</header>

<!--导航条-->
<nav class="breadcrumb">
    <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="inex.html" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">留言板</span> </div>
    <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">留言板</span> </div>
</nav>


   
       <section id="contact">
                        <div class="container">
                            <div class="row text-center clearfix">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="contact-heading">
                                        <h2 class="title-one">联系我们</h2>
                                        <p>如有不足之处,请多指教,感激不尽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="contact-details">
                                <div class="pattern"></div>
                                <div class="row text-center clearfix">
                                    <div class="col-sm-6">
                                        <div class="contact-address"><address><p><span>掘地求升官方团队</span>集群</p><strong>36 North beijing<br>JDQS 驻扎地<br> 北京Lamp</strong><br><small>( 掘地求升团队 )</small></address>
                                            <div class="social-icons">
                                                <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <div id="contact-form-section">
                                            <div class="status alert alert-success" style="display: none"></div>
                                            <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control name-field" required="required" placeholder="你的名字"></div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control mail-field" required="required" placeholder="你的邮箱">
                                                    </div> 
                                                    <div class="form-group">
                                                        <textarea name="message" id="message" required="" class="form-control" rows="8" placeholder="你的留言"></textarea>
                                                    </div> 
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">发送</button>
                                                    </div>
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </section>
    



<footer class="footer mt-20">
    <div class="container-fluid" id="foot">
        <p>Copyright &copy; 2016-2017 www.wfyvv.com <br>
            <a href="#" target="_blank">皖ICP备17002922号</a>  更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a><br>
        </p>
    </div>
</footer>
<script type="text/javascript" src="/homeblog/plugin/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/homeblog/plugin/layer/3.0/layer.js"></script>
<script type="text/javascript" src="/homeblog/plugin/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/homeblog/plugin/pifu/pifu.js"></script>
<script type="text/javascript" src="/homeblog/js/common.js"></script>
<script> $(function(){ $(window).on("scroll",backToTopFun); backToTopFun(); }); </script>
<script type="text/javascript" src="/homeblog/plugin/wangEditor/js/wangEditor.min.js"></script>

<script type="text/javascript">
    $(function () {
        wangEditor.config.printLog = false;
        var editor1 = new wangEditor('textarea1');
        editor1.config.menus = ['insertcode', 'quote', 'bold', '|', 'img', 'emotion', '|', 'undo', 'fullscreen'];
        editor1.config.emotions = { 'default': { title: '老王表情', data: 'plugin/wangEditor/emotions1.data'}, 'default2': { title: '老王心情', data: 'plugin/wangEditor/emotions3.data'}, 'default3': { title: '顶一顶', data: 'plugin/wangEditor/emotions2.data'}};
        editor1.create();

        //show reply
        $(".hf").click(function () {
            pId = $(this).attr("name");
            $(this).parents(".commentList").find(".cancelReply").trigger("click");
            $(this).parent(".comment-body").append($(".comment").clone(true));
            $(this).parent(".comment-body").find(".comment").removeClass("hidden");
            $(this).hide();
        });
        //cancel reply
        $(".cancelReply").on('click',function () {
            $(this).parents(".comment-body").find(".hf").show();
            $(this).parents(".comment-body").find(".comment").remove();
        });
    });

</script>

</body>
</html>
