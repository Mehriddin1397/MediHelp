<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Route;

Route::get('/tes/boss', function () {
    return view('admin.auth.login');
});

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login.page');
Route::post('/login',[PageController::class,'login'])->name('login');
Route::post('/logout',[PageController::class,'logout'])->name('logout');

Route::get('/',[PageController::class,'main'])->name('main');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/service',[PageController::class,'service'])->name('service');
Route::get('/doctors',[PageController::class,'doctors'])->name('doctors');
Route::get('/chat',[PageController::class,'chat'])->name('chat');

Route::get('/specialties/{id}/doctors', [SpecialtyController::class, 'show'])->name('specialties.show');


Route::middleware('auth')->group(function () {
    Route::get('/doctor/profile/edit', [DoctorProfileController::class, 'edit'])->name('doctor.profile.edit');
    Route::post('/doctor/profile', [DoctorProfileController::class, 'update'])->name('doctor.profile.update');

    Route::post('/doctors/{doctor}/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::post('/questions/{question}/answer', [AnswerController::class, 'store'])->name('answers.store');
    Route::post('/doctors/{doctor}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::resource('specialties', SpecialtyController::class);
    Route::get('profile',[pageController::class,'profile'])->name('profile');



});
