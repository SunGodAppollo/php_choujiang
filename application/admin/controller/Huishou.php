<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class Huishou extends Controller
{
	public function index ()
    {
		
    	if(!empty($_GET['s1'])){
    		$s1=$_GET['s1'];
    		$result = db('log')->where('time', 'like', '%'.$s1.'%')->where('type=1')->paginate(5);
    	}else if(!empty($_GET['s2'])){
    		$s2=$_GET['s2'];
    		$result = db('log')->where('jiangping', 'like', '%'.$s2.'%')->where('type=1')->paginate(5);
    	}
    	
    	else {
    		
    		$result = db('log')->where('type=1')->paginate(5);
    	}
    	$this->assign('list', $result);
        return view();
    }
	
    
    public function huifu ($id){
    	
    	$result = db('log')->where('id='.$id)->update(array('type'=>0));
    	if (!empty($result)){
    		Success("恢复成功");
    	}else {	
    		Error("恢复失败");
    	}
    }
  
    public function allhuifu (){
    	
    	$result = db('log')->where('type=1')->update(array('type'=>0));
    	if (!empty($result)){
    		Success("全部恢复成功");
    	}else {
    		Error("全部恢复失败");
    	}
    }
    
    public function del ($id){
    	$result = db('log')->where('id='.$id)->delete();
    	if (!empty($result)){
    		Success("删除成功");
    	}else {
    		Error("删除失败");
    	}
    }

    
    public function alldel (){
    	$result = db('log')->where('type=1')->delete();
    	if (!empty($result)){
    		Success("全部删除成功");
    	}else {
    		Error("全部删除失败");
    	}
    }
}
