<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('hello1',function(){ 
    return 'Hello1,';
});
// Route::get('hello/:name','index/Index/hello');

return [
    'hello/:name'=>'index/Index/hello',
    // 'video'=>'admin/Videotest/index',
	// 'hello/:name'=>function($name){
	// 	return 'hello' + $name;
	// },
    //别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
    '__alias__'   => [	
    	// 'hello/:name'=>'index/Index/hello',
    ],
    //变量规则
    '__pattern__' => [
    ],
//        域名绑定到模块
//        '__domain__'  => [
//            'admin' => 'admin',
//            'api'   => 'api',
//        ],
];
