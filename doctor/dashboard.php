<?php include "header.php" ?>
<section class="content">
  <?php $id = $_SESSION["UID"];
  $data = getThis("SELECT * FROM `queries` WHERE `doctorID`='$id' and `enabled`='1' ORDER BY `generatedAt` ASC ");
  ?>


  <!-- table goes here  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All the Pending Messages</h3>
          </div>

          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Patient Name</th>
                  <th>Location</th>
                  <th>Symptoms</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($i = 0; $i < sizeof($data); $i++) {
                  $temp = $data[$i];
                ?>
                  <tr>
                    <td><?php echo substr($temp["generatedAt"], 0, 10); ?> </td>
                    <td>
                      <?php
                      $pid = $temp["patientID"];
                      $details = getThis("SELECT `id`,`fullName`,`cityID`,`stateID` FROM `patients` WHERE `id`= '$pid'");
                      $name = $details[0]["fullName"];
                      echo $name;
                      ?>
                    </td>
                    <td>
                      <?php
                      $city = $details[0]['cityID'];
                      $cityName = getThis("SELECT `name` from `cities` WHERE `id`='$city'");
                      $cityName = $cityName[0]['name'];
                      $state = $details[0]['stateID'];
                      $stateName = getThis("SELECT `name` from `states` WHERE `id`='$state'");
                      $stateName = $stateName[0]['name'];

                      echo $cityName . ", " . $stateName; ?>
                    </td>
                    <td>
                      <?php $symptoms = $temp["symptoms"];
                      $symptoms = unserialize($symptoms);
                      for ($x = 0; $x < min(sizeof($symptoms), 5); $x++) {
                        echo $symptoms[$x] . ", ";
                      }
                      ?>
                    </td>
                    <td><?php echo $temp["description"]; ?></td>
                    <td>
                      <a href="#" class="btn btn-primary">View</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
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
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>