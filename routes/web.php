<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });


// Route::view('/','home');
Route::get('/','App\Http\Controllers\HomeController@home')->name('home');
Route::get('/home','App\Http\Controllers\HomeController@home')->name('home');
Route::get('/about','App\Http\Controllers\HomeController@about')->name('about');
// Route::resource('/posts','App\Http\Controllers\PostController')->only(["index","show","create","store","edit","update","destroy"]);
Route::resource('/posts','App\Http\Controllers\PostController');
// Route::get('/posts/{id}/{author?}','App\Http\Controllers\HomeController@blog')->name('blog-post');

//
// Route::get("/posts/{id}",function($id){
//     return $id;
// });
// Route::get("/posts/{id}/{author?}",function($id,$author='<a> author by default </a>'){
//     $posts=[
//         1=>['title' => 'learn Laravel 7'],
//         2=>['title' => 'learn react JS'],
//     ];
//     return view("posts.show",[ 'data' => $posts[$id],'author' => $author]);
// });
// Route::get('/about', function () {
//     return view('about');
// });


