<?php

//lets call the user function
include_once('lib/functions/userFunctions.php');

if (isset($_POST['btnLogin'])) {
    //now we need to call 
    $result = Authentication($_POST['userName'], $_POST['userPwd']);

    echo ($result);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index Page</title>
    <!-- Link bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">


    <!-- Link jquery and Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width:device-width" , initial-scale="1.0">
    <style>



    </style>

</head>
<?php include_once("layout/navbar_login.php") ?>

<body style="background-image:url('images/3750050.jpg'); background-repeat: no-repeat;position:fit-content; background-size: 100%">



    <div class="col-md-12" style="padding-left:25%;padding-right:25%; padding-top:85px" id="load">

        <div class="card text-dark  mb-3" style="background-color:rgba(255,255,255, 0.4);border-style:solid; border:size 1px; border-color:black">
            <div class="card-header" style="background-color:rgba(0,204,255, 0.5);">
                Login Section
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mt-3">
                        <label for="">Enter Your userName</label>
                        <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter Your userName">
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Enter Your Password</label>
                        <input type="password" name="userPwd" id="userPwd" class="form-control" placeholder="Enter Your Password">
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" class="btn btn-primary btn-sm" name="btnLogin">
                        <input type="reset" class="btn btn-secondary btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script>
    $(document).ready(function() {
        $('#signup').click(function() {
            $('#load').load('signup.php');
        });
    });
</script>

</html>