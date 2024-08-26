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
        Schema::create('company_main_details', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->timestamps();
            $table->string('company_details_name');
            $table->string('company_details_name_ar');
            $table->string('company_details_type');
            $table->string('company_details_websit');
            $table->string('company_details_auth');
            $table->string('company_details_head_office_address');
            $table->string('company_details_head_office_address_ar');
            $table->string('company_details_city');
            $table->string('company_details_city_ar');
            $table->bigInteger('company_details_commercial_registration');
            $table->bigInteger('company_details_unified_number');
            $table->string('company_details_owner');
            $table->string('company_details_owner_ar');
            $table->date('company_details_expiration_commercial_registration');
            $table->string('company_details_first_manager_commercial_registration');
            $table->string('company_details_second_manager_commercial_registration')->nullable();
            $table->string('company_details_third_manager_commercial_registration')->nullable();
            $table->string('company_details_fourth_manager_commercial_registration')->nullable();
            $table->string('company_details_fifth_manager_commercial_registration')->nullable();
            $table->string('company_details_sixth_manager_commercial_registration')->nullable();
            $table->string('company_details_seventh_manager_commercial_registration')->nullable();
            $table->string('company_details_eighth_manager_commercial_registration')->nullable();
            $table->string('company_details_ninth_manager_commercial_registration')->nullable();
            $table->string('company_details_tenth_manager_commercial_registration')->nullable();
            $table->string('company_details_eleventh_manager_commercial_registration')->nullable();
            $table->string('company_details_twelfth_manager_commercial_registration')->nullable();
            $table->string('company_details_first_manager_commercial_registration_ar');
            $table->string('company_details_second_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_third_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_fourth_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_fifth_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_sixth_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_seventh_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_eighth_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_ninth_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_tenth_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_eleventh_manager_commercial_registration_ar')->nullable();
            $table->string('company_details_twelfth_manager_commercial_registration_ar')->nullable();
            $table->bigInteger('company_details_company_phone_number');
            $table->bigInteger('company_details_vat_number');
            $table->string('company_details_nationality');
            $table->string('company_details_nationality_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_main_details');
    }
};
