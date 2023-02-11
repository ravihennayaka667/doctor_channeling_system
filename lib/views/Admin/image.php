<?php
 
require_once ('db_conn.php');
 
if (isset($_POST['Submit'])) {
 
		
$location=$_FILES["image"]["name"];
$foodname=$_POST['Food_name'];
$foodprice=$_POST['Food_price'];
 
$conn=connection();
$sql = "INSERT INTO Food_table (Food_name, Food_price, image_location)
VALUES ('$foodname', '$foodprice', '$location')";

$loginResult = mysqli_query($conn, $sql);



//data base error checking

if($loginResult > 0){
  return("Success!");
}
else{
  return("Please try Again!");
}
}
?>












