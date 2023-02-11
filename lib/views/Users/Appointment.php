<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment</title>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-image:url('../../../images/app1.jpg');background-size:100% 100%; position:right;">
                <div class="card col-md-6" id="report" style="background-color:rgba(7, 22, 106 , 0.2)">
                    <div class="card header" style="height:55px; color:white;background-color:darkslategray" >
                        <h4><U>
                                <center>Appoinment<center>
                            </U></h4>
                    </div>
                    <div class="card-body">
                        <form id="appoint">
                            <div class="form-group mt-4">
                                <b> <label>Your NIC</label></b>
                                <input type="text" id="Nic" name="nic" class="form-control" placeholder="Enter  NIC">

                            </div>

                            <div class="form-group mt-4">
                                <b> <label>Your Name</label></b>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name"><br>

                            </div>


                            <div class="form-group  ">
                                <b><label> Doctor name :</label></b><br>
                                <select name="dname" style="width: 80%;">
                                    <?php
                                    include_once("../../functions/db_conn.php");
                                    $db_conn = Connection();
                                    $query = "SELECT * FROM doctors_list";
                                    $query_run = mysqli_query($db_conn, $query);
                                    while ($row = mysqli_fetch_array($query_run)) {

                                        echo "<option value=" . $row['doc_Id'] . ">" . $row['name'] . "</option>";
                                    } ?>
                                </select>
                            </div><br>

                            <div class="form-group  ">
                                <b><label> Doctor Speciality :</label></b><br>
                                <select name="spc" style="width: 80%;">
                                    <?php
                                    include_once("../../functions/db_conn.php");
                                    $db_conn = Connection();
                                    $query = "SELECT * FROM doctors_list";
                                    $query_run = mysqli_query($db_conn, $query);
                                    while ($row = mysqli_fetch_array($query_run)) {

                                        echo "<option value=" . $row['doc_Id'] . ">" . $row['speciality'] . "</option>";
                                    } ?>
                                </select>
                            </div><br>


                            <div class="row">
                                <div class="form-group mt-4">
                                    <b> <label>Date :</label></b>
                                    <input type="date" id="date" name="date" class="form-control">

                                </div>


                                <div class="form-group mt-4">
                                    <b><label>Time</label></b>
                                    <input type="text" id="time" name="time" class="form-control">
                                </div>

                                <div class="form-group mt-4">
                                    <b><label>Message</label></b>
                                    <input typr="text" id="msg" name="msg" rows="4" cols="58">
                                
                                </div>

                            </div>

                            
                    <br> <button type="submit" class="btn btn-primary" id="btnSave">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>

    </div>

</body>
<script>
    $('#btnSave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../route/users/Appointment.php",
            type: "post",
            data: $('#appoint').serialize(),
            success: function(res) {
                alert(res);
               location.reload();
            }
        })
    })
</script>
</html>