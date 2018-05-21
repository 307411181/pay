<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
#listuser{
	margin-top:20px;
	}
#listuser tr td{
	height:80px;
	vertical-align:middle;
	}
</style>
</head>

<body>
<form name="Form1" method="post" action="/SjtAdminSjt_Wangguan_wgbankedit.html">
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr>
<td>
请选择系统默认的网银通道：
<input type="hidden" value="<?php echo ($id); ?>" name="id">
<select name="DefaultBank" id="DefaultBank">
<?php if(is_array($listbank)): $i = 0; $__LIST__ = $listbank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bank): $mod = ($i % 2 );++$i;?><option value="<?php echo ($bank["id"]); ?>"><?php echo ($bank["myname"]); ?>(网银)</option><?php endforeach; endif; else: echo "" ;endif; ?>
<option value="10001">银联无卡支付</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="确认修改">
<script type="text/javascript">
$("#DefaultBank").val(<?php echo ($DefaultBank); ?>);
</script>
</td>
</tr>
</table>

</form>
</body>
</html>