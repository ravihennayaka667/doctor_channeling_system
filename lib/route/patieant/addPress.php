<?php
//we need to include our user function page
include_once('../../functions/doctorFunction.php');


$result = AddPrescreption($_POST['nic'],$_POST['id'],$_POST['date'],$_POST['pr']);

echo($result);

