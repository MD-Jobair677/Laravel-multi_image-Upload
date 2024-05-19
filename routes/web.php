<?php

use App\Http\Controllers\FileController;
use GuzzleHttp\Cookie\FileCookieJar;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Finder\Iterator\FilecontentFilterIterator;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[FileController::class,"index"])->name('index');
Route::get('/showiamge',[FileController::class,"show"])->name('show');
Route::post('/insert',[FileController::class,"insert"])->name('insert');