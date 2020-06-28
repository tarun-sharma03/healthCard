<?php include "fxn.php";
if ($_SESSION["UID"] == NULL) {
?>
    <script>
        window.location = "logout.php";
    </script>
<?php
}
$id = $_SESSION["UID"];
$replyId = $_GET["id"];
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
                <li><a href="messages.php">All Messages</a></li>


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

                <?php
                $message = getThis("SELECT * FROM `messages` WHERE `id` = '$replyId' ");
                $message = $message[0];
                $pid = $message['patientID'];
                $p_details = getThis("SELECT * FROM `patients` WHERE `id` = '$pid'");
                $p_details = $p_details[0];
                ?>
                <br>
                <br>
                <br>
                <h3>Patient Name : <?php echo $p_details['fullName']; ?> </h3>
                <h3>Patient Contact : <?php echo $p_details['phoneNumber']; ?> </h3>
                <h3>Patient Email : <?php echo $p_details['emailAddress']; ?> </h3>
                <h3>Patient Allergies : <?php echo $p_details['allergies']; ?> </h3>
                <h3>On Going Medication : <?php echo $p_details['ongoingMedication']; ?> </h3>
                <h3>Patient Blood Group : <?php echo $p_details['bloodGroup']; ?> </h3>

                <br><br>
                <h3>Subject : <?php echo $message['subject']; ?> </h3>
                <h3>Message : <?php echo $message['message']; ?> </h3>
                <br><br><br><br>

                <section class="container">
                <div class="row">

                    <div class="col-4"></div>

                    <div class="col-6">
                        
                        <form action="functionality/replyact.php" method="POST">
                        <div class="row">
                            <label for="subject" class="col-4">Subject :</label>
                            <textarea  rows="3" class="col-6"  name="subject"></textarea>
                        </div>
                            <br>
                        <div class="row">
                            <label for="message" class="col-4">Message :</label>
                             <textarea class="col-6" rows="3"  name="message"><br>
                        </div>                  
                            <input type="hidden" name="patientID" value="<?php echo $pid; ?>">
                            <input type="hidden" name="msgID" value="<?php echo $replyId; ?>">
                        <div class="row">
                            <div class="col-4"></div>
                            <button class="col-6 btn btn-primary" type="submit" >Submit Reply</button> 
                        </div>
                        </form>

                     </div>

                <div class="col-4"></div>
                </div>
                </section>