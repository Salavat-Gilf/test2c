<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/records', [RecordController::class, 'index']);
Route::get('/records', [RecordController::class, 'show']);
