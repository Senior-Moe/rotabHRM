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
             
            $table->id();
            $table->timestamps();
            $table->string('employee_status')->defult('active');
            $table->integer('employee_job_id');
            $table->string('employee_first_name');
            $table->string('employee_father_name');
            $table->string('employee_grandfather_name');
            $table->string('employee_last_name');
            $table->string('employee_first_name_ar');
            $table->string('employee_father_name_ar');
            $table->string('employee_grandfather_name_ar');
            $table->string('employee_last_name_ar');
            $table->string('employee_occupation');
            $table->string('employee_occupation_ar');
            $table->integer('employee_position_id');
            $table->string('employee_na_short_address');
            $table->integer('employee_na_building_number');
            $table->string('employee_na_street_name');
            $table->integer('employee_na_secondary_number');
            $table->string('employee_na_postal_code');
            $table->string('employee_na_city');
            $table->string('employee_na_district');
            $table->string('employee_duty_shift');
            $table->integer('employee_id_number_card');
            $table->string('employee_nationality');
            $table->date('employee_expiry_card');
            $table->string('employee_id_issue');
            $table->string('employee_religion');
            $table->string('employee_relationship_status');
            $table->string('employee_contact_number');
            $table->string('employee_personal_email');
            $table->string('employee_passport_number');
            $table->string('employee_occupation_in_passport');
            $table->date('employee_passport_expiry');
            $table->string('employee_insurance_name');
            $table->string('employee_insurance_class');
            $table->string('employee_degree');
            $table->decimal('employee_basic_salary', 8, 2);
            $table->decimal('employee_transportation_allowance', 8, 2);
            $table->decimal('employee_housing_allowance', 8, 2);
            $table->decimal('employee_allowance', 8, 2);
            $table->decimal('employee_other_allowance', 8, 2);
            $table->string('employee_gender');
	     */
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //down
        Schema::dropIfExists('Employees');
    }
};
