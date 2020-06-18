<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ArticlesController@index');

//blog
Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/about','AboutController@about')->name('about');
Route::get('/contact','ContactController@showcontact')->name('contact');
Route::post('/contact/submit', 'ContactController@submit')->name('contact_submit');
Route::get('/article/{id}/{slug}.html', 'ArticlesController@showArticle')->name('blog.show');




//account
Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', function(){
        \Auth::logout();
        return redirect(route('login'));
    })->name('logout');
    Route::get('/my/account', 'AccountController@index')->name('account');
    //comments
    Route::post('/comments/add', 'CommentsController@addComment')->name('comments.add');
    Route::delete('/comments/delete', 'Admin\CommentsController@deleteComment')->name('comments.delete');
    Route::delete('/messages/delete', 'Admin\MessagesController@deleteMessages')->name('messages.delete');
        // admin
    Route::group(['middleware' => 'admin','prefix'=>'admin'], function() {
        Route::get('/', 'Admin\AccountController@index')->name('admin');
        Route::get('/abouts', 'Admin\AccountController@about')->name('abouts');
        Route::post('/abouts/submit', 'Admin\AccountController@submit')->name('abouts_submit');
        Route::get('/abouts/edit/{id}', 'Admin\AccountController@editAbouts')->where('id', '\d+')->name('editAbout');
        Route::post('/abouts/edit/{id}', 'Admin\AccountController@editRequestAbouts')->where('id', '\d+');
        Route::delete('/abouts/delete', 'Admin\AccountController@deleteAbouts')->name('abouts.delete');
        /** Categories */
        Route::get('/categories','Admin\CategoriesController@index')->name('categories');
        Route::get('/categories/add','Admin\CategoriesController@addCategory')->name('categories.add');
        Route::post('/categories/add', 'Admin\CategoriesController@addRequestCategory');
        Route::get('/categories/edit/{id}','Admin\CategoriesController@editCategory')
            ->where('id','\d+')->name('categories.edit');
        Route::post('/categories/edit/{id}', 'Admin\CategoriesController@editRequestCategory')
            ->where('id', '\d+');
        Route::delete('/categories/delete','Admin\CategoriesController@deleteCategory')->name('categories.delete');
        /**Articles*/
        Route::get('/articles', 'Admin\ArticlesController@index')->name('articles');
        Route::get('/articles/add', 'Admin\ArticlesController@addArticle')->name('articles.add');
        Route::post('/articles/add', 'Admin\ArticlesController@addRequestArticle');
        Route::get('/articles/edit/{id}', 'Admin\ArticlesController@editArticle')->where('id', '\d+')->name('articles.edit');
        Route::post('/articles/edit/{id}', 'Admin\ArticlesController@editRequestArticle')->where('id', '\d+');
        Route::delete('/articles/delete', 'Admin\ArticlesController@deleteArticle')->name('articles.delete');
        /** Users */
        Route::get('/users', 'Admin\UsersController@index')->name('users');
        Route::get('/users/accepted/{id}', 'Admin\UsersController@acceptUsers')
            ->name('user.accepted');
        Route::get('/users/down/{id}', 'Admin\UsersController@downUsers')
            ->name('user.down');
        Route::delete('/users/delete', 'Admin\UsersController@deleteUsers')->name('users.delete');

        Route::get('/comments', 'Admin\CommentsController@index')->name('comments');
        Route::get('/comments/accepted/{id}', 'Admin\CommentsController@acceptComment')
            ->where('id', '\d+')->name('comment.accepted');
        Route::get('/messages', 'Admin\MessagesController@index')->name('messages');

    });
});



