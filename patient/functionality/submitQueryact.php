<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $patientId = $_SESSION["UID"];
    $doctorId = $_POST["doctorId"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $res = doThis("INSERT INTO `messages`(`patientID`, `doctorID`, `subject`, `message`, `generatedAt`) VALUES ('$patientId','$doctorId','$subject','$message',CURRENT_TIMESTAMP())");

    if ($res) {
?>
        <script>
            alert("Message Sent To the Doctor!!");
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