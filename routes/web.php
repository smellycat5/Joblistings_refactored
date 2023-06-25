<?php

use App\Http\Controllers\Auth\{
    ForgotPasswordAction,
    LoginAction,
    RegisterAction,
    LogoutAction,
    ResetPasswordAction,
    VerifyPasswordTokenAction
};
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


Route::prefix('user')->group(function () {
    Route::post('login', LoginAction::class)->name('login');
    Route::post('register', RegisterAction::class)->name('register');
    Route::post('forgot-password', ForgotPasswordAction::class)->name('forgot-password');
    Route::post('reset-password', ResetPasswordAction::class)->name('reset-password');
    Route::get('verify/reset-token', VerifyPasswordTokenAction::class);
});
Route::middleware('auth:sanctum')->prefix('user')->group(function () {
    Route::get('logout', LogoutAction::class)->name('logout');
});
Route::middleware('auth:sanctum')->prefix('user')->group(function () {
    Route::resource('organization', OrganizationController::class);
    Route::resource('job', JobController::class);
    // Route::get('/organization/{organization}/job', [OrganizationJobController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
    Route::resource('organization.job', OrganizationJobController::class);
    Route::get('/organization/{organization}/job', [OrganizationJobController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
    // Route::get('/job/create', [OrganizationController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
    // Route::get('/organization/{organization}', [OrganizationController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
});


Route::get('/', function () {
    return view('welcome')->name('welcome');
});
