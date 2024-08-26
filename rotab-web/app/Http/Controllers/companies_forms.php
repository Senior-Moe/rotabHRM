<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_Details;


class companies_forms extends Controller
{
public function __construct(){
    $this->middleware('auth');
    }

    public function new_company_form(){

        return view('new_company');
    }

    public function submit_new_company(Request $request){

        $validation = $request->validate([
          'company_name_ar'=>'required|string|max:80',
          'company_name'=>'required|string|max:80',
          'company_website'=>'required|string|max:80',
          'company_auth_url'=>'required|string|max:80',
          'company_commercial_registration_no'=>'required|integer',
          'unified_no'=>'required|integer',
          'vat_no'=>'required|integer',
          'expiry_date_cr'=>'required|date',
          'headoffice_address_in_cr'=>'required|string|max:50',
          'headoffice_address_in_cr_ar'=>'required|string|max:50',
          'owner_name_in_cr'=>'required|string|max:100',
          'owner_name_in_cr_ar'=> 'required|string|max:100',
          'first_manager_in_cr_ar'=>'required|string|max:100',
          'first_manager_in_cr'=>'required|string|max:100',
          'third_manager_in_cr'=>'nullable|string|max:100',
          'third_manager_in_cr_ar'=>'nullable|string|max:100',
          'second_manager_in_cr'=>'nullable|string|max:100',
          'second_manager_in_cr_ar'=>'nullable|string|max:100',
          'fourth_manager_in_cr_ar'=>'nullable|string|max:100',
          'fourth_manager_in_cr'=>'nullable|string|max:100',
          'fifth_manager_in_cr_ar'=>'nullable|string|max:100',
          'fifth_manager_in_cr'=>'nullable|string|max:100',
          'sixth_manager_in_cr'=>'nullable|string|max:100',
          'seventh_manager_in_cr'=>'nullable|string|max:100',
          'eighth_manager_in_cr'=>'nullable|string|max:100',
          'ninth_manager_in_cr'=>'nullable|string|max:100',
          'tenth_manager_in_cr'=>'nullable|string|max:100',
          'eleventh_manager_in_cr'=>'nullable|string|max:100',
          'twelfth_manager_in_cr'=>'nullable|string|max:100',
          'sixth_manager_in_cr_ar'=>'nullable|string|max:100',
          'seventh_manager_in_cr_ar'=>'nullable|string|max:100',
          'eighth_manager_in_cr_ar'=>'nullable|string|max:100',
          'ninth_manager_in_cr_ar'=>'nullable|string|max:100',
          'tenth_manager_in_cr_ar'=>'nullable|string|max:100',
          'eleventh_manager_in_cr_ar'=>'nullable|string|max:100',
          'twelfth_manager_in_cr_ar'=>'nullable|string|max:100',
          'sixth_manager_in_cr_ar'=>'nullable|string|max:100',
          'seventh_manager_in_cr_ar'=>'nullable|string|max:100',
          'eighth_manager_in_cr_ar'=>'nullable|string|max:100',
          'ninth_manager_in_cr_ar'=>'nullable|string|max:100',
          'tenth_manager_in_cr_ar'=>'nullable|string|max:100',
          'eleventh_manager_in_cr_ar'=>'nullable|string|max:100',
          'twelfth_manager_in_cr_ar'=>'nullable|string|max:100',
          'company_city'=>'required|string|max:100',
          'company_city_ar'=>'required|string|max:100',
          'company_phone_number'=>'required|integer',
          'company_type'=>'required|string|max:100',
          'nationality_cr'=>'required|string|max:100',
        ]);


        $submit_company_in_database = new Company_Details();
        $submit_company_in_database->company_details_name_ar=$validation['company_name_ar'];
        $submit_company_in_database->company_details_name=$validation['company_name'];
        $submit_company_in_database->company_details_websit=$validation['company_website'];
        $submit_company_in_database->company_details_auth=$validation['company_auth_url'];
        $submit_company_in_database->company_details_commercial_registration=$validation['company_commercial_registration_no'];
        $submit_company_in_database->company_details_unified_number=$validation['unified_no'];
        $submit_company_in_database->company_details_vat_number=$validation['vat_no'];
        $submit_company_in_database->company_details_expiration_commercial_registration=$validation['expiry_date_cr'];
        $submit_company_in_database->company_details_head_office_address=$validation['headoffice_address_in_cr'];
        $submit_company_in_database->company_details_head_office_address_ar=$validation['headoffice_address_in_cr_ar'];
        $submit_company_in_database->company_details_owner=$validation['owner_name_in_cr'];
        $submit_company_in_database->company_details_owner_ar=$validation['owner_name_in_cr_ar'];
        $submit_company_in_database->company_details_first_manager_commercial_registration_ar=$validation['first_manager_in_cr_ar'];
        $submit_company_in_database->company_details_first_manager_commercial_registration=$validation['first_manager_in_cr'];
        $submit_company_in_database->company_details_third_manager_commercial_registration=$validation['third_manager_in_cr'];
        $submit_company_in_database->company_details_third_manager_commercial_registration_ar=$validation['third_manager_in_cr_ar'];
        $submit_company_in_database->company_details_second_manager_commercial_registration=$validation['second_manager_in_cr'];
        $submit_company_in_database->company_details_second_manager_commercial_registration_ar=$validation['second_manager_in_cr_ar'];
        $submit_company_in_database->company_details_fourth_manager_commercial_registration_ar=$validation['fourth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_fourth_manager_commercial_registration=$validation['fourth_manager_in_cr'];
        $submit_company_in_database->company_details_fifth_manager_commercial_registration_ar=$validation['fifth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_fifth_manager_commercial_registration=$validation['fifth_manager_in_cr'];
        $submit_company_in_database->company_details_sixth_manager_commercial_registration=$validation['sixth_manager_in_cr'];
        $submit_company_in_database->company_details_seventh_manager_commercial_registration=$validation['seventh_manager_in_cr'];
        $submit_company_in_database->company_details_eighth_manager_commercial_registration=$validation['eighth_manager_in_cr'];
        $submit_company_in_database->company_details_ninth_manager_commercial_registration = $validation['ninth_manager_in_cr'];
        $submit_company_in_database->company_details_tenth_manager_commercial_registration =$validation['tenth_manager_in_cr'];
        $submit_company_in_database->company_details_eleventh_manager_commercial_registration =$validation['eleventh_manager_in_cr'];
        $submit_company_in_database->company_details_twelfth_manager_commercial_registration =$validation['twelfth_manager_in_cr'];
        $submit_company_in_database->company_details_sixth_manager_commercial_registration_ar=$validation['sixth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_seventh_manager_commercial_registration_ar=$validation['seventh_manager_in_cr_ar'];
        $submit_company_in_database->company_details_eighth_manager_commercial_registration_ar=$validation['eighth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_ninth_manager_commercial_registration_ar=$validation['ninth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_tenth_manager_commercial_registration_ar=$validation['tenth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_eleventh_manager_commercial_registration_ar=$validation['eleventh_manager_in_cr_ar'];
        $submit_company_in_database->company_details_twelfth_manager_commercial_registration_ar=$validation['twelfth_manager_in_cr_ar'];
        $submit_company_in_database->company_details_city = $validation['company_city'];
        $submit_company_in_database->company_details_city_ar = $validation['company_city_ar'];
        $submit_company_in_database->company_details_company_phone_number=$validation['company_phone_number'];
        $submit_company_in_database->company_details_type = $validation['company_type'];
        $submit_company_in_database->company_details_nationality=$validation['nationality_cr'];


        if($validation['nationality_cr']  == "Saudi"){
         $submit_company_in_database->company_details_nationality_ar = "سعودي"; 
        }else{
         $submit_company_in_database->company_details_nationality_ar = "أجنبي";
        }

        $submit_company_in_database->save();
       

        return redirect()->back()->with('sucess','the data has been added!');

        
    }

    public function add_company_national_address(){

            $company_names = Company_Details::all();

            return view('adding_national_address_company',compact('company_names'));
    }

}
