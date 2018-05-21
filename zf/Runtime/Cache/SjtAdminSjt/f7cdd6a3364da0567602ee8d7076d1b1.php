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
    $("#SearchButton").click(function(e) {
        window.location.href = "/SjtAdminSjt_Jilu_ddjl.html?sq_date="+$("#sq_date").val()+"&sq_date_js="+$("#sq_date_js").val()+"&pagepage="+$("#pagepage").val()+"&shbh="+$("#shbh").val();
    });
	
	 $("#xzxz").click(function(e) {
        if(parseInt($(this).attr("xz")) == 0){
		    $(this).attr("xz",1);
			$("#listuser input[type='checkbox']").attr("checked",true);
		}else{
			$(this).attr("xz",0);
			$("#listuser input[type='checkbox']").attr("checked",false);
		}
    });
});


</script>
<style type="text/css">
.selectclass{
	width:100%;
	height:50px;
	line-height:50px;
	text-align:center;
	text-align:left;
	font-size:15px;
	margin:0px auto;
	border-bottom:1px dashed #999999;
	}
.selectclass table{
	width:100%;
	height:50px;
	}

.selectclass table tr td{
	width:9%;
	height:50px;
	text-align:center;
	vertical-align:middle;
	font-size:12px;
	}	
</style>
</head>

<body>
  
      <div class="selectclass" style="height:auto;">
      <table border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td>合计总额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($hjje); ?></span> 元&nbsp;(按搜索条件合计，默认全部)</td>
     
      </tr>
      </table>
      </div>
<div class="listmenu" style="text-align:right;">
商户编号：<input type="text" name="shbh" id="shbh" size="5" value="<?php echo ($shbh); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
交易时间（开始）：<input type="text" name="sq_date" id="sq_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['sq_date']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
交易时间（结束）：<input type="text" name="sq_date_js" id="sq_date_js" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['sq_date_js']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;

每页：
<select name="pagepage" id="pagepage">
<option value="10">10条</option>
<option value="15">15条</option>
<option value="20">20条</option>
<option value="25">25条</option>
<option value="30">30条</option>
<option value="35">35条</option>
<option value="40">40条</option>
<option value="45">45条</option>
<option value="50">50条</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="搜 索" id="SearchButton">
<script type="text/javascript">
$("#pagepage").val(<?php echo ($_GET['pagepage']); ?>);
</script>
</div>
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr style="background-color:#5d7b9d; color:#fff;">
<td id="xzxz" xz="0" style="cursor:pointer;">选择</td>
<td>商户编号</td>
<td>订单号</td>
<td>交易时间</td>
<td>交易金额</td>

</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><input type="checkbox" class="xzxz" name="xz" value="<?php echo ($vo["id"]); ?>"></td>

<td><?php echo ($vo["Sjt_MerchantID"]+10000); ?></td>
<td style="color:#0C0">
<?php echo ($vo["Sjt_TransID"]); ?>
&nbsp;</td>
<td style="color:#F30"><?php echo ($vo["datetime"]); ?>&nbsp;</td>
<td><?php echo ($vo["Sjt_factMoney"]); ?>&nbsp;</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td colspan="20"><?php echo ($page); ?></td>
</tr>
</table>
</body>
</html>