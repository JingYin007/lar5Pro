<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    return view('welcome');
});*/

// Home 模块
Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController@index');
});


Route::any('mail', 'TestController@mail');

Route::get('greeting', function () {
    return view('home.greeting', ['name' => 'James']);
});

Route::get('blade', function () {
    return view('layouts.child');
});



Route::any('test/{name}','TestController@index');

Route::any('update/{name}','TestController@update');












/*-------------------一条奇怪的分界线------------------------就是为了让你奇怪！-----------------------------*/
/**
 * 使用 namespace 方法将相同的 PHP 命名空间分配给路由组的中所有的控制器
 * // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
 */
Route::namespace('Admin')->group(function () {
    //路由前缀#
    Route::prefix('admin')->group(function () {
        // 匹配包含 "/admin/users" 的 URL
        Route::get('user', 'UserController@index');
    });
});


/**
 * 部分资源路由的声明
 * 声明资源路由时，你可以指定控制器处理的部分行为，而不是所有默认的行为：
 */
Route::resource('photo', 'PhotoController', ['only' => [
    'index', 'show'
]]);

Route::resource('photo', 'PhotoController', ['except' => [
    'create', 'store', 'update', 'destroy'
]]);


