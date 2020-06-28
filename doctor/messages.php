<?php include "fxn.php";
if ($_SESSION["UID"] == NULL) {
?>
    <script>
        window.location = "logout.php";
    </script>
<?php
}
$id = $_SESSION["UID"];

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
                <li class="current"><a href="dashboard.php">User Detail</a></li>
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
                <section id="Appointment">
                    <div class="content-header">
                        <h1>Appointment</h1>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <div class="container">
                        <div class="row">

                            <div class="col-3"></div>

                            <div class="col-6">
                                <?php
                                $result = getThis("SELECT * FROM `messages` WHERE `doctorID` = '$id' AND `enabled` = '1' ORDER BY `generatedAt` DESC");
                                for ($i = 0; $i < sizeof($result); $i++) {
                                    $temp = $result[$i];
                                ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <span><?php $did = $temp['patientID'];
                                                    $name = getThis("SELECT `fullName` from `patients` WHERE `id`='$did'");
                                                    $name = $name[0]['fullName'];
                                                    echo $name;
                                                    ?> </span>
                                            <!-----------------php------------------>
                                            <span class="float-right"> <?php echo substr($temp['generatedAt'], 0, 10); ?> </span>
                                        </div>
                                        <div class="card-body">
                                            <h4><?php echo $temp['subject']; ?> </h4>
                                            <p><?php echo $temp['message']; ?> </p>
                                        </div>
                                        <a href="reply.php?id=<?php echo $temp['id'] ?>" class="btn btn-primary">Reply</a>
                                    </div>
                                    <br>
                                <?php
                                }
                                ?>


                            </div>

                            <div class="col-3"></div>

                        </div>
                    </div>