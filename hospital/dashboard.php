<?php include "fxn.php";
if ($_SESSION["UID"] == NULL) {
?>
    <script>
        window.location = "logout.php";
    </script>
<?php
}
$id = $_SESSION["UID"];
$res = getThis("SELECT `hospitalName`,`contactNumber`,`emailAddress` FROM `hospitals` WHERE `id` = '$id'");
$res = $res[0];
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Medical</title>
    <!---- dipanshubhola1009-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab36044a4c.js" crossorigin="anonymous"></script>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
    <!-- Syntax Highlighter -->
    <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Normalize/Reset CSS-->
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body id="welcome">
    <aside class="left-sidebar">
        <div class="logo">
            <a href="#welcome">
                <h1>Medical</h1>
            </a>
        </div>
        <nav class="left-nav">
            <ul id="nav">
                <li class="current"><a href="#User-detail">User Detail</a></li>
                <li><a href="#Advice">Health Tips</a></li>


            </ul>
        </nav>
    </aside>
    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <div class="main-content">
            <section>
                <div class="content-header">
                    <div class="row">
                        <div class="col-10 col-md-10">
                            <h1>Medical</h1>
                        </div>

                        <button class="col-2 col-md-2 btn logout"><i class="fas fa-sign-out-alt"></i> <a href="logout.php" style="color: white;">logout</a></button>

                    </div>
                </div>



            </section>

            <section class="container" id="User-detail">
                <div class="welcome">
                    <h2 class=" d-flex justify-content-center">Welcome To Medical</h2>
                    <br>
                    <br>
                </div>
                <div class="row">

                    <div class="col-12 col-md-3"></div>


                    <div class="card col-12 col-md-6">
                        <div class="card-body ">

                            <div class=" d-flex justify-content-center ">
                                <i class="fas fa-user-tie fa-9x" alt="icon"></i>
                            </div>
                            <h2 align="center">User Details</h2>
                            <br>
                            <br>
                            <div class="d-flex justify-content-center ">

                                <div class="col-4 ">
                                    <strong>Name :</strong>
                                </div>
                                <div class="col-4">
                                    <span><?php echo $res['hospitalName']; ?> </span>
                                    <!-------------------php---------------------------->
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="col-4 ">
                                    <strong>Contact :</strong>
                                </div>
                                <div class="col-4">
                                    <span><?php echo $res['contactNumber']; ?> </span>
                                    <!-------------------php---------------------------->
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-4 ">
                                    <strong>Email :</strong>
                                </div>
                                <div class="col-4">
                                    <span><?php echo $res['emailAddress']; ?> </span>
                                    <!-------------------php---------------------------->
                                </div>
                            </div>

                        </div>
                    </div>









                </div>
            </section>

            <br>
            <br>
            <br><br>
            <br>
            <br>
            <div class="row">
                <div class="col-2"></div>
                <button type="submit" class="col-8 btn logout"><i class="fas fa-bookmark  "></i> <a href="registerDoctor.php" style="color: white;"> Register Doctor </a></button>
            </div>



            <br>
            <br>
            <br><br>
            <br>
            <br>
            <section id="Advice">
                <div class="content-header">
                    <h1>Health Tips</h1>
                </div>
                <br>
                <br>
                <div class="container">
                    <div class="row">

                        <div class="col-1"></div>

                        <div class="col-10">

                            <img src="./img/banner_covid.jpg" width="100%">
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    <br>

                                    <h3 align="center"><b>STAY HOME.SAVE LIVES.</b></h3>

                                    <br>
                                    <br>
                                    <ul>
                                        <li>STAYhome</li>
                                        <li>KEEPa safe distance</li>
                                        <li>WASHhands often</li>
                                        <li>COVERyour cough</li>
                                        <li> SICK?Call the helpline
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-1"></div>

                    </div>
                </div>
                <br>
                <br>
            </section>




        </div>

        <footer class="footer">
            <p align="center">Copyright@2020 Team-hack</p>
        </footer>
    </div>

    <!-- Essential JavaScript Libraries
	==============================================-->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
    <script type="text/javascript" src="js/custom.js"></script>

    <!--      Dipanshubhola1009                -->
    <!-- JS, Popper.js, and jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

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