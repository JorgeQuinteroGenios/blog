<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

Route::get('/noticias', [NoticiaController::class, 'index']);
Route::get('/noticias/create', [NoticiaController::class, 'create']);
Route::get('/noticias/{id}', [NoticiaController::class, 'show']);
Route::post('/noticias', [NoticiaController::class, 'store']);
Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy']);
