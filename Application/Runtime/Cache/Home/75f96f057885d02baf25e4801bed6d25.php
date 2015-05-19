<?php if (!defined('THINK_PATH')) exit(); require 'Public/Inc/head.inc.php'; ?>
					<div class="row">
						<div class="12u">

							<!-- Banner -->
								<section id="banner">
									<a>
										<span class="image image-full">
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
										</span>
									</a>
								</section>

						</div>
					</div>
				<!-- Head End -->
					<div class="row">
						<div class="12u">
							<table style="width:100%;height:auto;border-bottom:1px solid gray;">
								<thead style="border-bottom:2px solid gray;">
									<tr style="background-color:#CCCCCC;height:30px;">
										<td>院校名称</td>
										<td>院校排名</td>
										<td>硕博点&重点学科</td>
										<td>院校地区</td>
										<td>院校层次</td>
										<td>隶属</td>
										<td>院校性质</td>
									</tr>
								</thead>
								<tbody>
									<tr style="height:100%;background-color:#FAFAFA;">
										<td style="height:100%;">
											<img src="/MyUniversity/Public/Img/pic02.jpg" style="width:30px;height:30px;margin-top:1em;margin-left:1em;" />
											<label style="vertical-align:text-bottom;">北京大学</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">全国1<br />综合1</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">硕博点100<br />重点学科 100</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">北京</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">211工程&nbsp;985院校</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">教育部</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">公立</label>
										</td>
									</tr>
									<tr style="height:100%;background-color:#EEEEEE;">
										<td style="height:100%;">
											<img src="/MyUniversity/Public/Img/pic03.jpg" style="width:30px;height:30px;margin-top:1em;margin-left:1em;" />
											<label style="vertical-align:text-bottom;">清华大学</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">全国1<br />综合2</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">硕博点100<br />重点学科 100</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">北京</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">211工程&nbsp;985院校</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">教育部</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">公立</label>
										</td>
									</tr>
									<tr style="height:100%;background-color:#FAFAFA;">
										<td style="height:100%;">
											<img src="/MyUniversity/Public/Img/pic03.jpg" style="width:30px;height:30px;margin-top:1em;margin-left:1em;" />
											<label style="vertical-align:text-bottom;">大连理工大学</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">全国27<br />综合27</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">硕博点100<br />重点学科 100</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">北京</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">211工程&nbsp;985院校</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">教育部</label>
										</td>
										<td style="height:100%;">
											<label style="vertical-align:text-bottom;">公立</label>
										</td>
									</tr>
								</tbody>
							</table>
							<div style="width:100%;height:50px;text-align:center;">
								<span style="width:150px;"><label>第一页</label>&nbsp;<label>上一页</label></span>
								&nbsp;<span style="">
									<label>1</label>
									<label>2</label>
									<label>3</label>
									<label>4</label>
									<label>5</label>
									<label>6</label>
									<label>...</label>
									<label>100</label>
								</span>&nbsp;
								<span style="width:150px;"><label>下一页</label>&nbsp;<label>最后一页</label></span>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require 'Public/Inc/tail.inc.php'; ?>