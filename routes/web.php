<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/survey', function () {
    return view('survey');
})->name('survey');

Route::get('/statistics', function () {
    return view('statistics');
})->name('statistics');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/questionnaire', function () {
    return view('questionnaire');
})->name('questionnaire');


Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
Route::get('/admin-kuesioner', function () {
return view('admin.kuesioner.index');
})->name('kuesioner');
Route::get('/admin-statistik', function () {
    return view('admin.statistik.index');
})->name('statistik');
Route::get('/admin-user', function () {
    return view('admin.user.index');
})->name('user');

require __DIR__.'/auth.php';
