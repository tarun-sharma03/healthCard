<?php include "../fxn.php";

if (isset($_POST["submit"])) {
    $patientId = $_SESSION["UID"];
    $doctorId = $_POST["doctorId"];
    $symptoms = $_POST["symptoms"];
    $symptoms = serialize($symptoms);
    $description = $_POST["description"];

    $res = doThis("INSERT INTO `queries`(`patientID`, `doctorID`, `symptoms`, `description`, `generatedAt`) 
    VALUES('$patientId','$doctorId','$symptoms','$description', CURRENT_TIMESTAMP() )");

    if ($res) {
?>
        <script>
            alert("Query Registered!!");
            window.location = "../dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Some Technical Error!!");
            window.location = "../dashboard.php";
        </script>
<?php
    }
}
?>