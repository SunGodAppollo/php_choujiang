<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class Home extends Controller
{
	public function Home ()
    {
		
    	if(!empty($_GET['s1'])){
    		$s1=$_GET['s1'];
    		$result = db('log')->where('time', 'like', '%'.$s1.'%')->where('type=0')->paginate(5);
    	}else if(!empty($_GET['s2'])){
    		$s2=$_GET['s2'];
    		$result = db('log')->where('jiangping', 'like', '%'.$s2.'%')->where('type=0')->paginate(5);
    	}
    	
    	else {
    		
    		$result = db('log')->where('type=0')->paginate(5);
    	}
    	$this->assign('list', $result);
        return view();
    }
    
    public function addhuishou($id){
    	$result = db('log')->where('id='.$id)->update(array('type'=>1));
    	if (!empty($result)){
    		Success("放入回收站成功");
    	}else {
    		Error("放入回收站失败");
    	}
    }
    public function allhuishou(){
    	$result = db('log')->where(array('type'=>0))->update(array('type'=>1));
    	if (!empty($result)){
    		Success("全部放入回收站成功");
    	}else {
    		Error("全部放入回收站失败");
    	}
    }
	
    public function jiangpin()
    {
    	if (!empty($_GET['id'])){
    		$id=$_GET['id'];
    		$number=$_GET['number'];
    		$result =db('jiangping')->where(array('id'=>$id))->update(array('number'=>$number));
    		if(!empty($result)){
    			echo 'ok';
    		}else {
    			echo  'no';
    		}
    	}
    	
    	$result = db('jiangping')->select();
    	$this->assign('list', $result);
    	return view();
    	
    	/* $date=date('y-m-d',time());
    	echo ($date); */
    }
    /**添加奖品
     * @return \think\response\View
     */
    public  function  addjiangping(){
    	if (request()->isPost()){
    		//图片上传
    		if (!empty($_FILES)){
    			$file=request()->file('img');
    			$info = $file->rule(function ($file) {
    				// 使用自定义的文件保存规则
    				return 'upload/jiangpin/'.uniqid();
    			})->move(ROOT_PATH);
    			if ($info) {
    				
    				$_POST['img']=config('a').'/'.$info->getSaveName();
    			}
    		}
    		$result = db('jiangping')->insert($_POST);
    		if (!empty($result)){
    			Success("添加成功",url('Home/jiangpin'));
    		}else {
    			Error("添加失败");
    		}
    	}
    	return view();
    }
    
    /**修改奖品
     * @return \think\response\View
     */
    public  function  editjiangping($id){
    	if (request()->isPost()){
    		//图片上传
    		$file=request()->file('img');
    		if (!empty($file)){
    			$info = $file->rule(function ($file) {
    				// 使用自定义的文件保存规则
    				return 'upload/jiangpin/'.uniqid();
    			})->move(ROOT_PATH);
    			if ($info) {
    				
    				$_POST['img']=config('a').'/'.$info->getSaveName();
    			}
    		}
    		//
    		$result = db('jiangping')->where('id='.$id)->update($_POST);
    		if (!empty($result)){
    			Success("修改成功",url('Home/jiangpin'));
    		}else {
    			Error("修改失败");
    		}
    	}
    	$result = db('jiangping')->where('id='.$id)->find();
    	$this->assign('data', $result);
    	return view();
    }
    public function deljiangping($id){
    	$result = db('jiangping')->where('id='.$id)->delete();
    	if (!empty($result)){
    		Success("删除成功",url('Home/jiangpin'));
    	}else {
    		Error("删除失败");
    	}
    }
    
    

}
