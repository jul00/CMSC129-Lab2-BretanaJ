<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class,'index']);
Route::resource('movies', MovieController::class);

Route::get('/trash',[MovieController::class,'trash'])->name('movies.trash');
Route::post('/restore/{id}',[MovieController::class,'restore'])->name('movies.restore');
Route::delete('/force-delete/{id}',[MovieController::class,'forceDelete'])->name('movies.forceDelete');
