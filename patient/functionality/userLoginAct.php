<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $temp_query = getThis("SELECT * FROM `patients` WHERE `username`='$username' AND `password` = '$password' AND `enabled` = '1'");
    // $temp_query = "SELECT * FROM `patients` WHERE `username`='$username' AND `password` = '$password' AND `enabled` = '1'";
    // $query = mysqli_query($con, $temp_query);
    // $num = mysqli_num_rows($query);
    if ($temp_query) {

        $query = $temp_query[0];
        $id = $query['id'];
        $_SESSION["UID"] = $id;
        $_SESSION["fullName"] = $query['fullName'];
        $_SESSION["dob"] = $query['dob'];
        $temp_update_query = "UPDATE `patients` SET `lastLoginAt` = CURRENT_TIMESTAMP() WHERE `id` = '$id' ";
        $update_query = mysqli_query($con, $temp_update_query);
?>
        <script>
            alert("Login Successful!!");
            window.location = "../dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Wrong Username/Password!!");
            window.location = "../index.php";
        </script>
<?php
    }
}

?>