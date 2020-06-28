<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $name = $fname . " " . $lname;
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $dob = $_POST["dob"];
    $fee = $_POST["consultationFee"];
    $dept = $_POST["dept"];
    $qual = $_POST["qualification"];
    $hospitalId = $_SESSION["UID"];
    $username = $email;
    $password = $phone;
    $res = doThis("INSERT INTO `doctors`(`hospitalID`, `fullName`, `phoneNumber`, `emailAddress`, `dob`, `gender`, `address`, `fee`, `department`, `qualification`, `stateID`, `cityID`, `username`, `password`, `generatedAt`) VALUES ('$hospitalId','$name','$phone','$email','$dob','$gender','$address','$fee','$dept','$qual','$state','$city','$username','$password',CURRENT_TIMESTAMP())");
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
?>