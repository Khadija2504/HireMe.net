<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    Route::get('/login',[EntreprisesController::class,'index'])
    ->name('login_form');

    Route::post('/login/owner',[EntreprisesController::class,'login'])
    ->name('company.login');

    Route::get('/dashboard',[EntreprisesController::class,'dashboard'])
    ->name('company.dashboard')->middleware('entreprise');

    Route::get('/logout',[EntreprisesController::class,'companyLogout'])
    ->name('company.logout')->middleware('entreprise');

    Route::get('/register',[EntreprisesController::class,'companyRegister'])
    ->name('company.register');
    Route::post('/register/create',[EntreprisesController::class,'companyRegisterCreate'])
    ->name('company.register.create');
});


/* ------ company's route end -------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    

    Route::get('/login',[AuthenticatedSessionController::class,'index'])
    ->name('login_form');

    Route::post('/login/owner',[AuthenticatedSessionController::class,'login'])
    ->name('company.login');

    Route::get('/dashboard',[AuthenticatedSessionController::class,'dashboard'])
    ->name('company.dashboard')->middleware('entreprise');

    Route::get('/logout',[AuthenticatedSessionController::class,'companyLogout'])
    ->name('company.logout')->middleware('entreprise');

    Route::get('/register',[AuthenticatedSessionController::class,'companyRegister'])
    ->name('company.register');
    Route::post('/register/create',[AuthenticatedSessionController::class,'companyRegisterCreate'])
    ->name('company.register.create');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
