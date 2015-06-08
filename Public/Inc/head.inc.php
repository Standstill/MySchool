<!DOCTYPE HTML>
<html>
	<head>
		<title>我的大学</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		 -->
		<script type="text/javascript" src="<?php echo __ROOT__; ?>/Public/Script/jquery.min.js"></script>
		<script type="text/javascript">
		var jQ = $.noConflict();
		</script>
		<script src="<?php echo __ROOT__; ?>/Public/Script/jquery.dropotron.js"></script>
		<script src="<?php echo __ROOT__; ?>/Public/Script/config.js"></script>
		<script>
			window._skel_config.prefix = "<?php echo __ROOT__; ?>"+"/Public/Css/style";
		</script>
		<script src="<?php echo __ROOT__; ?>/Public/Script/skel.min.js"></script>
		
		<script src="<?php echo __ROOT__; ?>/Public/Script/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo __ROOT__; ?>/Public/Css/skel-noscript.css" />
			<link rel="stylesheet" href="<?php echo __ROOT__; ?>/Public/Css/style.css" />
			<link rel="stylesheet" href="<?php echo __ROOT__; ?>/Public/Css/style-desktop.css" />
		</noscript>
		
		<link href="<?php echo __ROOT__; ?>/Public/Plugin/FlatUI/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
		<!-- Loading Flat UI -->
		<link href="<?php echo __ROOT__; ?>/Public/Plugin/FlatUI/dist/css/flat-ui.css" rel="stylesheet">
		<link href="<?php echo __ROOT__; ?>/Public/Plugin/FlatUI/docs/assets/css/demo.css" rel="stylesheet">
		<!--[if lte IE 8]><script src="<?php echo __ROOT__; ?>/Public/Script/html5shiv.js"></script><link rel="stylesheet" href="<?php echo __ROOT__; ?>/Public/Css/ie8.css" />
		<![endif]-->
		
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
				
				<!-- Head -->
					<div class="row">
						<div class="12u" style="padding:0;">
						
							<!-- Header -->
								<section id="header">
									<!-- HeadDiv -->
										<div style="width:100%;height:100px;">
											<div style="height:100%;width:220px;float:left;">
												<img src="<?php echo __ROOT__; ?>/Public/Img/logo_web.png" style="width:220px;"/>
											</div>
											<!-- 地区显示，使用人数，在线人数 -->
											<div style="float:left;margin-left:30px;height:100%;width:40%;">
												<div style="float:left;width:100%;">
													<p style="float:left;">您所在的城市</p>
													<input type="text" value="成都" disabled="disabled" class="form-control"  style="width:120px;height:30px;float:left;text-align:center;margin-left:10px;" />
													<a href="#fakelink" class="btn btn-block btn-lg btn-primary" style="width:70px;height:30px;padding-top:3px;padding-left:17px;float:left;margin-left:3px;">切换</a>
												</div>
												<div style="float:left;">
													<div style="float:left;">
														<p style="float:left;">当前在线人数：</p>
														<h6 style="color:#CC0000;float:left;margin:0;">1000</h6>
														<p style="float:left;margin-left:3px;">人</p>
													</div>
													<div style="float:left;margin-left:2em;">
														<p style="float:left;">网站使用人数：</p>
														<h6 style="color:#CC0000;float:left;margin:0;">1000</h6>
														<p style="float:left;margin-left:3px;">人</p>
													</div>
												</div>
												
											</div>
											<div style="float:right;width:32%;height:100%;">
												<div style="float:right;width:100%;height:50%;font-size:12px;">
													<form action="" method="post" style="float:right;">
														<div class="login-form"  style="padding:0;">
												            <div class="form-group"  style="float:left;">
												              <input type="text" class="form-control login-field" value="" placeholder="用户名" id="login-name" style="width:120px;height:30px;font-size:12px;"/>
												              <label class="login-field-icon fui-user" for="login-name" style="top:-2px;"></label>
												            </div>
												
												            <div class="form-group" style="float:left;margin-left:0.5em;">
												              <input type="password" class="form-control login-field" value="" placeholder="密码" id="login-pass"  style="width:120px;height:30px;font-size:12px;"/>
												              <label class="login-field-icon fui-lock" for="login-pass" style="top:-2px;"></label>
												            </div>
												
												            <a class="btn btn-primary btn-lg btn-block" href="#" style="float:left;width:70px;height:30px;padding-top:2px;padding-left:17px;margin-left:1em;">登录</a>
												        </div>
													</form>
												</div>
												<div style="float:right;width:80%;height:50%;">
													<p style="float:left;">距离高考还有：</p>
													<h6 style="color:#CC0000;float:left;margin:0;">1000</h6>
													<p style="float:left;margin-left:3px;">天</p>
													<span class="fui-calendar"></span>
												</div>
											</div>
										</div>
									<!-- Logo -->
									<!-- 	<h1><a href="#">Dopetrope</a></h1> -->

								</section>
								
								 <div class="row demo-row" style="margin-bottom:0;">
							        <div class="col-xs-12">
							          <nav class="navbar navbar-inverse navbar-embossed" role="navigation" style="margin-bottom: 1em;">
							            <div class="collapse navbar-collapse" id="navbar-collapse-01">
							              <ul class="nav navbar-nav navbar-left">
							                <li><a href="#fakelink">主页<span class="navbar-unread">1</span></a></li>
							                <li class="dropdown">
							                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">查询信息<b class="caret"></b></a>
							                  <span class="dropdown-arrow"></span>
							                  <ul class="dropdown-menu">
							                    <li><a href="#">院校排名</a></li>
							                    <li><a href="#">院校信息</a></li>
							                    <li><a href="#">历史录取分数线</a></li>
							                    <li class="divider"></li>
							                    <li><a href="#">学校/专业对比</a></li>
							                    <li class="divider"></li>
							                    <li><a href="#">职业测评</a></li>
							                  </ul>
							                </li>
							                <li><a href="#fakelink">志愿填报模拟</a></li>
							                 <li><a href="#fakelink">心愿墙</a></li>
							               </ul>
							               <form class="navbar-form navbar-right" action="#" role="search">
							                <div class="form-group">
							                  <div class="input-group">
							                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
							                    <span class="input-group-btn">
							                      <button type="submit" class="btn"><span class="fui-search"></span></button>
							                    </span>
							                  </div>
							                </div>
							              </form>
							            </div><!-- /.navbar-collapse -->
							          </nav><!-- /navbar -->
							        </div>
							      </div> <!-- /row -->
								
								<div class="row" style="height:30px;">
									<div style="float:left;padding-top:0;padding-left:20px;">
										<a href="#"><span style="color:black;font-size:0.8em;">查询信息</span></a>
										<span style="margin-left:0.5em;">></span>
										<span style="margin-left:0.5em;color:#666666;font-size:0.8em;">院校排名</span>
									</div>
								</div>
						</div>
					</div>