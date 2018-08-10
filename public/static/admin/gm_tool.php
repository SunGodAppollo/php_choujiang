<?php
error_reporting(0);
ini_set('date.timezone','Asia/Shanghai');
if($_POST){
	include 'config.php';
	$checknum=trim($_POST['checknum']);
	if($checknum!=$gmcode){
		$return=array(
			'errcode'=>1,
			'info'=>'GM消息：口令错误',
		);
		exit(json_encode($return));
	}
	$quid=trim($_POST['qu']);
	if($quid==''){
		$return=array(
			'errcode'=>1,
			'info'=>'GM消息：区号错误',
		);
		exit(json_encode($return));
	}
	$qu=$quarr[$quid];
	if(!$qu['url']){
		$return=array(
			'errcode'=>1,
			'info'=>'GM消息：区配置不存在',
		);
		exit(json_encode($return));
	}
	$uid=intval(trim($_POST['uid']));
	$lv=intval($_POST['lv']);
	$xlid=intval($_POST['xlid']);
	$sbjj=intval($_POST['sbjj']);
	$bsd=intval($_POST['bsd']);		
	$chongwuid=intval($_POST['chongwuid']);	
	$jnsl=intval($_POST['jnsl']);	
	$zfdj=intval($_POST['zfdj']);	
	$ysdj=intval($_POST['ysdj']);	
	$clearValue=intval($_POST['clearValue']);
	$szzbzfValue=intval($_POST['szzbzfValue']);	
	$szysjdValue=intval($_POST['szysjdValue']);	
	$sexValue=intval($_POST['sexValue']);
	$ysjdId=intval($_POST['ysjdId']);	
	$iswin=intval($_POST['iswin']);
	$CWID=intval($_POST['CWID']);
	$touxid=intval($_POST['touxid']);	
	$gangmoney=intval($_POST['gangmoney']);
	$zinvid=intval($_POST['zinvid']);	
	$ewtfd=intval($_POST['ewtfd']);	
	$gangvit=intval($_POST['gangvit']);
	$ganggongxun=intval($_POST['ganggongxun']);
	$winglv=intval($_POST['winglv']);
	$bidtalk=intval($_POST['bidtalk']);
	$unbidtalk=intval($_POST['unbidtalk']);
	$divorce=intval($_POST['divorce']);
	$ganglv=intval($_POST['ganglv']);
	$jinbi=intval($_POST['jinbi']);
	$yinbi=intval($_POST['yinbi']);
	$cutlvid=intval($_POST['cutlvid']);
	$chargenum=intval($_POST['chargenum']);	
	
	if($uid<1){  
		$return=array(
			'errcode'=>1,
			'info'=>'GM消息：角色ID错误',
		);
		exit(json_encode($return));
	}
	$uname = trim($_POST['uname']);
	if($uname==''){
		$return=array(
			'errcode'=>1,
			'info'=>'GM消息：角色错误',
		);
		exit(json_encode($return));
	}
	
	//$dbh = null;
	if($_POST['type']){
		$type=trim($_POST['type']);
		switch ($type){						
			case 'addexp':
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./gm1.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'升级成功',
					);
				exit(json_encode($return));
				break;
			case 'cutlv':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./cutlevel.sh '.$uid.' '.$cutlvid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'降低等级成功',
					);
				exit(json_encode($return));
				break;
			case 'wxpay':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./cz.sh '.$uid.' '.$chargenum);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'充值成功',
					);
				exit(json_encode($return));
				break;
			case 'feisheng':
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./gmfs.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'飞升成功',
					);
				exit(json_encode($return));
				break;
			case 'biduser':
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./gmbidrole.sh '.$uname);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'封禁角色成功',
					);
				exit(json_encode($return));
				break;
			case 'unbiduser':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./gmunbidrole.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'解封角色成功',
					);
				exit(json_encode($return));
				break;
			case 'fjzh':
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./fjzh.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'封号成功',
					);
				exit(json_encode($return));
				break;
			case 'jfzh':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./jfzh.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'解封账号成功',
					);
				exit(json_encode($return));
				break;	
			case 'czlqsj':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./czzylqsj.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'重置成功',
					);
				exit(json_encode($return));
				break;					
			case 'setlv':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./setlevel.sh '.$uid.' '.$lv);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'设置等级成功',
					);
				exit(json_encode($return));
				break;
			case 'clearBeiBao':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./clearbag.sh '.$uid.' '.$clearValue);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'选定的包裹清理成功',
					);
				exit(json_encode($return));
				break;
			case 'addson':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addchild.sh '.$uid.' '.$sexValue);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'添加子女成功',
					);
				exit(json_encode($return));
				break;
			case 'addzhuangbei':
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
				$skillid=intval($_POST['skillid']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addequip.sh '.$uid.' '.$itemid.' '.$skillid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'添加特效装备成功，请查看',
					);
				exit(json_encode($return));
				break;				
			case 'iswin':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./iswin.sh '.$uid.' '.$iswin);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'战斗设置成功',
					);
				exit(json_encode($return));
				break;
			case 'addchengwei':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addchengwei.sh '.$uid.' '.$CWID);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'称谓添加成功',
					);
				exit(json_encode($return));
				break;
            case 'setactivity':
				$activityid=intval($_POST['activityid']);
				$locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./setopenactivity.sh '.$activityid.' '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
					$return=array(
						'errcode'=>0,
						'info'=>'开启活动成功',
					);
				exit(json_encode($return));
				break;			
            case 'closeact':
				$activityid1=intval($_POST['activityid1']);
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./closeact.sh '.$activityid1);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$rtn=substr($rtn,$start+9);
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$activityid1.'活动关闭成功',
					);
				exit(json_encode($return));
				break;
			case 'addtouxian':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addtouxian.sh '.$uid.' '.$touxid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'头衔添加成功',
					);
				exit(json_encode($return));
				break;	
			case 'tjxl':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./tjxl.sh '.$uid.' '.$xlid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'添加仙侣成功',
					);
				exit(json_encode($return));
				break;					
			case 'addyuanshen':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addyuanshen.sh '.$uid.' '.$szysjdValue.' '.$ysdj);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'元神等级设置成功',
					);
				exit(json_encode($return));
				break;	
			case 'addzbzf':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addzbzf.sh '.$uid.' '.$szzbzfValue.' '.$zfdj);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'装备祝福等级设置成功',
					);
				exit(json_encode($return));
				break;	
				case 'szsbjjdj':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./szsbjjdj.sh '.$uid.' '.$szzbzfValue.' '.$sbjj.' '.$zfdj);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'神兵阶级与等级设置成功',
					);
				exit(json_encode($return));
				break;	
			case 'szqldj':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./szqldj.sh '.$uid.' '.$szzbzfValue.' '.$zfdj);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'启灵等级设置成功',
					);
				exit(json_encode($return));
				break;				
			case 'AddSkillNumPet':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./zjzdjnscw.sh '.$uid.' '.$chongwuid.' '.$jnsl);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'增加宠物成功',
					);
				exit(json_encode($return));
				break;					
			case 'addgangmoney':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addgangmoney.sh '.$uid.' '.$gangmoney);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'帮派金钱添加成功',
					);
				exit(json_encode($return));
				break;
			case 'znjkd':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./znjkd.sh '.$uid.' '.$zinvid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'子女健康度增加成功',
					);
				exit(json_encode($return));
				break;	
			case 'znpld':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qcznpld.sh '.$uid.' '.$zinvid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'子女疲劳度清空成功',
					);
				exit(json_encode($return));
				break;	
			case 'znxmkc':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./znxmkc.sh '.$uid.' '.$zinvid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'子女学满课程成功',
					);
				exit(json_encode($return));
				break;	
			case 'AddGeniusPoint':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./zjewtfd.sh '.$uid.' '.$ewtfd);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'额外天赋点增加成功',
					);
				exit(json_encode($return));
				break;	
			case 'szbsd':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./szbsd.sh '.$uid.' '.$bsd);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'设置饱食度成功',
					);
				exit(json_encode($return));
				break;						
			case 'addgangvit':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addgangvit.sh '.$uid.' '.$gangvit);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'帮派活跃度添加成功',
					);
				exit(json_encode($return));
				break;
			case 'addganggongxun':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./addganggongxun.sh '.$uid.' '.$ganggongxun);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'帮派功勋添加成功',
					);
				exit(json_encode($return));
				break;
			case 'setwinglevel':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./setwinglv.sh '.$uid.' '.$winglv);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'羽翼升级成功',
					);
				exit(json_encode($return));
				break;
			case 'setganglv':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./setganglevel.sh '.$uid.' '.$ganglv);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'帮派升级成功',
					);
				exit(json_encode($return));
				break;
			case 'bidtalk':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./bidtalk.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'禁言成功',
					);
				exit(json_encode($return));
				break;
			case 'unbidtalk':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./unbidtalk.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'解除禁言成功',
					);
				exit(json_encode($return));
				break;
			case 'divorce':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./divorce.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'离婚成功',
					);
				exit(json_encode($return));
				break;
			case 'czpkcs':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./czpkcs.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'重置成功',
					);
				exit(json_encode($return));
				break;
			case 'qkfhts':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./qkfhts.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'清空成功',
					);
				exit(json_encode($return));
				break;	
			case 'scsyxl':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./scsyxl.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'删除成功',
					);
				exit(json_encode($return));
				break;					
			case 'ruyu':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./ruyu.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'入狱成功',
					);
				exit(json_encode($return));
				break;
			case 'chuyu':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./chuyu.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'出狱成功',
					);
				exit(json_encode($return));
				break;				
			case 'czfwqdj':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./czfwqdj.sh '.$uid);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'重置成功',
					);
				exit(json_encode($return));
				break;	
			case 'setjinbi':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./setjinbi.sh '.$uid.' '.$jinbi);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'设置金币成功',
					);
				exit(json_encode($return));
				break;
			default:				
			case 'setyinbi':
				$locale='en_US.UTF-8';			
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('cd '.$qu['path'].' && ./setyinbi.sh '.$uid.' '.$yinbi);
				$len=strlen($rtn);
				$start=strpos($rtn,'retvalue=');
				$return=array(
						'errcode'=>0,
						'info'=>'GM消息：'.$uname.'设置银币成功',
					);
				exit(json_encode($return));
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