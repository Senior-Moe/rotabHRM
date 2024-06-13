<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_employee_passport_controller extends Controller
{
    //
    public function new_adding_passport(){
        return view('add_employee_passport_details');
    }

    public function inquiry_employee_details(Request $request){
        $request->validate([
            'employee_id' => 'required|string',
        ]);

        $search_employee_details = Employees::where('job_id', $request->employee_id)->first();

        if(!$search_employee_details){
            return redirect()->back()->withErrors('Employee not Found');
        }
        return view('add_employee_passport_details' , ['employee_details' => $search_employee_details]);
    }

    public function update_employee_passport_info(Request $request){
        $request->validate([
            'employee_id' => 'required|string',
            'passport_number' => 'required|string|max:15',
            'occupation_in_passport' => 'string|max:125',
            'expiry_date' => 'required|date|after:today',
        ]);

        $search_employee_details = Employees::where('job_id', $request->employee_id)->first();

        if(!$search_employee_details){
            return redirect()->back()->withErrors('employee not found');
        }

        $passport_info =  [
            'passport_number' => $request->passport_number,
            'occupation_in_passport' => $request->occupation_in_passport,
            'expiry_date' => $request->expiry_date,
        ];

//here will be inquiry

    }
}
