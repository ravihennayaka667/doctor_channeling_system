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



<body style="background-image:url('../../../images/3750050.jpg'); background-repeat: no-repeat;position:fit-content; background-size: 100%">
    <?php include_once("../../../layout/navbarAdmin.php");


    ?>
    <div class="container-md"  id="load">
        <div class="row">
            <div class="col-md-4"  >
                <?php
                include_once("../../functions/db_conn.php");
                function total_num_users()
                {
                    $connection = connection();
                    $sql = "SELECT * FROM user_tbl";
                    $result = mysqli_query($connection, $sql);
                    $count = mysqli_num_rows($result);
                    return $count;
                } ?><div class="card text-white mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: white; font-size: 30px;text-align: center;background-color:#204440;">Users</div>
                    <div class="card-body" style="background-color:rgba(19, 84, 122 , 0.9);">

                        <p class="card-text" style="color: white; font-size: 100px;text-align: center;"><?php echo total_num_users(); ?></p>
                    </div>
                </div>



            </div>

            <div class="col-md-4" >
                <?php
                include_once("../../functions/db_conn.php");
                function total_num_doctors()
                {
                    $connection = connection();
                    $sql = "SELECT * FROM doctors_list";
                    $result = mysqli_query($connection, $sql);
                    $count = mysqli_num_rows($result);
                    return $count;
                } ?>


                <div class="card text-white  mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: white; font-size: 30px;text-align: center;background-color:rgba(32, 68, 64  , 0.9);">Doctors</div>
                    <div class="card-body" style="background-color:rgba(19, 84, 122 , 0.9);">

                        <p class="card-text" style="color: white; font-size: 100px;text-align: center;"><?php echo total_num_doctors(); ?></p>
                    </div>
                </div>



            </div>
            <div class="col-md-4" >
                <?php
                include_once("../../functions/db_conn.php");
                function total_num_patieon()
                {
                    $connection = connection();
                    $sql = "SELECT * FROM patient_table";
                    $result = mysqli_query($connection, $sql);
                    $count = mysqli_num_rows($result);
                    return $count;
                } ?>


                <div class="card text-white mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: white; font-size: 30px;text-align: center;background-color:rgba(32, 68, 64  , 0.9);">
Patient</div>
                    <div class="card-body" style="background-color:rgba(19, 84, 122 , 0.9);">

                        <p class="card-text" style="color: white; font-size: 100px;text-align: center;"><?php echo total_num_patieon(); ?></p>
                    </div>
                </div>



            </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#doc').click(function() {
                $('#load').load('addDoc.php');
            });
        });

        $(document).ready(function() {
            $('#NewUser').click(function() {
                $('#load').load('AddUser.php');
            });
        });

    

 
     
    </script>
</body>

</html>