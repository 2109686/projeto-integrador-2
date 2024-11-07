<?php

use App\Http\Controllers\Admin\{EquipmentsController, SupportController, ServicesController};
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/contato', function () {
//     return view('site.contact');
// });

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
    Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
    Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
    Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
    Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
    Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
    Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

    Route::get('/services/new', [ServicesController::class, 'create'])->name('services.new');
    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    Route::post('/services', [ServicesController::class, 'store'])->name('services.store');

    Route::get('/equipments/new', [EquipmentsController::class, 'create'])->name('equipments.new');
    Route::get('/equipments', [EquipmentsController::class, 'index'])->name('equipments.index');
    Route::post('/equipments', [EquipmentsController::class, 'store'])->name('equipments.store');

});

require __DIR__.'/auth.php';

