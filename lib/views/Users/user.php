<?php
session_start();
//include navBar.php
include_once('../../../layout/navBarUser.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Panel</title>

    <!-- link bootstap -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- link js  -->
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/DoctorPanel.js"></script>


</head>

<body style="background-color:rgba(173,216,230, 0.3);">
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12" id="loadView">
                <div class="row">
                    <div class="col-md-3" style="padding-bottom: 20px;">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="../../../images/patient.jpg" style="width:100% ;height:100%;">
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Meet My Doctor</h5>
                                <p class="card-text">
                                   there are have lot of experieanced doctors . lets find out make apoinment as you wish.
                                </p>
                                <a class="btn" style=" background-color: rgba(31, 97, 141 );color:aliceblue; width:250px" id="checkAvi">check availability</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-bottom: 20px;">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="../../../images/dr.jpg"  style="height:200x; width:100%">
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">E-Chaneling</h5>
                                <p class="card-text">
                                   In the busy world we dont have much time. Now you can make Appoinment with our doctor when you are free.
                                 </p>
                                <a href="#!" class="btn btn-primary" id="appointment" style=" background-color: rgba(31, 97, 141 ); width:250px">make appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" style="padding-bottom: 20px;height:380px;">
                        <div class="card" >
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="../../../images/download.jpg" class="img-fluid" style="height:100%; width:100%">
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Online Medical Prescription</h5>
                                <p class="card-text">
                                    You can get your medical prescription from this sytem using your Prescription ID


                                </p>
                                <a href="#" id="onlinePres" class="btn btn-primary" style=" background-color: rgba(31, 97, 141 ); width:250px">Get prescription</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3" style="padding-bottom: 20px; height: 500px; visibility:visible;animation-name:fadeInUp;">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="../../../images/medical-report-14117832.jpg" class="img-fluid">
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Online medical report</h5>
                                <p class="card-text">
                                    You can make appointment with our doctors.It is very easy and you can make schedule when you are free
                                </p>
                                <a class="btn btn-primary" id="mediReport" style=" background-color: rgba(31, 97, 141 ); width:250px">Get Report</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
    </div>

</body>
<?php
include_once('../../../layout/footer.php')

?>
<script>
    $(document).ready(function() {
        $('#checkAvi').click(function() {
            $('#loadView').load('FindDoc.php');
        });
    });

    $(document).ready(function() {
        $('#mediReport').click(function() {
            $('#loadView').load('medical_report.php');
        });
    });


    $(document).ready(function() {
        $('#appointment').click(function() {
            $('#loadView').load('Appointment.php');
        });
    });
    
    $(document).ready(function() {
        $('#onlinePres').click(function() {
            $('#loadView').load('onLinePrescription.php');
        });
    });

    $(document).ready(function() {
        $('#about').click(function() {
            $('#loadView').load('AboutUs.html');
        });
    });
    
</script>


</html>