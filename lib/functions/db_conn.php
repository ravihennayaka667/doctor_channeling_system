<?php

function Connection()
{

   $server = "localhost";  //server 
   $user = "root"; //database user 
   $password = ""; //database password
   $db_name = "doc";  //database Name

   //lest create a database connection
   $conn = mysqli_connect($server, $user, $password, $db_name); //This is a predine function in PHP

   if (!$conn) {
      return ("Database Error");
   } else {
      return ($conn);
   }
}
