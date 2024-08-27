@extends('layouts.app')

@section("title", "{{__('Adding National Address')}}")

@section('content')

@if ($company_names->isNotEmpty())
    <div class="container mt-5">
        <h4>{{__('Adding National Address Details')}}</h4>
        <hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="" method="post">
        {{csrf_field()}}
        <h5>{{__('Address Holder Details')}}</h5>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Company Name')}}</label>
                    <select name="company_id" class="form-control">

                        @foreach ($company_names as $company)
                        <option value="{{$company->id}}">{{  $company->company_details_name }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="col-md">
                <label>{{__('Customer Acc.')}}</label><span style="color:red;">*</span>
                <input type="number" class="form-control" name="account_number" required>
            </div>
            <div class="col-md">
                <label>{{__('Enty Date')}}</label><span style="color: red;">*</span>
                <input type="date" class="form-control" name="entry_date" required>
            </div>
            <div class="col-md">
                <label>{{__('Expiry Date')}}</label><span style="color: red;">*</span>
                <input type="date" class="form-control" name="expiry_date" required>
            </div>
        </div>
        <hr>
        <h5>{{(__('Address Details'))}}</h5>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Short Address')}}</label><span style="color:red;">*</span>
                <input type="text" class="form-control" name="short_address" placeholder="231kkjd" required>
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Building No.')}}</label><span style="color: red;">*</span>
                <input type="number" class="form-control" name="building_no" placeholder="1234" required>
            </div>
            <div class="col-md">
                <label>{{__('Street in Arabic')}}</label><span style="color: red;">*</span>
                <input type="text" class="form-control" name="street_name_ar" placeholder="شارع أبوبكر الصديق رضي الله عنه" required>
            </div>
            <div class="col-md">
                <label>{{__('Street in English')}}</label><span style="color: red;">*</span>
                <input type="text" class="form-control" name="street_name" placeholder="Abo Baker Al-Seddiq Street" required>
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Secondary No.')}}</label><span style="color: red;">*</span>
                <input type="number" class="form-control" name="secondary_no" placeholder="1234" required>
            </div>
            <div class="col-md">
                <label>{{__('District in Arabic')}}</label><span style="color: red;">*</span>
                <input type="text" class="form-control" name="district_name_ar" placeholder="حي المنار" required>
            </div>
            <div class="col-md">
                <label>{{__('District in English')}}</label><span style="color: red;">*</span>
                <input type="text" class="form-control" name="street_name" placeholder="Almanar Dist." required>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Secondary No.')}}</label><span style="color: red;">*</span>
                <input type="number" class="form-control" name="secondary_no" placeholder="1234" required>
            </div>
        </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>
        </div>

    </form>

    </div>
@else
<div class="container">
<div class="alert alert-dark" role="alert">
  <h1 align="center">{{__('You Must Add Company First!')}}</h1>
</div>
</div>
@endif
@endsection
