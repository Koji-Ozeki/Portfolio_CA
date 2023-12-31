<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TypingEffectController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/documents', [PostController::class, 'documents'])->name('posts.documents');
Route::get('/posts/contact', [PostController::class, 'contact'])->name('posts.contact');