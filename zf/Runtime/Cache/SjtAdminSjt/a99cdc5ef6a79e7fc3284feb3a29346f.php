<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">
function xiugai(id,mythis){
	
	defaultname = $(mythis).val();
	
	$.ajax({
					type:'POST',
					url:'/SjtAdminSjt_Wangguan_wggamexg.html',
					data:"id="+id+"&defaultname="+defaultname,
					dataType:'text',
					success:function(str){
						
						},
					error:function(){
						alert("处理失败！");
						}	
					});
}
</script>
<style type="text/css">
#listuser{
	margin-top:20px;
	}
#listuser tr td{
	height:auto;
	vertical-align:middle;
	}
.tabdiv{
	width:33%;
	height:50px;
	line-height:50px;
	float:left;
	color:#060;
	}	
</style>
</head>

<body>
<form name="Form1" method="post" action="/SjtAdminSjt_Wangguan_wgbankedit.html">
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr>
<td>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="tabdiv">
<?php echo ($vo["GameName"]); ?>&nbsp;&nbsp;
<select name="default<?php echo ($vo["id"]); ?>" id="default<?php echo ($vo["id"]); ?>" onchange="xiugai(<?php echo ($vo["id"]); ?>,this)">
  <option value="">无</option>
  <!--<option value="baofu">宝付(点卡)</option>-->
  <option value="yibao">易宝(点卡)</option>
   <option value="qiling">70卡(点卡)</option>
</select>
</div>
<script type="text/javascript">
$("#default<?php echo ($vo["id"]); ?>").val("<?php echo ($vo["default"]); ?>");
</script><?php endforeach; endif; else: echo "" ;endif; ?>
</td>
</tr>

</table>

</form>
</body>
</html>