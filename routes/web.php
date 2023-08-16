<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromeController;

// Route::get('/generate-palindrome', [PalindromeController::class, 'showForm'])->name('show-palindrome-form');
Route::post('/generate-palindrome', [PalindromeController::class, 'generate'])->name('generate-palindrome');

Route::get('/', function () {
    return view('generate_palindrome');
});

