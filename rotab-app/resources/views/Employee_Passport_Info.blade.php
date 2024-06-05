
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

        <form action="" method="post">
{{csrf_field()}}
            <div class="form-row mb-4">
                <div class="col-md">
                    <label >Passport Number</label>
                    <input type="text" class="form-control" name="passport_number" placeholder="Passport Number">
                </div>
                <div class="col-md">
                    <label>Occupation in Passport</label>
                    <input type="text" class="form-control" name="occupation_in_passport" placeholder="Occupation in Passport">
                </div>
                <div class="col-md">
                    <label>Expiry Date</label>
                    <input type="date" class="form-control" name="expiry_date">
                </div>

            </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>

        </form>
    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
