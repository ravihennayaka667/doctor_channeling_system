
   
    <div class="card" style="width:75%;margin-left:10%;margin-right:10%;background-color:rgba(255,255,255, 0.4)">
        <h5 class="card-header" style="background-color:rgba(19, 84, 122);color:white;">Add Doctors</h5>
        <div class="card-body">
            <form id="docRegistration" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <b> <label>Doctor ID</label></b>
                    <input type="text" id="Nic" name="dID" class="form-control" placeholder="Enter NIC" style="background-color:#bef9f7">

                </div>

                <div class="form-group mt-2">

                    <b><label>Name</label></b>
                    <input type="text" id="Name" name="FirstName" class="form-control" placeholder="Enter First Name" style="background-color:#bef9f7;">

                </div>



                <div class="form-group mt-2">
                    <b> <label>Telephone number</label></b>
                    <input type="text" id="Tele" name="Tele" class="form-control" placeholder="Enter telephone  number" style="background-color:#bef9f7;">

                </div>

                <div class="form-group mt-2">
                    <b><label>Specility</label></b>
                    <input type="text" name="spc" class="form-control" placeholder="Enter Doctor Speciality" style="background-color:#bef9f7;">

                </div>



                <div class="form-group mt-2">
                    <b><label>Email</label></b>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" style="background-color:#bef9f7;">


                </div>

                <br>
               

                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-success" name="upload" id="btnSave">
                    <input type="reset" class="btn btn-warning">

                </div>

            </form>

        </div>
</body>
<script>
    $('#btnSave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../route/admin/DocAdd.php",
            type: "post",
            data: $('#docRegistration').serialize(),
            success: function(res) {
                alert(res);
                location.reload();
            }
        })
    })
</script>

</html>