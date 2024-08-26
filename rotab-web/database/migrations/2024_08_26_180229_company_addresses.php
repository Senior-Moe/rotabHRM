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
        Schema::create('company_national_addresses', function (Blueprint $table) {

     $table->id();
     $table->timestamps();
     $table->integer('company_main_details_id')->unsigned();
     $table->string('company_details_na_short_address');
     $table->string('company_details_na_building_number');
     $table->string('company_details_na_street_name');
     $table->string('company_details_na_street_name_ar');
     $table->string('company_details_na_secondary_number');
     $table->string('company_details_na_postal_code');
     $table->string('employee_na_district');
     $table->string('employee_na_district_ar');
     }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('company_national_addresses');
    }
};
