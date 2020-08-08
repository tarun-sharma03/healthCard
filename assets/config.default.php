<?php
session_start();
// Database Configrations
$d_username=""; //database username
$d_password=""; //database password
$d_host="localhost"; //database host name
$d_database=""; //database name
$con = new mysqli($d_host,$d_username,$d_password,$d_database);
// Date Time Configrations
$date = date_create();
date_default_timezone_set("Asia/Calcutta");
date_timestamp_get($date);
?>
