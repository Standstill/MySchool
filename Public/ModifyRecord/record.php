[head.inc.php]
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

[Query.php.html]
<div style="width:1200px;height:50px;">
												<table style="width:80%;font-size:1.3em;float:left;">
													<tr>
														<td style="width:20%;">
															<label>院校层次</label>
															<select>
																<option>本科</option>
																<option>专科</option>
															</select>
														</td>
														<td style="width:20%;">
															<label>院校所在地</label>
															<select>
																<option>四川</option>
																<option>北京</option>
																<option>上海</option>
															</select>
														</td>
														<td style="width:20%;">
															<label>院校分类</label>
															<select>
																<option>综合</option>
																<option>理工</option>
																<option>财经</option>
															</select>
														</td>
														<td style="width:20%;">
															<label>院校层次</label>
															<select>
																<option>本科</option>
																<option>专科</option>
															</select>
														</td>
														<td style="width:20%;">
															<label>院校特色</label>
															<select>
																<option>211工程</option>
																<option>985高校</option>
																<option>国防生</option>
															</select>
														</td>
													</tr>
												</table>
												<div style="float:right;">
													<input type="button" value="查询" style="width:100px;"/>
												</div>
											</div>