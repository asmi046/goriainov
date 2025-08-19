<?php

use App\Http\Controllers\ContactsController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/main', [IndexController::class, "main"])->name('main');
    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/services', [ServiceController::class, "index"])->name('services');
    Route::get('/services/{$slug}', [ServiceController::class, "page"])->name('services_page');
