<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>代理登录-<?php echo C("WEB_NAME");?></TITLE>
<link rel="stylesheet" type="text/css" href="/Public/css/defaultcss.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/css.css" />
<script src="http://libs.baidu.com/jquery/1.10.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="/Public/js/floatDiv.js"></script>
<script type="text/javascript" src="/Public/js/js.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	$("#mbkcontent").floatdiv("middle");
    //$(".menu_div_div:eq(2)").css({"background-image":"url(/Public/images/sbgb.jpg)"}).attr("name","a");
	//$(".menu_div_div:eq(2) a").css("color","#11638b");
	
});
</script>

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
 <form name="Form1" method="post" action="" onsubmit="return check();">
        <input type="hidden" name="mbk" id="mbk" value="">
   <div id="dengludiv">
       <div id="dengludivtitle">&nbsp;&nbsp;代理登录</div>
       <div id="dengludivts">
          <div style="width:60px; height:60px; float:left; text-align:center;"><img src="/Public/images/dengludivts.gif" style="margin-top:15px;"></div>
          <div style="width:auto; height:60px; font-size:13px;">
            <p style="margin-top:5px; line-height:20px;"><b>登录提示</b></p>
            <p style="line-height:10px;">您还没有登录，无法使用相关支付功能，请在下面进行登录！</p>
          </div>
       </div>
       <div id="dengludivcontent">
            <div id="dengludivcontentleft">
                  <!-------------------------------------------------------------->
              <div style="width:90%;">
                  <div class="form-group">
                    <label for="UserName" class="col-sm-4 control-label" style="text-align:right; color:#3384ad">账户名：</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="UserName" id="UserName" placeholder="请输入您注册填写的邮箱">
                    </div>
                  </div>
                 <div style="clear:left;"></div>
                  <div class="form-group" style="margin-top:20px;">
                    <label for="LoginPassWord" class="col-sm-4 control-label" style="text-align:right; color:#3384ad">密 码：</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="LoginPassWord" id="LoginPassWord" placeholder="请输入登录密码">
                    </div>
                  </div>
                  <div style="clear:left;"></div>
                  <div class="form-group" style="margin-top:20px;">
                    <label for="verify" class="col-sm-4 control-label" style="text-align:right; color:#3384ad">验证码：</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="verify" id="verify" placeholder="验证码">
                    </div>
                     <div class="col-sm-4">
                      &nbsp;&nbsp;<img class="yzm" src='/Index_verify.html' style="vertical-align:middle; height:32px; cursor:pointer;" onclick='javascript:$(".yzm").attr("src","/Index_verify_a"+ Math.random()+".html")' title="点击刷新验证码" />
                    </div>
                  </div>
                 <div style="clear:left;"></div>
                  <div class="form-group" style="margin-top:20px;">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">代理登录</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/Index_mmzh.html" style="text-decoration:none; color:#3584c5; font-size:12px;">忘记密码?</a>
                    </div>
                  </div>
                
                </div>
                <!-------------------------------------------------------------->
            </div>
            <div id="dengludivcontentright">
              
                <button type="button" class="btn btn-default" onclick="javascript:window.location.href='<?php echo U("Index/regstep");?>'">免费注册</button><br><br>
          <button type="button" class="btn btn-default" onclick="javascript:window.location.href='<?php echo U("Index/jhzh");?>'">账号激活</button><br><br>
               <button type="button" class="btn btn-primary" onclick="javascript:window.location.href='<?php echo U("Index/dengluqy");?>'">商户登录</button>
            </div>
       </div>
   </div>
   <input type="hidden" name="UserTpye" id="UserType" value="0" /><strong></strong>
   </form>
   <div id="mbkcontent">
</div>


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

</body>
</html>