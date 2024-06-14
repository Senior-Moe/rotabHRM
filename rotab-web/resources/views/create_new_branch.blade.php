@extends('layouts.app')

@section('title', "{{__('Create New Branch')}}")

@section('content')
<div class="container mt-5">
    <form action="" method="post">
        {{csrf_field()}}
        <h4>{{__('Create New Branch')}}</h4>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Branch Type')}}<span style="color: red;">*</span></label>
                <select name="branch_type" class="form-control">
                    <option value="Head Office">{{__('Head Office')}}</option>
                    <option value="Office">{{__('Office')}}</option>
                    <option value="Showroom">{{__('Showroom')}}</option>
                    <option value="Workshop">{{__('Workshop')}}</option>
                    <option value="Shop">{{__('Shop')}}</option>
                </select>
            </div>
            <div class="col-md">
                <label>{{__('Branch Name')}}<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="branch_name" required>
            </div>
        </div>
        <hr>
        <h4>{{__('Branch Ownership')}}</h4>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Branch Rental')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="branch_rental_name" required>
            </div>
            <div class="col-md">
                <label>{{__('Contact Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="contact_rental_name" required>
            </div>
            <div class="col-md">
                <label>{{__('Contact No.')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="branch_rental_no" required>
            </div>
        </div>
        <hr>
        <h4>{{__('Extra Detials')}}</h4>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('C.R. Expiry')}}<span style="color: red;">*</span></label>
                <input class="form-control" type="date" name="expiry_branch_date" required>
                <small class="form-text form-muted">{{__('if not exist C.R.,use main C.R')}}</small>
            </div>
            <div class="col-md">
                <label>{{__('Company')}}<span style="color: red;">*</span></label>
                <select name="company_id" class="form-control">
                    <option value="here_id_foreach">company-id - company name</option>
                </select>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Location Address')}}<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="branch_address" required>
            </div>

            <div class="col-md">
                <label>{{__('Location Address in Google Maps')}}<span style="color: red;">*</span></label>
            <input type="url" class="form-control" name="branch_address_url" placeholder="https://example.com/XXXXX" required>
            </div>
        </div>

            <button name="submit" type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection
