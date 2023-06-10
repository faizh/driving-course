<?php

use App\Http\Controllers\CompanyProfile;
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

Route::get('/', [CompanyProfile::class, 'index']);
Route::get('/schedule', [CompanyProfile::class, 'schedule']);
Route::get('/package', [CompanyProfile::class, 'package']);
Route::get('/trainer', [CompanyProfile::class, 'trainer']);
Route::get('/vehicle', [CompanyProfile::class, 'vehicle']);
Route::get('/contact_us', [CompanyProfile::class, 'contactUs']);
