<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoRouanetController;

Route::get('/project/all', [ProjetoRouanetController::class, 'index']);
Route::get('/project/{id}', [ProjetoRouanetController::class, 'show']);
Route::post('/project', [ProjetoRouanetController::class, 'store']);
Route::put('/project/{id}', [ProjetoRouanetController::class, 'update']);
Route::delete('/project/{id}', [ProjetoRouanetController::class, 'destroy']);
