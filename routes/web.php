<?php

use App\Http\Controllers\BooksController;
use App\Models\Author;
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

Route::get('test-relations', function () {
    $author = Author::find(1);
    return $author->editorials->first()->authors;
    // return $author->editorials;
    // return $author->profile;
    // return $author->books;
});

Route::get('/', [BooksController::class, 'index']);
