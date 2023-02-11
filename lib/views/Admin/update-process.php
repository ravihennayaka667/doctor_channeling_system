<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<!-- link bootstap -->
<link rel="stylesheet" href="../../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/tab.css">
<link rel="stylesheet" href="../../../css/sidebar.css">
<!-- link js  -->
<script src="../../../js/jquery.js"></script>
<script src="../../../js/bootstrap.min.js"></script>



<body style="background-image:url('../../../images/R.jpg'); background-repeat: no-repeat;position:fit-content; background-size: 100%"> 
    <?php include_once("../../../layout/navbarAdmin.php");



    include_once('../../functions/db_conn.php');
    $conn = connection();
    $userId = $_GET['ID'];
    $result = mysqli_query($conn, "SELECT login_id,login_email,login_role,login_status FROM login_tbl WHERE login_id='$userId'");
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["login_id"];
        $email = $row["login_email"];
        $role = $row["login_role"];
        $status = $row["login_status"];
    }
    ?>
    <div class="container">
        <div  style="padding-left:200px;padding-top:5%; width:50%">
            <div class="card" style="border-style:solid; border:size 1px; border-color:black;background-color:rgba(19, 84, 122, 0.3);text-align:center;">
                <div class="card-header" style="background-color:rgba(0,204,255, 0.5);">
                    Update View
                </div>
                <div class="card-body">
                 
                    <form action="edit.php?ID=<?php echo $id ?>" method="post">
                        <div class="form-group mt-2">
                            <label for="">login_id</label>
                            <input type="text" name="id" id="userName" placeholder="Enter Your Name"disabled value="<?php echo $id ?>">
                        </div>
                        <div class="form-group mt-2">
                        <label for="">login_email</label>
                        <input type="text" name="userName" id="userName" placeholder="Enter Your Name"value="<?php echo $email ?>">
                        </div>
                        <div class="form-group mt-2">
                        <label for="">login_role</label>
                        <input type="text" name="loginRole" id="userName" placeholder="Enter Your Name"value="<?php echo $role ?>">

                        <div class="form-group mt-2">
                        <label for="">login_status</label>
                        <input type="text" name="loginStatus" id="userName" placeholder="Enter Your Name"value="<?php echo $status ?>">


                        <div class="form-group mt-2">
                        <br> <button type="submit" class="btn btn-primary" name="btnSave">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>