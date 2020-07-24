<?php include "header.php" ?>
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Doctor Registration</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="functionality/registerDoctorAct.php" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="namee">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group"> 
                    <label for="mail">Email Id</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <!-- <h3>List of things in the form:</h3>
                <h5>fullName, email, phone, emergency phone, address, dob, blood group, department, qualification, consultation fee!</h5> -->
                <div class="form-group">
                    <label for="no">Phone</label>
                    <input type="tel" class="form-control" id="phn" name="phone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="no">Emergency Phone</label>
                    <input type="tel" class="form-control" id="phn1" name="emergencyPhone" placeholder="Emergency Phone Number">
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="DOB">
                </div>
                <div class="form-group">
                    <label for="bg">Blood Group</label>
                    <input type="text" class="form-control" id="bloodGroup" name="bloodGroup" placeholder="Blood Group">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter Department">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter Qualification">
                </div>
                <div class="form-group">
                    <label for="fees">Fees</label>
                    <input type="text" class="form-control" id="fees" name="fee" placeholder="Enter Fees">
                </div>
                <div class="form-group">
                    <label for="Address">Permanent Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label><b>State</b></label>
                    <select class="form-control" name="state" type="select" id="State_c" required>
                        <option value="" selected disabled>Select State</option>
                        <?php $states = getThis("SELECT `id`,`name` FROM `states` WHERE `country_id` = '101'");
                        for ($i = 0; $i < sizeof($states); $i++) {
                        ?>
                            <option value="<?php echo $states[$i]['id']; ?>"><?php echo $states[$i]['name']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>


                <div class="form-group">
                    <label><b>City</b></label>
                    <select class="form-control" name="city" type="select" id="City_c" required>
                        <option value="" selected disabled>Select State First</option>
                    </select>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
        </form>

    </div>

</section>
</div>
<?php include "footer.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#State_c").change(function() {
            var StateID = $("#State_c").val();
            $.ajax({
                url: 'worldData.php',
                method: 'post',
                data: 'State=' + StateID
            }).done(function(states) {
                cities = JSON.parse(states);
                $('#City_c').empty();
                $('#City_c').append('<option disabled selected>Select City</option>');
                cities.forEach(function(city) {
                    $('#City_c').append('<option value=' + city.id + '>' + city.name + '</option>');
                })
                $('#City_c').append('<option value=0>My option is not listed</option>');
            })
        });
    })
</script>