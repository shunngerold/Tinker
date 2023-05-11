<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\ProductController;

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

// ======================== ADMIN SIDE ===========================>
Route::prefix('/admin')->middleware('isAdmin')->group(function() {
    // Show Landing Page
    Route::get('/cms', [AdminController::class, 'showLanding'])->name('admin.landing');
    // Show cms forms : each components
    Route::get('/processor', [AdminController::class, 'showProcessor'])->name('admin.processor');
    Route::get('/cpu-cooler', [AdminController::class, 'showCPUCooler'])->name('admin.cpu.cooler');
    Route::get('/moba', [AdminController::class, 'showMOBA'])->name('admin.moba');
    Route::get('/memory', [AdminController::class, 'showMemory'])->name('admin.memory');
    Route::get('/gpu', [AdminController::class, 'showGPU'])->name('admin.gpu');
    Route::get('/store', [AdminController::class, 'showStorage'])->name('admin.store');
    Route::get('/power-supply', [AdminController::class, 'showPowerSupply'])->name('admin.power.supply');
    Route::get('/case', [AdminController::class, 'showCase'])->name('admin.case');
    Route::get('/case-fan', [AdminController::class, 'showCaseFan'])->name('admin.case.fan');
    Route::get('/monitor', [AdminController::class, 'showMonitor'])->name('admin.monitor');
    Route::get('/keyboard', [AdminController::class, 'showKeyboard'])->name('admin.keyboard');
    Route::get('/headset', [AdminController::class, 'showHeadset'])->name('admin.headset');
    Route::get('/mouse', [AdminController::class, 'showMouse'])->name('admin.mouse');
    // show products
    Route::get('/products', [AdminController::class, 'showProducts'])->name('admin.products');
    // delete product
    Route::delete('/product/{products}', [AdminController::class, 'destroyProduct'])->where('products', '[0-9]+');
    // Data entry : each components
    Route::post('/process-processor', [AdminController::class, 'entryProcessor'])->name('admin.processor.entry');
    Route::post('/process-cpu-cooler', [AdminController::class, 'entryCPUCooler'])->name('admin.cpu.cooler.entry');
    Route::post('/process-moba', [AdminController::class, 'entryMOBA'])->name('admin.moba.entry');
    Route::post('/process-memory', [AdminController::class, 'entryMemory'])->name('admin.memory.entry');
    Route::post('/process-gpu', [AdminController::class, 'entryGPU'])->name('admin.gpu.entry');
    Route::post('/process-store', [AdminController::class, 'entryStorage'])->name('admin.store.entry');
    Route::post('/process-power-supply', [AdminController::class, 'entryPowerSupply'])->name('admin.power.supply.entry');
    Route::post('/process-case', [AdminController::class, 'entryCase'])->name('admin.case.entry');
    Route::post('/process-case-fan', [AdminController::class, 'entryCaseFan'])->name('admin.case.fan.entry');
    Route::post('/process-monitor', [AdminController::class, 'entryMonitor'])->name('admin.monitor.entry');
    Route::post('/process-keyboard', [AdminController::class, 'entryKeyboard'])->name('admin.keyboard.entry');
    Route::post('/process-headset', [AdminController::class, 'entryHeadset'])->name('admin.headset.entry');
    Route::post('/process-mouse', [AdminController::class, 'entryMouse'])->name('admin.mouse.entry');
});


// ======================== USER SIDE ===========================>
// Show landing page
Route::get('/', [UserController::class, 'showLanding'])->name('user.index');
Route::prefix('/user')->group(function() {
    // User Login
    Route::get('/login', [UserController::class, 'showLogin'])->name('user.login')->middleware('guest');
    Route::post('/authenticate', [UserController::class, 'authUser'])->name('user.authenticate')->middleware('guest');
    // User Signup
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('user.register')->middleware('guest');
    Route::post('/reg-process', [UserController::class, 'registerNewUser'])->name('user.registration')->middleware('guest');
    // Show Profile
    Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile')->middleware('auth');
    // User Logout
    Route::post('/logout', [UserController::class, 'userLogout'])->name('user.logout')->middleware('auth');
    // Show Build Page
    Route::get('/build-page', [UserController::class, 'showBuildPage'])->name('user.build.page');
    // Show full Build form
    Route::get('/build-full-page', [UserController::class, 'showFullBuildPage'])->name('user.full.build.page');
    // Show System-unit Build form
    Route::get('/build-unit-page', [UserController::class, 'showUnitBuildPage'])->name('user.unit.build.page');
    // Show Categories
    Route::get('/categories', [UserController::class, 'showCategories'])->name('user.category');
    // Show Products
    Route::get('/products', [ProductController::class, 'showProducts'])->name('user.products');
    // Show Brands
    Route::get('/brands', [UserController::class, 'showBrands'])->name('user.brands');
    // Show Products by brands
    Route::get('/product-brands', [ProductController::class, 'showProductBrands'])->name('user.product.brands');
    // unit-build process
    Route::get('/build/{products}', [BuildController::class, 'buildSystemUnit'])->middleware('auth');
    // full-build process
    Route::get('/build/{products}/full', [BuildController::class, 'buildFull'])->middleware('auth');
    // saved-full-build process
    Route::post('/buildfullsaved', [BuildController::class, 'buildFullSaved'])->name('user.saved.full.build')->middleware('auth');
    // saved-unit-build process
    Route::post('/buildunitsaved', [BuildController::class, 'buildUnitSaved'])->name('user.saved.unit.build')->middleware('auth');
    // show saved build
    Route::get('/showsaved', [UserController::class, 'showSavedBuild'])->name('user.saved.build')->middleware('auth');
    // show browse page
    Route::get('/browsepage', [UserController::class, 'showBrowse'])->name('user.browse');
    // show special offers page
    Route::get('/browse-special-offer', [UserController::class, 'showSpecialOffer'])->name('user.special.offer');
    // show most popular page
    Route::get('/browse-most-popular', [UserController::class, 'showMostPopular'])->name('user.most.popular');
    // show new arrival page
    Route::get('/browse-new-arrival', [UserController::class, 'showNewArrival'])->name('user.new.arrival');
    // show specific product page
    Route::get('/specific-product/{products}', [UserController::class, 'showSpecificProduct'])->where('products', '[0-9]+')->name('user.specific.product');
    // show computer finder page
    Route::get('/computer-finder', [UserController::class, 'showComputerFinder'])->name('user.computer.finder');
});