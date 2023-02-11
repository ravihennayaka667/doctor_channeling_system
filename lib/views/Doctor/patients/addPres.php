
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" style="width:95%; height:95%; padding-top:30px">
    <div class="card">

        <div class="card-header">
            Add New Patients:
        </div>
        <div class="card-body">
            <form  id="Prescription">



                <div class="form-group mt-2">
                    <b> <label>Patient NIC</label></b>
                    <input type="text" id="Nic" name="nic" class="form-control" placeholder="Enter Patient NIC">

                </div>

                <div class="form-group mt-2">
                    <b> <label>Patient ID</label></b>
                    <input type="text" id="id" name="id" class="form-control" placeholder="Enter Patient ID">

                </div>

                <div class="form-group mt-2">
                    <b> <label>Date </label></b>
                    <input type="date" id="date" name="date" class="form-control" placeholder="Date">

                </div>

                <div class="form-group mt-2">
                    <b> <label>Prescription</label></b>
                    <input type="text" id="id" name="pr" class="form-control" placeholder="Enter prescription">

                </div>


        

                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-success" id="btnSave">
                    <input type="reset" class="btn btn-outline-warning">

                </div>

            </form>
        </div>
    </div>
</div>


</body>
<script>
    $('#btnSave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../route/patieant/addPress.php",
            type: "post",
            data: $('#Prescription').serialize(),
            success: function(res) {
                alert(res);
               // location.reload();
            }
        })
    })
</script>
</html>