<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Addresses extends Model
{
    use HasFactory;

    protected $table = "company_national_addresses";

    protected $fillable = [
      'company_main_details_id',
      'company_details_na_account_no',
      'company_details_na_expiry_date',
      'company_details_na_entry_date',
      'company_details_na_short_address',
      'company_details_na_building_number',
      'company_details_na_street_name',
      'company_details_na_street_name_ar',
      'company_details_na_secondary_number',
      'company_details_na_district',
      'company_details_na_district_ar',
      'company_details_na_postal_code',
];
}
