<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	
	 $("#xzxz").click(function(e) {
        if(parseInt($(this).attr("xz")) == 0){
		    $(this).attr("xz",1);
			$("#listuser input[type='checkbox']").attr("checked",true);
		}else{
			$(this).attr("xz",0);
			$("#listuser input[type='checkbox']").attr("checked",false);
		}
    });
	
	
    $("#shanchu").click(function(e) {
        if(confirm("您确认要批量删除您勾选的商户吗？")){
			
         var listcheckbox = "0";
	     $(".xzxz").each(function(index, element) {
			 if($(this).attr("checked")){
           
				 listcheckbox = listcheckbox + "," + $(this).val();
		     }
        });
		
		/////////////////////////////////////////////////////////
		$.ajax({
			  type:'POST',
			  url:'/SjtAdminSjt_ShangHu_Deletesh.html',
			  data:"UserIDList="+listcheckbox,
			  dataType:'text',
			  success:function(str){
				 if(str == "ok"){
					 alert("已成功批量删除所勾选的商户！");
					 location.href = location.href;
					 }
				  },
			  error:function(){
				  alert("处理失败！");
				  }	
			  });
		////////////////////////////////////////////////////////
			
	   }
    });
	
	
	
	$("#plfsjh").click(function(e) {    //重置登录密码
        if(confirm("您确认要批量重新发送激活邮吗？")){
         var listcheckbox = "";
	     $(".xzxz").each(function(index, element) {
			 if($(this).attr("checked")){
           
				 listcheckbox = listcheckbox + $(this).val() + "|";
		     }
        });
		if(listcheckbox == ""){
			alert("没有可重新发送激活邮件的商户");
			location.href = location.href;
		}else{
			arraylist = listcheckbox.split("|");
			plfsjh(0,arraylist);
		
		}
	   }
    });
	
});
  
  
  
function plfsjh(listid,arraylist){
	if(listid < arraylist.length){
		
		 $.ajax({
			  type:'POST',
			  url:'/SjtAdminSjt_ShangHu_JiHuoEmail.html',
			  data:"UserID="+arraylist[listid],
			  dataType:'text',
			  success:function(str){
				     listid = listid + 1;
				     plfsjh(listid,arraylist);
				  },
			  error:function(){
				  alert("处理失败！");
				  }	
			  });
	}else{
		alert("已成功批量重新发送激活邮件，请提示商户注意查收！");
	    location.href = location.href;
	}
}
  
</script>
</head>

<body>
<div class="listmenu">
<input type="button" value="删 除" id="shanchu">
<input type="button" value="重新发送激活邮件" id="plfsjh">

</div>

<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr style="background-color:#5d7b9d; color:#fff;">
<td id="xzxz" xz="0" style="cursor:pointer;">选择</td>
<td>用户名</td>
<td>商户类型</td>
<td>注册时间</td>
<td>状态</td>
<td>手动激活</td>

</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td style="width:5%;"><input type="checkbox" class="xzxz" name="xz" value="<?php echo ($vo["id"]); ?>"></td>
<td><?php echo ($vo["UserName"]); ?>&nbsp;</td>
<td>
<?php if($vo["UserType"] == 0): ?>个人
<?php else: ?>
企业<?php endif; ?>&nbsp;
</td>
<td>
<?php echo ($vo["RegDate"]); ?>
</td>
<td>
<?php switch($vo["status"]): case "0": ?>未激活<?php break;?>
<?php case "1": ?>正常<?php break;?>
<?php case "2": ?><font style="color:#F00">锁定</font><?php break; endswitch;?>
</td>
<td>
<a href="http://<?php echo C("WEB_URL");?>/Index_Activate_id_<?php echo ($vo["id"]); ?>_activate_<?php echo ($vo["activate"]); ?>.html" target="_blank">手动激活</a>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr style="font-size:14px;"><td colspan="6"><?php echo ($page); ?>&nbsp;</td></tr>
</table>
</body>
</html>