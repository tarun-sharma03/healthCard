<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $res = getThis("SELECT `id` FROM `doctors` WHERE `username`='$username' AND `password` = '$password' AND `enabled` = '1'");

    if ($res) {
        $res = $res[0];
        $id = $res["id"];
        $_SESSION["UID"] = $id;
        $temp_update_query = "UPDATE `doctors` SET `lastLoginAt` = CURRENT_TIMESTAMP() WHERE `id` = '$id' ";
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