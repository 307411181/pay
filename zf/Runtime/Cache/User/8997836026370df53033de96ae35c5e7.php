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
	$("#menu div:eq(1)").addClass("menu_bg");
	$("#menu_x > div > div:eq(4)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(4) a").css("color","#F60");
});

function qytymbk(){
	var msgstr = "";
	if($("#mbk").val()==0){
         msgstr = "您确认要停用密保卡吗？";
	}else{
		 msgstr = "您确认要启用密保卡吗？";
	}
	
	if(confirm(msgstr)){
		
		 $.ajax({
			  type:'POST',
			  url:'/User_Index_mbkqty.html',
			  data:"mbk="+ $("#mbk").val(),
			  dataType:'text',
			  success:function(str){
				    if(str == "ok"){
						alert("修改成功！");
						if($("#mbk").val() == 1){
							$(".mbkcontent").show();
						}else{
							$(".mbkcontent").hide();
							}
					}else{
						alert("修改失败，请稍后再试！");
					}
				  },
			  error:function(){
				  alert("处理失败！");
				  }	
			  });
	
	}
}

function scmbk(){
	
	if(confirm("您确认要重新生成新的密保卡吗？")){
		
		location.href = "/User_Index_scmbk.html";
		
	}
}

</script>
<style type="text/css">
.tksxftab{
	width:100%;
	height:auto;
	border-left:1px solid #CCC;
	border-top:0px solid #CCC;
	margin:0px auto;
	font-size:13px;
	
	}
.tksxftab tr td{
	width:33.5%;
	height:50px;
	vertical-align:middle;
	text-align:center;
	font-size:20px;
	/*color:#27a1d6;*/
	font-weight:bold;
	border-right:1px solid #CCC;
	border-bottom:1px solid #CCC;
	}	
.tksxftab tr td span{
	color:#F00;
	}
	
#mbktab{
	width:500px;
	height:auto;
	border-left:1px solid #000;
	border-bottom:1px solid #000;
	margin:0px auto;
	}		
#mbktab tr td{
	width:50px;
	height:50px;
	border-right:1px solid #000;
	border-top:1px solid #000;
	}
	
.tdmbk{
	/*color:#27a1d6;*/
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
&nbsp;&nbsp;&nbsp;&nbsp;密保卡
</div>
 
<div style="width:1000px; height:auto; margin:0px auto;">
<table border="0" cellpadding="0" cellspacing="0" class="tksxftab">
<tr>
<td style="font-size:18px; color:#666; font-weight:bold; text-align:left; padding-left:20px;"> 
是否启动用密保卡：
<select name="mbk" id="mbk" style="font-size:20px;">
   <option value="1">启用</option>
   <option value="0">停用</option>
</select>
<script type="text/javascript">
$("#mbk").val(<?php echo ($mbk); ?>);
</script>
&nbsp;&nbsp;&nbsp;&nbsp;
<img src="/Public/User/images/bc.gif" style="vertical-align:middle; cursor:pointer;" onclick="qytymbk();">
</td>
</tr>

<tr class="mbkcontent">
<td>
<img src="/Public/User/images/scmbk.gif" style="vertical-align:middle; cursor:pointer;" onclick="scmbk()">
</td>
</tr>

<tr class="mbkcontent">
<td style="height:auto; text-align:center;">
     <br />
     <?php if($A1 != ''): ?><table border="0" cellpadding="0" cellspacing="0" id="mbktab">
     <tr>
     <td>&nbsp;</td>
     <td style="color:#27a1d6;">A</td>
     <td style="color:#27a1d6;">B</td>
     <td style="color:#27a1d6;">C</td>
     <td style="color:#27a1d6;">D</td>
     <td style="color:#27a1d6;">E</td>
     <td style="color:#27a1d6;">F</td>
     <td style="color:#27a1d6;">G</td>
     <td style="color:#27a1d6;">H</td>
     <td style="color:#27a1d6;">I</td>
     </tr>
     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
     <td style="color:#27a1d6;">1</td>
     <td class="tdmbk"><?php echo ($vo["A1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H1"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I1"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">2</td>
     <td class="tdmbk"><?php echo ($vo["A2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H2"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I2"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">3</td>
     <td class="tdmbk"><?php echo ($vo["A3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H3"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I3"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">4</td>
     <td class="tdmbk"><?php echo ($vo["A4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H4"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I4"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">5</td>
     <td class="tdmbk"><?php echo ($vo["A5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H5"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I5"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">6</td>
     <td class="tdmbk"><?php echo ($vo["A6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H6"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I6"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">7</td>
     <td class="tdmbk"><?php echo ($vo["A7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H7"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I7"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">8</td>
     <td class="tdmbk"><?php echo ($vo["A8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H8"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I8"]); ?></td>
     </tr>
      <tr>
     <td style="color:#27a1d6;">9</td>
     <td class="tdmbk"><?php echo ($vo["A9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["B9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["C9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["D9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["E9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["F9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["G9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["H9"]); ?></td>
     <td class="tdmbk"><?php echo ($vo["I9"]); ?></td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     </table>
     <br />
<div style="width:100%; height:40px; line-height:40px;">
<img src="/Public/User/images/ncwtp.gif" onclick="javascript:window.open('/User_Index_ncwmbk.html')">
</div><?php endif; ?>   
</td>
</tr>
</table>
<?php if($mbk == 0): ?><script type="text/javascript">
$(".mbkcontent").hide();
</script><?php endif; ?>
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