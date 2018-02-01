<?php

/**
 * 测试
 */

// Home 模块
Route::namespace('Home')->group(function () {
    Route::get('/', 'IndexController@index');
    Route::get('home', 'IndexController@index');
    Route::get('contact', 'IndexController@contact');
    Route::get('review', 'ArticleController@lists');
    Route::get('email', 'IndexController@email');

    Route::prefix('article')->group(function (){
        Route::get('index/{id?}', 'ArticleController@index');
    });
});


/*-------------------还是一条奇怪的分界线------------------------还是为了让你奇怪！-----------------------------*/
/**
 * 使用 namespace 方法将相同的 PHP 命名空间分配给路由组的中所有的控制器
 * // 在 "App\Http\Controllers\Cms" 命名空间下的控制器
 */
Route::namespace('Cms')->prefix('cms')->group( function () {

    Route::get('index', 'IndexController@index');
    Route::get('home', 'IndexController@home');

    //路由前缀#
    Route::prefix('menu')->group(function () {
        Route::any('index', 'NavMenuController@index');
        Route::any('add', 'NavMenuController@add');
        Route::any('edit/{id?}', 'NavMenuController@edit');
        Route::post('ajaxOpForPage', 'NavMenuController@ajaxOpForPage');
    });
    /**
     * 今日赠言 管理
     */
    Route::prefix('todayWords')->group(function (){
        Route::any('index', 'TodayWordsController@index');
        Route::any('add', 'TodayWordsController@add');
        Route::any('edit/{id?}', 'TodayWordsController@edit');
        Route::post('ajaxOpForPage', 'TodayWordsController@ajaxOpForPage');
    });
    /**
     * 文章列表 管理
     */
    Route::prefix('article')->group(function (){
        Route::any('index','ArticleController@index');
        Route::any('add','ArticleController@add');
        Route::any('edit/{id?}', 'ArticleController@edit');
        Route::post('ajaxOpForPage', 'ArticleController@ajaxOpForPage');
    });

    /**
     * 管理员管理
     */
    Route::prefix('admin')->group(function (){
        Route::any('index','AdminController@index');
        Route::any('add','AdminController@add');
        Route::any('edit/{id?}', 'AdminController@edit');
        Route::post('ajaxOpForPage', 'AdminController@ajaxOpForPage');

        Route::any('role','AdminController@role');
        Route::any('addRole','AdminController@addRole');
        Route::any('editRole/{id?}', 'AdminController@editRole');
    });
});



/*-------------------一条奇怪的分界线------------------------就是为了让你奇怪！-----------------------------*/

Route::namespace('Api')->prefix('api')->group(function (){
    Route::post('email/send', 'EmailController@send');
    Route::post('upload/img_file', 'UploadController@img_file');
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

