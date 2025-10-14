<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/tes/boss', function () {
    return view('admin.auth.login');
});

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login.page')->middleware('ip.restrict');;
Route::post('/login',[\App\Http\Controllers\PageController::class,'login'])->name('login');
Route::post('/logout',[\App\Http\Controllers\PageController::class,'logout'])->name('logout');

Route::get('/',[\App\Http\Controllers\PageController::class,'main'])->name('main');
Route::get('/contact',[\App\Http\Controllers\PageController::class,'contact'])->name('contact');
Route::get('/about',[\App\Http\Controllers\PageController::class,'about'])->name('about');
Route::get('/service',[\App\Http\Controllers\PageController::class,'service'])->name('service');
Route::get('/doctors',[\App\Http\Controllers\PageController::class,'doctors'])->name('doctors');
Route::get('/chat',[\App\Http\Controllers\PageController::class,'chat'])->name('chat');


Route::middleware('auth')->group(function () {
    Route::get('/doctor/profile/edit', [DoctorProfileController::class, 'edit'])->name('doctor.profile.edit');
    Route::post('/doctor/profile', [DoctorProfileController::class, 'update'])->name('doctor.profile.update');

    Route::post('/doctors/{doctor}/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::post('/questions/{question}/answer', [AnswerController::class, 'store'])->name('answers.store');
    Route::post('/doctors/{doctor}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});
