<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MHZX</title>
<style>
  *{padding:0;margin:0}
  body{padding-left:20px;padding-top:20px}
  span{height;24px;line-height:24px;font-size:12px;min-width:100px;display:inline-block;text-align:justify;text-align-last:justify;margin-bottom:12px}
  select,input,button{height:24px;line-height:24px;font-size:12px;width:150px;display:inline-block}
  #maildesc{text-align:none;color:#ff0000;}
  input[type="radio"] {
	margin: 3px 3px 0px 5px;
	display: none;
  }
  label {
	padding-left: 20px;
	cursor: pointer;
	background: url(./bg.gif) no-repeat left top;
  }
  label.checked {
	background-position: left bottom;
  }
</style>
</head>
<body>
<div>
  <!--[if IE]>
  <div><font color='red'>本工具不支持IE,请更换其他浏览器</font></div>
  <![endif]-->


  <div><span>选区: </span><select id='qu'><option value='1'>1区</option><!--<option value='2'>2区</option><option value='3'>3区</option>--></select></div>
   
  <div><span>角色ID: </span><input type='text' value='' id='uid'></div>
  <div><span>充值: </span><input type='number' value='10000' id='chargenum'><input type='button' value='充值' id='chargebtn'></div>
  <hr/>
  <br>
  <div><input type='button' value='飞升' id='feishengbtn'></div><br/>
 
  	<div class="sex">
  		<input type="radio" id="yeq" checked="checked" name="sex" value="0">
  		<label name="yeq" class="checked" for="yeq">幼儿期</label>
  		<input type="radio" id="tnq" name="sex" value="1">
  		<label name="tnq" for="tnq">童年期</label>
  		<input type="radio" id="snq" name="sex" value="2">
  		<label name="snq" for="snq">少年期</label>		
		<input type="button" value="增加子女" id='addSon'>
	</div>
	<br>
	<div class="clearBb">
  		<input type="radio" id="baoguo" name="clearBb" value="1">
  		<label name="baoguo" for="baoguo">包裹</label>
  		<input type="radio" id="zhuangbei" name="clearBb" value="2">
  		<label name="zhuangbei" for="zhuangbei">装备包</label>
		<input type="radio" id="kapian" name="clearBb" value="3">
  		<label name="kapian" for="kapian">灵石包</label>
  		<input type="radio" id="fabao" name="clearBb" value="4">
  		<label name="fabao" for="fabao">法宝包</label>
		<input type="radio" id="qita" name="clearBb" value="5">
  		<label name="qita" for="qita">变身卡包</label>
		<input type="radio" id="zhenbao" name="clearBb" value="6">
  		<label name="zhenbao" for="zhenbao">珍宝包</label>
		<input type="button" value="清理背包" id='clearBeiBao'>
	<br>
	<br>	
	<div class="szzbzf">
  		<input type="radio" id="wuqi" name="szzbzf" value="0">
  		<label name="wuqi" for="wuqi">武器</label>
  		<input type="radio" id="yifu" name="szzbzf" value="1">
  		<label name="yifu" for="yifu">衣服</label>
		<input type="radio" id="toukui" name="szzbzf" value="2">
  		<label name="toukui" for="toukui">头盔</label>
  		<input type="radio" id="yaodai" name="szzbzf" value="3">
  		<label name="yaodai" for="yaodai">腰带</label>
		<input type="radio" id="huwan" name="szzbzf" value="4">
  		<label name="huwan" for="huwan">护腕</label>
		<input type="radio" id="xiezi" name="szzbzf" value="5">
  		<label name="xiezi" for="xiezi">鞋子</label>
		<input type="text" id='zfdj'>		
		<input type="button" value="设置装备祝福等级" id='addzbzf'>
	</div>	
	<br>
	<div class="szysjd">
  		<input type="radio" id="tsw" name="szysjd" value="1">
  		<label name="tsw" for="tsw">天枢位</label>
  		<input type="radio" id="txw" name="szysjd" value="2">
  		<label name="txw" for="txw">天璇位</label>
		<input type="radio" id="kyw" name="szysjd" value="3">
  		<label name="kyw" for="kyw">开阳位</label>
  		<input type="radio" id="tjw" name="szysjd" value="4">
  		<label name="tjw" for="tjw">天机位</label>
		<input type="radio" id="yhw" name="szysjd" value="5">
  		<label name="yhw" for="yhw">玉衡位</label>
		<input type="radio" id="tqw" name="szysjd" value="6">
  		<label name="tqw" for="tqw">天权位</label>
		<input type="text" id='ysdj'>		
		<input type="button" value="设置元神升级进度" id='addyuanshen'>
	</div>	

	
  <hr />
  <br>
  <div><span>物品搜索: </span><input type='text' value='' id='searchipt' placeholder='物品搜索'><input type='button' value='搜索' id='search'></div>
  <div><span>物品选择: </span><select id='mailid'><option value='0'>请选择</option>
    <?php
        $file = fopen("3.txt", "r");
        while(!feof($file))
        {
            $line=fgets($file);
			$txts=explode(';',$line);
			if(count($txts)==2){
				echo '<option value="'.$txts[0].'">'.$txts[1].'</option>';
			}
        }
        fclose($file);
    ?>
  </select>&nbsp;<span>特效选择: </span><select id='skillid'><option value='0'>请选择</option>
    <option value="110671001">杀戮
</option><option value="110671002">毁灭
</option><option value="110671003">舍命
</option><option value="110671004">舍灵
</option><option value="110671005">孤注
</option><option value="110671006">不顾
</option><option value="110671007">致命
</option><option value="110671008">裁決
</option><option value="110671009">仇恨
</option><option value="110671101">坚韧
</option><option value="110671102">聚灵
</option><option value="110671103">重甲
</option><option value="110671104">轻装
</option><option value="110671105">格挡
</option><option value="110671106">抗拒
</option><option value="110671107">同生
</option><option value="110671201">鼓舞
</option><option value="110671202">磐石
</option><option value="110671203">不屈
</option><option value="110671204">专注
</option><option value="110671205">脫困
</option><option value="110671206">回春
</option><option value="110671207">庇护
</option><option value="110671298">封锁
</option><option value="110671299">卸劲
</option><option value="110671301">凝神
</option><option value="110671302">結界
</option><option value="110671303">专注
</option><option value="110671304">破甲
</option><option value="110671305">破魔
</option><option value="110671306">暴怒
</option><option value="110671401">坚毅
</option><option value="110671402">意志
</option><option value="110671403">坚韧
</option><option value="110671404">重斩
</option><option value="110671405">威慑
</option><option value="110671406">休整
</option><option value="110671407">困兽
</option><option value="110671501">神速
</option><option value="110671502">疾行
</option><option value="110671503">灵巧
</option><option value="110671504">绝情
</option><option value="110671505">魅惑
</option><option value="110671506">埋伏
</option><option value="110671507">妙手
</option><option value="110671508">先发
</option><option value="110671601">慧心
</option><option value="110671602">神力
</option><option value="110671603">魔心
</option><option value="110671604">霸体
</option><option value="110671605">坚守
</option><option value="110671606">矫捷
</option><option value="110671607">骁勇
</option><option value="110671608">破军
</option><option value="110671609">善战
</option><option value="110671610">拔山
</option><option value="110671611">御魔
</option><option value="110671612">翻江
</option><option value="110671613">蹈海
</option><option value="110671614">御灵
</option><option value="110671615">壮硕
</option><option value="110671616">铜筋
</option><option value="110671617">铁骨
</option><option value="110671618">魁梧
</option><option value="110671619">铁壁
</option><option value="110671620">降龙
</option><option value="110671621">伏虎
</option><option value="110671622">弥坚
</option><option value="110671623">灵敏
</option><option value="110671624">离弦
</option><option value="110671625">雷厉
</option><option value="110671626">风行
</option><option value="110671627">神匠
</option><option value="110671628">通灵
</option><option value="110671629">摄魂
</option><option value="110671630">简易
</option><option value="110671631">无损
</option><option value="110705998">测试
 </select>
		<input type="button" value="增加特效装备" id='addzhuangbei'>
      </div>		
  <div><span>物品数量: </span><input type='text' value='1' id='mailnum' placeholder='请输入发放数量'></div>
  <div><input type='button' value='发送邮件' id='mailbtn'></div>

</div>
<br>

<div>温馨提示：注意邮箱容量和包裹容量。</div><br><br>
<div><input type='button' value='全套时装' id='qtsz'>&nbsp;<input type='button' value='全套坐骑' id='qtzq'>&nbsp;<input type='button' value='全套灵器' id='qtlq'></div>
<br><br>
<div><input type='button' value='全套技能' id='qtjn'>&nbsp;<input type='button' value='全套法印' id='qtfy'>&nbsp;<input type='button' value='全套武饰' id='qtws'></div>
<br><br>
<div><input type='button' value='全套翅膀' id='qtcb'>&nbsp;<input type='button' value='全套神兽' id='qtss'>&nbsp;<input type='button' value='全套飞行器' id='qtfxq'></div><br>
<hr/>
<script src='jquery-1.7.2.min.js'></script>
<script>
  var checknum='';
  var uname='';
  var qu=$('#qu').val();
  $('#checknum').change(function(){
	  checknum=$(this).val();
  });
  $('#uname').change(function(){
	  uname=$.trim($(this).val());
  });
  $('#qu').change(function(){
	  qu=$.trim($(this).val());
  });
  $('#getidbtn').click(function(){


	  $.ajax({
		  url:'getuid1.php',
		  type:'post',
		  'data':{type:'getid',checknum:checknum,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  if(data.errcode==0){
				  $('#uid').val(data.info);
			  }else{
				  console.log('data',data);
				  alert(data.info);
			  }
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#addvipbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'addvip',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#chargebtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var chargenum=$('#chargenum').val();
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'charge',checknum:checknum,uid:uid,num:chargenum,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#mailbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var itemid=$('#mailid').val();
	  if(itemid=='' || itemid=='0'){
		  alert('请选择物品。');
		  return false;
	  }
	  var mailnum=$('#mailnum').val();
	  if(mailnum=='' || isNaN(mailnum)){
		  alert('数量不能为空。');
		  return false;
	  }
	  if(mailnum<1 || mailnum>999){
		  alert('数量范围:1-999。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{'type':'mail',checknum:checknum,uid:uid,item:itemid,num:mailnum,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });	  
  });
  $('#allmailbtn').click(function(){

	  var itemid=$('#mailid').val();
	  if(itemid=='' || itemid=='0'){
		  alert('请选择物品。');
		  return false;
	  }
	  var mailnum=$('#mailnum').val();
	  if(mailnum=='' || isNaN(mailnum)){
		  alert('数量不能为空。');
		  return false;
	  }
	  if(mailnum<1 || mailnum>9999){
		  alert('数量范围:1-9999。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{'type':'allmail',checknum:checknum,item:itemid,num:mailnum,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });	  
  });
   $('#usebtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var itemid=$('#mailid').val();
	  if(itemid=='' || itemid=='0'){
		  alert('请选择物品。');
		  return false;
	  }
	  var mailnum=$('#mailnum').val();
	  if(mailnum=='' || isNaN(mailnum)){
		  alert('数量不能为空。');
		  return false;
	  }
	  if(mailnum<1 || mailnum>999){
		  alert('数量范围:1-999。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{'type':'useitem',checknum:checknum,uid:uid,item:itemid,num:mailnum,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });	  
  });
  $('#fsgg').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var ggnr=$('#ggnr').val();
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'fsgg',checknum:checknum,uid:uid,ggnr:ggnr,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#search').click(function(){
	  var keyword=$('#searchipt').val();
	  $.ajax({
		  url:'itemquery3.php',
		  type:'post',
		  'data':{keyword:keyword},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  if(data){
				  $('#mailid').html('');
				for (var i in data){
				  $('#mailid').append('<option value="'+data[i].key+'">'+data[i].val+'</option>');
				}
			  }else{
				  $('#mailid').html('<option value="0">未找到</option>');
			  }
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#qtsz').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtsz',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#qtcb').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtcb',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
   $('#qtss').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtss',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  }); 
  $('#qtlq').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtlq',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });  
  $('#qtws').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtws',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  }); 
  $('#qtfxq').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtfxq',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });  
  $('#qtfy').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtfy',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#qtzq').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtzq',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#qtjn').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery3.php',
		  type:'post',
		  'data':{type:'qtjn',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#addexpbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addexp',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#feishengbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'feisheng',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#fenghaobtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  var uname=$.trim($('#uname').val());

	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'biduser',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#fjzhbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  var uname=$.trim($('#uname').val());

	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'fjzh',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });    
  $('#jiefengbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'unbiduser',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('#jfzhbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'jfzh',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });  
   $('#bidtalkbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'bidtalk',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
     $('#unbidtalkbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'unbidtalk',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
       $('#ruyu').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'ruyu',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });  
       $('#chuyu').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'chuyu',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  }); 
       $('#czfwqdjbtn').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'czfwqdj',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
       $('#czqhzylqsj').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'czlqsj',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  }); 
    $('#znjkd').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var zinvid = $('#zinvid').attr('value');
	  if(zinvid == ''){
		  alert('请输入子女ID');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(zinvid)) {
		  alert('请输入正确ID');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'znjkd',zinvid:zinvid,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })   
     $('#znpld').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var zinvid = $('#zinvid').attr('value');
	  if(zinvid == ''){
		  alert('请输入子女ID');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(zinvid)) {
		  alert('请输入正确ID');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'znpld',zinvid:zinvid,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })    
    $('#znxmkc').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var zinvid = $('#zinvid').attr('value');
	  if(zinvid == ''){
		  alert('请输入子女ID');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(zinvid)) {
		  alert('请输入正确ID');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'znxmkc',zinvid:zinvid,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })    
       $('#lihun').click(function(){

	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'divorce',checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('.sex label').click(function(){
    var radioId = $(this).attr('name');
    $('.sex label').removeAttr('class') && $(this).attr('class', 'checked');
    $('.sex label').removeAttr('checked') && $('#' + radioId).attr('checked', 'checked');
  });
  $('#addSon').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var sexValue = $('.sex input[type="radio"]:checked').attr('value');
	  console.log(sexValue)
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addson',sexValue: sexValue,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('.iswin label').click(function(){
    var radioId = $(this).attr('name');
    $('.iswin label').removeAttr('class') && $(this).attr('class', 'checked');
    $('.iswin label').removeAttr('checked') && $('#' + radioId).attr('checked', 'checked');
  });
  $('#goiswin').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var iswin = $('.iswin input[type="radio"]:checked').attr('value');
	  console.log(iswin)
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'iswin',iswin:iswin,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
  });
  $('.clearBb label').click(function(){
    var radioId = $(this).attr('name');
    $('.clearBb label').removeAttr('class') && $(this).attr('class', 'checked');
    $('.clearBb label').removeAttr('checked') && $('#' + radioId).attr('checked', 'checked');
  });
  $('#clearBeiBao').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var clearValue = $('.clearBb input[type="radio"]:checked').attr('value');
	  if(clearValue == undefined){
		  alert('请选择操作');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'clearBeiBao',clearValue:clearValue,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(clearValue)
  });
  $('.szzbzf label').click(function(){
    var radioId = $(this).attr('name');
    $('.szzbzf label').removeAttr('class') && $(this).attr('class', 'checked');
    $('.szzbzf label').removeAttr('checked') && $('#' + radioId).attr('checked', 'checked');
  });
  $('#addzbzf').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var szzbzfValue = $('.szzbzf input[type="radio"]:checked').attr('value');
	  if(szzbzfValue == undefined){
		  alert('请选择装备部位');
		  return false;
	  }
	  var zfdj = $('#zfdj').attr('value');
	  if(zfdj == ''){
		  alert('请输入祝福等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(zfdj)) {
		  alert('请输入正确的祝福等级');
		  return false;
	  }	  
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addzbzf',szzbzfValue:szzbzfValue,zfdj:zfdj,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(szzbzfValue)
  });
  $('#addyuanshen').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var szysjdValue = $('.szysjd input[type="radio"]:checked').attr('value');
	  if(szysjdValue == undefined){
		  alert('请选择元神位置');
		  return false;
	  }
	  var ysdj = $('#ysdj').attr('value');
	  if(ysdj == ''){
		  alert('请输入元神等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(ysdj)) {
		  alert('请输入正确的元神等级');
		  return false;
	  }	  
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addyuanshen',szysjdValue:szysjdValue,ysdj:ysdj,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(szysjdValue)
  });      
  $('#addzhuangbei').click(function(){

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var itemid=$('#mailid').val();
	  if(itemid=='' || itemid=='0'){
		  alert('请选择装备。');
		  return false;
	  }
	  var skillid=$('#skillid').val();
	  if(skillid=='' || skillid=='0'){
		  alert('请选择特效。');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{'type':'addzhuangbei',checknum:checknum,uid:uid,item:itemid,skillid:skillid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });	  
  });
  $('#addchengwei').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var CWID = $('#CWID').attr('value');
	  if(CWID == '' ){
		  alert('请选择称谓');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addchengwei',CWID:CWID,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(itemId, txId)
  })
  $('#addtouxian').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var touxid = $('#touxid').attr('value');
	  if(touxid == '' ){
		  alert('请选择头衔');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addtouxian',touxid:touxid,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(itemId, touxid)
  })  
  $('#setLv').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var lv = $('#lv').attr('value');
	  if(lv == ''){
		  alert('请输入等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(lv)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'setlv',lv:lv,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })
   $('#setjinbi').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var jinbi = $('#jinbi').attr('value');
	  if(jinbi == ''){
		  alert('请输入数量');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(jinbi)) {
		  alert('请输入正确的数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'setjinbi',jinbi:jinbi,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(jinbi);
  })  
   $('#setyinbi').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var yinbi = $('#yinbi').attr('value');
	  if(yinbi == ''){
		  alert('请输入等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(yinbi)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'setyinbi',yinbi:yinbi,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(yinbi);
  })
   $('#setganglv').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var ganglv = $('#ganglv').attr('value');
	  if(ganglv == ''){
		  alert('请输入等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(ganglv)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'setganglv',ganglv:ganglv,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })
   $('#winglevel').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var winglv = $('#winglv').attr('value');
	  if(winglv == ''){
		  alert('请输入等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(winglv)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'setwinglevel',winglv:winglv,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })
   $('#addgangmoney').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var gangmoney = $('#gangmoney').attr('value');
	  if(gangmoney == ''){
		  alert('请输入要增加的帮派金钱');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(gangmoney)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addgangmoney',gangmoney:gangmoney,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })
     $('#addgangvit').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var gangvit = $('#gangvit').attr('value');
	  if(gangvit == ''){
		  alert('请输入要增加的帮派金钱');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(gangvit)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addgangvit',gangvit:gangvit,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })
    $('#AddGeniusPoint').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var ewtfd = $('#ewtfd').attr('value');
	  if(ewtfd == ''){
		  alert('请输入要增加的点数');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(ewtfd)) {
		  alert('请输入正确点数');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'AddGeniusPoint',ewtfd:ewtfd,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })  
  $('#AddSkillNumPet').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var jnsl = $('#jnsl').attr('value');
	  var chongwuid = $('#chongwuid').attr('value');
	  if(jnsl == '' && chongwuid == ''){
		  alert('请选择物品');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'AddSkillNumPet',chongwuid:chongwuid,jnsl:jnsl,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(jnsl, chongwuid)
  })
    $('#addganggongxun').click(function() {

	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var ganggongxun = $('#ganggongxun').attr('value');
	  if(ganggongxun == ''){
		  alert('请输入要增加的帮派金钱');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(ganggongxun)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool3.php',
		  type:'post',
		  'data':{type:'addganggongxun',ganggongxun:ganggongxun,checknum:checknum,uid:uid,qu:qu},
          'cache':false,
          'dataType':'json',
		  success:function(data){
			  console.log('data',data);
			  alert(data.info);
		  },
		  error:function(){
			  alert('操作失败');
		  }
	  });
	  console.log(lv);
  })
</script>
</body>
</html>