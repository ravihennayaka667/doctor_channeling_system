<?php
include_once('db_conn.php');




function AddPrescreption($NIC, $id, $Date, $Pres)
{

$conn=Connection();

  $insert="INSERT INTO patieant_pres1(user_nic,patient_id ,Date,Prescription) VALUES ($NIC, $id, '$Date','$Pres')";

     $loginResult = mysqli_query($conn, $insert);



        //data base error checking

        if ($conn->connect_errno) {
            echo ($conn->connect_error);
        }

       
}




function PatieantReg($nic,$email,$FirstName,$LastName,$Tele,$DOB,$old,$adress,$gender,$martual)
{ //Create data base connection

    $db_conn=Connection();
    $insert="INSERT INTO patient_table(user_nic,patient_email,first_name,last_name,DOB,Gender,address,Martual_status,Contact_Number,Old) 
    VALUES ('$nic','$email','$FirstName','$LastName','$DOB','$gender','$adress','$martual','$Tele',$old);";
     
$result=mysqli_query($db_conn,$insert);

//db check
if($result > 0){
    return("Success!");
}
else{
    return("Please try Again!");
}

}


function AddMedi($nic,$tele,$company,$treatments,$from,$to,$dname,$exp,$spaciality){
    $db_conn=connection();
    $insert="INSERT INTO medi_repor(NIC_Number,Input_Phone_Number,Company_Name,Problem_Treatments,Rest_date_from,RestTO,Doctor_name,Doctor_Experiance,speciality) VALUES ('$nic',$tele,'$company','$treatments','$from','$to','$dname','$exp','$spaciality');";
    
    $result=mysqli_query($db_conn,$insert);

    if($result>0){
        return("Success");

    }else{
        return $result;
    }
}