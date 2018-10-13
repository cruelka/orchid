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

Route::get('/', function () {
    return view('main');
});
Route::get('/model', function () {
    return view('model');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/page/{slug}', function($slug){
    $data = App\Page::where('slug', '=', $slug)->firstOrFail();
    $posts = App\Post::take(3)->get();
    return view('content', compact('data','posts'));
});


Route::get('/post/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});
Route::get('/blog', function () {
    $posts = App\Post::paginate(4);
    return view('posts', compact('posts'));
});