<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * @param unknown $Text
 * @param unknown $url
 */
function Success($Text,$url=NULL){
	echo "<script type='text/javascript'>";
	echo  "alert('".$Text."');";
	if (!empty($url)){
		echo "window.location.href='".$url."';";
	}else {
		echo "window.history.go(-1);";
		echo "window.history.reload();";
		echo "window.history.reload();";
		
	}
	echo "</script>";
}

/**
 * @param unknown $Text
 * @param unknown $url
 */
function Error($Text,$url=NULL){
	echo "<script type='text/javascript'>";
	echo  "alert('".$Text."');";
	if (!empty($url)){
		echo "window.location.href='".$url."';";
	}else {
		echo "window.history.go(-1);";
		echo "window.history.reload();";
		
	}
	echo "</script>";
}