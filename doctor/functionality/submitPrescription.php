<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $diagnosis = $_POST["diagnosis"];
    $diagnosis = serialize($diagnosis);
    $diet = $_POST["diet"];
    $specialAdvice = $_POST["special"];
    $labTests = $_POST["labtests"];
    $labTests = serialize($labTests);
    $medicine = $_POST["med"];
    $medicine = serialize($medicine);
    $instruction = $_POST["instruct"];
    $instruction = serialize($instruction);
    $dose = $_POST["dose"];
    $dose = serialize($dose);
    $queryId = $_POST["queryId"];
    $doctorId = $_POST["doctorId"];

    $res = doThis("INSERT INTO `prescription`(`queryID`, `doctorID`, `diagnosis`, `diet`, `specialAdvice`, `labTests`, `medicine`, `instruction`, `dosage`, `generatedAt`) VALUES( '$queryId', '$doctorId', '$diagnosis', '$diet', '$specialAdvice', '$labTests', '$medicine', '$instruction','$dose', CURRENT_TIMESTAMP() )");
    $temp = doThis("UPDATE `queries` SET `readAt` = CURRENT_TIMESTAMP(), `enabled`='2', `prescriptionID`='$res' WHERE `id`= '$queryId' ");
    if ($temp && $res) {
?>
        <script>
            alert("Prescription Sent!!");
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