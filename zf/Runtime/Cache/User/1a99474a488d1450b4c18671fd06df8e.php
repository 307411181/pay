<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<element>
	<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport"
				content="width=device-width, initial-scale=1">
					<title><?php echo C("WEB_NAME");?>-商户中心</title>
			<link rel="stylesheet" type="text/css"
				href="public/css/bootstrap.min.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/metisMenu.min.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/dataTables.bootstrap.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/sb-admin-2.css" />
						<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css?v=1483670719" rel="stylesheet">
				
		</head>
		<body style="margin-top: -20px">
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
  <li><a href="/Index_regstep.html?regcode=<?php echo ($_SESSION['UserID']); ?>&regtype=1" target="_blank">注册下级商户</a></li>
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
				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header">
								下级管理
								</h1>
						</div><!-- /.col-lg-12 -->
					</div>
					<div class="panel panel-default">
						<div class="panel-heading"> 
					 
						<table class="table table-striped table-bordered table-hover text-center">
							   <thead>
    <tr>
	  <th>用户名</th>
   <th>姓名</th>
   <th>状态</th>
   <th>费率</th>
   <th>账户余额</th>
   <th>今日订单数量</th>
   <th>今日订单金额</th>
   <th>今日提成</th>
   <th>总共提成</th>
   <th>订单记录</th>
	   </tr>
  </thead>
  <tbody>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($vo["UserName"]); ?></td>
   <td><?php echo ($vo["Compellation"]); ?></td>
   <td><?php switch($vo["status"]): case "0": ?>未激活<?php break;?>
<?php case "1": ?>正常<?php break;?>
<?php case "2": ?><font style="color:#F00">锁定</font><?php break; endswitch;?></td>
<td><?php echo (getfl($vo['id'])); ?></td>
<td style="color:#060; font-weight:bold;">￥<span style="font-weight:normal"><?php echo (getyue($vo['id'])); ?></span></td>
 <td><?php echo (getdaynum($vo['id'])); ?></td>
    <td style="color:#060; font-weight:bold;">￥<span style="font-weight:normal"><?php echo (getmoney($vo['id'])); ?></span></td>
    <td style="color:#060; font-weight:bold;">￥<span style="font-weight:normal"><?php echo (getticheng($vo['id'])); ?></span></td>
    <td style="color:#060; font-weight:bold;">￥<span style="font-weight:normal"><?php echo (getzticheng($vo['id'])); ?></span></td>
   <td><a href="<?php echo U('Index/cxjlxj','id='.$vo['id']);?>" style="color:#003">查询</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
						</table>
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
			<script type="text/javascript">
				$(document).ready(function(e) {

				$("#SearchButton").click(function(e) {
				window.location.href =
				"/User_Index_zjbdjl.html?sq_date="+$("#sq_date").val()+"&sq_date_js="+$("#sq_date_js").val()+"&pagepage="+$("#pagepage").val()+"&lx="+$("#lx").val();
				});

				});
			</script>
			<script type="text/javascript">
				function tjsh(){
				if(confirm("请确保完善了基本资料后再提交审核，提交审核后不能再修改基本信息！") == true){
				location.href = "/User_Index_shjksh.html"; } }
			</script>
		</body>
	</html>
</element>