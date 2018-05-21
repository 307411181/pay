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
        window.location.href = "/SjtAdminSjt_Jilu_zjjejl.html?sq_date="+$("#sq_date").val()+"&sq_date_js="+$("#sq_date_js").val()+"&pagepage="+$("#pagepage").val()+"&shbh="+$("#shbh").val()+"&lx="+$("#lx").val();
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
      <td>当日减金数量：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($drjjsl); ?></span> 笔</td>
      <td>当日减金金额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($drjjje); ?></span> 元</td>
      <td>当日增金数量：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($drzjsl); ?></span> 笔</td>
      <td>当日增金金额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($drzjje); ?></span> 元</td>
      </tr>
       <tr>
      <td>昨日减金数量：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($zrjjsl); ?></span> 笔</td>
      <td>昨日减金金额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($zrjjje); ?></span> 元</td>
      <td>昨日增金数量：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($zrzjsl); ?></span> 笔</td>
      <td>昨日增金金额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($zrzjje); ?></span> 元</td>
      </tr>
      </table>
      </div>
<div class="listmenu" style="text-align:right;">
商户编号：<input type="text" name="shbh" id="shbh" size="5" value="<?php echo ($shbh); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
交易时间（开始）：<input type="text" name="sq_date" id="sq_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['sq_date']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
交易时间（结束）：<input type="text" name="sq_date_js" id="sq_date_js" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['sq_date_js']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
类型：
<select name="lx" id="lx">
  <option value="">全部</option>
  <option value="1">增加金额</option>
  <option value="2">减少金额</option>
  <option value="3">冻结金额</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;
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
$("#lx").val(<?php echo ($_GET['lx']); ?>);
</script>
</div>
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr style="background-color:#5d7b9d; color:#fff;">
<td id="xzxz" xz="0" style="cursor:pointer;">选择</td>
<td>商户编号</td>
<td>时间</td>
<td>金额</td>
<td>类型</td>
<td>操作备注</td>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><input type="checkbox" class="xzxz" name="xz" value="<?php echo ($vo["id"]); ?>"></td>

<td><?php echo ($vo["UserID"]+10000); ?></td>
<td><?php echo ($vo["datetime"]); ?>&nbsp;</td>
<td style="font-size:20px;">
<?php if($vo["jj"] > 0): ?><span style="color:#0F0; font-weight:bold;"> +
<?php else: ?>
<span style="color:#F00; font-weight:bold;"> -<?php endif; ?>
<?php echo ($vo["money"]); ?>
</span>
</td>
<td>
<?php if($vo["jj"] > 0): ?><font style="color:#0F0">增加金额</font>
<?php else: ?>
   <?php if($vo["lr"] == 1): ?>资金冻结
   <?php else: ?>
    <font style="color:#F00">减少金额</font><?php endif; endif; ?>
</td>
<td><?php echo ($vo["content"]); ?>&nbsp;</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td colspan="20"><?php echo ($page); ?></td>
</tr>
</table>
</body>
</html>