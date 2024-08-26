<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Details extends Model
{

    use HasFactory;

    protected $table = 'company_main_details';

    protected $fillable = [
             'company_details_name',
             'company_details_name_ar',
             'company_details_type',
             'company_details_websit',
             'company_details_auth',
             'company_details_head_office_address',
             'company_details_head_office_address_ar',
             'company_details_city',
             'company_details_city_ar',
             'company_details_commercial_registration',
             'company_details_unified_number',
             'company_details_owner',
             'company_details_owner_ar',
             'company_details_expiration_commercial_registration',
             'company_details_first_manager_commercial_registration',
             'company_details_second_manager_commercial_registration',
             'company_details_third_manager_commercial_registration',
             'company_details_fourth_manager_commercial_registration',
             'company_details_fifth_manager_commercial_registration',
             'company_details_sixth_manager_commercial_registration',
             'company_details_seventh_manager_commercial_registration',
             'company_details_eighth_manager_commercial_registration',
             'company_details_ninth_manager_commercial_registration',
             'company_details_tenth_manager_commercial_registration',
             'company_details_eleventh_manager_commercial_registration',
             'company_details_twelfth_manager_commercial_registration',
             'company_details_first_manager_commercial_registration_ar',
             'company_details_second_manager_commercial_registration_ar',
             'company_details_third_manager_commercial_registration_ar',
             'company_details_fourth_manager_commercial_registration_ar',
             'company_details_fifth_manager_commercial_registration_ar',
             'company_details_sixth_manager_commercial_registration_ar',
             'company_details_seventh_manager_commercial_registration_ar',
             'company_details_eighth_manager_commercial_registration_ar',
             'company_details_ninth_manager_commercial_registration_ar',
             'company_details_tenth_manager_commercial_registration_ar',
             'company_details_eleventh_manager_commercial_registration_ar',
             'company_details_twelfth_manager_commercial_registration_ar',
             'company_details_company_phone_number',
             'company_details_vat_number',
             'company_details_nationality',
             'company_details_nationality_ar',
            ];

}
