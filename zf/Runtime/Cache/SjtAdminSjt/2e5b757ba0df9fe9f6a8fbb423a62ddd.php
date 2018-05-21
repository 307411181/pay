<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    
	$("#sousuo").click(function(e) {
        
		window.location.href = "SjtAdminSjt_Jilu_Tongji.html?ksjy_date="+$("#ksjy_date").val()+"&jsjy_date="+$("#jsjy_date").val()+"&jylx="+$("#jylx").val()+"&shbh="+$("#shbh").val()+"&ddh="+$("#ddh").val()+"&zfyh="+$("#zfyh").val()+"&zfdk="+$("#zfdk").val();
		
    });
	
});
</script>
</head>

<body>
<form name="Form1" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr>
<td style="text-align:left; padding-left:10px; height:40px; vertical-align:middle;" colspan="4">
交易时间：<input type="text" name="ksjy_date" id="ksjy_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['ksjy_date']); ?>"> 至 <input type="text" name="jsjy_date" id="jsjy_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['jsjy_date']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--交易状态：
<select name="jyzt">
<option value="">全部</option>
<option value="0">未处理</option>
<option value="1">成功</option>
</select>-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交易类型：
<select name="jylx" id="jylx">
<option value="">全 部</option>
<option value="0">网银订单</option>
<option value="1">网银充值</option>
<option value="2">点卡订单</option>
<option value="3">点卡收款</option>
<option value="5">平台转账</option>
</select>
<script type="text/javascript">
$("#jylx").val(<?php echo ($_GET['jylx']); ?>);
</script>
</td>
</tr>
<tr>
<td style="text-align:left; padding-left:10px; height:40px; vertical-align:middle;" colspan="4">
商户编号：<input type="text" name="shbh" id="shbh" style="width:100px;" value="<?php echo ($_GET['shbh']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
订单号：<input type="text" name="ddh" id="ddh" style="width:150px;" value="<?php echo ($_GET['ddh']); ?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
支付银行：
<select name="zfyh" id="zfyh">
<option value="">全部</option>
<?php if(is_array($banklist)): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["BankName"]); ?>"><?php echo ($vo["BankName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<script type="text/javascript">
$("#zfyh").val('<?php echo ($_GET['zfyh']); ?>');
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
支付点卡：
<select name="zfdk" id="zfdk">
<option value="">全部</option>
<?php if(is_array($paylist)): $i = 0; $__LIST__ = $paylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["GameName"]); ?>"><?php echo ($vo["GameName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<script type="text/javascript">
$("#zfdk").val('<?php echo ($_GET['zfdk']); ?>');
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="搜 索" id="sousuo">
</td>
</tr>
<tr>
<td style="text-align:left; padding-left:10px; height:40px; vertical-align:middle;" colspan="4">&nbsp;

</td>
</tr>
<tr>
<td style="height:40px;" colspan="4">
<span style="font-size:20px; font-weight:bold; color:#00F;">交易时间：<span style="color:#030"><?php echo ($_GET['ksjy_date']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#030"><?php echo ($_GET['jsjy_date']); ?></span></span>
</td>
</tr>

<tr><td colspan="4"><?php echo ($wherestr); ?></td></tr>
<tr>
<td style="height:auto; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
总笔数：<span style="color:#F00"><?php echo ($daynum); ?></span> 笔
</td>

<td style="height:auto; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
总额：<span style="color:#F00"><?php echo ($daymoney); ?></span> 元
</td>

<td style="height:auto; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
实收：<span style="color:#F00"><?php echo ($daysjmoney); ?></span> 元
</td>

<td style="height:auto; width:20%; vertical-align:middle; text-align:center; font-size:20px; font-weight:bold;">
利润：<span style="color:#F00"><?php echo ($daylrmoney); ?></span> 元
</td>

</tr>
</table>
</form>
</body>
</html>