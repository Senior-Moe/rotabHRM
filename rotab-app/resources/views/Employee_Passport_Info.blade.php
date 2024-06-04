
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

 <div class="container mt-5">

        <form action="" method="post">
{{csrf_field()}}
            <h3>Name In Arabic</h3>
            <div class="form-row mb-4">
                <div class="col-md">
                    <label>First Name In Arabic</label>
                    <input type="text" class="form-control" name="first_name_in_arabic" placeholder="First Name in Arabic">
                </div>
                <div class="col-md">
                    <label>Father Name In Arabic</label>
                    <input type="text" class="form-control" name="father_name_in_arabic" placeholder="Father Name In Arabic">
                </div>
                <div class="col-md">
                    <label>Grandfather Name In Arabic</label>
                    <input type="text" class="form-control" name="grandfather_name_in_arabic" placeholder="Grandfather Name In Arabic">
                </div>
                <div class="col-md">
                    <label>Family Name in Arabic</label>
                    <input type="text" class="form-control" name="surename_in_arabic" placeholder="Surename in Arabic">
                </div>
                </div>

                <hr>

            <h3>Name In English</h3>
            <div class="form-row mb-4">
                <div class="col">
                    <label for="html">First Name in English</label>
                    <input type="text" class="form-control" name="first_name_in_english" placeholder="First Name in English">
                </div>
                <div class="col">
                    <label>Father Name in English</label>
                    <input type="text" class="form-control" name="father_name_in_english" placeholder="Father Name In English">
                </div>
                <div class="col">
                    <label>Grandfather Name in English</label>
                    <input type="text" class="form-control" name="grandfather_name_in_english" placeholder="Grandfather Name In English">
                </div>
                <div class="col">
                    <label>Family Name in English</label>
                    <input type="text" class="form-control" name="surename_in_english" placeholder="Surename in English">
                </div>
            </div>
            <hr>
            <h3>Identity Information</h3>
            <div class="form-row mb-4">
                <div class="col">
                    <label for="html">National ID/Iqama ID</label>
                    <input type="text" class="form-control" name="id_iqama_number" placeholder="Number ID">
                </div>
                <div class="col">
                    <label>Issue Place</label>
                    <input type="text" class="form-control" name="issue_place" placeholder="Issue Place">
                </div>
                <div class="col">
                    <label>Expiry Date</label>
                    <input type="date" class="form-control" name="expiry_date">
                </div>
                <div class="col">
                    <label>Occupation in Arabic</label>
                    <input type="text" class="form-control" name="occupation_in_id_ar" placeholder="Occupation in ID Arabic">
                </div>

                <div class="col">
                    <label>Occupation in English</label>
                    <input type="text" class="form-control" name="occupation_in_id_en" placeholder="Occupation in ID English">
                </div>
            </div>
            <hr>
            <h3>Nationality Info</h3>
            <div class="form-row mb-4">
                <div class="col">
                    <label for="html">Nationlity</label>
                    <input type="text" class="form-control" name="employee_nationality" placeholder="Nationality">
                </div>
                <div class="col">
                    <label>Religion</label>
                    <input type="text" class="form-control" name="religion" placeholder="Religion">
                </div>
                <div class="col">
                    <label>Sponsorship</label>
                    <input type="text" class="form-control" name="sponsorship" placeholder="GOSI or Sponsorship">
                </div>
                <div class="col">
                    <label>Relationship Status</label>
                    <select name="relationship_status" class="form-control">
                        <option value="celibate">Celibate</option>
                        <option value="divorced">Divorced</option>
                        <option value="married">Married</option>
                        <option value="widower">Widower</option>
                    </select>
                </div>

            </div>

            <h3>Job ID</h3>
            <div class="form-row mb-4">
                <div class="col">
                    <label>Job ID and Hire Date</label>
                    <input type="text" class="form-control" name="employee_job_id" placeholder="Job ID">
                </div>
                <div class="col">
                    <label>Hire Date</label>
                    <input type="date" class="form-control" name="hire_date">
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">submit</button>

        </form>
    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
