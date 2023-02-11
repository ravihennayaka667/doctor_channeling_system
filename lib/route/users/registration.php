<?php

//we need to include our user function page
include_once('../../functions/userFunctions.php');


$result = userRegistration($_POST['Name'],$_POST['Email'],$_POST['Pwd'],$_POST['Phone'],$_POST['Nic']);

echo($result);


?>



