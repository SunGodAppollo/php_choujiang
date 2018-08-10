<?php
header("Content-type: text/html; charset=utf-8"); 
error_reporting(0);
ini_set('date.timezone','Asia/Shanghai');
if($_POST){
	include 'config.php';
	$checknum=trim($_POST['checknum']);
	if($checknum!=$gmcode){
		$return=array(
			'errcode'=>1,
			'info'=>'GM码错误',
		);
		exit(json_encode($return));
	}
	$quid=trim($_POST['qu']);
	if($quid==''){
		$return=array(
			'errcode'=>1,
			'info'=>'区号错误',
		);
		exit(json_encode($return));
	}
	$qu=$quarr[$quid];
	if(!$qu['url']){
		$return=array(
			'errcode'=>1,
			'info'=>'区配置不存在',
		);
		exit(json_encode($return));
	}
	$uname=trim($_POST['uname']);
	if($uname==''){
		$return=array(
			'errcode'=>1,
			'info'=>'角色名错误',
		);
		exit(json_encode($return));
	}
	//$dbh = null;
	if($_POST['type']){
		$type=trim($_POST['type']);
		switch ($type){
			case 'getid':
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./getRoleid.sh '.$uname);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$uid=substr($rtn,$start+9);
				$return=array(
					'errcode'=>0,
					'info'=>intval($uid),
				);
				exit(json_encode($return));
				break;
			default:
				$return=array(
					'errcode'=>1,
					'info'=>'type error',
				);
				exit(json_encode($return));
				break;
		}
	}else{
	$return=array(
		'errcode'=>1,
		'info'=>'no type',
	);
	exit(json_encode($return));
	}
}else{
	$return=array(
		'errcode'=>1,
		'info'=>'must post',
	);
	exit(json_encode($return));
}