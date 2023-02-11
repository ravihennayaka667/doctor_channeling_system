<?php
include_once('db_conn.php');
function DocRegistration($id, $name, $tele, $spc, $email )
{

$conn=Connection();

  $insert="INSERT INTO doctors_list(doc_Id,name,speciality,Telephone,Email) VALUES ($id,'$name','$spc',$tele,'$email')";

     $loginResult = mysqli_query($conn, $insert);



        //data base error checking

        if($loginResult > 0){
          return("Success!");
      }
      else{
          return("Please try Again!");
      }
      

       
}
    
