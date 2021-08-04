<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
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

Route::get('/', function () {
    return view('home', ["title" => "Home", "name" => "Muhammad Syaugi"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/blogs', [PostController::class, 'index']);

// halaman single post
Route::get('/post/{post:slug}',  [PostController::class, 'show']);

Route::get('/categories',  function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}',  function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
