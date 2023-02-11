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
    <div class="container"  style="width:95%; height:95%; padding-top:2% ;padding-left:18% ">
        <div class="card col-md-7" id="report" style="border:solid black 2px;">
            <img src="../../../images/pxx.jpg" style="height:80PX; width:80px; padding-left:5px;padding-top:5px;">

            <div class="card-body" >
                <?php
                include_once('../../functions/db_conn.php');
                $id = $_POST['pt'];
                $db_conn = Connection();


                $query = "SELECT * FROM patient_table  WHERE patient_id='$id'";
                $query_run = mysqli_query($db_conn, $query);
                while ($row = mysqli_fetch_array($query_run)) { ?>
                    
                    <b>Patieant Name: </b> <?php echo $row['first_name'] . " " . $row['last_name']; ?></br>
                    <b>Age :</b><?php echo $row['Old']; ?><br>



                <?php }

                $query = "SELECT * FROM patieant_pres1  WHERE patient_id='$id'";
                $query_run = mysqli_query($db_conn, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                   ?>



                    <b>Date :</b><?php echo $row['Date']; ?><br>
                    <hr style="height:5px;">

                    <b>Prescription</b><br><br>
                    <p class="col-md-4">
                    <?php echo $row['Prescription']; ?>

                    </p>
                <?php
                     
                    }
                ?>

<button onclick="printContent('report');"> Print </h4>

<script>
    function printContent(el) {
        var restrorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        window.print();
        document.body.innerHTML = restrorepage;
    }
</script>
