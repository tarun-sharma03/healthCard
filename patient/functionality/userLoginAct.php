<?php
include "../config.php";

if (isset($_POST["submit"])) {
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $temp_query = "SELECT `id` FROM `patients` WHERE `username`='$username' AND `password` = '$password' AND `enabled` = '1'";
    $query = mysqli_query($con, $temp_query);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        $id = mysqli_fetch_array($query);
        $id = $id[0];
        $_SESSION["UID"] = $id;
        $temp_update_query = "UPDATE `patients` SET `lastLoginAt` = CURRENT_TIMESTAMP() WHERE `id` = '$id' ";
        $update_query = mysqli_query($con, $temp_update_query);
?>
        <script>
            alert("Login Successful!!");
            window.location = "../../patient dashboard/patient-dashboard.html";
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