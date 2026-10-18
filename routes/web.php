<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LayeringLabController;


Route::get('/quiz', [QuizController::class, 'showQuiz']);
Route::post('/quiz/submit', [QuizController::class, 'calculateRecommendation'])->name('quiz.submit');
Route::get('/', [ProductController::class, 'index']);
Route::get('/layering', [LayeringLabController::class, 'index']);
Route::post('/layering/blend', [LayeringLabController::class, 'blend'])->name('layering.blend');
Route::get('/quiz', [QuizController::class, 'index']);
Route::post('/quiz/recommend', [QuizController::class, 'recommend'])->name('quiz.recommend');