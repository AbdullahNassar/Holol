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

Route::get('/lang/{locale}', ['as' => 'site.lang', 'uses' => 'LangController@postIndex']);
Route::get('/markAsRead', function(){
    Auth::guard('admins')->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', ['as' => 'site.home', 'uses' => 'HomeController@getIndex']);
    Route::get('/products', ['as' => 'site.products', 'uses' => 'ProductsController@getIndex']);
    Route::get('/product/{id}', ['as' => 'site.product', 'uses' => 'ProductsController@getProduct']);
    Route::get('/category/{id}', ['as' => 'site.category', 'uses' => 'ProductsController@getCat']);
    Route::get('/sub/{id}', ['as' => 'site.sub', 'uses' => 'ProductsController@getSub']);
    Route::get('/team', ['as' => 'site.team', 'uses' => 'TeamController@getIndex']);
    Route::get('/marks', ['as' => 'site.marks', 'uses' => 'MarksController@getIndex']);
    Route::get('/mark/{id}', ['as' => 'site.mark', 'uses' => 'MarksController@getPost']);
    Route::get('/about', ['as' => 'site.about', 'uses' => 'AboutController@getIndex']);
    Route::get('/contact', ['as' => 'site.contact', 'uses' => 'ContactController@getIndex']);
    Route::post('/send', ['as' => 'site.message', 'uses' => 'HomeController@message']);
    Route::post('/subscribe', ['as' => 'site.subscribe', 'uses' => 'HomeController@subscribe']);
    Route::get('/error', ['as' => 'site.error', 'uses' => 'HomeController@error']);
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('/', 'AuthController@getIndex');
        Route::get('/login', 'AuthController@getIndex');
        Route::post('/login', 'AuthController@postLogin')->name('admin.login');
        Route::get('/logout', 'AuthController@getLogout')->name('admin.logout');
    });

    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/', ['as' => 'admin.home', 'uses' => 'HomeController@getIndex']);
        Route::get('/contacts', ['as' => 'admin.contacts', 'uses' => 'ContactsController@getContacts']);
        Route::post('/contacts', ['as' => 'admin.contacts.update', 'uses' => 'ContactsController@updateContacts']);
        Route::get('/data', ['as' => 'admin.data', 'uses' => 'DataController@getData']);
        Route::post('/data', ['as' => 'admin.data.update', 'uses' => 'DataController@updateData']);
        Route::post('/imgedit', ['as' => 'data.update.image', 'uses' => 'DataController@imageEdit']);

        Route::group(['prefix' => 'slider'], function () {
            Route::get('/', ['as' => 'admin.slider', 'uses' => 'SliderController@getIndex']);
            Route::get('/add', ['as' => 'admin.slider.add', 'uses' => 'SliderController@getAdd']);
            Route::post('/add', ['as' => 'admin.slider.add', 'uses' => 'SliderController@insertSlider']);
            Route::get('/edit/{id}', ['as' => 'admin.slider.edit', 'uses' => 'SliderController@getSlider']);
            Route::post('/edit/{id}', ['as' => 'admin.slider.edit', 'uses' => 'SliderController@updateSlider']);
            Route::get('/delete/{id}', ['as' => 'admin.slider.delete', 'uses' => 'SliderController@deleteSlid']);
        });

        Route::group(['prefix' => 'services'], function () {
            Route::get('/', ['as' => 'admin.services', 'uses' => 'ServicesController@getIndex']);
            Route::get('/add', ['as' => 'admin.service.add', 'uses' => 'ServicesController@getAdd']);
            Route::post('/add', ['as' => 'admin.service.add', 'uses' => 'ServicesController@postAdd']);
            Route::get('/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'ServicesController@getEdit']);
            Route::post('/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'ServicesController@postEdit']);
            Route::get('/delete/{id}', ['as' => 'admin.service.delete', 'uses' => 'ServicesController@delete']);
            Route::post('/imgedit/{id}', ['as' => 'service.edit.image', 'uses' => 'ServicesController@imageEdit']);
            Route::post('/imgedit2/{id}', ['as' => 'service.edit.images', 'uses' => 'ServicesController@imageEdit2']);
        });

        Route::group(['prefix' => 'posts'], function () {
            Route::get('/', ['as' => 'admin.posts', 'uses' => 'PostsController@getIndex']);
            Route::get('/add', ['as' => 'admin.post.add', 'uses' => 'PostsController@getAdd']);
            Route::post('/add', ['as' => 'admin.post.add', 'uses' => 'PostsController@insert']);
            Route::get('/edit/{id}', ['as' => 'admin.post.edit', 'uses' => 'PostsController@getEdit']);
            Route::post('/edit/{id}', ['as' => 'admin.post.edit', 'uses' => 'PostsController@postEdit']);
            Route::get('/delete/{id}', ['as' => 'admin.post.delete', 'uses' => 'PostsController@delete']);
            Route::post('/imgedit/{id}', ['as' => 'post.edit.image', 'uses' => 'PostsController@imageEdit']);
            Route::post('/imgedit2/{id}', ['as' => 'post.edit.images', 'uses' => 'PostsController@imageEdit2']);
        });

        Route::group(['prefix' => 'portfolios'], function () {
            Route::get('/', ['as' => 'admin.portfolios', 'uses' => 'PortfoliosController@getIndex']);
            Route::get('/add', ['as' => 'admin.portfolio.add', 'uses' => 'PortfoliosController@getAdd']);
            Route::post('/add', ['as' => 'admin.portfolio.add', 'uses' => 'PortfoliosController@insert']);
            Route::get('/edit/{id}', ['as' => 'admin.portfolio.edit', 'uses' => 'PortfoliosController@getEdit']);
            Route::post('/edit/{id}', ['as' => 'admin.portfolio.edit', 'uses' => 'PortfoliosController@postEdit']);
            Route::get('/delete/{id}', ['as' => 'admin.portfolio.delete', 'uses' => 'PortfoliosController@delete']);
            Route::post('/gallery', ['as' => 'admin.portfolio.images', 'uses' => 'PortfoliosController@getPostImages']);
            Route::post('/addImages', ['as' => 'admin.portfolio.addImages', 'uses' => 'PortfoliosController@addImages']);
            Route::get('/deleteImg/{id}', ['as' => 'admin.portfolio.deleteImg', 'uses' => 'PortfoliosController@deleteImage']);
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', ['as' => 'admin.category', 'uses' => 'CategoriesController@getIndex']);
            Route::post('/add', ['as' => 'admin.category.add', 'uses' => 'CategoriesController@insert']);
            Route::get('/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'CategoriesController@getCategory']);
            Route::post('/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'CategoriesController@updateCategory']);
            Route::get('/delete/{id}', ['as' => 'admin.category.delete', 'uses' => 'CategoriesController@delete']);
        });
        
        Route::group(['prefix' => 'cat'], function () {
            Route::get('/', ['as' => 'admin.cat', 'uses' => 'CatsController@getIndex']);
            Route::post('/add', ['as' => 'admin.cat.add', 'uses' => 'CatsController@insert']);
            Route::get('/edit/{id}', ['as' => 'admin.cat.edit', 'uses' => 'CatsController@getCategory']);
            Route::post('/edit/{id}', ['as' => 'admin.cat.edit', 'uses' => 'CatsController@updateCategory']);
            Route::get('/delete/{id}', ['as' => 'admin.cat.delete', 'uses' => 'CatsController@delete']);
        });

        Route::group(['prefix' => 'subscribers'], function () {
            Route::get('/index', ['as' => 'admin.subscribers', 'uses' => 'SubscribersController@getIndex']);
            Route::get('/send/{id}', ['as' => 'admin.subscriber.send', 'uses' => 'SubscribersController@getEmail']);
            Route::post('/sendMail', ['as' => 'sendMail', 'uses' => 'SubscribersController@sendEmail']);
            Route::get('/sendAll', ['as' => 'admin.subscriber.sendAll', 'uses' => 'SubscribersController@getAll']);
            Route::post('/sendAll', ['as' => 'admin.subscriber.sendAll', 'uses' => 'SubscribersController@sendAll']);
        });

        Route::group(['prefix' => 'users'], function () {
            Route::get('/', ['as' => 'admin.users', 'uses' => 'UsersController@getIndex']);
            Route::get('/add', ['as' => 'admin.user.add', 'uses' => 'UsersController@getAdd']);
            Route::post('/add', ['as' => 'admin.user.add', 'uses' => 'UsersController@insertUser']);
            Route::get('/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'UsersController@getUser']);
            Route::post('/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'UsersController@updateUser']);
            Route::get('/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'UsersController@deleteU']);
        });
        Route::get('/message', ['as' => 'admin.messages', 'uses' => 'MessageController@getIndex']);
        Route::get('/details/{id}', ['as' => 'admin.message.details', 'uses' => 'MessageController@details']);
        Route::get('/send/{id}', ['as' => 'admin.message.send', 'uses' => 'MessageController@getEmail']);
        Route::post('/sendMail', ['as' => 'message.sendMail', 'uses' => 'MessageController@sendEmail']);
            
        Route::post('/upload', ['as' => 'admin.upload.post', 'uses' => 'UploadController@getPost']);
        Route::post('/uploadIcon', ['as' => 'admin.upload.icon', 'uses' => 'UploadController@getPost2']);
        Route::post('/upload/images', ['as' => 'admin.upload.images', 'uses' => 'UploadController@getPostImages']);
    });
});