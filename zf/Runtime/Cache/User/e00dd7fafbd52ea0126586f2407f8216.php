<?php if (!defined('THINK_PATH')) exit();?><element>
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>商户中心-<?php echo C("WEB_NAME");?></title>
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="public/css/metisMenu.min.css" />
  <link rel="stylesheet" type="text/css" href="public/css/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="public/css/sb-admin-2.css" />
  <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" />
  </head>
  <body style="margin-top: -20px">
  <div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top"
					role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle"
							data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="/User"><?php echo C("WEB_NAME");?></a> </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
      <!-- /.dropdown -->
      <li class="dropdown"> <a class="dropdown-toggle"
								data-toggle="dropdown" href="#"> <?php echo ($_SESSION['UserName']); ?> <i class="fa fa-caret-down"></i> </a>
        <ul class="dropdown-menu dropdown-user">
          <li> <a href="/User_Index_aqxx.html"> <i class="fa fa-user fa-fw"></i> 安全设置 </a> </li>
          <li class="divider"></li>
          <li> <a
										href="/User_Index_ExitLogin.html"> <i
											class="fa fa-sign-out fa-fw"> </i> 退出登录 </a> </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
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
      首页
      </h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <div class="panel panel-default">
    <div class="panel-heading"><span> 商户ID： <strong><?php echo ($_SESSION["UserID"]+10000); ?></strong> 

 (
      <?php if($zt == 0): ?>未审核 	<button type="button"
								onclick="javascript:tjsh()" class="btn btn-primary">
								审核申请
							</button>
        <?php elseif($zt == 1): ?>
        审核中
        <?php elseif($zt == 2): ?>
        已审核<?php endif; ?>
      )</span>
	  <span>  
  <?php switch($_SESSION['UserType']): case "5": ?>代理推广链接：<a href="/Index_regstep.html?regcode=<?php echo ($_SESSION['UserID']); ?>&regtype=1" target="_blank">http://<?php echo C("WEB_URL");?>/Index_regstep.html?regcode=<?php echo ($_SESSION['UserID']); ?>&regtype=1</a>【发送链接给下级注册】<?php break; endswitch;?> </span>
	 </div>
    <div class="panel-body">
	

      <div class="list-group"> <a href="#"
									class="list-group-item disabled"> 平台公告 </a>
        <?php if(is_array($listgg)): $i = 0; $__LIST__ = $listgg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/User_Index_sjtggshow_newsid_<?php echo ($vo["id"]); ?>.html" class="list-group-item" ><?php echo ($vo["title"]); ?> <span style="float: right;"> <?php echo ($vo["datetime"]); ?> </span> </a><?php endforeach; endif; else: echo "" ;endif; ?>
        <a href="/User_Index_sjtgg.html"
									class="list-group-item" style="text-align: right;"> 更多 </a> </div>
    </div>
    <div class="panel-footer"> 当日订单数量： <strong></strong><?php echo ($dayorder); ?>
      笔&nbsp;&nbsp;/&nbsp;&nbsp;当前余额:<?php echo ($Money); echo ($daymoney); ?> <strong></strong> 元&nbsp;&nbsp;/&nbsp;&nbsp;银行卡：<?php echo ($BankName); ?> <strong></strong> &nbsp;&nbsp;/&nbsp;&nbsp;已提现金额:<?php echo ($ytxmoney); ?> 元 </div>
  </div>
  <script type="text/javascript" src="public/js/jquery.min.js?v=1483670095"></script>
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="public/js/metisMenu.min.js?v=1483670095"></script>
  <script type="text/javascript" src="public/js/jquery.dataTables.min.js?v=1483670095"></script>
  <script type="text/javascript" src="public/js/dataTables.bootstrap.min.js?v=1483670095"></script>
  <script type="text/javascript" src="public/js/sb-admin-2.js?v=1483670095"></script>
  <script type="text/javascript" src="public/js/wyjyjl.js?v=1483670095"></script>
  	<script type="text/javascript">
				function tjsh(){
				if(confirm("请确保完善了基本资料后再提交审核，提交审核后不能再修改基本信息！") == true){
				location.href = "/User_Index_shjksh.html"; } }
			</script>
  </body>
  </html>
</element>