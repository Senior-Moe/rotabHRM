<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('About', function() {
    echo "About This Application";
});

Route::get('Employee_Main_Info', function(){
    return view('Employee_Main_Info');
});

Route::post('Employee_Main_Info', function(){
    echo "Done!!";
});

Route::get('Employee_Passport_Info', function(){
    return view('Employee_Passport_Info');
});
