<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class,'homepage'])->name('homepage');
//creazione articolo
Route::get('/create/article',[ArticleController::class,'create'])->name('create.article')->middleware('auth');