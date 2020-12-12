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
use App\Post;
use App\User;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/create',function(){
 $user = User::findOrFail(1);
$post = new Post(['title'=>'title 2','body'=>'content 2']);
$user->posts()->save($post);
});

Route::get('/read', function(){
$user = User::findOrFail(1);
    foreach($user->posts as $post){
        echo $post->body . "<br>";
    }
});

Route::get