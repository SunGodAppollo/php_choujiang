<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Log as LogModel;
class Choujiang extends Controller
{
	/**
	 * 初始化操作
	 * @access protected
	 */
	protected function _initialize()
	{
	}
	
    public function index()
    {
    	$result = db('set')->where("id=1")->find();
    	$bg = db('set')->where("name='bg'")->find();
    	$this->assign('data', $result['content']);
    	$this->assign('bg', $bg['content']);
        return view();
    }
	//抽奖
	 public function choujiang(){
	 	
		 $n=rand(0, 100);
		 $zhongjiang=5;

		 $rel=db('jiangping')->select();
		 
		 foreach ($rel as &$j) {
		 	if ($j['number']>0 || $j['number']==-1){
		 		if ($n<=($j['gailv']*100)){
		 			$zhongjiang=$j['id'];
		 			if ($j['number']!=-1){$j['number']=$j['number']-1;}
		 			db('jiangping')->where('id='.$j['id'])->update($j);
		 			//
		 			$data=array(
		 					'user_id'=>1,
		 					'jiangping'=>$j['content'],
		 					'address'=>'',
		 					'phone'=>'',
		 					'user_name'=>''
		 			);
		 			
		 			$log=new LogModel();
		 			$log->user_id=1;
		 			$log->jiangping=$j['content'];
		 			$log->save();
		 			$json_data = ['id'=>$log->id,
		 					'jiangping' => $zhongjiang-1, 
		 					   'text' => $j['content'],
		 					   'img'=>$j['img']
		 			];

		 			return json($json_data);
		 		}
		 	}
		 }
		 
		 
		
		 

		 
		
		 
		
	 }
	 public function setmsg(){
	 	if (request()->isPost()){
	 		$validate=\think\Loader::validate('User');
	 		if(!$validate->check($_POST)){
	 			$this->error($validate->getError());
	 		}
	 		
	 		$result = db('log')->where('id='.$_POST['id'])->update($_POST);
	 		if (!empty($result)){
	 			Success("领取成功！",url('index'));
	 		}else {
	 			Error("领取失败");
	 		}
	 	}
	 	$this->assign('id',$_GET['id']);
	 	return view();
	 }
}
