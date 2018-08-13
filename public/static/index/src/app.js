//域名
var host="http://localhost/web/";
//轮播图
var theme = "ios";
var mode = "scroller";
var display = "bottom";
var lang = "zh";
$('#demo_select').mobiscroll().select({
  theme: theme,
  mode: mode,
  display: display,
  lang: lang
});
$(".js-select").on("click",function(){
  console.log(1)
  $(this).find('input').removeClass("m-err-tips")
})
// //点击选择年级按钮选择年级并设置动态样式
// $(".select").on('click',(function(e){
//   $('html').scrollTop(272)
//   $('.form .telephone span')[0].style.display = "none"
//   $(".options li").each(function(index,item){
//     if(item.children[0].innerHTML == $(".select")[0].innerHTML){
//       $(item).addClass('optionsactive')
//     }else if($(item).hasClass('optionsactive')){
//       $(item).removeClass('optionsactive')
//     }
//   })
//   if($(".options")[0].style.display=="none"){
//     $(".options")[0].style.display="block"
//     $(this).removeClass('btn_short')
//     $(this).addClass('btn_short_press')
//   }else{
//     $(".options")[0].style.display="none"
//   }
// }))
$(".options li").on('click',function(e){
  $('.select')[0].setAttribute('class_id',e.target.getAttribute('class_id'))
  $('.select')[0].innerHTML = e.target.innerHTML
  $('.select')[0].style.color = "#333"
  $(".options")[0].style.display="none"
  $(".select").removeClass('btn_short_press')
  $(".select").addClass('btn_short')
})
//输入框动态样式
$('.form .longinput').on('focus',function(){
 $(this).parent().removeClass('btn_long')
 $(this).parent().removeClass('place-word')
 $(this).parent().addClass('btn_long_press')
})
$('.form .shortinput').on('focus',function(){
 $(this).parent().removeClass('btn_short')
 $(this).parent().removeClass('place-word')
 $(this).parent().addClass('btn_short_press')
 $('.form .telephone span')[0].style.display = "none"
})
$('.form .longinput').on('click',function(){
  $(this).parent().addClass('btn_long')
  $(this).parent().removeClass('btn_long_press')
})
$('.form .shortinput').on('blur',function(){
 $(this).parent().addClass('btn_short')
 $(this).parent().removeClass('btn_short_press')
})
$('.form .telephone input').on('focus',function(){
 $('.form .telephone span')[0].style.display = "block"
})
$('.form .verifycode input').on('focus',function(){
 $('.form .telephone span')[0].style.display = "none"
})
$('.form .telephone span').on('click',function(e){
  $('.form .telephone input')[0].value = ''
})
// 发送获取验证码
$($('.form .submitverify span')[0]).on('click',function(){
  getVerifyCode();
})
var flag = true
//表单验证及提交
$(".submit").on('click',function(){
  var telephoneNumber = $('.telephone input')[0].value
  var vertifyCode = $('.verifycode input')[0].value
  var userName = $('.username input')[0].value
  var classLevel = $('.mbsc-control').val();
  console.log(classLevel)
  if (classLevel == "初一") {
      classLevel = "1";
  } else if (classLevel == "初二") {
      classLevel = "2";
  } else if (classLevel == "初三") {
      classLevel = "3";
  } else if (classLevel == "高一") {
      classLevel = "4";
  } else if (classLevel == "高二") {
      classLevel = "5";
  } else if (classLevel == "高三") {
      classLevel = "6";
  } else {
      classLevel = "";
  }
  console.log(classLevel)
  if(vertifyCode == ""){
    $('.form .code-verf').val("").attr("placeholder",'请输入验证码');
    $('.form .code-verf').parent().addClass("place-word");
    return false ;
  }else if(isNaN(parseInt(vertifyCode))){
    $('.form .code-verf').val("").attr("placeholder",'请输入正确验证码');
    $('.form .code-verf').parent().addClass("place-word");
    return false ;
  }else{
    $('.form .hasvertifycode')[0].style.display = "none"
  }
  if(userName == ""){
    $('.form .student-name').val("").attr("placeholder",'请输入您的姓名');
    $('.form .student-name').parent().addClass("place-word");
    return false ;
  }else if(classLevel == ''){
    return false ;
  }else if(classLevel == null){
    $('.form .select').css({'color':'#FF4242'});
    return false ;
  }else{
    $('.form .hasusername')[0].style.display = "none"
  }
  function getUrlParam(urlname) { //获取url上面的id  id为字符串
      var reg = new RegExp("(^|&)" + urlname + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
      var r = window.location.search.substr(1).match(reg); //匹配目标参数
      if (r != null) return decodeURIComponent(r[2]);
      return null; //返回参数值
  }
  var urlname = window.location.href;
  getUrlParam(urlname);
  var data = {
    username:userName,
    class_id:parseInt(classLevel),
    mobile:parseInt(telephoneNumber),
    code:parseInt(vertifyCode),
    source_url:window.location.href,
    event: getUrlParam("event") ? getUrlParam("event") : "",
    source: getUrlParam("channel") ? getUrlParam("channel") : ""
  }
  if(flag){
    flag = false ;
    $.ajax({
      type:'POST',
      url:host+'public/index.php/index/index/check.html',//检验验证码
      data:data,
      success:function(res){
        flag = true
        if(res.status === 0){
          $('.form .code-verf').val("").attr("placeholder",'请输入正确验证码');
          $('.form .code-verf').parent().addClass("place-word");
        } else if(res.status === 1){
          $(".alertImg").css("display",'block')
          $(".mask").css("display",'block')
          $('.form .telephone input')[0].value = ""
          $('.verifycode input')[0].value = ""
          $('.username input')[0].value = ""
          $('.success')[0].style.display = "block"
          $(".select")[0].style.color = "#f26034"
          $('.form .submitverify span')[0].style.display = "block"
          $('.form .submitverify span')[1].style.display = "none"
          $($('.form .submitverify span')[1]).children()[0].innerHTML = 60
          $('.form .submitverify span')[0].innerHTML = '发送验证码'
          setTimeout(function(){
           $('.success')[0].style.display = "none"
           window.location.reload();
          },1500)
        }
      },
      error:function(){
        flag = true
        $('.submiterror')[0].style.display = 'block'
        var timer3 = setTimeout(function(){
          $('.submiterror')[0].style.display = "none"
         },1500)
      }
    })
  }
})
// 关闭弹窗
$(".close").on('click', function () {
  $(".alertImg").hide()
  $(".mask").hide()
  window.location.href=host+'public/index.php/Index/Choujiang/index';
  //window.location.reload()
})
// 点击第一层的确定按钮
$(".confirmBtn").on('click', function() {
  var telephoneNumber = $('.form .telephone input')[0].value
  if (telephoneNumber == "" ) {
    $('.form .tel-verf').attr("placeholder",'请输入手机号');
    $('.form .tel-verf').parent().addClass("place-word");
    return false ;
  } else if (!(/^1\d{10}$/.test(telephoneNumber))) {
    $('.form .tel-verf').val("").attr("placeholder",'请输入正确的手机号');
    $('.form .tel-verf').parent().addClass("place-word");
    return false ;
  } else{}
  $(".telephone").hide()
  $(".confirmBtn").hide()
  $(".inputHide").css('display','block')
  getVerifyCode();
})
// 获取验证码方法
function getVerifyCode(){
  var telephoneNumber = $('.form .telephone input').val()
  if (telephoneNumber == "" ) {
    $('.form .tel-verf').attr("placeholder",'请输入手机号');
    $('.form .tel-verf').parent().addClass("place-word");
    return false
  } else if (!(/^1\d{10}$/.test(telephoneNumber))) {
    $('.form .tel-verf').val("").attr("placeholder",'请输入正确的手机号');
    $('.form .tel-verf').parent().addClass("place-word");
    return false
  } else{
    $('.form .vertifytelephone')[0].style.display = "none"
    $('.form .submitverify span')[0].style.display = "none"
    $('.form .submitverify span')[1].style.display = "block"
    var mobile = $('.form .telephone input')[0].value
    $.ajax({
      type:'POST',
      url:host+'public/index.php/index/index/send.html',//获取验证码
      data:{
        mobile:mobile
      },
      success:function(res){
         if(res.status === 0){
          console.log(1)
          $('.form .code-verf').val("").attr("placeholder",res.message);
          $('.form .code-verf').parent().addClass("place-word");
          // $('.form .hasvertifycode')[0].style.display = "block"
          // $('.form .hasvertifycode')[0].innerHTML = res.message
          $('.form .submitverify span')[0].style.display = "block"
          $('.form .submitverify span')[1].style.display = "none"
          $($('.form .submitverify span')[1]).children()[0].innerHTML = 60
          $('.form .submitverify span')[0].innerHTML = '重新发送'
         }
      },
      error:function(){
        console.log(3)
        $('.form .code-verf').val("").attr("placeholder","发送失败，请重新发送");
        $('.form .code-verf').parent().addClass("place-word");
        $('.form .submitverify span')[0].style.display = "block"
        $('.form .submitverify span')[1].style.display = "none"
        $($('.form .submitverify span')[1]).children()[0].innerHTML = 60
        $('.form .submitverify span')[0].innerHTML = '重新发送'
      }
    })
    var timer = setInterval(function(){
      $($('.form .submitverify span')[1]).children()[0].innerHTML = $($('.form .submitverify span')[1]).children()[0].innerHTML -1
      if($($('.form .submitverify span')[1]).children()[0].innerHTML == 0 || $('.form .submitverify span')[0].style.display == "block"){
        clearInterval(timer)
        $($('.form .submitverify span')[1]).children()[0].innerHTML = 60
        $('.form .submitverify span')[1].style.display = "none"
        $('.form .submitverify span')[0].style.display = "block"
      }
    },1000)
  }
};
//微信分享
wxSDKConfig(wxShare, ['onMenuShareTimeline', 'onMenuShareAppMessage']);

function wxShare() {
  var link = window.location.href;
  wx.onMenuShareTimeline({
    //朋友圈
    title: "大海1对1在喊你抽奖",
    link: link,
    imgUrl: "https://k12-web.oss-cn-zhangjiakou.aliyuncs.com/lp/img/share-min.jpg",
    success: function () {
      // 用户确认分享后执行的回调函数
      alert("success")
    },
    cancel: function () {
      // 用户取消分享后执行的回调函数
    }
  });

  wx.onMenuShareAppMessage({
    //给朋友
    title: "大海1对1在喊你抽奖",
    link: link,
    desc: "马上领取体验课并参与笔记本电脑、iWatch等助学豪礼抽奖活动",
    //imgUrl: "http://ujipinwww.ufile.ucloud.com.cn/YOLO_app_2_1_1.png",
    imgUrl: "https://k12-web.oss-cn-zhangjiakou.aliyuncs.com/lp/img/share-min.jpg",
    type: '',
    dataUrl: '',
    success: function () {
      // 用户确认分享后执行的回调函数
    },
    cancel: function () {
      // 用户取消分享后执行的回调函数
    }
  });
}