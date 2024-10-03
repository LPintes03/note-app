<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Route::get('/', function () {
//     return view('frontend.index');
// });


Route::get('/', [NoteController::class, 'showNotes']);
Route::get('/create', [NoteController::class, 'create']);
Route::post('/create', [NoteController::class, 'store']);
Route::get('/edit/{id}', [NoteController::class, 'edit']);
Route::put('/edit/{id}', [NoteController::class, 'update']);
Route::get('/delete/{id}', [NoteController::class, 'destroy']);
