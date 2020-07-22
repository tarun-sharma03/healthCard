<?php include "header.php"; ?>
<section class="content">
    <form>
        <div class="col-sm-12">
            <div class="form-group">
                <label><b>State</b></label>
                <select class="form-control" name="State" type="select" id="State_c" required>
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
                <select class="form-control" name="City" type="select" id="City_c" required>
                    <option value="" selected disabled>Select State First</option>
                </select>
            </div>
            <br />
            <div class="form-group">
                <label><b>Hospital</b></label>
                <select class="form-control" name="Hospital" type="select" id="Hospital_c" required>
                    <option value="" selected disabled>Select City First</option>
                </select>
            </div>

            <br />
            <div class="form-group">
                <label><b>Doctor</b></label>
                <select class="form-control" name="Doctor" type="select" id="Doctor_c" required>
                    <option value="" selected disabled>Select Hospital First</option>
                </select>
            </div>
            <br />

            <br />

            <br />

            <div class="form-group">

                <button type="submit" class="btn btn-lg btn-success">
                    <i class="fas fa-bookmark"></i> Submit Query
                </button>
            </div>



        </div>
    </form>
</section>
</div>
<?php include "footer.php"; ?>


<script type="text/javascript">
    $(document).ready(function() {
        $("#State_c").change(function() {
            var StateID = $("#State_c").val();
            $.ajax({
                url: "worldData.php",
                method: "post",
                data: "State=" + StateID,
            }).done(function(states) {
                cities = JSON.parse(states);
                $("#City_c").empty();
                $("#City_c").append("<option disabled selected>Select City</option>");
                cities.forEach(function(city) {
                    $("#City_c").append(
                        "<option value=" + city.id + ">" + city.name + "</option>"
                    );
                });
                $("#City_c").append("<option value=0>My option is not listed</option>");
            });
        });

        $("#City_c").change(function() {
            var CityID = $("#City_c").val();
            $.ajax({
                url: "worldData.php",
                method: "post",
                data: "City=" + CityID,
            }).done(function(cities) {
                hospitals = JSON.parse(cities);
                $("#Hospital_c").empty();
                $("#Hospital_c").append(
                    "<option disabled selected>Select Hospital</option>"
                );
                hospitals.forEach(function(hospital) {
                    $("#Hospital_c").append(
                        "<option value=" +
                        hospital.id +
                        ">" +
                        hospital.hospitalName +
                        "</option>"
                    );
                });
                $("#Hospital_c").append(
                    "<option value=0>My option is not listed</option>"
                );
            });
        });

        $("#Hospital_c").change(function() {
            var HospitalID = $("#Hospital_c").val();
            $.ajax({
                url: "worldData.php",
                method: "post",
                data: "Hospital=" + HospitalID,
            }).done(function(hospitals) {
                doctors = JSON.parse(hospitals);
                $("#Doctor_c").empty();
                $("#Doctor_c").append(
                    "<option disabled selected>Select Doctor</option>"
                );
                doctors.forEach(function(doctor) {
                    $("#Doctor_c").append(
                        "<option value=" +
                        doctor.id +
                        ">" +
                        doctor.fullName +
                        "(" +
                        doctor.qualification +
                        ")" +
                        ", " +
                        doctor.department +
                        "</option>"
                    );
                });
                $("#Doctor_c").append(
                    "<option value=0>My option is not listed</option>"
                );
            });
        });
    });
</script>