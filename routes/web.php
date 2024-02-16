<?php

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('blogs',[
        "blogs"=>Blog::with(['category'])->get()
    ]);
});
Route::get('/blog/{blog:slug}', function (Blog $blog) {
    return view('blog',[
        "blog"=>$blog
    ]);
});
Route::get('/category/{category:slug}', function (Category $category) {
//    dd($category->blog);
    return view('blogs',[
        "blogs"=>$category->blogs
    ]);
});


