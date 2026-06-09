<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class,'homepage'])->name('homepage');
//creazione articolo
Route::get('/create/article',[ArticleController::class,'create'])->name('create.article')->middleware('auth');
//tutti gli articoli
Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');
//articolo specifico
Route::get('show/article/{article}',[ArticleController::class,'show'])->name('article.show');
//categorie
Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');

//indice revisori 
Route::get('/revisor/index',[RevisorController::class,'index'])->name('revisor.index')->middleware('isRevisor');
//accettare articolo
Route::patch('/accept/{article}',[RevisorController::class,'accept'])->name('accept');
//rifiutare articolo
Route::patch('/reject/{article}',[RevisorController::class,'reject'])->name('reject');

//email per diventare revisore
Route::get('/revisor/request',[RevisorController::class,'becomeRevisor'])->name('become.revisor')->middleware('auth');
//accettare richiesta revisore
Route::get('/make/revisor/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

//ricerca nel sito
Route::get('/search/article',[PublicController::class,'searchArticle'])->name('article.search');

//cambio lingua
Route::post('/lingua/{lang}',[PublicController::class,'setLanguage'])->name('setLocale');