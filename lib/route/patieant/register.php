<?php
//include the function file
include_once('../../functions/doctorFunction.php');
$result=PatieantReg($_POST['Nic'],$_POST['email'],$_POST['FirstName'],$_POST['LastName'],$_POST['Tele'],$_POST['DOB'],$_POST['Old'],$_POST['Adress'],$_POST['MF'],$_POST['SM']);

echo($result);


?>
