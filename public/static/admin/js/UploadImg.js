(function(window, document){
	
	 function UploadImg(object){
	 	var self=this
	 	if(!object){
			window.alert("请传入配置参数");
			 throw new Error("请传入配置参数");
		}
    	self.udload_img=document.getElementById(object.udload_img_Id);
    	self.udload_input=document.getElementById(object.udload_input_Id);
    	
    	 //绑定按钮点击事件
    	self.udload_img.onclick=function(){
    		udload_input.click(); 
    	}
        //显示
    	self.udload_input.onchange=function(){
    		var img_Url=window.URL.createObjectURL(this.files[0]);
    		udload_img.src=img_Url;
    	}
    }
 
 	window.UploadImg=UploadImg;
})(window, document)
