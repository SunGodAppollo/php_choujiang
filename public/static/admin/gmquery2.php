<?php
error_reporting(0);
ini_set('date.timezone','Asia/Shanghai');
if($_POST){
	include 'config.php';
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
	$uid=intval(trim($_POST['uid']));

	//$dbh = null;
				$vipfile='vip_2.json';
				$fp = fopen($vipfile,"a+");
				if(filesize($vipfile)>0){
					$str = fread($fp,filesize($vipfile));
					fclose($fp);
					$vipjson=json_decode($str);
					if($vipjson==null){
						$vipjson=array();
					}
				}else{
					$vipjson=array();
				}
				if(!in_array($uid,$vipjson)){
					$return=array(
						'errcode'=>1,
						'info'=>'你没有VIP权限.'
					);
					exit(json_encode($return));
				}

	if($_POST['type']){
		$type=trim($_POST['type']);
		switch ($type){
			case 'charge':
				$num=intval($_POST['num']);
				if(!$num){
					$return=array(
						'errcode'=>1,
						'info'=>'充值数量错误',
					);
					exit(json_encode($return));
				}
				$time=time();
				$orderid='SD'.$time;
				$data=array(
					'pOrderId'=>$orderid,
					'userId'=>0,
					'creditId'=>$uid,
					'currency'=>'CNY',
					'amount'=>$num,
					'RCurrency'=>'CNY',
					'RAmount'=>$num,
					'gameCode'=>'twzx',
					'serverCode'=>$qu['fu'],
					'stone'=>$num,
					'stoneType'=>'diamond',
					'md5Str'=>'wBv78qM7QeEhJ6BGeZAwBStQVMKmTNG1f2QIDAQAB',
					'time'=>$time,
					'productId'=>'tw.zx.1usd',
					'activityExtra'=>0,
					'orderStateMonth'=>0,
					'point'=>0,
					'freePoint'=>1,
					'payType'=>'platform'
				);
				$result=get($qu['url'],$data);
				$return=array(
					'errcode'=>0,
					'info'=>'充值结果：'.$result,
				);
				exit(json_encode($return));
				break;
			case 'mail':
				$itemid=trim($_POST['item']);
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./sendmail.sh '.$uid.' '.$itemid.' '.$num);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
			case 'useitem':
				$itemid=trim($_POST['item']);
				$find=false;
				$file = fopen("item.txt", "r");
				while(!feof($file))
				{
					$line=fgets($file);
					$txts=explode(';',$line);
					if($txts[0]==$itemid){
						$find=true;
						break;
					}
				}
				fclose($file);
				if($find==false){
					$return=array(
						'errcode'=>0,
						'info'=>'物品ID不存在',
					);
				exit(json_encode($return));
				}
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./sendmail.sh '.$uid.' '.$itemid.' '.$num);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'fsgg':
                $ggnr=trim($_POST['ggnr']);
                $locale='en_US.UTF-8';
                setlocale(LC_ALL,$locale);
                putenv('LC_ALL='.$locale); 
                $rtn=exec('cd '.$qu['path'].' && ./fsgg.sh '.$ggnr);
                $len=strlen($rtn);
                $start=strpos($rtn,'retvalue=');
                $rtn=substr($rtn,$start+9);
                $return=array(
                    'errcode'=>0,
                    'info'=>'发送成功',
				);
				exit(json_encode($return));
				break;	
			case 'allmail':
				$itemid=trim($_POST['item']);
				$find=false;
				$file = fopen("item.txt", "r");
				while(!feof($file))
				{
					$line=fgets($file);
					$txts=explode(';',$line);
					if($txts[0]==$itemid){
						$find=true;
						break;
					}
				}
				fclose($file);
				if($find==false){
					$return=array(
						'errcode'=>0,
						'info'=>'物品ID不存在',
					);
				exit(json_encode($return));
				}
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./sendallmail.sh '.$itemid.' '.$num);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtsz':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtsz.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtcb':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtcb.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtjn':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtjn.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtzq':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtzq.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtfy':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtfy.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtlq':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtlq.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;	
            case 'qtws':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtws.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;	
            case 'qtss':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtss.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;
            case 'qtfxq':
				$num=intval($_POST['num']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qtfxq.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'发送成功，请到邮件查看',
					);
				exit(json_encode($return));
				break;					
			case 'addvip':
				$vipfile='vip_2.json';
				$fp = fopen($vipfile,"a+");
				if(filesize($vipfile)>0){
					$str = fread($fp,filesize($vipfile));
					fclose($fp);
					$vipjson=json_decode($str);
					if($vipjson==null){
						$vipjson=array();
					}
				}else{
					$vipjson=array();
				}
				if(!in_array($uid,$vipjson)){
					array_push($vipjson,$uid);
					file_put_contents($vipfile,json_encode($vipjson));
					$return=array(
						'errcode'=>0,
						'info'=>'加入VIP成功.'
					);
					exit(json_encode($return));
				}else{
					$return=array(
						'errcode'=>0,
						'info'=>'该ID已经是VIP了.'
					);
					exit(json_encode($return));
				}
				break;
			default:
				$return=array(
					'errcode'=>1,
					'info'=>'未知错误',
				);
				exit(json_encode($return));
				break;
		}
	}else{
	$return=array(
		'errcode'=>1,
		'info'=>'禁止操作',
	);
	exit(json_encode($return));
	}
}else{
	$return=array(
		'errcode'=>1,
		'info'=>'禁止操作',
	);
	exit(json_encode($return));
}