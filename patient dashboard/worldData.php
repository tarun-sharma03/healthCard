<?php
include 'fxn.php';

if (isset($_POST["Country"])) {
  $temp_cid = $_POST["Country"];
  $result = getThis("SELECT `id`, `name` FROM `states` WHERE `country_id`=$temp_cid ORDER BY `name` ASC");
  echo json_encode($result);
}

if (isset($_POST["State"])) {
  $temp_sid = $_POST["State"];
  $result = getThis("SELECT `id`, `name` FROM `cities` WHERE `state_id`=$temp_sid ORDER BY `name` ASC");
  echo json_encode($result);
}

if (isset($_POST["City"])) {
  $temp_cid = $_POST["City"];
  $result = getThis("SELECT `id`, `hospitalName` FROM `hospitals` WHERE `cityId`=$temp_cid ORDER BY `hospitalName` ASC");
  echo json_encode($result);
}

if (isset($_POST["Hospital"])) {
  $temp_hid = $_POST["Hospital"];
  $result = getThis("SELECT `id`,`fullName`,`department`,`qualification` FROM `doctors` WHERE `hospitalID`='$temp_hid'");
  echo json_encode($result);
}
