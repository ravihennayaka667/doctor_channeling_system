<?php
//we need to include our user function page
include_once('../../functions/AdminFun.php');


$result = DocRegistration($_POST['dID'],$_POST['FirstName'],$_POST['Tele'],$_POST['spc'],$_POST['email']);

echo($result);

