<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\add_employee_controller;
use App\Http\Controllers\add_employee_passport_controller;
use App\Http\Controllers\add_employee_contact_details_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('adding_new_employee' , [add_employee_controller::class , 'new_employee']);
Route::get('adding_new_employee_passport' , [add_employee_passport_controller::class , 'new_adding_passport']);
Route::get('adding_employee_contact_details',[add_employee_contact_details_controller::class , 'adding_new_contact'] );
