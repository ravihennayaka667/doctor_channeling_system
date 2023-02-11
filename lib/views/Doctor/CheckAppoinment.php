<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><?php

        ?>

    <div class="container" style="padding-top: 35px">
        <div class="col-md-12">

            <table class="table table-dark">
                <thead>
                    <td>Patieant Name</td>
                    <td>NIC Number</td>
                    <td>Date</td>
                    <td>Time </td>
                    <td>Messege</td>

                </thead>

                <?php
                include_once("../../functions/db_conn.php");
                session_start();
                $id = $_SESSION['loginName'];
                $db_conn = Connection();
                $query = "SELECT doc_Id  FROM  doctors_list WHERE Email='$id'";
                $query_run = mysqli_query($db_conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                    $docId = $row['doc_Id'];




                    $query = "SELECT *  FROM  appointment WHERE doc_Id='$docId'";
                    $query_run = mysqli_query($db_conn, $query);
                    while ($row = mysqli_fetch_array($query_run)) { ?>

                        <tr>
                            <td> <?php echo $row['Patieant_Name'] ?> </td>
                            <td> <?php echo $row['NIC_number'] ?> </td>
                            <td> <?php echo $row['date'] ?> </td>
                            <td> <?php echo $row['time'] ?> </td>
                            <td> <?php echo $row['message'] ?> </td>

                        </tr>
                <?php
                    }
                }

                ?>



            </table>
        </div>
    </div>
</body>

</html>