@extends('layouts.app')

@section('title', "{{__('Add Department')}}")

@section('content')
 <div class="container mt-5">

        <form action="" method="post">
{{csrf_field()}}
            <h4>{{__('Add New Department')}}</h4>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>{{__('Department Name')}}<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="department_name"  required>
                </div>
                <div class="col-md">
                    <label>{{__('Department Locate')}}</label>
                    <select name="branch_id" class="form-control">
                        <option value="here_id_foreach">branch-id - branch name</option>
                    </select>
                </div>

                <div class="col-md">
                    <label>{{__('Department Manager')}}<span style="color: red;">*</span></label>
                        <select name="manager_job_id" class="form-control">
                            <option value="here_id_foreach">employee-id - employee name</option>
                    </select>
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>

        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
