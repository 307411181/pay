<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<element>
	<html>
		<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商户中心</title>
 
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/User/js/js.js"></script>
	<link rel="stylesheet" type="text/css"
				href="public/css/bootstrap.min.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/metisMenu.min.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/dataTables.bootstrap.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/sb-admin-2.css" />
						<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css?v=1483670719" rel="stylesheet">
<script type="text/javascript">
 

function check(){
    if($("#fl").val() == ""){
	     alert("费率不能为空！");
		 return false;
	}
}

function clearNoNum(obj)
{
	//先把非数字的都替换掉，除了数字和.
	obj.value = obj.value.replace(/[^\d.]/g,"");
	//必须保证第一个为数字而不是.
	obj.value = obj.value.replace(/^\./g,"");
	//保证只有出现一个.而没有多个.
	obj.value = obj.value.replace(/\.{2,}/g,".");
	//保证.只出现一次，而不能出现两次以上
	obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
}
</script>
<style type="text/css">
#yggl{
	width:100%;
	height:auto;
	}
#yggl tr td{
	height:40px;
	text-align:center;
	vertical-align:middle;
	font-size:13px;
	}	
</style>
</head>

<body>
 
<div id="wrapper"><!-- Navigation -->
				<nav class="navbar navbar-default navbar-static-top"
					role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle"
							data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">
								Toggle navigation
							</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/User"><?php echo C("WEB_NAME");?></a>
					</div><!-- /.navbar-header -->
					<ul class="nav navbar-top-links navbar-right"><!-- /.dropdown -->
						<li class="dropdown">
							<a class="dropdown-toggle"
								data-toggle="dropdown" href="#">
								<?php echo ($_SESSION['UserName']); ?>	
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<a href="/User_Index_aqxx.html">
										<i class="fa fa-user fa-fw"></i>
										安全设置
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a
										href="/User_Index_ExitLogin.html">
										<i
											class="fa fa-sign-out fa-fw">
										</i>
										退出登录
									</a>
								</li>
							</ul><!-- /.dropdown-user -->
						</li><!-- /.dropdown -->
					</ul><!-- /.navbar-top-links -->
                                             <div class="navbar-default sidebar"  role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li> <a href="/User"> <i class="fa fa-dashboard fa-fw"> </i> 首页 </a> </li>
      <li> <a href="#"> <i class="fa fa-bar-chart-o fa-fw"> </i> 交易管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
         <li><a href="User_Index_wyjyjl.html"> 交易记录 </a> </li>
         <li><a href="User_Index_jltj.html"> 记录统计 </a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li> <a href="#"> <i class="fa fa-rmb fa-fw"></i> 财务管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
         <li><a href="User_Index_tkyh_banktype_0.html"> 银行设置 </a> </li>
         <li><a href="User_Index_tktx.html"> 申请提现 </a> </li>
         <li><a href="User_Index_tkjl.html"> 提现记录 </a> </li>
         <li><a href="User_Index_zdjsb.html"> 自动提款记录 </a> </li>
         <li><a href="User_Index_zjbdjl.html"> 资金记录 </a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
	  <li>
	  <?php switch($_SESSION['UserType']): case "5": ?><li>  <a href="#"> <i class="fa fa-user fa-fw"></i> 分润管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
   <li><a href="/User_Index_tjyg.html"> 分润管理 </a> </li>
  
	</ul>
        <!-- /.nav-second-level -->
      </li><?php break;?>
    <?php default: endswitch;?>
	  </li>
      <li>
      <a href="#"> <i class="fa fa-user fa-fw"></i> 用户管理 <span class="fa arrow"></span> </a>
      <ul class="nav nav-second-level">
       <li><a href="User_Index_shjk.html"> 接口信息 </a> </li>
       <li><a href="User_Index_shtd.html"> 通道信息 </a> </li>
        <li><a href="User_Index_skym.html">收款主页</a>
        </li>
       <li><a href="User_Index_sjtgg.html"> 平台公告 </a> </li>
      </ul>
      <!-- /.nav-second-level -->
      </li>
      <li> <a href="#"> <i class="fa fa-cogs fa-fw"></i> 系统管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
         <li><a href="/User_Index_dllist.html"> 登录记录 </a> </li>
         <li><a href="/User_Index_aqxx.html"> 安全设置 </a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>

                                             <!-- /.navbar-static-side -->
				</nav>
<!-------------------------------------------------基本信息-------------------------------------------------------->
<div id="page-wrapper">

<div class="xgjcxx">
 <div class="row">
						<div class="col-lg-12">
							<h3 class="page-header">
								下级费率设置
								</h1>
						</div><!-- /.col-lg-12 -->
					</div>

<div style="width:1000px; height:auto; border:1px solid #CCC; border-top:0px">
<form name="Form1" id="Form1" action="<?php echo U('Index/EditFlEdit');?>" method="post" onsubmit="return check();">
<input type="hidden" id="id" name="id" value="<?php echo ($_GET['id']); ?>">
   <table border="0" cellpadding="0" cellspacing="0" style="width:100%;" id="yggl">
   <tr>
   <td style="font-weight:bold;border-bottom:1px solid #CCC; width:20%;">
   下级商户：
   </td>
    <td style="font-weight:bold;border-bottom:1px solid #CCC; font-size:20px; color:#03F; width:80%; text-align:left; padding-left:10px;">
   <?php echo ($xjUserName); ?>
   </td>
   </tr>
    <tr>
   <td style="font-weight:bold;border-bottom:1px solid #CCC; width:20%;">
   费率：
   </td>
    <td style="font-weight:bold;border-bottom:1px solid #CCC; width:80%; text-align:left; padding-left:10px;">
   <input type="text" name="fl" id="fl" value="<?php echo (round($fl,5)); ?>" style="font-size:20px; color:#F00;" onkeyup="clearNoNum(this)">&nbsp;&nbsp;&nbsp;&nbsp;
   <span style="font-size:13px; color:#F00">您自己的费率为<span style="color:#00F"><?php echo ($sjfl); ?></span>,您设置的下家费率不能比您的费率低</span>
   </td>
   </tr>
   </td>
    <td style="font-weight:bold;border-bottom:1px solid #CCC; text-align:center; color:#F00; font-size:18px;" colspan="2">
    【请注意，下家费率一旦修改成后不能再次修改！】
   </td>
   </tr>
   <tr>
   <td colspan="2">
   <input type="image" src="/Public/User/images/qrxg.gif">&nbsp;&nbsp;&nbsp;&nbsp;
  <a onclick="javascript:location.href='<?php echo U("Index/tjyg");?>'"><img src="/Public/User/images/fh.gif" /></a>
   </tr>
   </table>
   </form>
    
</div>

</div>
</div>


 </div>
 
									<script type="text/javascript"
					src="public/js/jquery.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/bootstrap.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/metisMenu.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/jquery.dataTables.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/dataTables.bootstrap.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/sb-admin-2.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/wyjyjl.js?v=1483670095">
				</script>
</body>
</html>