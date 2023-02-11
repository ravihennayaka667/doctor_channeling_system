<?php

//start session
session_start();

//first we need to import database connection 
include_once("db_conn.php");

//lets create our userfunction

function userRegistration($name, $email, $pwd, $phone, $nic)
{

    //create db connection
    $db_conn = Connection();

    //insert query section(If your insert any data into char ,varchar, date and float types you need warp that value by using single quotes)
    $insertSql = "INSERT INTO user_tbl (user_name,user_email,user_phone,user_nic,user_role,user_status) 
                  VALUES('$name','$email','$phone','$nic','user',1);";


    $sqlResult = mysqli_query($db_conn, $insertSql);

    if ($db_conn->connect_errno) {
        echo ($db_conn->connect_errno);
    }


    if ($sqlResult > 0) {
        //if the registration result is greater than 0 then lest feed data into our login table as well.
        //lets use MD5 
        $newPwd = md5($pwd);


        $insertLogin = "INSERT INTO login_tbl(login_email,login_pwd,login_role,login_status) 
                        VALUES('$email','$newPwd','user',1);";

        $loginResult = mysqli_query($db_conn, $insertLogin);



        //data base error checking

        if ($db_conn->connect_errno) {
            echo ($db_conn->connect_error);
        }

        return ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated')
        </SCRIPT>");
     
    } else {

        return ("Please try again!");
    }
}



//lets create a authentication function

function Authentication($userName, $userPwd)
{
 $db_conn = Connection();

    //sql user check
    $sqlUserFetch = "SELECT * FROM login_tbl WHERE login_email='$userName';";

    $sqlResult = mysqli_query($db_conn, $sqlUserFetch);


    //data base error checking

    if ($db_conn->connect_errno) {
        echo ($db_conn->connect_error);
    }

    //first we need to convert password in to hash value
    $newpwd = md5($userPwd);

    //wee need to checks the nuber of rows
    $nor = mysqli_num_rows($sqlResult);


    //validating the number of records are greater than 0 oe not
    if ($nor > 0) {
        //in execution the code


        //first we need to fetch the record
        $rec = mysqli_fetch_assoc($sqlResult);

        //first we need to validate your password
        if ($rec['login_pwd'] == $newpwd) {

            //lets check tha user status
            if ($rec['login_status'] == 1) {
                //check user role
                $role=($rec['login_role']);

                switch ($role) {
                    case 'user':
                       //create cookiea
                    setcookie("Login29", $rec["login_id"], time() + 60 * 60);

                    //create session
                    $_SESSION['loginName'] = $rec['login_email'];
                    $_SESSION['loginId'] = $rec['login_id'];

                    //now lets redirect our user to the dashboard
                    header('location:lib/views/Users/user.php');
                        break;

                    case 'doctor':
                      //create cookiea
                        setcookie("Login29", $rec["login_id"], time() + 60 * 60);

                        //create session
                        $_SESSION['loginName'] = $rec['login_email'];
                        $_SESSION['loginId'] = $rec['login_id'];

                        //now lets redirect our user to the dashboard
                        header('location:lib/views/Doctor/doctor.php');
                        break;
                    
                    case 'Admin':
                    setcookie("Login29", $rec["login_id"], time() + 60 * 60);

                        //create session
                        $_SESSION['loginName'] = $rec['login_email'];
                        $_SESSION['loginId'] = $rec['login_id'];

                        //now lets redirect our user to the dashboard
                        header('location:lib/views/Admin/Admin.php');
                        break;
                }

                
                
            } else {
                return ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('your account has been deactivated')
                </SCRIPT>");
            }
        } else {
            return ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Your Password Is Incorrect. Please Try Agein !')
            </SCRIPT>");
        }
    } else {
        return ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('No Record Found')
        </SCRIPT>");
    }
}




function userAppointment($docID,$nic,$ptname,$date,$time,$msg){
    $db_conn=connection();
    $insert="INSERT INTO appointment(doc_Id,NIC_number,Patieant_Name,date,time,message) VALUES ($docID,'$nic','$ptname','$date','$time','$msg')";
    
    $result=mysqli_query($db_conn,$insert);

    if($result>0){
        return("Success");

    }else{
        return $result;
    }
}
