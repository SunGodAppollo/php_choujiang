/**
 * Created by ujipin on 17/5/27.
 */
function wxSDKConfig(callbackFunc, apiList){
    $.ajax({
        type: "GET",
        url: "/api/cc/wechat/checkTicket?url=" + window.location.href.split('#')[0],
        dataType: "json",
        success: function(data) {
            //wangxiao sdk
            if (data.status == '1') {
                wx.config({
                    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                    appId: data.result.appId, // 必填，公众号的唯一标识
                    timestamp: data.result.timestamp, // 必填，生成签名的时间戳
                    nonceStr: data.result.nonceStr, // 必填，生成签名的随机串
                    signature: data.result.signature, // 必填，签名，见附录1
                    jsApiList: apiList // 必填，需要使用的JS接口列表，所有JS接口列表见附录2

                });
                wx.ready(function(){
                    if (callbackFunc != null) {
                        callbackFunc();
                    }
                });
            }
        },
        error: function(x, e) {
            // alert("微信超时连接，点确定后重试");
           // window.location.reload();
        },
        complete: function(x) {
            //alert("call complete");
        }
    });
}
