@extends('layouts.app')

@section('title', __('Adding New Company'))

@section('content')
<div class="container mt-5">

    <h4>{{__('Create Company Details')}}</h4>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success">
        {{ __('success_message') }}
    </div>
@endif

    <form action="" method="post">

        {{csrf_field()}}

        <hr>
        <h5>{{__('Main Details')}}</h5>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Company Name in Arabic')}}<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="company_name_ar" placeholder="e.g شركة دانس ذات المسؤولية المحدودة" required>
            </div>
            <div class="col-md">
                <label>{{__('Company Name in English')}}<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="company_name" placeholder="e.g Dance Co Ltd.," required>
            </div>
            <div class="col-md">
                <label>{{__('Company Website')}}</label>
                <input type="text" class="form-control" name="company_website" placeholder="www.example.com">
            </div>
            <div class="col-md">
                <label>{{__('Company Authintcation')}}</label>
                <input type="text" class="form-control" name="company_auth_url" placeholder="www.example.com/12345">
            </div>
        </div>
        <div class="row mb-4">
        <div class="col-md">
            <label>{{__('C.R. No.')}}<span style="color:red;">*</span></label>
            <input type="number" class="form-control" name="company_commercial_registration_no" placeholder="40XXXXXXXXXX" required>
        </div>

        <div class="col-md">
            <label>{{__('Unified NO.')}}<span style="color: red;">*</span></label>
            <input type="number" class="form-control" name="unified_no" placeholder="7012XXXXX" required>
            <small class="form-text form-muted">{{__('computer ID')}}</small>
        </div>

        <div class="col-md">
            <label>{{__('VAT No.')}}</label>
            <input type="number" class="form-control" name="vat_no" placeholder="3101XXXXXXXXXX">
            <small class="form-text form-muted">{{__('Enter VAT if exist')}}</small>
        </div>
        <div class="col-md">
            <label>{{__('C.R. Expiry Date')}}<span style="color: red;">*</span></label>
            <input type="date" class="form-control" name="expiry_date_cr" required>
        </div>
    </div>

        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Head Office Address in English')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="headoffice_address_in_cr" placeholder="2323 King Abdullah Almnar 2112" required>
            </div>
            <div class="col-md">
                <label>{{__('Head Office Address in Arabic')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="headoffice_address_in_cr_ar" placeholder="2323 الملك عبدالله ، المنار 2112" required>
            </div>
            <div class="col-md">
                <label>{{__('Owner Name in English')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="owner_name_in_cr" required>
                <small class="form-text form-muted">{{__('some company have CEO.')}}</small>
            </div>
            <div class="col-md">
                <label>{{__('Owner Name in Arabic')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="owner_name_in_cr_ar" required>
            </div>
        </div>
        <hr>

        <h5>{{__('Manager on CR')}}</h5>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('First Manager in CR')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control mb-2" name="first_manager_in_cr_ar" placeholder="عربي" required>
                <input type="text" class="form-control mb-2" name="first_manager_in_cr" placeholder="English" required>
            </div>
            <div class="col-md">
                <label>{{__('Second Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="second_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control mb-2" name="second_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Third Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="third_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control mb-2" name="third_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Fourth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="fourth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control mb-2" name="fourth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Fifth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="fifth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control mb-2" name="fifth_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Sixth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="sixth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control mb-2" name="sixth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Seventh Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="seventh_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control mb-2" name="seventh_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Eighth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="eighth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control" name="eighth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Ninth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="ninth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control" name="ninth_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('TenthManager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="tenth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control" name="tenth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <label>{{__('Eleventh Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="eleventh_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control" name="eleventh_manager_in_cr" placeholder="English">
            </div>
            <div class="col-md">
                <label>{{__('Twelfth Manager in CR')}}</label>
                <input type="text" class="form-control mb-2" name="twelfth_manager_in_cr_ar" placeholder="عربي">
                <input type="text" class="form-control" name="twelfth_manager_in_cr" placeholder="English">
            </div>
        </div>
        <hr>

        <h5>{{__('Extra Information')}}</h5>
        <div class="row mb-4">
            <div class="col-md">
            <label>{{__('Location in English')}}</label>
            <input type="text" class="form-control" name="company_city" placeholder="City">
            </div>
            <div class="col-md">
            <label>{{__('Location in Arabic')}}</label>
            <input type="text" class="form-control" name="company_city_ar" placeholder="المدينة">
            </div>
            <div class="col-md">
                <label>{{__('Company Phone No.')}}</label><span style="color: red;">*</span>
                <input type="number" class="form-control" name="company_phone_number" placeholder="966XXXXXXXXX" required>
            </div>
            <div class="col-md">
                <label>{{__('Company Type.')}}</label><span style="color: red;">*</span>
                <input type="text" class="form-control" name="company_type" placeholder="e.g. LLC" required>
            </div>
            <div class="col-md">
                <label>{{__('Company Nationality')}}</label><span style="color: red;">*</span>
                <select name="nationality_cr" class="form-control">
                    <option value="Saudi">{{__('Saudi')}}</option>
                    <option value="Forgin">{{__('Forgin')}}</option>
                </select>
            </div>
        </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection
