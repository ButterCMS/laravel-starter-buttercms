<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PageController::class, 'showLandingPage'])->where('slug', '.*');

Route::get('/blog/', [BlogController::class, 'showDefault'])->where('slug', '.*')->name('blog.index');
Route::get('/blog/tag/{tagSlug}/', [BlogController::class, 'showPostsByTag'])->where('tagSlug', '.*');
Route::get('/blog/category/{categorySlug}/', [BlogController::class, 'showPostsByCategory'])->where('categorySlug', '.*');
Route::get('/blog/search/', [BlogController::class, 'showPostsBySearchQuery']);

//blog fallback
Route::get('/blog/{postSlug}/', [BlogController::class, 'showPost'])->where('postSlug', '.*');

//secondary landing page
Route::get('/landing-page/{pageSlug}/', [PageController::class, 'showLandingPageSlug'])->where('pageSlug', '.*');

//page fallback
Route::get('/{pageSlug}/', [PageController::class, 'showPage'])->where('pageSlug', '.*');
