<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container" style="width:60%; height:95%; padding-top:30px;">
        <div class="card">

            <div class="card-header">
                Add medical report
            </div>
            <div class="card-body">

                <form id="MedicalReport">
                    <div class="form-row">
                        <div class="form-group  ">
                            <label for="nic">NIC Number </label>
                            <input type="text" class="form-control" name="Nic" id="nic" placeholder="Enter NIC">
                        </div>

                        <div class="form-group">
                            <label for="inputEmail4">Full Name </label>
                            <input type="name" class="form-control" name="name" id="name" placeholder="name">
                        </div>


                        <div class="form-group  ">
                            <label for="inputPhoneNumber">Input Phone Number</label>
                            <input type="tel" class="form-control" name="tele" id="number" placeholder="Number">

                        </div>



                        <div class="form-group  ">
                            <label for="companay"> Company Name:</label>
                            <input type="text" class="form-control" name="company" id="company" placeholder="company name">
                        </div>



                        <div class="form-group  ">
                            <label for="companay"> Treatments</label>
                            <input type="text" class="form-control" name="treatments" id="treatments" placeholder="treatments">
                     </div>


                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="problem">Rest date from:</label><br>
                                <input type="date" class="form-control " name="Datefrom">

                            </div>
                            <br>
                           
                            <div class="form-group col-md-4">
                                <label for="problem">Rest date to:</label><br>
                                <input type="date" class="form-control " name="dateTo">

                            </div>
                        </div>
<br>
                        <div class="form-group  ">
                            <label> Doctor name :</label><br>
                            <select name="dname" style="width: 80%;">
                                <option value="Dr. V G Abeywickrama">Dr. V G Abeywickrama</option>
                                <option value="Dr. Asanka Nugaliyadde">Dr. Asanka Nugaliyadde</option>
                                <option value="Dr. Thushari Wanigarathna">Dr. Thushari Wanigarathna</option>
                                <option value="Dr. Kapila Dharmasena">Dr. Kapila Dharmasena</option>
                                <option value="Dr. M Sumanathissa">Dr. M Sumanathissa</option>
                                

                            </select>
                            <br>
                        </div>

                        <div class="form-group  ">
                            <label for="companay">Experiance:</label>
                            <input type="text" class="form-control" name="experiance" id="experiance" placeholder="doctor Experiance">
                        </div>

                        <div class="form-group  ">
                            <label for="companay"> Speciality: </label>
                            <input type="text" class="form-control" name="speciality" id="speciality" placeholder="speciality">
                        </div>

                    </div>





                    <br> <button type="submit" class="btn btn-primary" id="btnSave">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>

    </div>

</body>

<!-- send medical report data to route using ajax-->
<script>
    $('#btnSave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../route/patieant/addMedi.php",
            type: "post",
            data: $('#MedicalReport').serialize(),
            success: function(res) {
                alert(res);
               // location.reload();
            }
        })
    })
</script>

</html>