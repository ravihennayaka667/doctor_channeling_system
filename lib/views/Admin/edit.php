<?php
include_once("../../functions/db_conn.php");
$conn = connection();
if (isset($_POST['btnSave'])) {

    $id = $_GET['ID'];
    $email = $_POST['userName'];
    $role = $_POST['loginRole'];
    $status = $_POST['loginStatus'];


    $sql = "UPDATE `login_tbl` SET `login_email` = '$email', `login_role` = ' $role', `login_status` = '$status' WHERE `login_tbl`.`login_id` =  $id;";
    $result = mysqli_query($conn,$sql);

    if ($result) {
       
        header("location:permisson.php");
     
     } else {
        echo " failed 1";
    }
} else {
    echo "failed";
}?>

