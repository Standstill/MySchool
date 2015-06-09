<?php
namespace Home\Controller;
use Think\Controller;
class QueryInfoController extends Controller {
    public function Query(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	//$head = "<head><meta charset='utf8'/></head>";
    	//echo $head;
    	//向导信息
		$model = M("Guide");
    	$result = $model->where("id=2")->find();
    	$guidechildren = $result['name'];
    	$resultparent = $model->where("id=".$result['parent'])->find();
    	$guideparent = $resultparent[name];
    	//选择信息
    	$SelectTitle = array("院校层次","院校所在地","院校分类","院校特色");
		$SchoolSelect = array();
		$SchoolSelect[0] = array("本科","专科");
		$SchoolSelect[1] = array("四川","北京","上海","深圳","辽宁","江苏","浙江");
		$SchoolSelect[2] = array("综合","理工","财经");
		$SchoolSelect[3] = array("211","985","国防");
		//Table头信息
		$TableHead = array("院校名称","院校排名","硕博点&重点学科","院校地区","院校层次","隶属","院校性质","功能");
    	//院校信息
    	$model = M("University");
    	$schoolresult = $model->select();
    	//Assign
    	$this->assign("guideparent",$guideparent);
    	$this->assign("guidechildren",$guidechildren);
    	$this->assign("SelectTitle",$SelectTitle);
    	$this->assign("SchoolSelect",$SchoolSelect);
    	$this->assign("TableHead",$TableHead);
    	$this->assign("SchoolRst",$schoolresult);
    	$this->display("QueryInfo/Query.php");
    }
    public function School(){
    	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$type = $_GET["ReqType"];
    	if($type == "main")
    		$this->display("QueryInfo/School_Main.php");
    	else if($type == "field")
    		$this->display("QueryInfo/School_Field.php");
    	else if($type == "prescore")
    		$this->display("QueryInfo/School_PreScore.php");
    	else if($type == "map")
    		$this->display("QueryInfo/School_Map.php");
    	else if($type == "teacher")
    		$this->display("QueryInfo/School_Teacher.php");
    	else
    		$this->display("QueryInfo/School.php");
    }
    public function SchoolCompare(){
    	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$this->display("QueryInfo/SchoolCompare.php");
    }
    public function CareerDetermine(){
    	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$this->display("QueryInfo/CareerDetermine.php");
    }
    public function SystemResult(){
    	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$this->display("QueryInfo/SystemResult.php");
    }   
    public function MajorList(){
    	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$this->display("QueryInfo/Major.php");
    }   
}