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
        <h5></h5>
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
                <label>{{__('Short Address')}}</label><span style="color:red;">*</span>
                <input type="text" class="form-control" placeholder="231kkjd" required>
            </div>

        </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>
        </div>

    </form>

    </div>
@else
    <p>No posts found.</p>
@endif
@endsection
