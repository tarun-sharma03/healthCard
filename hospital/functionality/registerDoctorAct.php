<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $blood = $_POST["bloodGroup"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $emergencyPhone = $_POST["emergencyPhone"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $dob = $_POST["dob"];
    $fee = $_POST["fee"];
    $dept = $_POST["department"];
    $qual = $_POST["qualification"];
    $hospitalId = $_SESSION["UID"];
    $username = $email;
    $password = $phone;
    $emailCheck = getThis("SELECT * FROM `doctors` WHERE `emailAddress` = '$email' AND `enabled`=1");
    $phoneCheck = getThis("SELECT * FROM `doctors` WHERE `phoneNumber` = '$phone' AND `enabled`=1");
    if ($emailCheck || $phoneCheck) {
?>
        <script>
            alert("Doctor already registered!!");
        </script>
        <?php
    } else {

        $res = doThis("INSERT INTO `doctors`(`hospitalID`, `fullName`, `emailAddress`, `phoneNumber`, `emergencyPhoneNumber`, `address`, `dob`, `bloodGroup`, `department`, `qualification`, `consultationFee`, `username`, `password`, `generatedAt`) VALUES('$hospitalId','$name','$email','$phone','$emergencyPhone','$address','$dob','$blood','$dept','$qual','$fee','$username','$password',CURRENT_TIMESTAMP())");
        if ($res) {
        ?>
            <script>
                alert("Doctor Registered !! Default username and password is email and phone number!!");
                window.location = "../registerDoctor.php";
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
}
?>