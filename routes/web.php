<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LayeringLabController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

Route::get('/quiz', [QuizController::class, 'showQuiz']);
Route::post('/quiz/submit', [QuizController::class, 'calculateRecommendation'])->name('quiz.submit');
Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/layering-lab', [LayeringLabController::class, 'index']);
Route::post('/layering-lab/blend', [LayeringLabController::class, 'blend'])->name('layering.blend');
Route::get('/quiz', [QuizController::class, 'index']);
Route::post('/quiz/recommend', [QuizController::class, 'recommend'])->name('quiz.recommend');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');