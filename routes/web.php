<?php

/**
 * 测试
 */


// Home 模块
Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('home', 'IndexController@index');
    Route::get('about', 'IndexController@about');
    Route::get('gallery', 'IndexController@gallery');
    Route::get('shortcodes', 'IndexController@shortcodes');

    Route::get('contact', 'IndexController@contact');

    Route::get('article/{id?}', 'ArticleController@index');
    Route::get('article/edit/{id?}', 'ArticleController@edit');
    Route::post('article/store', 'ArticleController@store');
    Route::get('review', 'ArticleController@lists');

});


/*-------------------还是一条奇怪的分界线------------------------还是为了让你奇怪！-----------------------------*/
Route::group(['namespace' => 'Cms'], function () {

    //路由前缀#
    Route::prefix('cms')->group(function () {
        Route::get('index', 'IndexController@index');
        Route::get('home', 'IndexController@home');
        Route::get('menu', 'NavMenuController@index');
        Route::get('menu/add', 'NavMenuController@add');
    });
});




/*-------------------还就是一条奇怪的分界线------------------------还就是为了让你奇怪！-----------------------------*/



/**
 * 使用 namespace 方法将相同的 PHP 命名空间分配给路由组的中所有的控制器
 * // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
 */
Route::namespace('Admin')->group(function () {
    //路由前缀#
    Route::prefix('admin')->group(function () {
        // 匹配包含 "/admin/users" 的 URL
        Route::get('user', 'UserController@index');
        Route::get('index', 'IndexController@index');
        Route::get('charts', 'IndexController@charts');
        Route::get('tables', 'IndexController@tables');
        Route::get('panels', 'IndexController@panels');
        Route::get('elements', 'IndexController@elements');
        Route::get('icons', 'IndexController@icons');
        Route::get('notifications', 'IndexController@notifications');
        Route::get('typography', 'IndexController@typography');

        Route::get('page_login', 'IndexController@page_login');
        Route::get('page_profile', 'IndexController@page_profile');
        Route::get('page_lock', 'IndexController@page_lock');
    });
});


/*-------------------一条奇怪的分界线------------------------就是为了让你奇怪！-----------------------------*/

Route::namespace('Api')->group(function (){
    Route::prefix('api')->group(function (){
        Route::any('email/send', 'EmailController@send');
        Route::any('upload/img_file', 'UploadController@img_file');
    });

});











/*-------------------又是一条奇怪的分界线------------------------又是为了让你奇怪！-----------------------------*/




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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('test', 'TestController@index');


