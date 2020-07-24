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
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email">
                </div>
                <!-- <h3>List of things in the form:</h3>
                <h5>fullName, email, phone, emergency phone, address, dob, blood group, department, qualification, consultation fee!</h5> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">emergencyPhone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="emergencyPhone" placeholder="Enter Full Name(Don't user Dr.)">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">dob</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="dob" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">bloodGroup</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="bloodGroup" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">department</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="department" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">qualification</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="qualification" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">fee</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fee" placeholder="Enter Full Name(Don't user Dr.)">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter Full Name(Don't user Dr.)">
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