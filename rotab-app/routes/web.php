<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('About', function() {
    echo "About This Application";
});

Route::get('EmployeeMainInfo', function(){
    return view('EmployeeMainInfo');
});

Route::post('EmployeeMainInfo', function(){
    echo "Done!!";
});
