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
    include_once('../../../layout/navbarDoc.php.')
    ?>
    <div class="container" style="width:95%; height:95%; padding-top:30px">
        <div class="card">
            <div class="card header">
                <h4>Patieant details</h4>
            </div>
            <div class="card-body">
                <?php
                $id = $_POST['pt'];
                $db_conn = Connection();
                $query = "SELECT * FROM patient_table WHERE user_nic=$id OR patient_id=$id";
                $query_run = mysqli_query($db_conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                ?>

                    <Label><b>Patieant ID:</b></Label><?php echo $row['patient_id'] ?></br>
                    <label><b>NIC number:</label></b><?php echo $row['user_nic'] ?><br>
                    <label><b>Patieant Email :</label></b><?php echo $row['patient_email'] ?>><br>
                    <label><b>Name :</label></b> <?php echo $row['first_name'] . $row['last_name'] ?><br>
                    <label><b>Contact number : </label></b>
                    <<?php echo $row['Contact_Number'] ?><br>
                        <label><b>Old:</label></b><?php echo $row['Old'] ?><br>
                    <?php
                }
                    ?>
            </div>
        </div>
</body>

</html>