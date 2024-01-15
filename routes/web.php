<?php

// use App\Models\Post;

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'About',
        "name" => "Devan Yudistira Sugiharta",
        "email" => "MasdevanKocag@gmail.com",
        "images" => "profil.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('category', [
    'title' => 'Post Catgories',
    'active' => 'Category',
    'posts' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('categories', [
        'title' => "Post by Category : $category->name",
        'active' => 'Category',
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'active' => 'Blog',
        'posts' => $author->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
