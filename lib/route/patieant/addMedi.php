<?php
//we need to include our user function page
include_once('../../functions/doctorFunction.php');


$result = AddMedi($_POST['Nic'],$_POST['tele'],$_POST['company'],$_POST['treatments'],$_POST['Datefrom'],$_POST['dateTo'],$_POST['dname'],$_POST['experiance'],$_POST['speciality']);

echo($result);

