<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Queue\Listener;

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

    // \Illuminate\Support\Facades\DB::listen(function($query) {
    //     logger($query->sql);
    // });

   return view('posts', [
       // deal with n+1 problem, load with category and author
       'posts' => Post::latest()->with('category', 'author')->get()
   ]);

});

Route::get('posts/{post:slug}', function(Post $post) {

    return view('post', [
        'post' => $post
    ]);


});

Route::get('categories/{category:slug}', function(Category $category) {

    return view('posts', [
        'posts' => $category->posts
    ]);

});

Route::get('authors/{author:id}', function(User $author) {

    return view('posts', [
        'posts' => $author->posts
    ]);

});
