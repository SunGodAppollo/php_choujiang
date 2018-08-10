<?php
	function get($url,$postdata){
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($postdata)); 
		curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$output = curl_exec($ch);
		$errorCode = curl_errno($ch);
		curl_close($ch);
		if(0 !== $errorCode){
			return '发送失败';
		}
		$return=json_decode($output,true);
		if($return['code']=='0000'){
			return '发送成功';
		}else{
			return '发送失败';
		}
	}
	
	$quarr=array(
		'1'=>array(
			'url'=>'http://127.0.0.1:9090/efun/order_callback',
			'path'=>'/home/mhzx/mhzx_4095/gs',
			'fu'=>'4095',
		),
		'2'=>array(
			'url'=>'http://127.0.0.1:9090/efun/order_callback',
			'path'=>'/home/mhzx/mhzx_4094/gs',
			'fu'=>'4094',
		),
	);
	$gmcode='123456';
	$fuli=1000000;