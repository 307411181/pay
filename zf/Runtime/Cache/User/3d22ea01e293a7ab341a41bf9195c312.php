<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/User/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/User/js/js.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(1)").addClass("menu_bg");
	$("#menu_x > div > div:eq(10)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(10) a").css("color","#F60");
});

function check(){
	if($("#BankName").val() == ""){
		alert("开户银行名称不能为空！");
		$("#BankName").focus();
		return false;
	}else{
		if($("#BankBranch").val() == ""){
		    alert("开户分行名称不能为空!");
			$("#BankBranch").focus();
			return false;
		}else{
			if($("#BankAccountNumber").val() == ""){
				alert("开户银行账户不能为空！");
				$("#BankAccountNumber").focus();
				return false;
			}else{
				if($("#BankCompellation").val() == ""){
					alert("开户人姓名不能为空！");
					$("#BankCompellation").focus();
					return false;
				}else{
					if(confirm("您确认要添加提款银行吗？") == true){
					    return true;
					}else{
						return false;
					}
				}
			}
		}
	}
}

function DelBank(id){
	if(confirm("您确认要删此银行信息吗？") == true){
	    location.href = "/User_Index_DelBank_id_"+id+".html";
	}
}


function morenselect(){
	if($("#moren").attr("checked") == "checked"){
	    $("#moren").attr("checked",false);
	}else{
		$("#moren").attr("checked",true);
		}
}
</script>
<style type="text/css">
.jbxx table{
	width:100%;
	height:auto;
	}
.jbxx table tr td{
	width:50%;
	height:40px;
	vertical-align:middle;
	text-align:center;
	}
.jbxx a{
	color:#039;
	text-decoration:none;
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
<div><a href="/User_Index_basic.html">基本信息</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_aqxx.html">安全信息</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_mbk.html">密保卡</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_tkyh_banktype_0.html">提现账号设置</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_tksxf.html">手续费</a></div>
<div style="width:20px;">|</div>
<div><a href="/User_Index_dllist.html">登录记录</a></div>
   </div>
 </div>  
 <div id="menu_x_X" style="display:none">
 <div style="text-align:left;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span style="font-weight:bold; color:#F60;">提现账号设置：</span>
 <span><a href="/User_Index_tkyh_banktype_0.html">提款银行</a></span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="/User_Index_tkyh_banktype_1.html">委托提款银行</a></span>
 </div>
 </div>

<div class="xgjcxx">
<div style="border:1px solid #ccc; background-image:url(/Public/User/images/menu_bg_x.jpg); width:1000px; height:40px; line-height:40px; font-size:15px; text-align:left; font-weight:bold; color:#333">
&nbsp;&nbsp;&nbsp;&nbsp;登录记录
</div>
<div style="width:1000px; height:auto; border:1px solid #CCC; border-bottom:0px; border-top:0px;">
<div class="jbxx">
     <table border="0" cellpadding="0" cellspacing="0">
     <tr>
      <td>登录时间</td>
      <td>登录IP地址</td>     
     </tr>
     </table>
    </div>
   <?php $var = '1'; ?>
  
   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="jbxx">
     <table border="0" cellpadding="0" cellspacing="0">
    
       <?php if(($var == 1) AND ($pp == 1)): ?><tr style="background-color:#F9C1D7">
       <td style="text-align:left; padding-left:50px;">
        <span style="color:#F00;">【本次登录】</span>
      <?php else: ?>
           <?php if(($var == 2) AND ($pp == 1)): ?><tr style="background-color:#C8C5FA">
           <td style="text-align:left; padding-left:50px;">
           <span style="color:#00F;">【上次登录】</span>
           <?php else: ?>
           <tr>
           <td style="text-align:left; padding-left:50px;"><?php endif; endif; ?>
      <?php echo ($vo["dldate"]); ?></td>
      <td><?php echo ($vo["ip"]); ?></td>     
     </tr>
     </table>
     <span style="display:none"><?php echo ($var++); ?></span>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
     <div class="jbxx" style="text-align:center; color:#F00; font-size:15px;">
     <?php echo ($page); ?>
    </div>
    
    
    
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