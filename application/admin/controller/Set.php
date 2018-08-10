<?php
namespace app\admin\controller;
use think\Controller;
class Set extends Controller
{
	public function img()
    {
    	if (request()->isPost()){
    	$file=request()->file('img');
    	if (!empty($file)){
    		$info = $file->rule(function ($file) {
    			// 使用自定义的文件保存规则
    			return 'upload/bg/'.uniqid();
    		})->move(ROOT_PATH);
    		if ($info) {
    			
    			$_POST['content']=config('a').'/'.$info->getSaveName();
    		}
    	}
    	$result =db('set')->where("name='bg'")->update($_POST);
		    	if (!empty($result)){
		    		Success("修改成功");
		    	}else {
		    		Error("修改失败");
		    	}
    	}
    	
    	$result = db('set')->where("name='bg'")->find();
    	$this->assign('data', $result);
        return view();
    }
	
    /**上传简介
     * @return \think\response\View
     */
    public function jiesaho()
    {
    	if (request()->isPost()){
    		$result = db('set')->where('id=1')->update($_POST);
    		if (!empty($result)){
    			Success("修改成功");
    		}else {
    			Error("修改失败");
    		}
    	}
    	
    	$result = db('set')->find(1);
    	$this->assign('data', $result);
    	return view();
    }
   
    
    public function jiesahoImg(){
    	//图片上传
    	if (!empty($_FILES)){
    		
    		$file=request()->file('yourFileName');
    		//dump($file);die();
    		$info = $file->rule(function ($file) {
    			// 使用自定义的文件保存规则
    			return 'upload/jiangpin/'.uniqid();
    		})->move(ROOT_PATH);
    		if ($info) {
    			
    			$FileNamePath=config('a').'/'.$info->getSaveName();
    			$arr=array('errno'=>0,
    					'data'=>[$FileNamePath]
    			);
    			
    			echo(json_encode($arr));
    		}
    	}
    }
}
