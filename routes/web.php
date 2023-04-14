<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\OrganizationJobController;
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
Route::resource('organization', OrganizationController::class);
Route::resource('job', JobController::class);
// Route::get('/organization/{organization}/job', [OrganizationJobController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
Route::resource('organization.job', OrganizationJobController::class);
Route::get('/organization/{organization}/job', [OrganizationJobController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
// Route::get('/job/create', [OrganizationController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');
// Route::get('/organization/{organization}', [OrganizationController::class, 'jobByOrganizationName'])->name('jobByOrganizationName');