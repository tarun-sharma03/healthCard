<?php include "header.php"; ?>
<!-- table goes here  -->
<?php
$doctorDetails = getThis("SELECT `id`,`fullName`,`department`, `qualification`, `generatedAt` FROM `doctors` WHERE `hospitalID`='$id' AND `enabled`='1'");
?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All the Doctors</h3>
          </div>

          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Date Joined</th>
                  <th>Doctor Name</th>
                  <th>Department</th>
                  <th>Total Consultation</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($x = 0; $x < sizeof($doctorDetails); $x++) {
                  $temp = $doctorDetails[$x];
                ?>
                  <tr>
                    <td>
                      <?php echo substr($temp["generatedAt"], 0, 10); ?>
                    </td>
                    <td>
                      <?php echo $temp["fullName"] . " (" . $temp["qualification"] . ")"; ?>
                    </td>
                    <td>
                      <?php echo $temp["department"]; ?>
                    </td>
                    <td>
                      <?php
                      $did = $temp["id"];
                      $num = getThis("SELECT * FROM `prescription` WHERE `doctorID`='$did'");
                      $num = sizeof($num);
                      echo $num;
                      ?>
                    </td>
                  </tr>
                <?php } ?>
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