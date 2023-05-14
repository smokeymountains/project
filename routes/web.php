<?php

use App\Models\AboutUs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\pdfsController;
use App\Http\Controllers\Admin\aboutController;
use App\Http\Controllers\Admin\apealController;
use App\Http\Controllers\Admin\causeController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\eventController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\GalleryController;


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Frontend\FrontendController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [FrontendController::class, 'index']);
Route::get('/causes', [FrontendController::class, 'causesView']);
Route::get('/apeal', [FrontendController::class, 'apeals']);
Route::post('/apeal/{id}', [FrontendController::class, 'ApealsComment']);
Route::get('/causes/{id}', [FrontendController::class, 'Causedonate']);
Route::get('/causes/don/{id}', [FrontendController::class, 'Causedonation']);
Route::post('/causes/{id}', [FrontendController::class, 'CauseComment']);
Route::get('/apeal/don/{id}', [FrontendController::class, 'apealdonation']);
Route::get('/apeal/{id}', [FrontendController::class, 'apealdonate']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/about/{id}', [FrontendController::class, 'aboutdetails']);
Route::get('/event', [FrontendController::class, 'event']);
Route::get('/event/{id}', [FrontendController::class, 'eventDetail']);
Route::post('/event/{id}', [FrontendController::class, 'EventComment']);
Route::get('/event/don/{id}', [FrontendController::class, 'Eventdonation']);
Route::get('/blog', [FrontendController::class, 'blogpost']);
Route::post('/blog/{id}', [FrontendController::class, 'BlogComment']);
Route::get('/blog/{id}', [FrontendController::class, 'blogpostdetails']);
Route::get('/gallery', [FrontendController::class, 'galleries']);
Route::get('/faq', [FrontendController::class, 'faquest']);
Route::post('/faq', [FrontendController::class, 'faquestion']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/pdf', [FrontendController::class, 'pdfs']);
Route::get('/pdf/{id}', [FrontendController::class, 'pdfshow']);

Route::get('/volunteer', [FrontendController::class, 'volunteers']);
Route::post('/volunteer', [FrontendController::class, 'volunteersRequest']);
Route::get('/categories', [FrontendController::class, 'categories']);
Route::get('/categories/{id}', [FrontendController::class, 'categoriesdetails']);
Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
//Route::prefix('front')->group(function () {
//    Route::get('/', [FrontendController::class, 'index']);
//});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('/index', DashboardController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('cause', causeController::class);
    Route::resource('apeals', apealController::class);
    Route::resource('pdf', pdfsController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('event', eventController::class);

    Route::resource('gallery', GalleryController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('user', UsersController::class);
    Route::resource('email', EmailController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('volunteer', VolunteerController::class);
    Route::resource('settings', SettingsController::class);
    Route::resource('about', aboutController::class);
    Route::resource('general', GeneralController::class);
});
