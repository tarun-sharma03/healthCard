<?php
include "header.php";
$tempId = $_GET["id"];
$details = getThis("SELECT `patientID`,`symptoms`, `description` FROM `queries` WHERE `id`='$tempId'");
$details = $details[0];
$pid = $details["patientID"];
$patientDetails = getThis("SELECT `fullName`, `dob`, `phoneNumber`,`bloodGroup`, `gender`, `emailAddress`, `cityID`, `stateID`, `ongoingMedication`, `allergies` FROM `patients` WHERE `id`='$pid'");
$patientDetails = $patientDetails[0];
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Complete Patient Details</h3>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th><?php echo $patientDetails["fullName"]; ?></th>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <th><?php echo $patientDetails["phoneNumber"]; ?></th>
                                </tr>
                                <tr>
                                    <th>D.O.B</th>
                                    <th><?php echo substr($patientDetails["dob"], 0, 10); ?></th>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <th><?php
                                        $city = $patientDetails['cityID'];
                                        $cityName = getThis("SELECT `name` from `cities` WHERE `id`='$city'");
                                        $cityName = $cityName[0]['name'];
                                        $state = $patientDetails['stateID'];
                                        $stateName = getThis("SELECT `name` from `states` WHERE `id`='$state'");
                                        $stateName = $stateName[0]['name'];

                                        echo $cityName . ", " . $stateName;
                                        ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ongoing Medication</th>
                                    <th><?php
                                        $medication = $patientDetails["ongoingMedication"];
                                        $medication = unserialize($medication);
                                        for ($x = 0; $x < sizeof($medication); $x++) {
                                            echo $medication[$x] . ", ";
                                        }
                                        ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Allergies</th>
                                    <th><?php
                                        $allergy = $patientDetails["allergies"];
                                        $allergy = unserialize($allergy);
                                        for ($x = 0; $x < sizeof($allergy); $x++) {
                                            echo $allergy[$x] . ", ";
                                        }
                                        ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Blood Group</th>
                                    <th><?php echo $patientDetails["bloodGroup"]; ?></th>
                                </tr>
                                <tr>
                                    <th>Present Symptoms</th>
                                    <th>
                                        <?php
                                        $symptoms = $details["symptoms"];
                                        $symptoms = unserialize($symptoms);
                                        for ($x = 0; $x < sizeof($symptoms); $x++) {
                                            echo $symptoms[$x] . ", ";
                                        }
                                        ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th><?php echo $details["description"]; ?></th>
                                </tr>

                            </tbody>
                        </table>

                        <br><br>
                        <div class="row">
                            <h3>Prescription For Above Disease</h3>
                        </div>
                        <br>
                        <form action="functionality/submitPrescription.php" method="POST">
                            <b>Diagnosis</b>
                            <div class="table-responsive">
                                <table class="table " id="dynamic_field3">
                                    <tr>
                                        <td><input type="text" name="diagnosis[]" placeholder="Enter Diagnosis" class="form-control name_list" /></td>
                                        <td><button type="button" name="add3" id="add3" class="mt-2 btn btn-primary">Add More</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group"><label for="exampleAddress" class=""><b>Diet Advice</b></label><input name="diet" id="diet" placeholder="Diet Care" type="text" class="form-control"></div>
                            <div class="form-group"><label for="exampleAddress2" class=""><b>Special Advice</b></label><input name="special" id="special" placeholder="Lab tests, Rest Period, Special Care etc." type="text" class="form-control"></div>
                            <b>Test Advice</b>
                            <div class="table-responsive">
                                <table class="table " id="dynamic_field5">
                                    <tr>
                                        <td><input type="text" name="labtests[]" placeholder="Suggested Lab Test" class="form-control name_list" /></td>
                                        <td><button type="button" name="add5" id="add5" class="mt-2 btn btn-primary">Add More</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table " id="dynamic_field1">
                                    <thead>
                                        <tr>
                                            <th>Medicine Name</th>
                                            <th>Instructions</th>
                                            <th>Dosage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="med[]" placeholder="Medicine Name" class="form-control name_list" /></td>
                                            <td><input type="text" name="instruct[]" placeholder="Instructions" class="form-control name_list" /></td>
                                            <td><input type="number" name="dose[]" placeholder="Dosage" class="form-control name_list" /></td>
                                            <td><button type="button" name="add1" id="add1" class="mt-2 btn btn-primary">Add More</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <input type="hidden" name="queryId" value="<?php echo $tempId; ?>" />

                            <button type="submit" name="submit" class="btn btn-block btn-primary"> Submit </button>
                            <button type="submit" name="submit" class="btn btn-block btn-danger"> Cancel </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section>
</div>
<?php include "footer.php"; ?>


<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script>
    $(function() {
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>





<script>
    $(document).ready(function() {
        var i = 1;
        $('#add3').click(function() {
            i++;
            $('#dynamic_field3').append('<tr id="row' + i + '"><td><input type="text" name="diagnosis[]" placeholder="Enter Diagnosis" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add5').click(function() {
            i++;
            $('#dynamic_field5').append('<tr id="row' + i + '"><td><input type="text" name="labtests[]" placeholder="Suggested Lab Test" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add1').click(function() {
            i++;
            $('#dynamic_field1').append('<tr id="row' + i + '"> <td><input type="text" name="med[]" placeholder="Medicine Name" class="form-control name_list" /></td><td><input type="text" name="instruct[]" placeholder="Instructions" class="form-control name_list" /></td><td><input type="number" name="dose[]" placeholder="Dosage" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>