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
                <label>{{__('First Manager in CR')}}</label>
                <input type="text" class="form-control" name="first_manager_in_cr">
            </div>
            <div class="col-md">
                <label>{{__('Second Manager in CR')}}</label>
                <input type="text" class="form-control" name="second_manager_in_cr">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Third Manager in CR')}}</label>
                <input type="text" class="form-control" name="third_manager_in_cr">
            </div>
            <div class="col-md">
                <label>{{__('Fourth Manager in CR')}}</label>
                <input type="text" class="form-control" name="fourth_manager_in_cr">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Fifth Manager in CR')}}</label>
                <input type="text" class="form-control" name="fifth_manager_in_cr">
            </div>
            <div class="col-md">
                <label>{{__('Sixth Manager in CR')}}</label>
                <input type="text" class="form-control" name="sixth_manager_in_cr">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Seventh Manager in CR')}}</label>
                <input type="text" class="form-control" name="seventh_manager_in_cr">
            </div>
            <div class="col-md">
                <label>{{__('Eighth Manager in CR')}}</label>
                <input type="text" class="form-control" name="eighth_manager_in_cr">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Ninth Manager in CR')}}</label>
                <input type="text" class="form-control" name="ninth_manager_in_cr">
            </div>
            <div class="col-md">
                <label>{{__('TenthManager in CR')}}</label>
                <input type="text" class="form-control" name="tenth_manager_in_cr">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Eleventh Manager in CR')}}</label>
                <input type="text" class="form-control" name="eleventh_manager_in_cr">
            </div>
            <div class="col-md">
                <label>{{__('Twelfth Manager in CR')}}</label>
                <input type="text" class="form-control" name="twelfth_manager_in_cr">
            </div>
        </div>
        </div>
        <hr>
        <h4>{{__('National Address')}}</h4>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('address')}}</label>
            </div>
        </div>
    </form>
</div>
