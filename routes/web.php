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

    Route::get('/home',[EntreprisesController::class,'home'])
    ->name('user.dashboard')->middleware('auth');

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('auth')->group(function () {

    Route::post('/login/store',[AuthenticatedSessionController::class,'store'])
    ->name('loginUser');

    Route::get('/user/dashboard',[AuthenticatedSessionController::class,'dashboard'])
    ->name('user.dashboard')->middleware('auth');

    Route::get('/logout',[AuthenticatedSessionController::class,'userLogout'])
    ->name('user.logout')->middleware('auth');

    Route::post('/register/create',[AuthenticatedSessionController::class,'userRegisterCreate'])
    ->name('user.register.create');

Route::post('/profile/update',[EntreprisesController::class,'updateProfile'])
->name('updateProfile');
    Route::get('/profile', [EntreprisesController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
