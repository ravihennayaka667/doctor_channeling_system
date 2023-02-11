<?php
include_once('../../functions/db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <script src="../../../js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include_once('../../../layout/navBarUser.php')
    ?>
    <div class="container" style="width:95%; height:95%; padding-top:2% ;padding-left:18%">
        <div class="card col-md-7" id="report">
            <div class="card header" style="height:55px;">
                <h4><U>
                        <center>MEDICAL REPORT<center>
                    </U></h4>
            </div>
            <div class="card-body">
                <?php
                $id = $_POST['pt'];
                $db_conn = Connection();
                $query = "SELECT * FROM medi_repor JOIN patient_table WHERE NIC_Number='$id'";
                $query_run = mysqli_query($db_conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                ?>

                    <p><b>Name:</b><?php echo $row['Doctor_name'] ?><br>
                    <p><?php echo $row['Doctor_name'] . " " . $row['Doctor_Experiance'] ?> Years expireances of the
                        <?php echo "<b>" . $row['speciality'] . "</b>" ?> field.
                        <hr>
                        <hr style="height:5px;">

                        <label><b>Patieant Name:</b> <?php echo $row['first_name'] . " " . $row['last_name'] ?><br>
                            <label><b>Address:</b> <?php echo $row['address'] ?><br>
                                <hr>
                                <hr style="height:5px;">

                                <label><b>Company name:</b> <?php echo $row['Company_Name'] ?><br>


                                    <p>Please arrange resting period to this patieant from <b><?php echo $row['Rest_date_from'] ?></b> To <b><?php echo $row['RestTo'] ?></b> </p>


                          
                                    <div style="border: groove 2px;">
                                        <h4>Treatments /Clinical diagnosis :</h4><br>
                                        <p> <?php echo $row['Problem_Treatments'] ?></p>

                                    </div>
                                <?php
                            }
                                ?>
                                <br>


            </div>
        </div>

        
<!-- print reprt using java script-->
        <button onclick="printContent('report');"> Print </h4>
</body>
<script>
    function printContent(el) {
        var restrorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        window.print();
        document.body.innerHTML = restrorepage;
    }
</script>

</html>