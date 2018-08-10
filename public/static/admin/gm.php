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
    <?php
                $locale='en_US.UTF-8';
				setlocale(LC_ALL,$locale);
				putenv('LC_ALL='.$locale); 
				$rtn=exec('netstat -nat|grep -i "18598"|wc -l');
				$rtn1=exec('netstat -nat|grep -i "18597"|wc -l');
				$zx=$rtn+$rtn1;
				?>
  <div><span>当前在线人数：</span><?php echo $zx;?></div>  
  <div><span>GM校验码: </span><input type='password' value='' id='checknum'></div>
  <div><span>选区: </span><select id='qu'><option value='1'>1区</option><option value='2'>2区</option></select></div>
  <div><span>角色名: </span><input type='text' value='' id='uname'><input type='button' value='查询角色ID' id='getidbtn'></div>
  <div><span>角色ID: </span><input type='text' value='' id='uid'><input type='button' value='加入一级VIP' id='addvipbtn1'><input type='button' value='加入二级VIP' id='addvipbtn2'><input type='button' value='加入三级VIP' id='addvipbtn3'></div>
  <div><span>充值: </span><input type='number' value='10000' id='chargenum'><input type='button' value='充值' id='chargebtn'><input type='button' value='客户端充值' id='wxpay'></div>
  <hr/>
  <br>
  <div>〓〓【<input type='button' value='升级' id='addexpbtn'>&nbsp;<input type='button' value='飞升' id='feishengbtn'>&nbsp;<input type='button' value='封禁角色' id='fenghaobtn'>&nbsp;<input type='button' value='解封角色' id='jiefengbtn'>】〓〓</div><br/>
  <div>〓〓【<input type='button' value='封禁帐号' id='fjzhbtn'>&nbsp;<input type='button' value='解封帐号' id='jfzhbtn'>&nbsp;<input type='button' value='入狱' id='ruyu'>&nbsp;<input type='button' value='出狱' id='chuyu'>】〓〓</div><br/>
  <div>〓〓【<input type='button' value='离婚' id='lihun'>&nbsp;<input type='button' value='重置服务器等级' id='czfwqdjbtn'>&nbsp;<input type='button' value='重置切换职业冷却时间' id='czqhzylqsj'>&nbsp;<input type='button' value='重置PK次数' id='czpkcs'>】〓〓</div><br/>  
  <div><input type="text" id="zinvid"><input type="button" value="增加子女健康度" id='znjkd'>&nbsp;<input type="button" value="清空子女疲劳度" id='znpld'>&nbsp;<input type="button" value="子女学满课程" id='znxmkc'>&nbsp;<input type="button" value="清空孵化天数" id='qkfhts'></div>
 <br>
  <br>
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
		<input type="button" value="设置装备祝福等级" id='addzbzf'>&nbsp;<input type="text" id="sbjj"><input type="button" value="设置神兵阶级与等级" id='szsbjjdj'>&nbsp;<input type="button" value="设置启灵等级" id='szqldj'>
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

	<div class="selectchengwei">
  		<select name="selectchengwei" id="CWID">
		  <option selected value>无</option>
		  <option value="490100000">梦诛元动</option>
		  <option value="490192100">为人师表</option>
		  <option value="490192001">xxx的徒弟</option>
		  <option value="490100200">武林高手</option>
		  <option value="490100201">武林豪杰</option>
		  <option value="490100202">武林新秀</option>
		  <option value="490101000">七脉会武制霸者</option>
		  <option value="490101001">七脉会武获胜者</option>
		  <option value="490100300">金科状元</option>
		  <option value="490100301">榜眼及第</option>
		  <option value="490100302">探花郎</option>
		  <option value="490100303">科举进士</option>
		  <option value="490100210">陸地神仙</option>
		  <option value="490100211">天人合一</option>
		  <option value="490100212">國士無雙</option>
		  <option value="490100213">聲名顯赫</option>
		  <option value="490100220">上古神獸</option>
		  <option value="490100221">縹緲仙獸</option>
		  <option value="490100222">瑞祥聖獸</option>
		  <option value="490100223">洪荒異獸</option>
		  <option value="490193011">天下無雙</option>
		  <option value="490193012">天下獨尊</option>
		  <option value="490193013">天下豪傑</option>
		  <option value="490193014">天下勇者</option>		  
		</select>
		<input type="button" value="增加称谓" id='addchengwei'>
	</div>
	<br>	
	<div class="selecttouxian">
  		<select name="selecttouxian" id="touxid">
		  <option selected value>无</option>
          <option value="490200310">战力总榜1</option>
		  <option value="490200311">战力总榜2</option>
		  <option value="490200312">战力总榜3</option>
		  <option value="490200330">等级榜1</option>
		  <option value="490200331">等级榜2</option>
		  <option value="490200332">等级榜3</option>
		  <option value="490200340">收花榜第1-全民女神</option>
		  <option value="490200341">收花榜第2</option>
		  <option value="490200342">收花榜第3</option>
		  <option value="490200350">送花榜第1</option>
		  <option value="490200351">送花榜第2</option>
		  <option value="490200352">送花榜第3</option>
		  <option value="490200353">收花榜第1-全民男神</option>
		  <option value="490200401">跨服天梯赛季跨服1-5</option>
		  <option value="490200402">跨服天梯赛季跨服6-10</option>
		  <option value="490200403">跨服天梯赛季跨服11-50</option>
		  <option value="490200404">跨服天梯赛季跨服50-100</option>
		  <option value="490208000">梦幻诛仙GM头衔礼包-GM小梦</option>
		  <option value="490208001">梦幻诛仙GM头衔礼包-新手指导员</option>
		  <option value="490200401">天下無雙</option>
		  <option value="490200402">天下獨尊</option>
		  <option value="490200403">天下豪傑</option>
		  <option value="490200404">天下勇者</option>			  
		</select>
		<input type="button" value="增加头衔" id='addtouxian'>
	</div>
		<br>
	<div>
	<div class="selectxianlv">
  		<select name="selectxianlv" id="xlid">
		  <option selected value>无</option>
          <option value="140101001">鬼厉</option>
		  <option value="140101002">幽姬</option>
		  <option value="140101003">青龙</option>
		  <option value="140102001">陆雪琪</option>
		  <option value="140102002">林惊羽</option>
		  <option value="140102003">张小凡</option>
		  <option value="140102004">田灵儿</option>
		  <option value="140103001">小白</option>
		  <option value="140103002">兽神</option>
		  <option value="140103003">李洵</option>
		  <option value="140104001">碧瑶</option>
		  <option value="140104002">秦无炎</option>
		  <option value="140104003">金瓶儿</option>
		  <option value="140105001">法相</option>
		  <option value="140105002">小环</option>
		  <option value="140105003">普智</option>
		  <option value="140106001">鬼先生</option>
		  <option value="140106002">玲珑</option>
		  <option value="140106003">大巫师</option>
		  <option value="140107001">隼仙子</option>
		  <option value="140108001">诗音</option>
		  <option value="140109001">艾丽</option>	  
		</select>	
  		<input type="button" value="添加仙侣" id='tjxl'>&nbsp;<input type="button" value="删除所有仙侣" id='scsyxl'>
	</div>
	     <br>
		<div>
			<div class="selectchongwu">
  		<select name="selectchongwu" id="chongwuid">
		  <option selected value>无</option>
          <option value="130101000">菜刀兔</option>
		  <option value="130101001">兜兜</option>
		  <option value="130101002">魔音娃娃</option>
		  <option value="130101005">愛心兔</option>
		  <option value="130101006">花魅</option>
		  <option value="130101007">女賊</option>
		  <option value="130101008">三眼靈猴</option>
		  <option value="130101009">橫行蟹</option>
		  <option value="130101010">鐵鉗蝦</option>
		  <option value="130101011">凶靈</option>
		  <option value="130101012">通靈師</option>
		  <option value="130101013">冰女</option>
		  <option value="130101014">守靈女弟子</option>
		  <option value="130101015">幻月仙子</option>
		  <option value="130101016">火鱗獸</option>
		  <option value="130101017">御魔鏡</option>
		  <option value="130101018">死靈巫師</option>
		  <option value="130101019">吸血妖人</option>
		  <option value="130101020">虎人戰士</option>
		  <option value="130101021">冰靈獸</option>
		  <option value="130101022">九天靈鳥</option>
		  <option value="130101023">刺空之矛</option>	  
          <option value="130101024">天狼</option>
		  <option value="130101025">劍魔</option>
		  <option value="130101026">制裁之劍</option>
		  <option value="130101027">鬼巫</option>
		  <option value="130101028">死神</option>
		  <option value="130101029">帝炎龍</option>
		  <option value="130101030">撒旦之魂</option>
		  <option value="130101031">弑魂神槍</option>
		  <option value="130101032">虛空魔鏡</option>
		  <option value="130101033">畫中仙</option>
		  <option value="130101034">巨靈神</option>
		  <option value="130101035">墮落天使</option>		  
		  <option value="130101036">赤炎魔靈</option>
		  <option value="130101037">筆仙</option>
		  <option value="130101080">小山狐</option>
		  <option value="130101081">魔蠍</option>
		  <option value="130101082">小海魂</option>
		  <option value="130101090">彩虹兜兜</option>
		  <option value="130101101">西瓜貓</option>
          <option value="130102000">变异菜刀兔</option>
		  <option value="130102001">变异兜兜</option>
		  <option value="130102002">变异魔音娃娃</option>
		  <option value="130102005">变异愛心兔</option>
		  <option value="130102006">变异花魅</option>
		  <option value="130102007">变异女賊</option>
		  <option value="130102008">变异三眼靈猴</option>
		  <option value="130102009">变异橫行蟹</option>
		  <option value="130102010">变异鐵鉗蝦</option>
		  <option value="130102011">变异凶靈</option>
		  <option value="130102012">变异通靈師</option>
		  <option value="130102013">变异冰女</option>
		  <option value="130102014">变异守靈女弟子</option>
		  <option value="130102015">变异幻月仙子</option>
		  <option value="130102016">变异火鱗獸</option>
		  <option value="130102017">变异御魔鏡</option>
		  <option value="130102018">变异死靈巫師</option>
		  <option value="130102019">变异吸血妖人</option>
		  <option value="130102020">变异虎人戰士</option>
		  <option value="130102021">变异冰靈獸</option>
		  <option value="130102022">变异九天靈鳥</option>
		  <option value="130102023">变异刺空之矛</option>	  
          <option value="130102024">变异天狼</option>
		  <option value="130102025">变异劍魔</option>
		  <option value="130102026">变异制裁之劍</option>
		  <option value="130102027">变异鬼巫</option>
		  <option value="130102028">变异死神</option>
		  <option value="130102029">变异帝炎龍</option>
		  <option value="130102030">变异撒旦之魂</option>
		  <option value="130102031">变异弑魂神槍</option>
		  <option value="130102032">变异虛空魔鏡</option>
		  <option value="130102033">变异畫中仙</option>
		  <option value="130102034">变异巨靈神</option>
		  <option value="130102035">墮落天使</option>			  
		  <option value="130102036">变异赤炎魔靈</option>
		  <option value="130102037">变异筆仙</option>
		  <option value="130102080">变异小山狐</option>
		  <option value="130102081">变异魔蠍</option>
		  <option value="130102082">变异小海魂</option>		  
		  <option value="130104001">小團醬</option>
		  <option value="130104003">熊滾滾</option>
		  <option value="130110000">小灰</option>
		  <option value="130110001">日精靈</option>	
 		  <option value="130110002">傀儡師</option>
		  <option value="130110003">彩蝶依依</option>		
		  <option value="130110004">包子臉星人</option>
		  <option value="130110005">齊天大圣</option>	
 		  <option value="130110006">北斗神驢</option>
		  <option value="130110007">森林之子</option>	
		  <option value="130110008">羽化仙</option>	
 		  <option value="130110009">皮皮龍</option>
		  <option value="130110010">大天狗</option>		
		  <option value="130112000">青龍</option>	
		  <option value="130112001">白虎</option>	
 		  <option value="130112002">朱雀</option>
		  <option value="130112003">玄武</option>		
		  <option value="130112004">龜仙人</option>	
 		  <option value="130112005">喵太郎</option>
		  <option value="130112006">年獸</option>
		  <option value="130190011">黃金兜兜</option>	
 		  <option value="130190012">小兜妹</option>
		  <option value="130190013">煎蛋鳥</option>		  
		</select>	
  		<input type="text" id="jnsl"><input type="button" value="增加指定技能数宠物" id='AddSkillNumPet'>
	</div>	
     <br>	
	<div>
  		<input type="text" id="lv"><input type="button" value="设置等级" id='setLv'>
	</div>
	<div>
  		<input type="text" id="cutlvid"><input type="button" value="设置降低等级" id='cutLv'>
	</div>
		<div>
  		<input type="text" id="ganglv"><input type="button" value="设置帮派等级" id='setganglv'>
	</div>
	   <div>
  		<input type="text" id="jinbi"><input type="button" value="增加金币" id='setjinbi'>
	</div>	
	<div>
  		<input type="text" id="yinbi"><input type="button" value="设置银币" id='setyinbi'>
	</div>
	<div>
  		<input type="text" id="winglv"><input type="button" value="羽翼升级" id='winglevel'>
	</div>
	<div>
  		<input type="text" id="gangmoney"><input type="button" value="增加帮派金钱" id='addgangmoney'>
	</div>
	<div>
  		<input type="text" id="gangvit"><input type="button" value="增加帮派活跃度" id='addgangvit'>
	</div>
	<div>
  		<input type="text" id="ganggongxun"><input type="button" value="增加帮派功勋" id='addganggongxun'>
	</div>
	<div>
  		<input type="text" id="ewtfd"><input type="button" value="增加额外天赋点" id='AddGeniusPoint'>
	</div>
	<div>
  		<input type="text" id="bsd"><input type="button" value="设置角色饱食度" id='szbsd'>
	</div>	
  </div>
  <hr />
  <br>
  <div><span>物品搜索: </span><input type='text' value='' id='searchipt' placeholder='物品搜索'><input type='button' value='搜索' id='search'></div>
  <div><span>物品选择: </span><select id='mailid'><option value='0'>请选择</option>
    <?php
        $file = fopen("item.txt", "r");
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
 </select>
		<input type="button" value="增加特效装备" id='addzhuangbei'>
      </div>
     <span>活动选择: </span><select id='activityid'><option value='0'>请选择</option>
    <option value="350020810">元旦变装舞会
</option><option value="350020801">平安夜藏袜子
</option><option value="350020800">平安夜许愿
</option><option value="350020451">决战青云之巅3
</option><option value="350020402">宠物竞技场
</option><option value="350020401">周年庆在线献礼（体验服版）
</option><option value="350020400">周年庆在线献礼
</option><option value="350020302">一元夺宝
</option><option value="350020301">一元夺宝-已过期
</option><option value="350020300">一元夺宝-已过期
</option><option value="350020250">开学有礼
</option><option value="350020205">团购活动-正式新增10月
</option><option value="350020204">团购活动-体验服测试
</option><option value="350020203">团购活动正式服第一期
</option><option value="350020202">拍卖行
</option><option value="350020201">团团更实惠
</option><option value="350020200">团团更实惠
</option><option value="350020100">小灰快跑2-测试
</option><option value="350020101">小灰快跑1-测试
</option><option value="350020036">圣诞寻宝
</option><option value="350020035">冰雪奇缘
</option><option value="350020034">马戏团大作战
</option><option value="350020033">冰雪世界
</option><option value="350020032">我要脱单
</option><option value="350020031">冰雪之音-冬
</option><option value="350020030">热情音符-夏
</option><option value="350020029">逐梦之音-春
</option><option value="350020028">萧瑟旋律-秋
</option><option value="350020027">小灰兑换
</option><option value="350020026">秋日驱魔
</option><option value="350020025">回忆往昔
</option><option value="350020024">温暖之家
</option><option value="350020023">苍山暮雪
</option><option value="350020022">百年好合
</option><option value="350020021">CEO红包-隐藏
</option><option value="350020020">秋收蛋糕烘焙
</option><option value="350020019">CEO红包
</option><option value="350020018">杜康传人
</option><option value="350020017">神农后裔
</option><option value="350020016">春景变装舞会
</option><option value="350020015">冬季花车巡游
</option><option value="350020014">决战青云之巅2
</option><option value="350020013">七夕乞巧
</option><option value="350020012">仙缘奇遇-成就
</option><option value="350020011">仙缘奇遇-上交物品
</option><option value="350020010">仙缘奇遇-动作
</option><option value="350020008">夏日烟花大会
</option><option value="350020006">回流活动3期
</option><option value="350020005">成就
</option><option value="350020003">回流活动二期（测试用）
</option><option value="350020002">2020决战青云之巅2代
</option><option value="350020001">回流活动
</option><option value="350020000">2020决战青云之巅
</option><option value="350010000">决战青云之巅
</option><option value="350009027">天灯赏月
</option><option value="350009026">心灵手巧
</option><option value="350009025">金蛋砸砸砸
</option><option value="350009024">诞辰祈福
</option><option value="350009023">荒古遗迹
</option><option value="350009022">天空之城
</option><option value="350009021">虚空战场
</option><option value="350009013">迎新长签
</option><option value="350009012">兜兜送礼
</option><option value="350009011">暑期嘉年华
</option><option value="350009010">森林法则
</option><option value="350009009">御剑九天
</option><option value="350009008">莘莘学子
</option><option value="350009006">爱的传递
</option><option value="350009005">我爱琪
</option><option value="350009004">青云乐府
</option><option value="350009003">青云乐府
</option><option value="350009002">云霄飞舟
</option><option value="350009001">感恩传递
</option><option value="350009000">签到有礼
</option><option value="350008362">河神送斧头
</option><option value="350008361">春节兑换
</option><option value="350008360">签到有礼
</option><option value="350008359">河神兑元宝
</option><option value="350008358">限时回馈
</option><option value="350008357">限时回馈
</option><option value="350008356">限时回馈
</option><option value="350008355">限时回馈
</option><option value="350008354">限时回馈
</option><option value="350008353">限时回馈
</option><option value="350008352">限时回馈
</option><option value="350008351">限时回馈
</option><option value="350008350">限时回馈
</option><option value="350008349">限时回馈
</option><option value="350008348">限时回馈
</option><option value="350008347">限时回馈
</option><option value="350008346">限时回馈
</option><option value="350008345">限时回馈
</option><option value="350008344">限时回馈
</option><option value="350008343">限时回馈
</option><option value="350008342">限时回馈
</option><option value="350008341">累计储值送礼
</option><option value="350008340">每日消费送礼
</option><option value="350008339">每日储值送礼
</option><option value="350008338">每日储值送礼
</option><option value="350008337">储值返元宝
</option><option value="350008336">累计消费送礼
</option><option value="350008335">每日消费送礼
</option><option value="350008334">每日储值送礼
</option><option value="350008333">每日储值送礼
</option><option value="350008332">每日消费送礼
</option><option value="350008331">累计储值送礼
</option><option value="350008330">每日消费送礼
</option><option value="350008329">每日储值送礼
</option><option value="350008328">储值返元宝
</option><option value="350008327">累计消费送礼
</option><option value="350008326">每日消费送礼
</option><option value="350008325">每日储值送礼
</option><option value="350008325">每日储值送礼
</option><option value="350008324">每日储值送礼
</option><option value="350008323">每日储值送礼
</option><option value="350008322">累计消费送礼
</option><option value="350008321">河神兑元宝
</option><option value="350008320">每日消费送礼
</option><option value="350008319">限时回馈
</option><option value="350008318">限时回馈
 </select>
		<input type="button" value="开放活动" id='setactivity'>
      </div>	
  <span>活动选择: </span><select id='activityid1'><option value='0'>请选择</option>
    <option value="350020810">元旦变装舞会
</option><option value="350020801">平安夜藏袜子
</option><option value="350020800">平安夜许愿
</option><option value="350020451">决战青云之巅3
</option><option value="350020402">宠物竞技场
</option><option value="350020401">周年庆在线献礼（体验服版）
</option><option value="350020400">周年庆在线献礼
</option><option value="350020302">一元夺宝
</option><option value="350020301">一元夺宝-已过期
</option><option value="350020300">一元夺宝-已过期
</option><option value="350020250">开学有礼
</option><option value="350020205">团购活动-正式新增10月
</option><option value="350020204">团购活动-体验服测试
</option><option value="350020203">团购活动正式服第一期
</option><option value="350020202">拍卖行
</option><option value="350020201">团团更实惠
</option><option value="350020200">团团更实惠
</option><option value="350020100">小灰快跑2-测试
</option><option value="350020101">小灰快跑1-测试
</option><option value="350020036">圣诞寻宝
</option><option value="350020035">冰雪奇缘
</option><option value="350020034">马戏团大作战
</option><option value="350020033">冰雪世界
</option><option value="350020032">我要脱单
</option><option value="350020031">冰雪之音-冬
</option><option value="350020030">热情音符-夏
</option><option value="350020029">逐梦之音-春
</option><option value="350020028">萧瑟旋律-秋
</option><option value="350020027">小灰兑换
</option><option value="350020026">秋日驱魔
</option><option value="350020025">回忆往昔
</option><option value="350020024">温暖之家
</option><option value="350020023">苍山暮雪
</option><option value="350020022">百年好合
</option><option value="350020021">CEO红包-隐藏
</option><option value="350020020">秋收蛋糕烘焙
</option><option value="350020019">CEO红包
</option><option value="350020018">杜康传人
</option><option value="350020017">神农后裔
</option><option value="350020016">春景变装舞会
</option><option value="350020015">冬季花车巡游
</option><option value="350020014">决战青云之巅2
</option><option value="350020013">七夕乞巧
</option><option value="350020012">仙缘奇遇-成就
</option><option value="350020011">仙缘奇遇-上交物品
</option><option value="350020010">仙缘奇遇-动作
</option><option value="350020008">夏日烟花大会
</option><option value="350020006">回流活动3期
</option><option value="350020005">成就
</option><option value="350020003">回流活动二期（测试用）
</option><option value="350020002">2020决战青云之巅2代
</option><option value="350020001">回流活动
</option><option value="350020000">2020决战青云之巅
</option><option value="350010000">决战青云之巅
</option><option value="350009027">天灯赏月
</option><option value="350009026">心灵手巧
</option><option value="350009025">金蛋砸砸砸
</option><option value="350009024">诞辰祈福
</option><option value="350009023">荒古遗迹
</option><option value="350009022">天空之城
</option><option value="350009021">虚空战场
</option><option value="350009013">迎新长签
</option><option value="350009012">兜兜送礼
</option><option value="350009011">暑期嘉年华
</option><option value="350009010">森林法则
</option><option value="350009009">御剑九天
</option><option value="350009008">莘莘学子
</option><option value="350009006">爱的传递
</option><option value="350009005">我爱琪
</option><option value="350009004">青云乐府
</option><option value="350009003">青云乐府
</option><option value="350009002">云霄飞舟
</option><option value="350009001">感恩传递
</option><option value="350009000">签到有礼
</option><option value="350008362">河神送斧头
</option><option value="350008361">春节兑换
</option><option value="350008360">签到有礼
</option><option value="350008359">河神兑元宝
</option><option value="350008358">限时回馈
</option><option value="350008357">限时回馈
</option><option value="350008356">限时回馈
</option><option value="350008355">限时回馈
</option><option value="350008354">限时回馈
</option><option value="350008353">限时回馈
</option><option value="350008352">限时回馈
</option><option value="350008351">限时回馈
</option><option value="350008350">限时回馈
</option><option value="350008349">限时回馈
</option><option value="350008348">限时回馈
</option><option value="350008347">限时回馈
</option><option value="350008346">限时回馈
</option><option value="350008345">限时回馈
</option><option value="350008344">限时回馈
</option><option value="350008343">限时回馈
</option><option value="350008342">限时回馈
</option><option value="350008341">累计储值送礼
</option><option value="350008340">每日消费送礼
</option><option value="350008339">每日储值送礼
</option><option value="350008338">每日储值送礼
</option><option value="350008337">储值返元宝
</option><option value="350008336">累计消费送礼
</option><option value="350008335">每日消费送礼
</option><option value="350008334">每日储值送礼
</option><option value="350008333">每日储值送礼
</option><option value="350008332">每日消费送礼
</option><option value="350008331">累计储值送礼
</option><option value="350008330">每日消费送礼
</option><option value="350008329">每日储值送礼
</option><option value="350008328">储值返元宝
</option><option value="350008327">累计消费送礼
</option><option value="350008326">每日消费送礼
</option><option value="350008325">每日储值送礼
</option><option value="350008325">每日储值送礼
</option><option value="350008324">每日储值送礼
</option><option value="350008323">每日储值送礼
</option><option value="350008322">累计消费送礼
</option><option value="350008321">河神兑元宝
</option><option value="350008320">每日消费送礼
</option><option value="350008319">限时回馈
</option><option value="350008318">限时回馈
 </select>
		<input type="button" value="关闭活动" id='closeact'>
      </div>
  <div><span>物品数量: </span><input type='text' value='1' id='mailnum' placeholder='请输入发放数量'></div>
  <div><input type='button' value='发送邮件' id='mailbtn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' value='发送全服邮件' id='allmailbtn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' value='使用物品' id='usebtn'></div>

</div>
<br>
<hr/>
<br>
<div><span>公告内容: </span><input type='text' value='' id='ggnr'><input type='button' value='发送公告' id='fsgg'></div>
<br><hr/><br>
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  if(uname==''){
		  alert('角色名不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'getuid.php',
		  type:'post',
		  'data':{type:'getid',checknum:checknum,uname:uname,qu:qu},
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
  $('#addvipbtn1').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'addvip1',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
    $('#addvipbtn2').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'addvip2',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
    $('#addvipbtn3').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'addvip3',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var chargenum=$('#chargenum').val();
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'charge',checknum:checknum,uname:uname,uid:uid,num:chargenum,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
	  if(mailnum<1 || mailnum>9999){
		  alert('数量范围:1-9999。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{'type':'mail',checknum:checknum,uname:uname,uid:uid,item:itemid,num:mailnum,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
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
	  if(mailnum<1 || mailnum>9999){
		  alert('数量范围:1-9999。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{'type':'allmail',uname:uname,checknum:checknum,uname:uname,item:itemid,num:mailnum,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
	  if(mailnum<1 || mailnum>9999){
		  alert('数量范围:1-9999。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{'type':'useitem',checknum:checknum,uname:uname,uid:uid,item:itemid,num:mailnum,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var ggnr=$('#ggnr').val();
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'fsgg',checknum:checknum,uname:uname,uid:uid,ggnr:ggnr,qu:qu},
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
		  url:'itemquery.php',
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtsz',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtcb',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtss',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtlq',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtws',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtfxq',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtfy',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtzq',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gmquery.php',
		  type:'post',
		  'data':{type:'qtjn',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addexp',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'feisheng',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  var uname=$.trim($('#uname').val());
	  if(uname==''){
		  alert('角色名不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'biduser',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  var uname=$.trim($('#uname').val());
	  if(uname==''){
		  alert('角色名不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'fjzh',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'unbiduser',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'jfzh',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'bidtalk',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'unbidtalk',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
   $('#setactivity').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var activityid=$('#activityid').val();
	  if(activityid=='' || activityid=='0'){
		  alert('请选择活动。');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{'type':'setactivity',checknum:checknum,uname:uname,uid:uid,activityid:activityid,qu:qu},
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
  $('#closeact').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var activityid1=$('#activityid1').val();
	  if(activityid1=='' || activityid1=='0'){
		  alert('请选择活动。');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{'type':'closeact',checknum:checknum,uname:uname,uid:uid,activityid1:activityid1,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'ruyu',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'chuyu',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'czfwqdj',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'czlqsj',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
       $('#czpkcs').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'czpkcs',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
       $('#qkfhts').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'qkfhts',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'znjkd',zinvid:zinvid,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'znpld',zinvid:zinvid,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'znxmkc',zinvid:zinvid,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'divorce',uname:uname,checknum:checknum,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var sexValue = $('.sex input[type="radio"]:checked').attr('value');
	  console.log(sexValue)
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addson',sexValue: sexValue,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var iswin = $('.iswin input[type="radio"]:checked').attr('value');
	  console.log(iswin)
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'iswin',iswin:iswin,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'clearBeiBao',clearValue:clearValue,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addzbzf',szzbzfValue:szzbzfValue,zfdj:zfdj,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
  $('#szqldj').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  alert('请输入启灵等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(zfdj)) {
		  alert('请输入正确的启灵等级');
		  return false;
	  }	  	  
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'szqldj',szzbzfValue:szzbzfValue,zfdj:zfdj,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
  $('#szsbjjdj').click(function(){
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  alert('请输入等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(zfdj)) {
		  alert('请输入正确的等级');
		  return false;
	  }	  
	  	  var sbjj = $('#sbjj').attr('value');
	  if(sbjj == ''){
		  alert('请输入阶级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(sbjj)) {
		  alert('请输入正确的阶级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'szsbjjdj',szzbzfValue:szzbzfValue,zfdj:zfdj,sbjj:sbjj,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addyuanshen',szysjdValue:szysjdValue,ysdj:ysdj,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{'type':'addzhuangbei',checknum:checknum,uname:uname,uid:uid,item:itemid,skillid:skillid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addchengwei',CWID:CWID,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addtouxian',touxid:touxid,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'setlv',lv:lv,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
   $('#cutLv').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var cutlvid = $('#cutlvid').attr('value');
	  if(cutlvid == ''){
		  alert('请输入等级');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(cutlvid)) {
		  alert('请输入正确的等级');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'cutlv',cutlvid:cutlvid,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  console.log(cutlvid);
  })
   $('#wxpay').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var chargenum = $('#chargenum').attr('value');
	  if(chargenum == ''){
		  alert('请输入充值数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'wxpay',chargenum:chargenum,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  console.log(chargenum);
  })
   $('#setjinbi').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var jinbi = $('#jinbi').attr('value');
	  if(jinbi == ''){
		  alert('请输入金币数量');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(jinbi)) {
		  alert('请输入正确的数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'setjinbi',jinbi:jinbi,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var yinbi = $('#yinbi').attr('value');
	  if(yinbi == ''){
		  alert('请输入银币数量');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(yinbi)) {
		  alert('请输入正确的数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'setyinbi',yinbi:yinbi,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'setganglv',ganglv:ganglv,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'setwinglevel',winglv:winglv,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  alert('请输入正确的数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addgangmoney',gangmoney:gangmoney,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var gangvit = $('#gangvit').attr('value');
	  if(gangvit == ''){
		  alert('请输入要增加的帮派活跃度');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(gangvit)) {
		  alert('请输入正确的数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addgangvit',gangvit:gangvit,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
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
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'AddGeniusPoint',ewtfd:ewtfd,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
    $('#szbsd').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var bsd = $('#bsd').attr('value');
	  if(bsd == ''){
		  alert('请输入要增加的数量');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(bsd)) {
		  alert('请输入正确数数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'szbsd',bsd:bsd,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  console.log(bsd);
  })       
      $('#tjxl').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var xlid = $('#xlid').attr('value');
	  if(xlid == '' ){
		  alert('请选择仙侣');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'tjxl',xlid:xlid,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  console.log(xlid);
  })  
      $('#scsyxl').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'scsyxl',checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  console.log(xlid);
  })    
  $('#AddSkillNumPet').click(function() {
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var chongwuid = $('#chongwuid').attr('value');
	  if(chongwuid == '' ){
		  alert('请选择宠物');
		  return false;
	  }
	  var jnsl = $('#jnsl').attr('value');
	  if(jnsl == ''){
		  alert('请输入要增加的技能数');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(jnsl)) {
		  alert('请输入正确的技能数');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'AddSkillNumPet',chongwuid:chongwuid,jnsl:jnsl,checknum:checknum,uname:uname,uid:uid,qu:qu},
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
	  if(checknum==''){
		  alert('请输入GM校验码。');
		  return false;
	  }
	  var uid=$.trim($('#uid').val());
	  if(uid=='' || isNaN(uid) || uid < 1){
		  alert('角色ID不能为空。');
		  return false;
	  }
	  var ganggongxun = $('#ganggongxun').attr('value');
	  if(ganggongxun == ''){
		  alert('请输入要增加的帮派功勋');
		  return false;
	  }
	  if(!/^[0-9]+.?[0-9]*$/.test(ganggongxun)) {
		  alert('请输入正确的数量');
		  return false;
	  }
	  $.ajax({
		  url:'gm_tool.php',
		  type:'post',
		  'data':{type:'addganggongxun',ganggongxun:ganggongxun,checknum:checknum,uname:uname,uid:uid,qu:qu},
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