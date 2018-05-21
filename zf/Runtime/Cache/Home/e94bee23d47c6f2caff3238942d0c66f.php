<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>激活成功-<?php echo C("WEB_NAME");?></title>
<link rel="stylesheet" type="text/css" href="/Public/css/defaultcss.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/css.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/slider.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/reg.css" />
<script type="text/javascript" src="/Public/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/js/jquery.nbspSlider.1.0.min.js"></script>

<script type="text/javascript">
var i = 61;
var t;
$(document).ready(function(e) {
    t = window.setInterval("djs()",1000);
});

function djs(){
	i--;
	$("#djs").text(i);
	if(i == 0){
		window.clearInterval(t);
		$("#cxfs").attr("disabled",false);
		}
}
</script>
</head>

<body>
<script type="text/javascript" src="/Public/js/floatDiv.js"></script>
<link href="http://<?php echo C("WEB_URL");?>/static/css/index.min.css" rel="stylesheet" />
<link href="http://<?php echo C("WEB_URL");?>/static/css/reg.css" rel="stylesheet" />
<header>
<div class="logo">
  <a href="http://<?php echo C("WEB_URL");?>/"><img src="http://<?php echo C("WEB_URL");?>/static/picture/logo.png" alt="<?php echo C("WEB_NAME");?>"class="img-responsive" />
  </a>
        </div>

        <nav class="menu">
          <ul class="list-inline">
            <li class="active"><a href="http://<?php echo C("WEB_URL");?>/">首页</a></li>
            <li><a href="http://<?php echo C("WEB_URL");?>/index_developer.html">开发者平台</a></li>
          </ul>
        </nav>

  <div class="hotline"> </div>
  <div class="menu-icon"> <a href="tel:<?php echo C("WEB_TEL");?>" title="点击直拨"><span class="glyphicon glyphicon-earphone"></span></a> <span class="glyphicon glyphicon-th-large"></span> </div>
</header>
 
 

<div id="Company_Content" style="text-align:center; width:760px; height:296px; margin-top:30px; margin-bottom:30px; background-image:url(/Public/images/regregok.gif)">
  <div style="width:100%; height:auto;">
      <div style="width:100%; height:150px; text-align:left; font-size:15px;"></div>
      <div style="width:100%; height:auto; text-align:left; font-size:15px; font-weight:bold;">您已经成功激活</div>
      <div style="width:100%; height:auto; text-align:left; font-size:15px; font-weight:bold;">您现在可以登录使用各种支付服务。</div>
      <div style="width:100%; height:auto; text-align:left; font-size:15px; font-weight:bold;"><a href="/Index_dengluqy.html">立即登录</a></div>
   </div>
</div>

<div style="clear:left;"></div>


<div style="clear:left"></div>

<div style="width:100%; height:120px;">
<!---------------------------------------------------------------------------------------------->
<div id="foot">
   
   <div class="dt"><?php echo C("WEB_NAME");?> 版权所有2012-2017 <?php echo C("WEB_COMPANY");?></div>
   </div> 
   </div><br>

</body>
</html>