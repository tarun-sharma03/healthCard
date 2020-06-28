<?php include "fxn.php";
if ($_SESSION["UID"] == NULL) {
?>
    <script>
        window.location = "logout.php";
    </script>
<?php
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/favicon.ico">

    <title>Registration Form</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../assets/css/patientRegistrationStyle.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/img/logo/logo.png" alt="" width="300" height="75">
            <h2>Doctor Registration Form</h2>
        </div>

        <div class="col-md-12 order-md-1">
            <form class="needs-validation" novalidate method="POST" action="functionality/registerDoctor.php">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input id="male" name="gender" type="radio" value="1" class="custom-control-input" required>
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input id="female" name="gender" value="2" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input id="other" name="gender" type="radio" value="3" class="custom-control-input" required>
                            <label class="custom-control-label" for="other">Other</label>
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for your health updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="contact1">Contact Number 1</label>
                        <input type="text" class="form-control" name="phone" id="contact1" placeholder="" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" value="India" disabled>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <!-- <input type="text" name="state" class="form-control" required> -->
                        <select name="state" id="State_c" class="form-control">
                            <option selected disabled>Select State</option>
                            <?php
                            $res = getThis("SELECT `id`,`name` FROM `states` WHERE `country_id` = '101'");
                            for ($i = 0; $i < sizeof($res); $i++) {
                            ?>
                                <option value="<?php echo $res[$i]['id']; ?>"> <?php echo $res[$i]['name']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="city">City</label>
                        <!-- <input type="text" class="form-control" name="city" id="city" placeholder="" value="" required> -->
                        <select name="city" id="City_c" class="form-control">
                            <option disabled selected>Select State First</option>

                        </select>

                    </div>


                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="month">Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="consultation">Consultation Fees</label>
                        <input type="text" name="consultationFee" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="dept">Department</label>
                        <input type="text" class="form-control" placeholder="" name="dept" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="qualification">Qualification</label>
                        <input type="text" class="form-control" placeholder="" name="qualification" required>
                    </div>

                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit</button>
            </form>
            <br><br>
            <a href="dashboard.php" class="btn btn-primary btn-lg btn-block">Cancel</a>

        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 CodeMonk</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script> -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>



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