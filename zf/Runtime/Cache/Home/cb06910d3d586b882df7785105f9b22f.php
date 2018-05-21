<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>账户注册</TITLE>
<link rel="stylesheet" type="text/css" href="/Public/css/defaultcss.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/css.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/slider.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/reg.css" />
<script type="text/javascript" src="/Public/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/js/jquery.nbspSlider.1.0.min.js"></script>
<script type="text/javascript" src="/Public/js/js.js"></script>
<script type="text/javascript" src="/Public/js/reg.js"></script>
</head>

<body>
<script type="text/javascript" src="/Public/js/floatDiv.js"></script>

<div style="width:100%; height:80px; background-color:#F2F2F2;">
<div id="logo_menu">
   <div id="logo"><img src="/Public/images/logo.png" width="280" height="80"></div>
   <div id="menu">
   			<div class="menumenu_div"><a href="/">首 页</a></div>
            <div class="menumenu_div">
            <a href="/Index_collection.html">商户服务</a>
            </div>
            <div class="menumenu_div">
            <a href="/Index_zffx.html">安全保障</a>
            </div>
            <div class="menumenu_div"><a href="/Index_fwdt.html">联系我们</a></div>
     </div>
   </div>
</div>

</div>

<div class="ge" style="clear:left"></div>
<div id="toptopmenudiv" style="width:3000px; height:300px; background-color:#F2F2F2; display:none;"></div>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#toptopmenudiv").floatdiv({left:"0px",top:"110px"});
});
</script>


<div id="Company_Content">
<div class="zcx zc" style="background-image:url(/Public/images/reg01.jpg)">
   <div style="width:100%; height:119px; line-height:30px; font-size:30px; color:#039; text-align:left;"><p style="font-weight:bold; margin-top:10px;">企业注册</p>
   <span style="font-size:13px; margin-left:30px;  font-weight:normal; color:#333">丰富的产品服务，满足您一切支付需求</span><br>
<span style="font-size:13px; margin-left:30px;  font-weight:normal; color:#333">首家通过国家信息安全认证，保障交易安全</span>
   </div>
   <div style="widows:100%; height:80px; text-align:left;"><br><img src="/Public/images/qy_reg.gif" style="margin-top:20px;border:0px; margin-left:20px; cursor:pointer;" reg="/Public/images/qy_reg.gif" UserType="1" id="regcodeclick"></div>
</div>
<div style="margin-left:10px; background-image:url(/Public/images/reg02.jpg);" class="zcx zc">
 <div style="width:100%; height:119px; line-height:30px; font-size:30px; color:#F60; text-align:left;"><p style="font-weight:bold; margin-top:10px;">个人注册</p>
 <span style="font-size:13px; margin-left:30px;  font-weight:normal; color:#333">会员专享的优惠购买服务</span><br>
 <span style="font-size:13px; margin-left:30px;  font-weight:normal; color:#333">会员支付、免费转账等功能</span>
</div>
    <div style="widows:100%; height:80px; text-align:left;"><br><img src="/Public/images/gr_reg.gif" style="margin-top:20px; border:0px; margin-left:20px; cursor:pointer;" reg="/Public/images/gr_reg.gif" UserType="0"></div>
</div>
<div style="clear:left;"></div><br>
<div style="width:1000px; height:30px; border:1px dashed #a9becf; margin:0px auto; margin-top:10px; line-height:30px; text-align:center;" class="zc">
如果您已经是会员，请直接&nbsp;<a href="/Index_dengluqy.html" style="color:#F00;">登录</a>。
</div>

<form name="Form1" id="Form1" method="post" action="/Index_reg.html" onsubmit="return check()">
<div style="width:760px; height:482px; margin:0px auto; margin-top:10px; display:none; background-image:url(/Public/images/regreg.gif)" id="regdiv">
<div style="width:100%; height:39px; line-height:39px; text-align:left; font-size:15px; font-weight:bold;">
<?php if(($_GET['regtype']) == "1"): ?>员工注册
<?php else: ?>
如果您已经是会员，请直接&nbsp;<a href="/Index_dengluqy.html" style="color:#F00;">登录</a>。<?php endif; ?>
</div>

<div style="width:100%; height:70px;">

</div>
<?php if(($_GET['regtype']) == "1"): ?><div class="regtitle reginput" style="">
主&nbsp;账&nbsp;号&nbsp;商&nbsp;户&nbsp;编&nbsp;号：<span style="color:#000; font-weight:bold"><?php echo ($shh); ?></span>
</div><?php endif; ?>
<div class="regtitle reginput">
账&nbsp;户&nbsp;名：<input type="text" name="UserName" id="UserName" style="width:200px; height:25px; vertical-align:middle; font-size:20px; color:#06C;" class="inputtext">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:13px; color:#666;">账户只能用Email邮箱地址</span>
<div class="errordiv">账号不正确！</div>
</div>


<div class="regtitle reginput">
登录密码：<input type="password" name="LoginPassWord" id="LoginPassWord" style="width:200px; height:25px; vertical-align:middle; font-size:20px; color:#06C;" class="inputtext">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:13px; color:#666;">登录密码为6-16位数字、字母、符号的组合</span>
<div class="errordiv">密码不正确！</div>
</div>


<div class="regtitle reginput">
确认密码：<input type="password" name="OkPassWord" id="OkPassWord" style="width:200px; height:25px; vertical-align:middle; font-size:20px; color:#06C;" class="inputtext">
&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:13px; color:#666;">再次确认输入登录密码</span>
<div class="errordiv">密码不正确！</div>
</div>

<div class="regtitle reginput">
验&nbsp;证&nbsp;码：<input type="text" name="verify" id="verify" style="width:100px; height:25px; vertical-align:middle; font-size:20px; color:#06C;" class="inputtext">
<img class="yzm" src='/Index_verify.html' style="vertical-align:middle; width:100px; height:25px;" onclick='javascript:$(".yzm").attr("src","/Index_verify_a+"+ Math.random()+".html")' title="点击刷新验证码" />
<div class="errordiv">验证码不正确！</div>
</div>


<div class="reginput" style="margin-top:10px; text-align:center;">
<input type="hidden" name="UserType" id="UserType">
<?php if(($_GET['regtype']) == "1"): ?><input type="hidden" name="SjUserID" id="SjUserID" value="<?php echo ($_GET['regcode']); ?>">
<?php else: ?>
<input type="hidden" name="SjUserID" id="SjUserID" value="0"><?php endif; ?>
<input type="image" src="/Public/images/qy_reg.gif" style="vertical-align:middle;">&nbsp;&nbsp;
<?php if(($_GET['regtype']) != "1"): ?><a href="javascript:fanhui()" style="font-size:15px; color:#069;">返 回</a><?php endif; ?>
</div>

</div>
</form> 
</div>
<div style="clear:left;"></div>


<div style="clear:left"></div>

<div style="width:100%; height:120px; background-color:#dbe0e3;">
<!---------------------------------------------------------------------------------------------->
<div id="foot">
   <div class="dt">
     <a href="/Index_company.html">关于我们</a> | <a href="Index_sjtcjwt.html">帮助中心</a> | <a href="/Index_fwdt.html">联系我们</a>  | <a href="/Index_ysxy.html">服务协议</a>
   </div>
   <div class="dt">信付云 版权所有2012-2017 　蜀ICP备16033332号</div>
   </div> 
   </div><br>

<?php if(($_GET['regtype']) == "1"): ?><script type="text/javascript">
  var reg = "/Public/images/ygzc.gif"
		var UserType = $(this).attr("UserType");
		$(".zc").fadeOut(10,function(){
			$("#regdiv input[type='image']").attr("src",reg);
			$("#UserType").val(3);
			$("#regdiv").fadeIn(10);
			})
</script><?php endif; ?>
</body>
</html>