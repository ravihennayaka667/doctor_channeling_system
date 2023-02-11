<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor panel</title>


    <!-- link bootstap -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    

    <!-- link js  -->
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>





</head>
<?php
session_start();
include_once("../../../layout/navbarDoc.php");
?>

<body style="background-color:rgba(173,216,230, 0.3);background-image:url('../../../images/bg.jpg');">
    <header id="header"></header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="float:left">
                <div class="card" style="margin-top:30px;; ">
                    
                    <div class="card-body" >
                        <h5 class="card-title">New Patient</h5>

                        <a href="doctor.php" class="btn btn-primary" id="AddDoc" style="width: 170px;background-color: rgba(31, 97, 141 )">ADD PATIENT</a>
                    </div>
                </div>


                <div class="card" style="margin-top:30px;;" >
                    
                    <div class="card-body">
                        <h5 class="card-title">Patient Details</h5>
                        <a href="#" class="btn btn-primary" id="CheckDetails" style="width: 170px;background-color: rgba(31, 97, 141 )">CHECK DETAILS</a>
                    </div>
                </div>



                <div class="card" style="margin-top:30px;;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Prescription</h5>

                        <a href="#!" class="btn btn-primary" id="AddPrescription" style="width: 170px;background-color: rgba(31, 97, 141 )">PRESCRIPTION</a>
                    </div>
                </div>


                
            <div class="card" style="margin-top:30px;;">
                
                <div class="card-body">
                    <h5 class="card-title">Fill Medical Report</h5>
                    <a href="#!" class="btn btn-primary" id="medi" style="width: 170px;background-color: rgba(31, 97, 141 )">Fill</a>
                </div>
            </div>
            </div>






            <div class="col-md-10" id="load">


                <div class="container" style="width:95%; height:95%; padding-top:2%">
                    <div class="card">

                        <div class="card-header">
                            Add New Patients:
                        </div>
                        <div class="card-body">
                            <form id="docRegistrationForm">



                                <div class="form-group mt-2">
                                    <b> <label>Patient NIC</label></b>
                                    <input type="text" id="Nic" name="Nic" class="form-control" placeholder="Enter NIC">

                                </div>

                                <div class="form-group mt-2">

                                    <b><label>Email</label></b>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email">
                                </div>

                                <div class="form-group mt-2">

                                    <b><label>First Name</label></b>
                                    <input type="text" id="FirstName" name="FirstName" class="form-control" placeholder="Enter First Name">
                                    <b><label>Last Name</label></b>
                                    <input type="text" id="LastName" name="LastName" class="form-control" placeholder="Enter Last Name">

                                </div>



                                <div class="form-group mt-2">
                                    <b> <label>Telephone number</label></b>
                                    <input type="text" id="Tele" name="Tele" class="form-control" placeholder="Enter telephone  number">

                                </div>

                                <div class="form-group mt-2">
                                    <b><label>Date Of Birth</label></b>
                                    <input type="date" id="DOB" name="DOB" class="form-control" placeholder="Enter Date of birth">

                                </div>

                                <div class="form-group mt-2">
                                    <b><label>Old</label></b>
                                    <input type="text" id="Old" name="Old" class="form-control" placeholder="Enter Old">

                                </div>

                                <div class="form-group mt-2">
                                    <b><label>Patient Address</label></b>
                                    <input type="text" id="Adress" name="Adress" class="form-control" placeholder="Enter Address">


                                </div>



                                <div class="form-group mt-2">
                                    <b><label>Gender</label></b>
                                    <br> <label>Male </label><input type="radio" id="male" name="MF" value="male">
                                    <label>Female </label><input type="radio" id="female" name="MF" value="female">

                                </div>
                                <div class="form-group mt-2">
                                    <b> <label>Martual Statutes</label></b><br>

                                    <label>Single</label><input type="radio" id="single" name="SM" value="single">
                                    <label>Maried</label><input type="radio" id="maried" name="SM" value="maried">

                                </div>


                                <div class="form-group mt-2">
                                    <input type="submit" class="btn btn-success" id="btnSave">
                                    <input type="reset" class="btn btn-outline-warning">

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div id="table"></div>



            </div>

        </div>




</body>
<script type="text/javascript" src="../../../js/Doc.js"> 
</script>
<script> $(document).ready(function() {
    $('#medi').click(function() {
        $('#load').load('patients/MedicalReport.php');
    });
});
 
 $(document).ready(function() {
    $('#appoint').click(function() {
        $('#load').load('CheckAppoinment.php');
    });
});

</script>
<!-- send new patient data using ajax -->
<script>
    $('#btnSave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url:"../../route/patieant/register.php",
            type:"post",
            data:$('#docRegistrationForm').serialize(),
            success: function(res) {
                alert("Record added succesfully");
                location.reload();
            }
        })
    })

   
</script>
</html>