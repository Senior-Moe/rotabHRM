
<div class="container mt-5">

    <form action="" method="post">

{{csrf_field()}}
            <h3>{{__('Adding Employee Member')}}</h3>
            <h3>{{__('Name in Arabic')}}</h3>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('First Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_first_name_ar" required>
            </div>
            <div class="col-md">
                <label>{{__('Father Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_father_name_ar" required>
            </div>
            <div class="col-md">
                <label>{{__('Grandpa Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_grandpa_name_ar" required>
            </div>
            <div class="col-md">
                <label>{{__('Surename')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_surename_name_ar" required>
            </div>
        </div>
<hr>
            <h3>{{__('Name in English')}}</h3>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('First Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_first_name_en" required>
            </div>
            <div class="col-md">
                <label>{{__('Father Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_father_name_en" required>
            </div>
            <div class="col-md">
                <label>{{__('Grandpa Name')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_grandpa_name_en" required>
            </div>
            <div class="col-md">
                <label>{{__('Surename')}}<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="family_surename_name_en" required>
            </div>
        </div>
        <hr>

        <h3>{{__('Extra Detils')}}</h3>
        <div class="form-row mb-4">
            <div class="col-md">
                <label>{{__('Insurance Expiry')}}<span style="color: red;">*</span></label>
                <input type="date" class="form-control" name="family_date_insurane_expiry" required>
            </div>
            <div class="col-md">
                <label>{{__('Relationship')}}<span style="color: red;">*</span></label>
                    <select name="family_relationship" class="form-control">
                        <option value="hasband">{{__('hasband')}}</option>
                        <option value="wife">{{__('wife')}}</option>
                        <option value="son">{{__('son')}}</option>
                    </select>
                </div>
            <div class="col-md">
                <label>{{__('Employee id')}}<span style="color: red;">*</span></label>
                    <select name="family_relationship" class="form-control">
                        <option value="foreach_here">employee-id - employee full name</option>
                    </select>
                </div>
            </div>
        </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
