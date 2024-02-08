<?php

use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\ProfileController;
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

/* ------ company's route -------*/
Route::prefix('entreprise')->group(function(){
    Route::get('login',[EntreprisesController::class,'index'])
    ->name('login_form');

    Route::get('login/owner',[EntreprisesController::class,'login'])
    ->name('company.login');

    Route::get('dashboard',[EntreprisesController::class,'dashboard'])
    ->name('company.dashboard')->middleware('entreprise');

    Route::get('logout',[EntreprisesController::class,'companyLogout'])
    ->name('company.logout')->middleware('entreprise');
});


/* ------ company's route end -------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
