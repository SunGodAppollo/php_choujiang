<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class User extends Controller
{
	public  function  index(){
		$result = db('user')->select();
		$this->assign('list', $result);
		return view();
		
	}
	public  function  outExcel(){
		$file_name = date('Y-m-d').'.txt';
		$result = db('user')->select();
		
		$myfile = fopen($file_name, "w") or die("Unable to open file!");
		
		foreach ($result as &$r) {
			fwrite($myfile,$r['name']."\t".$r['phone']."\t".$r['nianji']."\n");
		}
		fclose($myfile);
		//dump($file_name);//die();
		
		$filename=realpath($file_name); //文件名
		$date=date("Ymd-H:i:m");
		Header( "Content-type:  application/octet-stream ");
		Header( "Accept-Ranges:  bytes ");
		Header( "Accept-Length: " .filesize($filename));
		header( "Content-Disposition:  attachment;  filename=");
		//echo file_get_contents($filename);
		readfile($filename); 
	}
}
