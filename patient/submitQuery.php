<?php include "fxn.php";
if ($_SESSION["UID"] == NULL) {
?>
    <script>
        window.location = "logout.php";
    </script>
<?php
}
$id = $_SESSION["UID"];
$doctorId = $_POST["Doctor"];
$res = getThis("SELECT `fullName`, `department`,`qualification`, `fee` FROM `doctors` WHERE `id` = '$doctorId'");
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
                <li><a href="#Book-Appointment">Book Appointment</a></li>
                <li><a href="#Appointments">Appointments</a></li>
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


            </section>
            <h4><?php echo "Doctor Name : " . $res['fullName'] . "<br>"; ?> </h4>
            <h4><?php echo "Highest Qualification : " . $res['qualification'] . "<br>"; ?> </h4>
            <h4><?php echo "Department Name : " . $res['department'] . "<br>"; ?> </h4>
            <h4><?php echo "Consultation Fee : " . $res['fee'] . "<br>"; ?> </h4>
            <br>
            <br>
           <section class="container">
             <div class=row>   
                 <div class="col-3"></div>
                 <div class="col-6">
            <form action="functionality/submitQueryact.php" method="POST">


                <div class="row">
                <label for="subject" class="col-4"> Subject :</label>
                <textarea class="col-6" rows="3"  name="subject" class="form"></textarea>
                </div>  
                <br>
                <div class="row">
                 <label class="col-4" for="message" >Details Of The Problem :</label>                
                <textarea class="col-6" rows="3"  name="message" id=""></textarea>
                </div>
                <br>
                
                <input type="hidden" name="doctorId" value="<?php echo $doctorId; ?>">
                <br>
                <div class="row">
                <div class="col-4"></div>   
                <button class="col-6 btn btn-primary " type="submit" name="submit">Submit</button>
                </div>
                 
            </form>
            </div>
            <div class="col-3"></div>
             </div>
          </section> 
        </div>
    </div>