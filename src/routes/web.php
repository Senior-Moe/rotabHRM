<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*adding CR of company*/
Route::get('/home/adding_new_company', [App\Http\Controllers\companies_forms::class , 'new_company_form']);
Route::post('/home/adding_new_company' , [App\Http\Controllers\companies_forms::class , 'submit_new_company']);
/*adding company national address*/
Route::get('/home/adding_national_address', [App\Http\Controllers\companies_forms::class , 'add_company_national_address']);
Route::post('/home/adding_national_address', [App\Http\Controllers\companies_forms::class , 'submit_company_national_address']);





