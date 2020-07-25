<?php include "header.php" ?>
<?php
$presId = $_GET["id"];
$presDetails = getThis("SELECT `queryID`, `diagnosis`, `diet`, `specialAdvice`, `labTests`, `medicine`, `instruction`, `dosage` FROM `prescription` WHERE `id`='$presId' ");
$presDetails = $presDetails[0];
$queryId = $presDetails["queryID"];
$temp = getThis("SELECT `doctorID`, `symptoms`, `description`, `enabled` FROM `queries` WHERE `id`='$queryId'");
$temp = $temp[0];
?>
<!-- table goes here  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Prescription Details</h3>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>
                                    <?php
                                    $did = $temp["doctorID"];
                                    $doctorDetails = getThis("SELECT `hospitalID`, `fullName`,  `department`, `qualification` FROM `doctors` WHERE `id`='$did'");
                                    $doctorDetails = $doctorDetails[0];
                                    echo $doctorDetails["fullName"] . ", " . $doctorDetails["qualification"] . " (" . $doctorDetails["department"] . ")";
                                    ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Hospital Name</th>
                                <th><?php
                                    $hid = $doctorDetails["hospitalID"];
                                    $hospitalName = getThis("SELECT `hospitalName` FROM `hospitals` WHERE `id`='$hid'");
                                    $hospitalName = $hospitalName[0];
                                    echo $hospitalName["hospitalName"];
                                    ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Symptoms</th>
                                <th>
                                    <?php
                                    $symptoms = $temp["symptoms"];
                                    $symptoms = unserialize($symptoms);
                                    for ($x = 0; $x < sizeof($symptoms); $x++) {
                                        echo $symptoms[$x] . ", ";
                                    }
                                    ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <th>
                                    <?php echo $temp["description"]; ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Diagnosis</th>
                                <th>
                                    <?php
                                    $diagnosis = $presDetails["diagnosis"];
                                    $diagnosis = unserialize($diagnosis);
                                    for ($x = 0; $x < sizeof($diagnosis); $x++) {
                                        echo $diagnosis[$x] . ", ";
                                    }
                                    ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Diet Advice</th>
                                <th>
                                    <?php echo $presDetails["diet"]; ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Special Advice</th>
                                <th>
                                    <?php echo $presDetails["specialAdvice"]; ?>
                                </th>
                            </tr>
                            <tr>
                                <th>Lab Tests Required</th>
                                <th>
                                    <?php
                                    $labTests = $presDetails["labTests"];
                                    $labTests = unserialize($labTests);
                                    for ($x = 0; $x < sizeof($labTests); $x++) {
                                        echo $labTests[$x] . ", ";
                                    }
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <th>Medicine</th>
                            <th>Instructions</th>
                            <th>Dosage</th>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $med = $presDetails["medicine"];
                                $med = unserialize($med);
                                $inst = $presDetails["instruction"];
                                $inst = unserialize($inst);
                                $dose = $presDetails["dosage"];
                                $dose = unserialize($dose);
                                for ($x = 0; $x < sizeof($med); $x++) {
                                ?>
                                    <td>
                                        <?php echo $med[$x]; ?>
                                    </td>
                                    <td>
                                        <?php echo $inst[$x]; ?>
                                    </td>
                                    <td>
                                        <?php echo $dose[$x]; ?>
                                    </td>
                                <?php
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php include "footer.php" ?>

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
</div>