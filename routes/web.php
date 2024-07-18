<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Controllers\UserForAdminController;
use App\Models\Appointment;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('pages/contact', function () {
        return view('pages.contact');
    })->name('pages.contact');

    // Route for news listing within user profile
    Route::get('pages/news', function () {
        $news = News::all();
        return view('pages.news', compact('news'));
    })->name('pages.news');

    // Route for showing a specific news item within user profile
    Route::get('pages/news/{id}', function ($id) {
        $news = News::findOrFail($id);
        $news_all = News::all();
        return view('pages.show_news', compact('news','news_all'));
    })->name('pages.newshow');

    Route::resource('userappoinment', UserAppointmentController::class);

    // Route for terms and conditions page
    Route::get('pages/terms', function () {
        return view('pages.terms');
    })->name('pages.terms');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('news', NewsController::class);
    Route::resource('users', UserForAdminController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::put('/appointments/{appointment}/mark-donated', [AppointmentController::class, 'markDonated'])->name('appointments.mark-donated');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
