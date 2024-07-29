<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('lang/{locale}', [LocalizationController::class, 'setLang'])->name('lang.switch');

Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, ['uz', 'ru', 'en'])) {
        app()->setLocale($locale);
    }

    return view('welcome');
})->name('lang.switch');

