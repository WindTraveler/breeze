<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://www.17sucai.com/pins/demo-show?id=27784 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>html5商城销售统计管理后台页面ui模板</title>

    <link href="new_admin_src/demo.css" rel="stylesheet" media="all">

    <!--[if IE]>

    <style type="text/css">
        li.remove_frame a {
            padding-top: 5px;
            background-position: 0px -3px;
        }
    </style>

    <![endif]-->

    <script src="new_admin_src/hm.js"></script><script type="text/javascript" src="new_admin_src/jquery.min.js"></script>
    <script type="text/javascript" src="new_admin_src/jquery.qrcode.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function fixHeight() {
                var headerHeight = $("#switcher").height();
                $("#iframe").attr("height", $(window).height()-54+ "px");
            }
            $(window).resize(function () {
                fixHeight();
            }).resize();

            $('.icon-monitor').addClass('active');

            $(".icon-mobile-3").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width-3');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-mobile-2").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width-2');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-mobile-1").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width');
                $('.icon-tablet,.icon-mobile,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-tablet").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('tablet-width');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-monitor").click(function () {
                $("#by").css("overflow-y", "hidden");
                $('#iframe-wrap').removeClass().addClass('full-width');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });
        });
    </script>

    <script type="text/javascript">
        function Responsive($a) {
            if ($a == true) $("#Device").css("opacity", "100");
            if ($a == false) $("#Device").css("opacity", "0");
            $('#iframe-wrap').removeClass().addClass('full-width');
            $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        };
    </script>

</head>
<body id="by">

<div id="switcher">
    <div class="center">
        <ul>
            <div id="Device">
                <li class="device-monitor"><a href="javascript:"><div class="icon-monitor active"></div></a></li>
                <li class="device-mobile"><a href="javascript:"><div class="icon-tablet"></div></a></li>
                <li class="device-mobile"><a href="javascript:"><div class="icon-mobile-1"></div></a></li>
                <li class="device-mobile-2"><a href="javascript:"><div class="icon-mobile-2"></div></a></li>
                <li class="device-mobile-3"><a href="javascript:"><div class="icon-mobile-3"></div></a></li>
            </div>
            <li class="top2">
                <a href="http://www.17sucai.com/pins/demo-show?id=27784#">手机二维码预览</a>
                <div class="vm">
                    <div id="output"><canvas width="150" height="150"></canvas></div>
                    <p style="color:#808080;margin:10px 0 0 0;">扫一扫，直接在手机上打开</p>
                </div>
            </li>
            <li class="logoTop">
                <a href="http://www.17sucai.com/pins/27784.html">html5商城销售统计管理后台页面ui模板</a>
            </li><li class="remove_frame"><a href="http://www.17sucai.com/preview/776298/2018-01-21/ht/index.html" title="移除框架"></a></li>
        </ul>
    </div>
</div>

<div id="iframe-wrap">
    <iframe id="iframe" src="new_admin_src/index.html" frameborder="0" width="100%" height="862px"></iframe>
</div>





</body></html>