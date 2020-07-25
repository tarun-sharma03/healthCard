<?php include "header.php" ?>
<?php
$temp = getThis("SELECT `id`,`prescriptionID`, `doctorID`, `symptoms`, `description`, `enabled` FROM `queries` WHERE `patientID`='$id' ORDER BY `generatedAt` DESC ");
$temp = $temp[0];
?>
<!-- table goes here  -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Latest Query</h3>
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
                <th>Status</th>
                <th>
                  <?php
                  $status = $temp["enabled"];
                  if ($status == 1) {
                    echo "Pending";
                  } else if ($status == 2) {
                  ?>
                    <a href="prescriptionView.php?id=<?php echo $temp["prescriptionID"]; ?>" class="btn btn-primary">View Prescription</a>
                  <?php }
                  ?>
                </th>
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