  <div class="container">
        <div class="col-md-12">
            <div class="card" style="background-color:rgba(255,255,255, 0.7);border-style:solid; border:size 1px; border-color:black">
                <div class="card-header" style="background-color:rgba(0,204,255, 0.3);">
                    Registration View
                </div>
                <div class="card-body">
                    <form id="registration">
                        <div class="form-group mt-2">
                            <label for="">Enter Your Name</label>
                            <input type="text" name="userName" id="userName" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Enter Your Email Address</label>
                            <input type="email" name="userEmail" id="userEmail" placeholder="Enter Your Email" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Please Enter Your Password</label>
                            <input type="password" name="userPwd" id="userPwd" placeholder="Enter Your Password" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Please Enter Your Phone Number</label>
                            <input type="text" name="userPhone" id="userPhone" placeholder="Enter Your Phone" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Please Enter Your NIC Number</label>
                            <input type="text" name="userNic" id="userNic" placeholder="Enter Your NIC" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" name="btnSave" id="btnsave" class="btn btn-primary btn-sm">
                            <input type="reset" class="btn btn-secondary btn-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>



<script>
    $('#btnsave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../route/users/registration.php",
            type: "post",
            data: $('#registration').serialize(),
            success: function(res) {
                alert(res);

            }
        })
    })
</script>

</html>