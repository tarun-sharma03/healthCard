<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $res = getThis("SELECT `id` FROM `hospitals` WHERE `username` = '$username' AND `password` = '$password' AND `enabled` = '1'");
    if (sizeof($res) > 0) {
        $id = $res[0]['id'];
        $_SESSION["UID"] = $id;
        doThis("UPDATE `hospitals` SET `lastLogin`= CURRENT_TIMESTAMP() WHERE `id` = '$id'");
?>
        <script>
            alert("Login Successful!!");
            window.location = "../dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Username/Password is Wrong!!");
            window.location = "../index.php";
        </script>
<?php
    }
}
?>