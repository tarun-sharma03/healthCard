<?php include "header.php" ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150 Kg</h3>

            <p>Weight</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>160 cm</h3>

            <p>Height</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>A+</h3>

            <p>Blood Group</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>
              <?php
              $year = date("Y");
              $yearOfBirth = new DateTime($dob);
              $yearOfBirth = $yearOfBirth->format("Y");
              $age = abs($year - $yearOfBirth);
              echo $age . " years";
              ?>
            </h3>

            <p>Age</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <h3>This is the area to work upon!! Pickup components from the main file and drop it here!</h3>



    </div>
    <div class="row">
      <h3>This kinda looks nice!!</h3>
    </div>
    <!-- /.row (main row) -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php" ?>