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
		<script type="text/javascript" src="/Public/My97DatePicker/WdatePicker.js"></script>

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
			<!--主体开始-->
			<div class="xgjcxx">
<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header">
								【<?php echo ($UserName); ?>】网银交易记录&nbsp;&nbsp;&nbsp;&nbsp;<img src="/Public/User/images/fh.gif" style="cursor:pointer; vertical-align:middle;" onclick="javascript:location.href='<?php echo U("Index/tjyg");?>'">
								</h1>
						</div><!-- /.col-lg-12 -->
					</div>
					
 
	<div class="panel panel-default">
<div id="ntj">

  
  <div id="txcontent">
      
      
      <div class="selectclass" style="height:auto;">
 	<table class="table table-striped table-bordered table-hover text-center">
      <tr>
      <td>当日总额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($daymoney); ?></span> 元</td>
      <td>当日实收金额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($daysjmoney); ?></span> 元</td>
      <td>当日成功订单：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($daynum); ?></span> 笔</td>
      <td>当日提成：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($daytjmoney); ?></span> 元</td>
      </tr>
      <tr>
      <td>昨日总额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($zmoney); ?></span> 元</td>
      <td>昨日实收金额：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($zsjmoney); ?></span> 元</td>
      <td>昨日成功订单：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($znum); ?></span> 笔</td>
      <td>昨日提成：<span style="font-size:20px; color:#F00; font-weight:bold;"><?php echo ($ztjmoney); ?></span> 元</td>
      </tr>
      </table>
      </div>
      
      <div class="selectclass" style="text-align:right;">
交易时间（开始）：<input type="text" name="sq_date" id="sq_date" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['sq_date']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
交易时间（结束）：<input type="text" name="sq_date_js" id="sq_date_js" class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',isShowClear:false,readOnly:false})" style="width:100px;" value="<?php echo ($_GET['sq_date_js']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;成交金额：<span style="color:#F00"><?php echo ($sousuojymoney); ?></span> 元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提成：<span style="color:#F00"><?php echo ($sousuotc); ?></span> 元&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="搜 索" id="SearchButton">&nbsp;&nbsp;&nbsp;&nbsp;

</div>
     
   <div class="selectclass">
	<table class="table table-striped table-bordered table-hover text-center">
	  <thead>
   <tr style="color:#69C; font-weight:bold;">
   <th>支付方式</th>
   <th>商户订单号</th>
  <th>成功时间</th>
   <th>成功金额</th>
   <th>实收金额</th>
  <th>提成金额</th>
   <th>类型</th>
   <th>状态</th>
   </tr>

    </thead>
  <tbody>
 
     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="selectclass">
      <table border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td style="width:12%;"><?php echo ($vo["bankname"]); ?></td>
      <td style="width:16%;"><?php echo ($vo["TransID"]); ?></td>
      <td style="width:12%;"><?php echo ($vo["TradeDate"]); ?></td>
      <td style="width:12%;"><?php echo ($vo["trademoney"]); ?></td>
      <td style="width:12%;"><?php echo ($vo["OrderMoney"]); ?></td>
      <td style="width:12%;"><?php echo ($vo["TcMoney"]); ?></td>
      <td style="width:12%;">
       <?php if($vo["typepay"] == 0): ?>订单
   <?php else: ?>
   充值<?php endif; ?>
      </td>
      <td style="width:12%;">
       <?php if($vo["Zt"] == 1): ?>成功
  <?php else: ?>
  未处理<?php endif; ?>
      </td>
     
      </tr>
      </table>
      
     
      </div><?php endforeach; endif; else: echo "" ;endif; ?> 
      <div class="selectclass" style="text-align:center;">
      <?php echo ($page); ?>
      </div>
	    </tbody>
						</table>
  </div>
  
</div>
</div>

</div>
<!--主体结束-->
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
			<script type="text/javascript">
$(document).ready(function(e) {
 $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(5)").addClass("menu_bg");
	$("#menu_x > div > div:eq(0)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(0) a").css("color","#F60");
	$(".tjzp").click(function(e) {
        $(this).next("span").show();
		$(this).hide();
    });
	
	$("#SearchButton").click(function(e) {
        if($("#sq_date").val() == "" || $("#sq_date_js").val() == ""){
			alert("开始时间或结束时间不能为空！");
		}else{
			window.location.href = "<?php echo U("Index/cxjlxj");?>?id=<?php echo ($_GET['id']); ?>&sq_date="+$("#sq_date").val()+"&sq_date_js="+$("#sq_date_js").val();
		}
    });
});
</script> 
		</body>
	</html>
</element>