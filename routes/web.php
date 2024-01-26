<?php

use App\Http\Controllers\registrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/welcome', [registrationController::class, 'store'])->name('welcome');

Route::get('/fetch', [registrationController::class, 'fetch'])->name('fetch');

// Update 
Route::get('/registration/{id}/edit',[registrationController::class,'edit']);

Route::put('/registration/{id}/update',[registrationController::class,'update']);

// Delete 
Route::delete('/registration/{id}/delete',[registrationController::class,'delete']);


