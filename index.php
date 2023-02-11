<?php
include_once('lib/functions/userFunctions.php');

if (isset($_POST['btnLogin'])) {
  //now we need to call 
  $result = Authentication($_POST['userName'], $_POST['userPwd']);

  echo ($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Meta Doc</title>
  <!-- Link bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">

  <!-- Link jquery and Javascript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>

  <!--Link Favicon-->

  <link rel="icon" href="images/bp-01.png" type="image/x-icon">



</head>

<body>

  <?php
  include_once('layout/navbarIndex.php');
  ?>
  
    <div class="row">
      <div class="col-md-6">

        <div class="rectangle" class="image wrapped" id="loginBody" style="margin-top:1px;">
          <img src="images/welcome.png" alt="welcome" class="left">

          <!--Welcome Text-->


        </div>
      </div>
      <div class="col-md-6" style="padding-top:1px;text-align: center; position:absolute right top;
    top: 0;
    left: 0;">
        <P class="right">Hello! Welcome to Meta Doc</P>
        <!--Introduction-->
        <P1>We are the No. 01 online channelling website in Sri Lanka.
          We have island-wide connections with channel centres around the country and with doctors in the country.
          You can channel any doctor based on your speciality in any channel centre that is convenient for you.
          As you can channel a doctor from home, you can get medical preceptions and medical advice on this platform.
          If you are new to this website, you can sign up by giving your necessary information. When you sign up once,
          you don't need to sign up every time. You can build a user profile according to your needs. Our main purpose
          is to make it easy to do things like channel and handle their medical things through this website. You can easily
          check medical advice and payment receipts as well. Thank you.</P1>

      </div>

    </div>
  </div>
  </div>
  </div>
</body>

</html>