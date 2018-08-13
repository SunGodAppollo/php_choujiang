<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Log as LogModel;
class Index extends Controller
{
	
    public function index()
    {
    	//$this->Success("aa",url('Index/send'));
        return view();
    }
	public  function send(){
		$url="http://yx.dahai.com/api/event/message/sendcode";
		$code=rand(100000, 999999);
		$key="dahai1v1";
		$mobile=input('post.mobile');
		$cip=$_SERVER['REMOTE_ADDR'];
		$date=date("Y-m-d");
		$sign=$key.$mobile.$code.$date.$cip;
		//md5加密
		$sign=md5($sign);
		//echo ($sign);die();
		//
		$data=array(
				'code'  =>$code,
				'mobile'  =>$mobile,
				'cip'  =>$cip,
				'date'  =>$date,
				'sign'  =>$sign
		);
		$result=$this->send_msg($url,$data);
		//检查返回
		$relsult_arr=json_decode($result,true);
		if ($relsult_arr['status']==1){
			$_SESSION['check_data']=$data;
		}
		return $result;
	}
	
	/**发送短信请求
	 * @param unknown $data
	 * @return string
	 */
	public function send_msg($url,$data){
		$postdata = http_build_query($data);
		$opts = array('http' =>
				array(
						'method' => 'POST',
						'header' => 'Content-type:application/x-www-form-urlencoded',
						'content' => $postdata,
						'timeout' => 15 * 60 // 超时时间（单位:s）
				)
				
		);
		
		$context = stream_context_create($opts);
		ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 5.00; Windows 98)');
		$result = file_get_contents($url, false, $context);
		return $result;
	}
	public function  check(){
		$json_data=array('status'=>1);
		return json($json_data);
		//dump($_POST);die();
	}
}
