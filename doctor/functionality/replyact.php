<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $doctorID = $_SESSION["UID"];
    $patientID = $_POST["patientID"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $replyId = $_POST["msgID"];
    doThis("UPDATE `messages` SET `enabled` = '1' WHERE `id`='$replyId' ");

    $res = doThis("INSERT INTO `messages`( `patientID`, `doctorID`, `subject`, `message`, `generatedAt`,`enabled`) VALUES ('$patientID','$doctorID','$subject','$message',CURRENT_TIMESTAMP(),'2')");

    if ($res) {
?>
        <script>
            alert("Message Sent To The patient!!");
            window.location = "../dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("There is some technical error!!");
            window.location = "../dashboard.php";
        </script>
<?php
    }
}
?>