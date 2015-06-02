<?php if (!defined('THINK_PATH')) exit(); require 'Public/Inc/head.inc.php'; ?>
					<div class="row">
						<div class="12u" style="padding-left:0;padding-top:1em;">
							<small style="float:left;margin:8px;">已选条件 ></small>				
							<div class="tagsinput-primary" style="width:50%;float:left;">
							  <input name="tagsinput" class="tagsinput" data-role="tagsinput" value="School, Teacher, Colleague" />
							</div>
						</div>
					</div>		

					<div class="row">
						<div class="12u" style="padding:0;">

							<!-- Banner -->
										
<?php  $SelectTitle = array("院校层次","院校所在地","院校分类","院校特色"); $SchoolSelect = array(); $SchoolSelect[0] = array("本科","专科"); $SchoolSelect[1] = array("四川","北京","上海","深圳"); $SchoolSelect[2] = array("综合","理工","财经"); $SchoolSelect[3] = array("211","985","国防"); ?>
											<div style="width:1200px;height:220px;border:1px solid #1abc9c;border-radius:6px;">
											<?php for($i=0;$i<count($SelectTitle);$i++){ ?>
												<dl style="width:100%;height:25px;padding-top:10px;">
													<dt style="width:100px;float:left;margin-left:1em;"><small><?php echo $SelectTitle[$i]; ?> ></small></dt>
													<dd>
														<?php for($j=0;$j<count($SchoolSelect[$i]);$j++){ ?>
														<a href="#fakelink" class="btn btn-block btn-lg btn-info" style="width:70px;height:30px;float:left;padding-top: 3px;padding-left: 17px;margin-left:1em;margin-top:0;"><?php echo $SchoolSelect[$i][$j]; ?></a>
														<?php } ?>
													</dd>
												</dl>
											<?php } ?>	
											</div>

						</div>
					</div>
						
					<div class="row">
						<div class="12u" style="padding-left:0;padding-top:1em;text-align:center;">
							<table style="width:100%;height:auto;border-bottom:1px solid #2f4154;">
								<thead style="border-bottom:2px solid gray;">
									<tr style="background-color:#2f4154;height:30px;color:white;">
										<td style="width:250px;">院校名称</td>
										<td>院校排名</td>
										<td>硕博点&重点学科</td>
										<td>院校地区</td>
										<td>院校层次</td>
										<td>隶属</td>
										<td>院校性质</td>
									</tr>
								</thead>
<?php  $SchoolInfo = array(); $SchoolInfo[0] = array("北京大学","全国1<br />综合1","硕博点100<br />重点学科 100","北京","211工程<br />985院校","教育部","公立"); $SchoolInfo[1] = array("清华大学","全国1<br />综合2","硕博点100<br />重点学科 100","北京","211工程<br />985院校","教育部","公立"); $SchoolInfo[2] = array("大连理工大学","全国27<br />综合27","硕博点100<br />重点学科 100","辽宁","211工程<br />985院校","教育部","公立"); $SchoolInfo[3] = array("四川大学","全国10<br />综合10","硕博点100<br />重点学科 100","四川","211工程<br />985院校","教育部","公立"); $BackgroundColor = array("#FAFAFA","#EEEEEE"); ?>
								<tbody>
									<?php for($i=0;$i<count($SchoolInfo);$i++){ ?>
									<tr style="background-color:#FAFAFA;">
										<td style="vertical-align:middle;">
											<div style="float:left;width:40%;">
												<img src="/TestMyUniversity/Public/Img/pic0<?php echo $i+2; ?>.jpg" style="width:60px;height:50px;float:right;" />
											</div>
											<h6><?php echo $SchoolInfo[$i][0]; ?></h6>
										</td>
										<?php for($j=1;$j<count($SchoolInfo[$i]);$j++){ ?>
										<td style="height:100%;">
											<small><?php echo $SchoolInfo[$i][$j]; ?></small>
										</td>
										<?php } ?>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="pagination" style="margin:0 auto;">
					            <ul>
					              <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
					              <li class=""><a href="#fakelink">1</a></li>
					              <li class=""><a href="#fakelink">2</a></li>
					              <li class=""><a href="#fakelink">3</a></li>
					              <li class=""><a href="#fakelink">4</a></li>
					              <li class=""><a href="#fakelink">5</a></li>
					              <li class=""><a href="#fakelink">6</a></li>
					              <li class=""><a href="#fakelink">7</a></li>
					              <li class=""><a href="#fakelink">8</a></li>
					              <li class="next active"><a href="#fakelink" class="fui-arrow-right"></a></li>
				               </ul>
				            </div>
						</div>
					</div>
				</div>
			</div>
<?php require 'Public/Inc/tail.inc.php'; ?>