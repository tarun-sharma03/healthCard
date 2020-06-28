<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $name = $fname . " " . $lname;
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $e_phone = $_POST["emergencyPhone"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $add1 = $_POST["address1"];
    $add2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $username = $email;
    $password = $phone;
    $medication = $_POST["medicine"];
    $allergy = $_POST["allergy"];
    $blood = $_POST["bloodGroup"];
    $marital = $_POST["marital"];
    $temp_check = getThis("SELECT `id` FROM `patients` WHERE `emailAddress` = '$email' AND `enabled` = '1' ");
    if (sizeof($temp_check) > 0) {
?>
        <script>
            alert("Email Address Already Exists!!");
            window.location = "../userRegister.php";
        </script>
        <?php
    } else {
        $temp_query = "INSERT INTO `patients`(`fullName`, `dob`, `phoneNumber`, `emergencyPhone`, `bloodGroup`, `gender`, `emailAddress`, `addressLine1`, `addressLine2`, `city`, `state`, `username`, `password`, `ongoingMedication`, `allergies`, `generatedAt`) VALUES ('$name','$dob','$phone','$e_phone','$blood','$gender','$email','$add1','$add2','$city','$state','$username','$password','$medication','$allergy',CURRENT_TIMESTAMP()) ";
        $query = mysqli_query($con, $temp_query);
        if ($query) {
        ?>
            <script>
                alert("Registeration Completed!!");
                window.location = "../index.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Some Technical Error!!");
                window.location = "../index.php";
            </script>
<?php
        }
    }
}
?>