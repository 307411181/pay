<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<style type="text/css">
#listuser{
	margin-top:10px;
	}
#listuser tr td{
	width:100%;
	height:40px;
	text-align:left;
	padding-left:50px;
	}
#listuser input{
	
	color:#369;
	vertical-align:middle;
	}	
</style>
</head>
<base target="_self" />
<body>
<form name="Form" method="post" action="/SjtAdminSjt_ShangHu_tkyheditedit_UserID_<?php echo ($_GET['UserID']); ?>.html">
<div style="width:100%; margin:0px auto; margin-top:10px; text-align:center; height:auto; font-size:20px; font-weight:bold;"><span style="color:#03F">[<?php echo ($UserName); ?>]</span>提款银行
</div>
<table cellpadding="0" cellspacing="0" border="0" id="listuser">

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<input type="hidden" name="UserID" value="<?php echo ($vo["UserID"]); ?>">
<tr>
<td>
开户银行名称：<input type="text" size="30" name="BankName" value="<?php echo ($vo["BankName"]); ?>">
</td>
</tr>
<tr>
<td>
开户分行名称：<input type="text" size="30" name="BankBranch" value="<?php echo ($vo["BankBranch"]); ?>">
</td>
</tr>
<tr>
<td>
开户银行账户：<input type="text" size="30" name="BankAccountNumber" value="<?php echo ($vo["BankAccountNumber"]); ?>">
</td>
</tr>

<tr>
<td>
开户人姓名：<input type="text" size="30" name="BankCompellation" value="<?php echo ($vo["BankCompellation"]); ?>">
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td colspan="2" style="text-align:center;">
<input type="submit" value="确认修改">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重 置">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/SjtAdminSjt_ShangHu_tkyh_UserID_<?php echo ($_GET['UserID']); ?>.html">返 回</a>
</td>
</tr>
</table>
</form>
</body>
</html>