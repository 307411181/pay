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
	$("#menu_x div span:eq(3) a").css({"color":"#F60","font-weight":"bold"});
	$("#menu_x_X").show();
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
					if(confirm("您确认要修改提款银行吗？") == true){
					    return true;
					}else{
						return false;
					}
				}
			}
		}
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
</head>

<body>



<form name="Form1" method="post" action="/User_Index_AddEditthyh_banktype_<?php echo ($_GET['banktype']); ?>.html" onsubmit="return check()">
<!-------------------------------------------------提款银行-------------------------------------------------------->
<div class="xgjcxx">
<div style="border:1px solid #ccc; background-image:url(/Public/User/images/menu_bg_x.jpg); width:1000px; height:40px; line-height:40px; font-size:15px; text-align:left; font-weight:bold; color:#333">
&nbsp;&nbsp;&nbsp;&nbsp;
<?php if($banktype == 0): ?>编辑提款银行信息
<?php else: ?>
编辑委托提款银行信息<?php endif; ?>
</div>
<div style="width:1000px; height:auto; border:1px solid #CCC;">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="jbxx"><input type="hidden" name="id" id="id" value="<?php echo ($vo["id"]); ?>">
    开户银行名称：<input type="text" class="input_text" name="BankName" id="BankName" style="width:300px;" value="<?php echo ($vo["BankName"]); ?>">
    
    <?php if($banktype == 0): ?>&nbsp;&nbsp;&nbsp;&nbsp;<span class="tsts"><input type="checkbox" name="moren" id="moren" value="1" style="vertical-align:middle" /> <span style="cursor:pointer;" onclick="javascript:morenselect();">默认提款银行</span></span>
    <script type="text/javascript">
	<?php if($vo["moren"] == 1): ?>$("#moren").attr("checked",true);<?php endif; ?>
    </script><?php endif; ?>
    
    </div>
    <div class="jbxx">
    开户分行名称：<input type="text" class="input_text" name="BankBranch" id="BankBranch" style="width:300px;" value="<?php echo ($vo["BankBranch"]); ?>" />
    &nbsp;&nbsp;&nbsp;&nbsp;<span class="tsts"></span>
    </div>
     <div class="jbxx">
      开户支行名称：<input type="text" class="input_text" name="zhihang" id="zhihang"  value="<?php echo ($vo["zhihang"]); ?>"style="width:300px;">
      &nbsp;&nbsp;&nbsp;&nbsp;<span class="tsts"></span>
     </div>
     <div class="jbxx">
      开户银行账户：<input type="text" class="input_text" name="BankAccountNumber" id="BankAccountNumber" style="width:300px;" value="<?php echo ($vo["BankAccountNumber"]); ?>" />
      &nbsp;&nbsp;&nbsp;&nbsp;<span class="tsts"></span>
     </div>
    <div class="jbxx">
     &nbsp;&nbsp;&nbsp;&nbsp;开户人姓名：
     <?php if($banktype == 0): ?><!----------------------------------------------------------------------------------->
     <span style="color:#000"><?php echo ($vo["BankCompellation"]); ?></span>
     <input type="hidden" class="input_text" name="BankCompellation" id="BankCompellation" style="width:300px;"  value="<?php echo ($vo["BankCompellation"]); ?>" />
     &nbsp;&nbsp;&nbsp;&nbsp;<span class="tsts"></span>
     <!----------------------------------------------------------------------------------->
     <?php else: ?>
     <input type="text" class="input_text" name="BankCompellation" id="BankCompellation" style="width:300px;"  value="<?php echo ($vo["BankCompellation"]); ?>" /><?php endif; ?>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="jbxx" style="text-align:center; height:50px;">
 
       
       
       
        <input type="image" src="/Public/User/images/qrxg.gif" style="vertical-align:middle">
      &nbsp;&nbsp;&nbsp;&nbsp;
    <img src="/Public/User/images/chongzhi.gif" onclick="javascript:document.Form1.reset()" style="vertical-align:middle; cursor:pointer;">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="/Public/User/images/fh.gif" onclick="javascript:history.go(-1);" style="vertical-align:middle; cursor:pointer;">
    </div>
    
</div>


</div>
<!-------------------------------------------------提款银行-------------------------------------------------------->
</form>



</body>
</html>