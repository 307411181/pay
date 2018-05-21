<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/User/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
   $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(3)").addClass("menu_bg");
	$("#menu_x > div > div:eq(4)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(4) a").css("color","#F60");
});	
</script>
<style type="text/css">
#txtitle{
	width:800px;
	height:50px;
	margin:0px auto;
	text-align:center;
	}
#txtitle div{
	width:150px;
	height:30px;
	font-weight:bold;
	font-size:20px;
	color:#06C;
	text-align:center;
	line-height:30px;
	border:1px solid #999;
	border-bottom:0px;
	cursor:pointer;
	margin:0px auto;
	}
	
#txcontent{
	width:1000px;
	height:400px;
	}	
	
.selectclass{
	width:500px;
	height:400px;
	text-align:center;
	float:left;
	}
	
.selectclass img{
	margin-top:165px;
	cursor:pointer;
	border:0px;
	}	
.selectclass span{
	font-size:13px;
	color:#F30;
	}		
</style>
</head>

<body>
<div id="top_logo">
   <div id="logo"><img src="/Public/images/logo.png"></div>
   <div id="login_reg">
      <div><?php echo ($_SESSION['UserName']); ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="/User_Index_ExitLogin.html">退出登录</a>&nbsp;&nbsp;&nbsp;&nbsp;|</div>
      <div style="width:667px; margin-top:0px; height:20px; text-align:center;">
    <!--  <img src="/Public/User/images/new.gif" height="15" width="35" onclick="javascript: showDialog('info', '测试信息<br>sdgbsgsdag','标题', 700);">&nbsp;&nbsp;&nbsp;&nbsp;-->
      
         
      </div>
   </div>
</div>

<div style="width:100%; height:38px; margin:0px auto; background-image:url(/Public/User/images/menu_menu_x.jpg);">

<div id="menu">
<div onclick="javascript:location.href='/User'">首 页</div>
<div onclick="javascript:location.href='/User_Index_basic.html'">账户管理</div>
<div onclick="javascript:location.href='/User_Index_wyjyjl.html'" style="margin-left:45px;">交易管理</div>
<div onclick="javascript:location.href='/User_Index_npdy.html'" style="margin-left:45px;">付款</div>
<div onclick="javascript:location.href='/User_Index_skym.html'" >我的个性主页</div>



<?php switch($_SESSION['UserType']): case "5": ?><div onclick="javascript:location.href='/User_Index_tjyg.html'">
    分润管理
    </div><?php break;?>
    <?php default: endswitch;?>



</div>

</div>
<div id="menu_x">
   <div>
<div><a href="/User_Index_npdy.html">转账</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_tktx.html">提现</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_wttkselect.html">委托提款</a></div>
<div style="width:20px;">|</div>
<div style="position:relative" id="sqktgn"><a href="#">申请开通功能</a>
<div style="position:absolute; top:28px; left:0px; width:100px; height:83px; background-color:#0159b3; display:none;">
   <div style="width:100%; height:40px; line-height:40px; text-align:center; color:#FFF; font-weight:bold; font-size:13px; border-bottom:1px dashed #CCCCCC; cursor:pointer;" onclick="javascript:location.href='/User_Index_sqtjl.html'">T+0</div>
   <div style="width:100%; height:40px; line-height:40px; text-align:center; color:#FFF; font-weight:bold; font-size:13px; border-bottom:1px dashed #CCCCCC; cursor:pointer; display:none" onclick="javascript:location.href='/User_Index_sqzdjs.html'">自动结算</div>
   <div style="width:100%; height:40px; line-height:40px; text-align:center; color:#FFF; font-weight:bold; font-size:13px; border-bottom:1px dashed #CCCCCC; cursor:pointer; display:none;" onclick="javascript:location.href='/User_Index_wyfljl.html'">费率调整</div>
   <div style="width:100%; height:40px; line-height:40px; text-align:center; color:#FFF; font-weight:bold; font-size:13px; cursor:pointer;" onclick="javascript:location.href='/User_Index_wtplxf.html'">委托批量下发</div>
</div>
</div>
   </div>
 </div>  
 <script type="text/javascript">
 $(document).ready(function(e) {
    $("#sqktgn").mouseover(function(e) {
        $("#sqktgn > div").show();
    });
	$("#sqktgn").mouseout(function(e) {
        $("#sqktgn > div").hide();
    });
});
 </script>

<div class="xgjcxx">
<div style="border:1px solid #ccc; background-image:url(/Public/User/images/menu_bg_x.jpg); width:1000px; height:40px; line-height:40px; font-size:15px; text-align:left; font-weight:bold; color:#333">
<span style="font-size:13px; color:#00F">【单笔最小提款金额：<span style="color:#0C3; font-size:15px;"><?php echo ($minmoney); ?></span> 元&nbsp;&nbsp;
      单笔最大提款金额：<span style="color:#0C3; font-size:15px;"><?php echo ($maxmoney); ?></span> 元&nbsp;&nbsp;每天可提款总金额：<span style="color:#0C3; font-size:15px;"><?php echo ($mtsxmoney); ?></span>&nbsp;&nbsp;每天提款最大次数：<span style="color:#0C3; font-size:15px;"><?php echo ($mttkcs); ?></span> 次】</span>
</div>

<div style="width:1000px; height:auto; border:1px solid #CCC; border-top:0px;" id="ntj">
  <br />
   <div id="txtitle">
      <div style="width:450px; font-size:13px; border:0px;">
      今天已申请提款总金额：<span style="color:#F00"><?php echo ($yqlmoney); ?></span> 元&nbsp;&nbsp;&nbsp;&nbsp;
      今天已申请提款：<span style="color:#F00"><?php echo ($dttkcs); ?></span> 次
      </div>
   </div>

  <hr>
  
  <div id="txcontent">
  <?php if($tkif == 1): ?><div class="selectclass">
     <img src="/Public/User/images/tyjepldk.gif" onclick="javascript:location.href='/User_Index_wttk.html'" /><br /><br />
     <span>给所有委托提款银行账户提款相同的金额！</span>
     </div>
     <div class="selectclass">
     <img src="/Public/User/images/btjepldk.gif" onclick="javascript:location.href='/User_Index_wttkf.html'">
     <br><br>
     <span>分别给每个委托提款银行账户提款不同的金额！</span>
     </div>
     <?php else: ?>
         <?php if($tkiflx == 0): ?><p style="font-size:30px; color:#F00; margin-top:150px; margin-left:120px;">您今天已经申请提款 <?php echo ($mttkcs); ?> 次,超过当天最大申请提款次数！</p>
          <?php else: ?>
          <p style="font-size:30px; color:#F00; margin-top:150px; margin-left:380px;">未开启委托批量结算!</p><?php endif; endif; ?>
  </div>
  
</div>


</div>

<div style="clear:left;"></div>
<div style="clear:left"></div>

<div style="width:100%; height:120px; background-color:#dbe0e3;">
<!---------------------------------------------------------------------------------------------->
<div id="foot">
   <div class="dt">
     <a href="/Index_company.html">关于我们</a> | <a href="Index_sjtcjwt.html">帮助中心</a> | <a href="/Index_fwdt.html">联系我们</a>  | <a href="/Index_ysxy.html">服务协议</a>
   </div>
   <div class="dt">信付云 版权所有2012-2017 　<a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">蜀ICP备16033332号</a></div>
   <div class="dt"text-align:center">

    <a href="http://www.pbc.gov.cn/" target="_blank"><img src="/Public/images/a1.gif" style=" border:0px"></a>
    <a href="https://sealinfo.verisign.com/splash?form_file=fdf/splash.fdf&dn=www.payxf.com&lang=zh_cn" target="_blank"> <img src="/Public/images/a2.gif" style=" border:0px"></a>
    <a href="http://www.12377.cn/" target="_blank"><img src="/Public/images/a3.gif" border:0px></a>
    <a href="http://huhehaote.cyberpolice.cn/" target="_blank"><img src="/Public/images/a4.gif" style=" border:0px"></a>
    <a href="http://www.365anfang.com/" target="_blank"><img src="/Public/images/a5.gif" style=" border:0px;"></a>
    <a href="https://ss.knet.cn/verifyseal.dll?sn=e16112451000003333225255381&comefrom=trust&trustKey=dn&trustValue=www.payxf.com" target="_blank"><img src="/Public/images/a6.gif" style=" border:0px"></a>

   </div> 


   </div> 


   </div><br>

</body>
</html>