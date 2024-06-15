@extends('layouts.app')

@section("title", "{{__('New Employee')}}")

@section('content')
 <div class="container mt-5">

        <form action="" method="post">
{{csrf_field()}}
            <h4>{{__('Name In Arabic')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('First Name')}} <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="first_name_in_arabic" placeholder="الاسم الأول عربي" required>
                </div>
                <div class="col-md">
                    <label>{{__('Father Name')}}</label>
                    <input type="text" class="form-control" name="father_name_in_arabic" placeholder="اسم الأب عربي">
                </div>
                <div class="col-md">
                    <label>{{__('Grandfather Name')}}</label>
                    <input type="text" class="form-control" name="grandfather_name_in_arabic" placeholder="اسم الجد عربي">
                </div>
                <div class="col-md">
                    <label>{{__('Surename')}} <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="surename_in_arabic" placeholder="اسم العائلة عربي" required>
                </div>
                </div>

                <hr>

            <h4>{{__('Name In English')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label for="html">{{__('First Name')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="first_name_in_english" placeholder="First Name in English" required>
                </div>
                <div class="col-md">
                    <label>{{__('Father Name')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="father_name_in_english" placeholder="Father Name In English">
                </div>
                <div class="col-md">
                    <label>{{__('Grandfather Name')}}</label>
                    <input type="text" class="form-control" name="grandfather_name_in_english" placeholder="Grandfather Name In English">
                </div>
                <div class="col-md">
                    <label>{{__('Surename')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="surename_in_english" placeholder="Surename in English" required>
                </div>
            </div>
            <hr>
            <h4>{{__('Identity Information')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('National ID/Resident ID')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="id_iqama_number" placeholder="Number ID" required>
                </div>
                <div class="col-md">
                    <label>{{__('Issue Place')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="issue_place" placeholder="Issue Place" required>
                </div>
                <div class="col-md">
                    <label>{{__('Expiry Date')}}<span style="color: red;">*</span></label>
                    <input type="date" class="form-control" name="expiry_date" required>
                </div>
                <div class="col-md" >
                    <label>{{__('Occupation in Arabic')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="occupation_in_id_ar" placeholder="Occupation in ID Arabic" required>
                </div>

                <div class="col-md">
                    <label>{{__('Occupation in English')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="occupation_in_id_en" placeholder="Occupation in ID English" required>
                </div>
            </div>
            <hr>
            <h4>{{__('Nationality Info')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label for="html">{{__('Nationlity')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="employee_nationality" placeholder="Nationality" required>
                </div>
                <div class="col-md">
                    <label>{{__('Religion')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="religion" placeholder="Religion" required>
                </div>
                <div class="col-md">
                    <label>{{__('Sponsorship')}}<span style="color: red;">*</span></label>
                    <select name="sponsorship" class="form-control">
                        <option value="here_foreach_company_id">company_id - company name</option>
                    </select>
                </div>
                <div class="col-md">
                    <label>{{__('Relationship Status')}}<span style="color: red;">*</span></label>
                    <select name="relationship_status" class="form-control">
                        <option value="celibate">{{__('Celibate')}}</option>
                        <option value="divorced">{{__('Divorced')}}</option>
                        <option value="married">{{__('Married')}}</option>
                        <option value="widower">{{__('Widower')}}</option>
                    </select>
                </div>

            </div>

            <h4>{{__('Job Details')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('Job ID')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="employee_job_id" placeholder="Job ID" required>
                </div>
                <div class="col-md">
                    <label>{{__('Hire Date')}} <span style="color: red;">*</span></label>
                    <input type="date" class="form-control" name="hire_date" required>
                </div>
                <div class="col-md">
                    <label>{{__('Job Offer')}}<span style="color: red;">*</span></label>
                    <select name="job_offer" class="form-control">
                        <option value="here_foreach_positions_id">positions_id - postion name</option>
                    </select>
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">{{__('submit')}}</button>

        </form>
    </div>

@endsection
