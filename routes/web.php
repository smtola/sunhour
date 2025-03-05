<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FunctionController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\DailyCleanController;
use App\Http\Controllers\DeepCleanController;
use App\Http\Controllers\ShowRoomController;
use App\Http\Controllers\TecnologyController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\BrandsController;
use App\Http\Controllers\Frontend\PartnershipController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactController;
// Public routes with guest middleware
Route::get('/', function () {
    return view('frontends.home');
})->name('home');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/all/brands', [BrandsController::class, 'index'])->name('brands.all');
Route::get('/brands/{products}', [BrandsController::class, 'show'])->name('brands-client.show');
Route::get('/brands/{products}/{models}', [BrandsController::class, 'model'])->name('brands-client.model');
Route::get('/brands/{products}/{models}/{models_details}', [BrandsController::class, 'model_details'])->name('brands-client.model-details');
Route::get('/partnerships', [PartnershipController::class, 'index'])->name('partnerships.index');
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
// Auth routes
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('guest.jwt')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth.jwt')->name('logout');

// Protected admin routes
Route::group(['middleware' => 'auth.jwt', 'prefix' => 'admin'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('{brands}/products', ProductController::class);
    Route::resource('{brands}/{products}/models', ModelsController::class);
    Route::resource('{brands}/{products}/{models}/details', DetailController::class);
    Route::resource('{brands}/{products}/{models}/functions', FunctionController::class);
    Route::resource('{brands}/{products}/{models}/{functions}/tech-details', TecnologyController::class);
    Route::resource('{brands}/{products}/{models}/daily-cleans', DailyCleanController::class);
    Route::resource('{brands}/{products}/{models}/deep-cleans', DeepCleanController::class);
    Route::resource('{brands}/{products}/{models}/show-rooms', ShowRoomController::class);
    Route::resource('{brands}/{products}/{models}/{details}/features', FeatureController::class);
    Route::resource('{brands}/{products}/{models}/{details}/spaces', SpaceController::class);
    Route::resource('{brands}/{products}/{models}/{details}/medias', MediaController::class);
    Route::resource('{brands}/{products}/{models}/{details}/downloads', FileDownloadController::class);
});

