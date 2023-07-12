<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuscriberController;
use App\Http\Controllers\WebinarRegisterController;


Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('p/{page:slug}', [WebsiteController::class, 'page'])->name('page');
Route::get('blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('blog/{post:slug}', [WebsiteController::class, 'post'])->name('post');
Route::get('events-list', [WebsiteController::class, 'events'])->name('events');
Route::get('events-list/{event:slug}', [WebsiteController::class, 'event'])->name('event');
Route::get('events-list/{event:slug}/register', [WebsiteController::class, 'eventRegister'])->name('event.register');
Route::get('our-webinars', [WebsiteController::class, 'webinars'])->name('webinars');
Route::get('our-webinars/register', [WebsiteController::class, 'webinarRegister'])->name('webinar.register');
Route::post('our-webinars/register', [WebinarRegisterController::class, 'store'])->name('webinar.register.store');
Route::get('our-webinars/success-register', [WebsiteController::class, 'webinarSuccessRegister'])->name('webinars-success-register');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'dashboard'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('pages', PageController::class);
    Route::resource('events', EventController::class);
    Route::resource('subscribers', SuscriberController::class);
    Route::resource('webinars', WebinarController::class);
    Route::post('webinar/{webinar}/download-registers', [WebinarController::class, 'download'])->name('download');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
