<?php

//we need to include our user function page
include_once('../../functions/userFunctions.php');


$result = userAppointment($_POST['dname'],$_POST['nic'],$_POST['name'],$_POST['date'],$_POST['time'],$_POST['msg']);

echo($result);


?>



