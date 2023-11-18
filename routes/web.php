<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\destinationController;
use App\Http\Controllers\frontend\MountaineeringController;
use App\Http\Controllers\frontend\serviceController;
use App\Http\Controllers\frontend\teamController;
use App\Http\Controllers\frontend\testimonialController;
use App\Http\Controllers\frontend\RockclimbingController;
use App\Http\Controllers\frontend\TourController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\TrekkingController;
use App\Http\Controllers\frontend\SpecialInterestController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\TermsConditionsController;

use App\Http\Controllers\frontend\PackageController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/booking', [bookingController::class, 'index']);
Route::get('/destination', [destinationController::class, 'index']);
Route::get('/package', [packageController::class, 'index']);
Route::get('/service', [serviceController::class, 'index']);
Route::get('/team', [teamController::class, 'index']);
Route::get('/testimonial', [testimonialController::class, 'index']);
Route::get('/mountaineering', [MountaineeringController::class, 'index']);
Route::get('/rockclimbing', [rockclimbingController::class, 'index']);
Route::get('/tours', [TourController::class, 'index']);
Route::get('/trekking', [TrekkingController::class, 'index']);
Route::get('/specialinterests', [SpecialInterestController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/termsconditions', [TermsConditionsController::class, 'index']);


Route::post('contact_mail', [ContactController:: class , 'contact_mail_send']);
Route::get('/custom', [CustomPackageController::class, 'index']);


Route::get('/{PackageType}/{slug}', 'App\Http\Controllers\frontend\PackageController@show')->name('package.show');

Route::post('/frontend/search/results', 'App\Http\Controllers\frontend\SearchController@searchResults')->name('search.results');


Route::get('/SpecialInterest/documentary-and-photography', 'PackageController@show')->name('specialInterest.link');
Route::get('/SpecialInterest/hunting', 'PackageController@show')->name('hunting.link');
Route::get('/Tours/shandur-polo-festival', 'PackageController@show')->name('festival.link');
Route::get('/Tours/baltistan-jeep-safari', 'PackageController@show')->name('jeep.link');
Route::get('/Trekking/fairy-meadows-nanga-parbat-base-camp-short-trek', 'PackageController@show')->name('fairymeadows.link');
Route::get('/Trekking/K-2-ghandogoro-la-trek', 'PackageController@show')->name('k2.link');
Route::get('/Tours/hunza-valley-short-tour', 'PackageController@show')->name('hunza.link');


Route::get('blog/{id}/{slug}', 'App\Http\Controllers\frontend\blogController@showblog')->name('blog.showblog');



