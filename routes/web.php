<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use \MailchimpMarketing\ApiClient;

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

Route::get('ping', function () {

    $mailchimp = new ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us13'
    ]);

    //   return  $mailchimp->lists->get();
    // print_r($response);
});

Route::get('/', [
    PostController::class, 'index'
]);

Route::get('posts/{post:slug}', [
    PostController::class, 'show'
]);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


// Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
// Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('admin');
// Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
// Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
// Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
// Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');
// Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');


// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});


// Route::get('categories/{category:slug}', function (Category $category) {
//     return view("posts", [
//         'posts' => $category->posts,
//         'categories' => Category::all(),
//         'currentCategory' => $category
//     ]);
// });

// Route::get('authors/{author:username}', function (User $author) {
//     return view("posts.index", [
//         'posts' => $author->posts,
//     ]);
// });
