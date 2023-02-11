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
    <?php include_once("../../../layout/permisson.php");


    ?>

<?php
include_once '../../functions/db_conn.php';
$conn = connection();
$result = mysqli_query($conn, "SELECT login_id,login_email,login_role,login_status FROM login_tbl");

    if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="container">
    <div style="padding-left:8%;">

    <table class="table table-striped" style="opacity: 1;">
            <tr style="background-color:white;">
                <td>login id</td>
                <td>login email</td>
                <td>login role </td>
                <td>login status</td>
                <td>Edit Login Details</td>
           
              
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["login_id"]; ?></td>
                    <td><?php echo $row["login_email"]; ?></td>
                    <td><?php echo $row["login_role"]; ?></td>
                    <td><?php echo $row["login_status"]; ?></td>

                    <td><a href="update-process.php?ID=<?php echo $row["login_id"]; ?>" style="radious:2px;background-color:black; color:white";width:50px>Update</a></td>
                    

                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }
    ?>

    </div>
    </div>
</body>
<script>
    

        $(document).ready(function() {
            $('#NewUser').click(function() {
                $('#load').load('AddUser.php');
            });
        });

       
      

 
     
    </script>
</html> 