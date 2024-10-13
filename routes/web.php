<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use GuzzleHttp\Psr7\Request;

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
    $popular_packages = [
        [
            "id" => 1,
            "price_per_person" => 1900,
            "location" => "Turkey",
            "rating" => 5,
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
            "title" => "Sunset view of beautiful lakeside resident",
            "slug" => "sunset-view-of-beautiful-lakeside-resident",
            "image" => "/assets/images/img5.jpg"
        ],
        [
            "id" => 2,
            "price_per_person" => 1230,
            "location" => "Netherlands",
            "rating" => 5,
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
            "title" => "Experience the natural beauty of island",
            "slug" => "experience-the-natural-beauty-of-island",
            "image" => "/assets/images/img5.jpg"
        ],
        [
            "id" => 3,
            "price_per_person" => 2000,
            "location" => "Portugal",
            "rating" => 5,
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
            "title" => "Vacation to the water city of Portugal",
            "slug" => "vacation-to-the-water-city-of-portugal",
            "image" => "/assets/images/img5.jpg"
        ]
    ];
    return view('welcome', compact('popular_packages'));
});

// Route::get('lang/{locale}', [LocalizationController::class, 'setLang'])->name('lang.switch');

Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, ['uz', 'ru', 'en'])) {
        app()->setLocale($locale);
    }

    $popular_packages = [
        [
            "id" => 1,
            "price_per_person" => 1900,
            "location" => "Turkey",
            "rating" => 5,
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
            "title" => "Sunset view of beautiful lakeside resident",
            "slug" => "sunset-view-of-beautiful-lakeside-resident",
            "image" => "/assets/images/img5.jpg"
        ],
        [
            "id" => 2,
            "price_per_person" => 1230,
            "location" => "Netherlands",
            "rating" => 5,
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
            "title" => "Experience the natural beauty of island",
            "slug" => "experience-the-natural-beauty-of-island",
            "image" => "/assets/images/img5.jpg"
        ],
        [
            "id" => 3,
            "price_per_person" => 2000,
            "location" => "Portugal",
            "rating" => 5,
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
            "title" => "Vacation to the water city of Portugal",
            "slug" => "vacation-to-the-water-city-of-portugal",
            "image" => "/assets/images/img5.jpg"
        ]
    ];

    return view('welcome', compact('popular_packages'));
})->name('lang.switch');

Route::get('/{locale?}/book-now', function ($locale = null) {
    return view('book-now');
});

Route::get('/test', function () {
    dd('test');
});

Route::get('/{locale?}/package', function ($locale = null) {
    return view('package');
});
