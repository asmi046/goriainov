<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/main', [IndexController::class, "main"])->name('main');
    Route::get('/services', [ServiceController::class, "index"])->name('services');
    Route::get('/services/{$slug}', [ServiceController::class, "page"])->name('services_page');
