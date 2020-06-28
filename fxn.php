<?php
require 'config.php';
function getThis($query, $log=TRUE) {
  global $con, $_SESSION;
  $temp_q = $con->query($query);
  $result = [];
  $count=0;
  while ($temp = $temp_q->fetch_assoc()) {
    $rs=[];
    foreach ($temp as $r => $value) {
      $rs[$r]=$value;
    }
    $result[$count] = $rs;
    $count ++;
  }
  return $result;
}
// Perform Action on Databes
function doThis($query, $log=TRUE) {
  global $con, $_SESSION;
  $con->query($query);
  $l = substr($query,0,1);
  $r = TRUE;
  if ($l=='I') {
    $r = $con->insert_id;
  }
  return $r;
}
?>