<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <form action="" method="post">
        {{csrf_field()}}
        <h4>{{__('Create Company Details')}}</h4>
        <div class="form-row mb-4">

        <div class="col-md">
            <label>{{__('Company Name')}}<span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="company_name" placeholder="e.g Dance Co Ltd.," required>
        </div>

        <div class="col-md">
            <label>{{__('C.R. No.')}}<span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="company_commercial_registration" placeholder="40XXXXXXXXXX" required>
        </div>

        <div class="col-md">
            <label>{{__('Unified NO.')}}<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="unified_no" placeholder="7012XXXXX" required>
            <small class="form-text form-muted">{{__('computer ID')}}</small>
        </div>

        <div class="col-md">
            <label>{{__('VAT No.')}}</label>
            <input type="text" class="form-control" name="vat_no" placeholder="3101XXXXXXXXXX">
            <small class="form-text form-muted">{{__('Enter VAT if exist')}}</small>
        </div>
    </div>

        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Head Office Address')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="headoffice_address_in_cr" placeholder="2323 King Abdullah Almnar 2112" required>
            </div>

            <div class="col-md">
                <label>{{__('Owner Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="owner_name_in_cr" required>
                <small class="form-text form-muted">{{__('some company have CEO.')}}</small>
            </div>

            <div class="col-md">
                <label>{{__('C.R. Expiry Date')}}<span style="color: red;">*</span></label>
                <input type="date" class="form-control" name="expiry_date_cr" required>
            </div>
        </div>
        <hr>

        <h4>{{__('Manager on CR')}}</h4>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('First Manager in CR')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control mb-2" name="first_manager_in_cr" placeholder="عربي" required>
                <input type="text" class="form-control" name="first_manager_in_cr_en" placeholder="English" required>
            </div>
            <div class="col-md">
                <label>{{__('Second Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="second_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="second_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Third Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="third_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="third_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Fourth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="fourth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="fourth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Fifth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="fifth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="fifth_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Sixth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="sixth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="sixth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Seventh Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="seventh_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="seventh_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Eighth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="eighth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="eighth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Ninth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="ninth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="ninth_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('TenthManager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="tenth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="tenth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Eleventh Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="eleventh_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="eleventh_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Twelfth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="twelfth_manager_in_cr" placeholder="عربي">
                <input type="text" class="form-control" name="twelfth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <hr>
        <h4>{{__('National Address')}}</h4>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Short Address')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_short_address" placeholder="KJB6971" required>
            </div>
            <div class="col-md">
                <label>{{__('Building No.')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_building_no" placeholder="2342" required>
            </div>
            <div class="col-md">
                <label>{{__('Street Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_street_name" placeholder="King Abdullah St." required>
            </div>
            <div class="col-md">
                <label>{{__('Secondary No.')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_secondary_no" placeholder="3212" required>
            </div>
            <div class="col-md">
                <label>{{__('District')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_district_name" placeholder="Almanar Dist." required>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Postal Code')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_postal_code_no" placeholder="21121" required>
            </div>
            <div class="col-md">
                <label>{{__('City')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="company_city_name" placeholder="Jeddah" required>
            </div>
            <div class="col-md">
                <label>{{__('Zip No.')}}</label>
                <input type="text" class="form-control" name="company_zip_no" placeholder="43211">
                <small class="form-text form-muted">{{__('Enter zip number if exist')}}</small>
            </div>
        </div>

            <button name="submit" type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
