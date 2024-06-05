<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_employee_passport_controller extends Controller
{
    //
    public function new_adding_passport(){
        return view('add_employee_passport_details');
    }
}
