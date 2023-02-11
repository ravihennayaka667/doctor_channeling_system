<!DOCTYPE html>
<html lang="en">

<head>

  <title>Meta Doc</title>

  <!--Link Boostrap css-->
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css">

  <!--Link jquery and javascript-->
  <script src="../../JS/Jquirey.js"></script>
  <script src="../../JS/bootstrap.min.js"></script>

  <!--Link Favicon-->

  <link rel="icon" href="../..//images/bp-01.png" type="image/x-icon">

  <style>
    /*Navbar padding*/

    .navbar a {
      padding: 05px;
    }

    .bg-custom {
      background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
    }

    /*Button effect*/

    .btn {
      background-color: dark;
      opacity: 1;
      transition: 0.3s;
    }

    .btn:hover {
      opacity: 0.6
    }


    /*Style the homepage rectangle */

    .rectangle {
      height: 1080px;
      width: 1903px;
      background-image: linear-gradient(#faf9f9, #b6e2e2);
    }

    /*Image Position*/

    

    .left {
      float: left;
      width: 800px;
      margin-top: 270px;

    }

    .position-relative{
      padding: 10px;
      padding-left: 500px;
    }

    /* Welcome Text style & position*/
    P {
      color: #248f8f;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-shadow: 2px 2px 5px #8c8c8c;
      font-size: 45px;
      font-weight: bold;
    }

    .right {
      float: right;
      padding:50px;
      width: 1000px;
      height: 0px;
      margin-top: 200px;
      margin-right: 100px;
      text-align: center;
    
      
    }

    /*Introduction*/
    P1{
      float: right;
      width: 1000px;
      font-size: 20px;
      font-family:'Courier New', Courier, monospace;
      color: #13547a;
      padding-left: 09px;
      padding-bottom: 100px;
      margin-right: 100px;
      font-weight: bold;
      line-height: 22px;
      text-align: center;
      
    }

    

    h1{
      float: left;
      color: white;
      text-align: left;
      padding-right:px;
    }

  </style>

</head>

<body>


  <nav class="navbar navbar-dark bg-custom">
    <a class="navbar-brand" href="#">
      <img src="bp-02.png" alt="" width="70px" height="40px" class="d-inline-block align-text-top">
      
    </a>
    <h1>Meta Doc</h2>

    <!--Buttons-->

    <div class="position-relative">
      <button type="button" class="btn btn-dark">Sign In</button>
      <button type="button" class="btn btn-secondary">Sign Up Free</button>
    </div>
  </nav>




  <!--Div and welcome image-->

  <div class="rectangle" class="image wrapped">

    <!--Welcome Text-->
    <P class="right">Hello! Welcome to Meta Doc</P>

    <img src="welcome.png" alt="welcome" class="left">

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

  
</body>

</html>