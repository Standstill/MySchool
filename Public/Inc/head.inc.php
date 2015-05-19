<!DOCTYPE HTML>
<html>
	<head>
		<title>我的大学</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		 --><script src="<?php echo __ROOT__; ?>/Public/Script/jquery.min.js"></script>
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
		<!--[if lte IE 8]><script src="<?php echo __ROOT__; ?>/Public/Script/html5shiv.js"></script><link rel="stylesheet" href="<?php echo __ROOT__; ?>/Public/Css/ie8.css" />
		<![endif]-->
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
				
				<!-- Head -->
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<section id="header">
									<!-- HeadDiv -->
										<div style="width:100%;height:100px;">
											<div style="height:100%;width:150px;float:left;">
												<img src="<?php echo __ROOT__; ?>/Public/Img/logo.png" style="width:150px;"/>
											</div>
											<!-- 地区显示，使用人数，在线人数 -->
											<div style="float:left;margin-left:50px;height:100%;width:55%;">
												<div style="float:left;">
													<label>您所在的城市</label>&nbsp;<input type="text" value="地区显示" style="width:100px;"/>
													<input type="button" value="切换" />
												</div>
												<br />
												<div style="float:left;margin-top:2em;">
													<div style="float:left;">
														<label>当前在线人数：</label>
														<label style="color:#CC0000">1000</label>
														<label>人</label>
													</div>
													<div style="float:left;margin-left:3em;">
														<label>网站使用人数：</label>
														<label style="color:#CC0000">1000</label>
														<label>人</label>
													</div>
												</div>
												
											</div>
											<div style="float:right;width:25%;height:100%;">
												<div style="float:right;width:100%;height:50%;font-size:12px;">
													<form action="" method="post">
													用户名：<input type="text" style="width:80px;"/>&nbsp;密码：<input type="password" style="width:80px;"/>
													<input type="button" value="登陆"/>
													</form>
												</div>
												<div style="float:right;width:80%;height:50%;">
													距离高考还有
													<label style="color:#CC0000;">100</label>
													天
												</div>
											</div>
										</div>
									<!-- Logo -->
									<!-- 	<h1><a href="#">Dopetrope</a></h1> -->
									

									<!-- Nav -->
									<nav id="nav" style="width:80%;float:left;">
										<ul style="float:left;">
											<li class="current_page_item"><a href="#">主页</a></li>
											<li>
												<a href="">查询信息</a>
												<ul>
													<li>
														<a href="">学校查询</a>
														<ul>
															<li><a href="#">院校排名</a></li>
															<li><a href="#">学校信息</a></li>
															<li><a href="#">历史录取分数线</a></li>
														</ul>
													</li>
													<li><a href="#">学校/专业对比系统</a></li>
													<li><a href="#">职业测评系统</a></li>
												</ul>
											</li>
											<li><a href="right-sidebar.html">志愿填报模拟系统</a></li>
											<li><a href="left-sidebar.html">心愿墙</a></li>
										</ul>
									</nav>
									
									<div style="float:right;width:20%;height:35px;">
										<input type="button" value="搜索" style="height:25px;float:right;"/>
										<input type="text" style="height:25px;float:right;margin-right:1em;"/>
									</div>

								</section>

						</div>
					</div>