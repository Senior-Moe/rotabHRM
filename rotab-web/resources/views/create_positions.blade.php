<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

 <div class="container mt-5">

        <form action="" method="post">
{{csrf_field()}}
            <h4>{{__('Add Position For Employee')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('Position Name')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="position_name" placeholder="عربي" required>
                </div>
                <div class="col-md">
                    <label>{{__('Position Name in English')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="position_name_en" placeholder="English" required>
                </div>
                <div class="col-md">
                    <label>{{__('Position in Department')}}</label>
                    <select name="department_id" class="form-control">
                        <option value="here_id_foreach">department-id - department name</option>
                    </select>
                </div>
                <div class="col-md">
                    <label>{{__('Maximum Wage')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="maximum_wage"  required>
                </div>
                <div class="col-md">
                    <label>{{__('Minimum Wage')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="minimum_wage"  required>
                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-primary">submit</button>

        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
