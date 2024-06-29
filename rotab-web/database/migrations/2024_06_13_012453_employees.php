<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('Employees', function (Blueprint $table) {
            /*
             *id
             *timestamps();
             *employee_status
             *employee_job_id
             *employee_first_name
             *employee_father_name
             *employee_grandfather_name
             *employee_last_name
             *employee_first_name_ar
             *employee_father_name_ar
             *employee_grandfather_name_ar
             *employee_last_name_ar
             *employee_occupation
             *employee_occupation_ar
             *employee_position_id
             *employee_na_short_address
             *employee_na_building_number
             *employee_na_street_name
             *employee_na_secondary_number
             *employee_na_postal_code
             *employee_na_city
             *employee_na_district
             *employee_duty_shift
             *employee_duty_shift
             *employee_id_number_card
             *employee_nationality
             *employee_expiry_card
             *employee_id_issue
             *employee_religion
             *employee_relationship_status
             *employee_contact_number
             *employee_personal_email
             *employee_passport_number
             *employee_occupation_in_passport
             *employee_passport_expiry
             *employee_insurance_name
             *employee_insurance_class
             *employee_degree
             *employee_basic_salary
             *employee_transportation_allowance
             *employee_housing_allowance
             *employee_allowance
             *employee_other_allowance
             *employee_gender
             */
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
