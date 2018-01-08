<?php

/**
 * 测试
 */

// Home 模块
Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('home', 'IndexController@index');
    Route::get('contact', 'IndexController@contact');

    Route::get('article/{id?}', 'ArticleController@index');
    Route::get('article/edit/{id?}', 'ArticleController@edit');
    Route::post('article/store', 'ArticleController@store');
    Route::get('review', 'ArticleController@lists');

    Route::get('email', 'IndexController@email');

});


/*-------------------还是一条奇怪的分界线------------------------还是为了让你奇怪！-----------------------------*/
/**
 * 使用 namespace 方法将相同的 PHP 命名空间分配给路由组的中所有的控制器
 * // 在 "App\Http\Controllers\Cms" 命名空间下的控制器
 */
Route::group(['namespace' => 'Cms'], function () {

    //路由前缀#
    Route::prefix('cms')->group(function () {
        Route::get('index', 'IndexController@index');
        Route::get('home', 'IndexController@home');
        Route::any('menu', 'NavMenuController@index');
        Route::any('menu/add', 'NavMenuController@add');
        Route::any('menu/edit/{id?}', 'NavMenuController@edit');
        Route::post('menu/ajaxOpForPage', 'NavMenuController@ajaxOpForPage');

    });
});



/*-------------------一条奇怪的分界线------------------------就是为了让你奇怪！-----------------------------*/

Route::namespace('Api')->group(function (){
    Route::prefix('api')->group(function (){
        Route::post('email/send', 'EmailController@send');
        Route::post('upload/img_file', 'UploadController@img_file');
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

/*-------------------还就是一条奇怪的分界线------------------------还就是为了让你奇怪！-----------------------------*/

Route::get('/home', 'HomeController@index')->name('home');
Route::any('test', 'TestController@index');

