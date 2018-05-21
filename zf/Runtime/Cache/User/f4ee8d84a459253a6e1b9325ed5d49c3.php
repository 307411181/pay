<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/User/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/User/js/js.js"></script>
<script type="text/javascript" src="/Public/User/js/pcasunzip.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(4)").addClass("menu_bg");
	
	$("#menu_x > div > div:eq(2)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(2) a").css("color","#F60");
	
	$("#zfyminput").click(function(e) {
        mypayurlname = $("#mypayurlname").val();
		if(mypayurlname == ""){
			alert("二级地址名称不能为空！");
			return false;
		}else{
			//////////////////////////////////////////////////////////////////////
			$.ajax({
			  type:'POST',
			  url:'/User_Index_addskym.html',
			  data:"mypayurlname="+mypayurlname,
			  dataType:'text',
			  success:function(str){
				   if(str == "1"){
					   alert("名称已存在，请选择其它名称");
					   $("#mypayurlname").focus();
					   }else{
						   if(str == "2"){
							   alert("二级地址名称不能为空！");
							   $("#mypayurlname").focus();
							   }else{
								   if(str == "3"){
									   alert("修改成功！");
									   location.href = location.href;
									   }else{
									   alert("修改失败！");
									   }
								   }
						   }
				  },
			  error:function(){
				  alert("处理失败！");
				  }	
			  });
			/////////////////////////////////////////////////////////////////////
		}
    });
});
</script>
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
<div style="display:none"><a href="/User_Index_pldhdk.html">点卡兑换</a></div>
 <div style="width:20px; display:none;">|</div>
<div><a href="<?php echo U("Index/skym");?>">收款页面</a></div>
<div style="width:20px;">|</div>
<div><a href="<?php echo U("Index/wyskjl");?>">网银收款记录</a></div>
<div style="width:20px;">|</div>
<div style="display:none;"><a href="<?php echo U("Index/dkskjl");?>">点卡收款记录</a></div>
   </div>
 </div>  





<div class="xgjcxx">
<div style="border:1px solid #ccc; background-image:url(/Public/User/images/menu_bg_x.jpg); width:1000px; height:40px; line-height:40px; font-size:15px; text-align:left; font-weight:bold; color:#333">
&nbsp;&nbsp;&nbsp;&nbsp;收款页面
</div>

<div style="width:1000px; height:auto; border:1px solid #CCC; border-top:0px">
<?php if($if == 0): ?><div class="jbxx" style="height:50px; line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请输入支付页面二级地址名称：<span style="color:#999; font-size:30px;">http://<?php echo ($web_url); ?>/</span><input type="text" class="input_text" name="mypayurlname" id="mypayurlname" style="width:200px;" value="" style="vertical-align:middle; color:#06F" />
    &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
     <div class="jbxx" style="text-align:center; height:50px; line-height:50px;">
    <input type="image" src="/Public/User/images/qrxg.gif" style="vertical-align:middle" id="zfyminput">
   &nbsp;<span style="color:#F00">（一旦确认后不能再修改！）</span>
   
    </div>
 <?php else: ?>
  <div class="jbxx" style="height:50px; line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此地址支持电脑手机端访问,可使用网银、支付宝、微信、QQ钱包、财付通，进行在线收款。
    </div>
  <div class="jbxx" style="height:50px; line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支付地址：<a href="<?php echo ($weburl); ?>" target="_blank"><?php echo ($weburl); ?></a>
    </div><?php endif; ?>   
</div>



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