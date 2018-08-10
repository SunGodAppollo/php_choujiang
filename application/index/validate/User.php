<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
	protected $rule = [
			'user_name'  =>  'require|max:25',
			'phone' =>  'require',
	];
	
	protected $message = [
			'user_name'  =>  '用户名必须填写',
			'phone' =>  '电话信息未填写或格式错误',
	];
	
	/* protected $scene = [
			'add'   =>  ['user_name','phone'],
			'edit'  =>  ['email'],
	]; */
}