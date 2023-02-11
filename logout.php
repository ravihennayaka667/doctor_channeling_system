<?php
session_start();
unset($_SESSION["loginName"]);
unset($_SESSION["loginId"]);
header("Location:Login.php");
?>