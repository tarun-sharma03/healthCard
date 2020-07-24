<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $allergy = $_POST["allergicReactions"];
    $medication = $_POST["ongoingMedication"];
    $allergy = serialize($allergy);
    $medication = serialize($medication);

    $id = $_SESSION["UID"];
    $res = doThis("UPDATE `patients` SET `ongoingMedication`='$medication', `allergies`='$allergy' WHERE `id`='$id'");
    if ($res) {
?>
        <script>
            alert("Profile Updated!!");
            window.location = "../dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Some Technical Error Occured!!");
            window.location = "../dashboard.php";
        </script>
<?php
    }
}
?>