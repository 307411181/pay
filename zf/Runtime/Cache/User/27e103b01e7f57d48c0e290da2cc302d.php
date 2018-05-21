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
	$("#menu_x > div > div:eq(0)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(0) a").css("color","#F60");
});

function clearNoNum(obj)
	{
		//先把非数字的都替换掉，除了数字和.
		obj.value = obj.value.replace(/[^\d.]/g,"");
		//必须保证第一个为数字而不是.
		obj.value = obj.value.replace(/^\./g,"");
		//保证只有出现一个.而没有多个.
		obj.value = obj.value.replace(/\.{2,}/g,".");
		//保证.只出现一次，而不能出现两次以上
		obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
	}

function npaycheck(type){
	
	 if(type == 1){
		 
		 if($("#qtusername").val() == ""){
		     alert("转账<?php echo C("WEB_NAME");?>账户不能为空！");
			 $("#qtusername").focus();
		 }else{
			 
			 //////////////////////////////////////////////////////////////
			  $.ajax({
					type:'POST',
					url:'/User_Index_npdycheck.html',
					data:"UserName="+$("#qtusername").val(),
					dataType:'text',
					success:function(str){
						    $("#qtusername").hide();
							$("#UserNameSpan").text($("#qtusername").val()).show();
					    	if(str != "ok"){
								$("#UserNameTS").text(str).show();
								$("#xyb1").hide();
								$("#fh1").show();
							}else{
								postmyname();
								$("#xyb1").hide();
								$("#fh1").hide();
								$("#zzje").show();
								kymoney();
							}
						},
					error:function(){
						alert("处理失败！");
						}	
					});	 
			 /////////////////////////////////////////////////////////////
			 
		 }
		 
	 }
	
	
	}

function postmyname(){
	
	$.ajax({
		type:'POST',
		url:'/User_Index_npdycheckxm.html',
		data:"UserName="+$("#qtusername").val(),
		dataType:'text',
		success:function(str){
				
			  $("#UserNameTS").html("<span style='color:#000;'>姓名：</span>"+str).show();
				
			},
		error:function(){
			alert("处理失败！");
			}	
		});	 
	
	}	

function fh1(){
	$("#UserNameTS").html("").hide();
	$("#UserNameSpan").text("").hide();
	$("#qtusername").val("").show();
	$("#xyb1").show();
	$("#fh1").hide();
	
}	

function kymoney(){
	
	$.ajax({
		type:'POST',
		url:'/User_Index_kymoney.html',
		data:"",
		dataType:'text',
		success:function(str){
				
			  $("#kymoney").text("可用金额："+str+"元");
			  $("#tsmoney").text(str);
				
			},
		error:function(){
			alert("处理失败！");
			}	
		});	 
	
	}
	
function zzje(){
	
	if($("#money").val() == ""){
		alert("转账金额不能为空！");
		$("#money").focus();
	}else{
		if(parseFloat($("#money").val()) > parseFloat($("#tsmoney").text())){
			alert("您的账户余额不足！");
			$("#money").focus();
			}else{
				
				$("#money").hide();
				$("#kymoney").hide();
				$("#xyb2").hide();
				$("#MoneyTS").html("<span style='color:#f00'>"+$("#money").val()+"</span>元").show();
				$("#zfmm").show();
			}
		}
}


function yzzfmm(){
	
	if($("#paypassword").val() == ""){
	     alert("支付密码不能为空！");
		 $("#paypassword").focus();
	}else{
		
		$.ajax({
		type:'POST',
		url:'/User_Index_yzzfmm.html',
		data:"paypassword="+$("#paypassword").val(),
		dataType:'text',
		success:function(str){
				
				if(str != "ok"){
					alert("支付密码错误！");
				}else{
					$("#paypassword").hide();
					$("#yzzfmmTS").show();
					$("#yzzfmm").hide();
					$("#qrzz").show();
					$("#beizu").show();
			    }
				
			},
		error:function(){
			alert("处理失败！");
			}	
		});	 
		
	}
}	

function qrzz(){
	
	
if(confirm("您确认要执行此转账操作吗？")){	
	
	
	$("#ntj").hide();
	$("#nts").show();
	
	$.ajax({
		type:'POST',
		url:'/User_Index_npaycl.html',
	data:"UserName="+$("#qtusername").val()+"&money="+$("#money").val()+"&paypassword="+$("#paypassword").val()+"&AdditionalInfo="+($("#AdditionalInfo").val()).replace("&",""),
		dataType:'text',
		success:function(str){
				
				if(str != "ok"){
					$("#nts").text(str+"&nbsp;&nbsp;<img src='Public/User/images/fh.gif' onclick=\"javascript:location.href='User_Index_npdy.html'\">");
				}else{
					$("#nts").html("操作成功！&nbsp;&nbsp;<img src='Public/User/images/fh.gif' onclick=\"javascript:location.href='User_Index_npdy.html'\">");
				}
				
			},
		error:function(){
			alert("处理失败！");
			}	
		});	 
}
}
</script>
<style type="text/css">
.jbxx{
	height:80px;
	line-height:80px;
	}
.jbxx input{
	width:200px;
	height:30px;
	vertical-align:middle;
	font-size:25px;
	color:#069;
	font-weight:bold;
	}	
.jbxx img{
	vertical-align:middle;
	cursor:pointer;
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
&nbsp;&nbsp;&nbsp;&nbsp;转账&nbsp;&nbsp;&nbsp;&nbsp;[<span style="color:#F00">平台内转账需扣除&nbsp;<span style="font-weight:bold; color:#00C"><?php echo ($nbzz); ?></span>&nbsp;的手续费</span>]
</div>

<div style="width:1000px; height:auto; border:1px solid #CCC; border-top:0px;" id="ntj">
   
   
    <div class="jbxx">
    请输入转账账户：<input type="text" name="qtusername" id="qtusername" style="width:300px;"><span style="color:#009; font-size:20px;" id="UserNameSpan"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#F00" id="UserNameTS"></span>&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="/Public/User/images/xyb.gif" onclick="npaycheck(1)" id="xyb1">&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="/Public/User/images/fh.gif" id="fh1" style="display:none;" onclick="fh1();">
    </div>
    
    <div class="jbxx" style="display:none;" id="zzje">
    请输入转账金额：<input type="text" name="money" id="money" style="color:#F00" onkeyup="clearNoNum(this)">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#F00" id="kymoney"></span><span style="display:none" id="tsmoney"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009; display:none; font-size:25px;" id="MoneyTS"></span>&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="/Public/User/images/xyb.gif" id="xyb2" onclick="javascript:zzje();">
    </div>
    
    <div class="jbxx" style="display:none;" id="zfmm">
    请输入支付密码：<input type="password" name="paypassword" id="paypassword">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#F00; display:none;" id="yzzfmmTS">支付密码验证成功！</span>
   <img src="/Public/User/images/yz.gif" id="yzzfmm" onclick="yzzfmm()">
    </div>
   
   <div class="jbxx" style="display:none;" id="beizu">
   备注:
   <input type="text" style="width:400px; " id="AdditionalInfo" maxlength="30" />
   </div>
   
    <div class="jbxx" style="text-align:center; display:none;" id="qrzz">
   <img src="/Public/User/images/qrzz.gif" onclick="qrzz()">&nbsp;
    </div>
    
</div>

<div style="width:1000px; height:200px; line-height:200px; text-align:center; font-size:30px; color:#F00; border:1px solid #CCC; border-top:0px; display:none" id="nts">
 正在处理，请稍后......
</div>

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