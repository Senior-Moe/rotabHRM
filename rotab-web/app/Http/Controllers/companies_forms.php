<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companies_forms extends Controller
{
public function __construct(){
    $this->middleware('auth');
    }

    public function new_company_form(){

        return view('new_company');
    }
}
