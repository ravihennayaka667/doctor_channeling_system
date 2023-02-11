<?php
include_once('../../functions/db_conn.php');

$conn=connection();

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE `login_tbl` SET `login_role` = 'user' WHERE `login_tbl`.`login_id` ='$i' ";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>