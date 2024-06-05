<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_employee_contact_details_controller extends Controller
{
    //
    public function adding_new_contact(){
        return view('add_employee_contact_details');
    }
}
