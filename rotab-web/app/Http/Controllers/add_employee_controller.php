<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_employee_controller extends Controller
{
    public function new_employee(){
        return view('add_new_employee');
    }
}
