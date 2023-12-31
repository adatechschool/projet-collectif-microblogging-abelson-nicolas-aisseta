<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});



Route::get('/index', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('post.index');



Route::get('/onepost/{post}', [PostController::class, 'show'])->name('post.show');



Route::get('/create', [PostController::class, 'create'])->name('create');

Route::post('/store', [PostController::class, 'store'])->name('post.store');

Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('post.delete');

// Route qui gère les likes 
Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
// Route qui gère les commentaires
//Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('add.comment');




//Route::get('update', [PostController::class, 'update'])->name('post.update');

//Route::get('', [PostController::class, 'delete'])->name('post.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/dashboard', [ProfileController::class, 'store'])->name('update.avatar');
    Route::post('/dashboard/updatebio', [ProfileController::class, 'storebio'])->name('update.bio');
});

require __DIR__.'/auth.php';

