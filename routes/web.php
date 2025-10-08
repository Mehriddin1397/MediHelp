<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});
Route::middleware('auth')->group(function () {
    Route::get('/doctor/profile/edit', [DoctorProfileController::class, 'edit'])->name('doctor.profile.edit');
    Route::post('/doctor/profile', [DoctorProfileController::class, 'update'])->name('doctor.profile.update');

    Route::post('/doctors/{doctor}/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::post('/questions/{question}/answer', [AnswerController::class, 'store'])->name('answers.store');
    Route::post('/doctors/{doctor}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});
