<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index' );
Route::resource('/expense_reports','App\Http\Controllers\ExpenseReportController');
Route::get('/expense_reports/{id}/confirmDelete','App\Http\Controllers\ExpenseReportController@confirmDelete');

