<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\OrganizationJobController;
use App\Http\Controllers\UserController;
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
// Route::get('joblist');


Route::resource('organization', OrganizationController::class);
Route::resource('job', JobController::class);
// Route::get('/organization/{organization}/job', [OrganizationJobController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
Route::resource('organization.job', OrganizationJobController::class);
Route::get('/organization/{organization}/job', [OrganizationJobController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
// Route::get('/job/create', [OrganizationController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
// Route::get('/organization/{organization}', [OrganizationController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
// Route::controller(UserController::class)->prefix('user')->group(function () {
//     Route::post('register', 'registerUser')->name('register');
//     Route::get('create', 'create');
//     Route::get('logout', 'logoutUser')->middleware('auth:sanctum');
//     Route::post('forgot-password', 'forgotPass');
//     Route::post('reset-password', 'resetPass');
// });


Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['isOrganization'])->group(function (){

//     Route::controller(userContoller::class)->prefix('user')->group(function () {

// });

Route::get('register',[UserController::class, 'register'])->name('user.register');
Route::get('login',[UserController::class, 'login'])->name('user.login');
Route::post('register',[UserController::class, 'storeUser'])->name('user.storeUser');