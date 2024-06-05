 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
        <form action="" method="post">
{{csrf_field()}}
            <h3>Update Passprot Information.</h3>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>Employee Job ID or ID</label>
                    <input type="text" class="form-control" name="employee_id" placeholder="Job ID and ID">
                </div>
            </div>
                        <button name="submit" type="submit" class="btn btn-primary">Search</button>
        </form>
</div>

<div class="container mt-5">

        <form action="" method="post">
            {{csrf_field()}}
            <h4>{{__('Update Contact Details')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('Employee Contact Number')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="contact_number" placeholder="+966500000000" required>
                </div>

                <div class="col-md">
                    <label>{{__('Employee Job Email')}}</label>
                    <input type="email" class="form-control" name="contact_job_email" placeholder="joe@company.com">
                </div>

                <div class="col-md">
                    <label>{{__('Employee Personal Email')}}</label>
                    <input type="email" class="form-control" name="contact_personal_email" placeholder="joe@gmail.com" required>
                </div>
            </div>
            <hr>
            <h4>{{__('National Address')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('Short Address')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="short_national_address" placeholder="MKGA0000" required>
                </div>
                <div class="col-md">
                    <label>{{__('Building No.')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="building_no_national_address" placeholder="12345" required>
                </div>
                <div class="col-md">
                    <label>{{__('Street Name')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="street_name_national_address" placeholder="King Abdullah st." required>
                </div>
                <div class="col-md">
                    <label>{{__('Secondary No.')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="secondary_no_national_address" placeholder="1234" required>
                </div>
             </div>

            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('Distrect Name')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="distrect_name_national_address" placeholder="Almanar Dist." required>
                </div>

                <div class="col-md">
                    <label>{{__('Postal Code')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="zip_national_address" placeholder="32341" required>
                </div>
                <div class="col-md">
                    <label>{{__('City')}} <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="city_name_national_address" placeholder="jeddah" required>
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
