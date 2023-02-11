<div class="col-md-12">
    <div class="card" style="background-color:rgba(255,255,255, 0.4);border-style:solid; border:size 1px; border-color:black">
        <div class="card-header" style="background-color:rgba(0,204,255, 0.5);">
            Registration View
        </div>
        <div class="card-body">
            <form  id="signupdata">
                <div class="form-group mt-2">
                    <label for="">Enter Your Name</label>
                    <input type="text" name="Name" id="userName" placeholder="Enter Your Name" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="">Enter Your Email Address</label>
                    <input type="email" name="Email" id="userEmail" placeholder="Enter Your Email" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="">Please Enter Your Password</label>
                    <input type="password" name="Pwd" id="userPwd" placeholder="Enter Your Password" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="">Please Enter Your Phone Number</label>
                    <input type="text" name="Phone" id="userPhone" placeholder="Enter Your Phone" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="">Please Enter Your NIC Number</label>
                    <input type="text" name="Nic" id="userNic" placeholder="Enter Your NIC" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="btnSave" id="btnsave" class="btn btn-primary btn-sm">
                    <input type="reset" class="btn btn-secondary btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- send sign up data from ajax-->
<script>
    $('#btnsave').click(function(e) {
        e.preventDefault();
        $.ajax({
            url:"lib/route/users/registration.php",
            type:"post",
            data:$('#signupdata').serialize(),
            success: function(res) {
             
               alert("Record added succesfully !. Please login now");
              location.reload();
            }
        })
    })