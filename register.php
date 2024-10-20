<?php
  session_start();
  if(isset($_SESSION['user'])){
    header('location:secured/users/dashboard.php');
  }
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Calculate your Electric Vehicle Charging Cost, Time and Speed">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fontawesome icons Links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!----- Favicon-------->
    <link rel="icon" href="img/favicon.png" />

    <!-- Registration & Login page -->
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Theme style -->
    <link rel="stylesheet" href="css/homepage-theme.css">

    <!-- Frontend Nav Style ------>
    <link rel="stylesheet" href="css/navbar.css">

    <!-- admin portal style -->
    <link rel="stylesheet" href="css/calculator-panel.css">
    
    <!---- Fontend Responsive Style ---->
    <link rel="stylesheet" href="css/footer-for-mobile.css">

    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> ->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

    <!---- Screen reader acess js -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;0,800;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    
    <title>Electric Vehicle Charging Calculator</title>
    
<style>
    .mt-do {
  margin-top: 70px;
}

.logo {
  width: 40%;
}

</style> 
</head>

<body>
    <div class="header-fixed">
        <div class="container-fluid pl-4 pr-4 pt-2 pb-2">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-start align-items-md-center flex-column flex-md-row justify-content-between">
                        <nav>
                            <a id="resp-menu" class="responsive-menu" href="#" onclick="meutoggle(this)">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                                <!-- <i class="fa fa-reorder"></i> -->
                            </a>
                            <ul class="menu mb-0 mt-md-0 mt-3 pl-0">
                                <li>
                                    <a href='index.php'>Home </a>
                                </li>
                                <li><a href='#'>EV - Overview <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href='benefits-of-ev.php'>Benefits of EV</a></li>
                                        <li><a href='limitations-of-ev.php'>EV Common Myths</a></li>
                                        <li><a href='types-of-ev.php'>Types of EV</a></li>
                                        <li><a href='ev-incentives.php'>EV Incentives</a></li>
                                    </ul>
                                </li>
                                <li><a href='#'>Calculator <i class="fa fa-caret-down " aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href='login.php'>Charging Cost</a></li>
                                        <li><a href='login.php'>Charging Time</a>
                                        </li>
                                        <li><a href='login.php'>Charging Speed</a></li>
                                    </ul>
                                </li>
                                <li><a href='#'>Support <i class="fa fa-caret-down " aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href='contact.php'>Contact</a></li>
                                        <li><a href='faqs.php'>FAQs</a></li>
                                    </ul>
                                </li>
                                <li><a href='#'>Account <i class="fa fa-caret-down " aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href='register.php'>Create Account</a></li>
                                        <li><a href='login.php'>Login</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div>
                            <a href="index.php" class="d-flex align-items-center">
                                <img src="img/logo.png" class="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Page Section starts here-->
<section>
    <div class="tools-page-banner">
        <div class="container mt-do">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2 class="about-us-title">Sign up to start using this tool</h2>
                </div>
            </div>
        </div>
    </div>

    <!--Registration Body Starts-->
    <main class="container"><br />      
      <h3><i class="fa fa-lock"></i>&nbsp; Create Your Account</h3>
      <div class="reg-container"><br />
        <div class="grid-container-reg1">
          <a href="https://facebook.com"><div class="rate1"><span>f</span><button style="border:none; color:white; background-color:#35589c;"> &nbsp;Facebook</button></div></a>
          
          <a href="https://gmail.com"><div class="rate2"> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg><button style="background:#2196F3; color:white;border:none;">&nbsp; Sign in with Google</button></div></a>
        </div> <br />
        <p style="color:#35589c;">&#151;&#151;&#151;&#151;&#151; OR &#151;&#151;&#151;&#151;&#151;</p>

        <form action="" method="post" id="register-form">
          
          <div id="regAlert"></div>
          
          <span class="material-symbols-outlined icon-style">person</span>
          <input type="text" name="fname" class="input-reg" placeholder="Fullname" /> <br /><br />

          <span class="material-symbols-outlined icon-style">phone</span>
          <input type="text" name="phone" class="input-reg" placeholder="+1(208)000-0000" /> <br /><br />

          <span class="material-symbols-outlined icon-style">email</span>
          <input type="text" name="email" class="input-reg" placeholder="E-mail" /> <br /><br />

          <span class="material-symbols-outlined icon-style">lock</span> 
          <input type="password" name="password" id="rpassword" class="input-reg" placeholder="Password" /> <br /><br />

          <span class="material-symbols-outlined icon-style">lock</span> 
          <input type="password" name="cpassword" id="cpassword" class="input-reg" placeholder="Confirm Password" /> 

          <div id="passError" class="text-danger font-weight-bold"></div><br />

          <span class="material-symbols-outlined icon-style">airport_shuttle</span> 
          <input type="text" name="model" class="input-reg" placeholder="Your Vehicle Model (e.g Tesla)" /> <br /><br />
          
          <span class="material-symbols-outlined icon-style">airport_shuttle</span>
          <input type="number" name="rangee" step="0.01" class="input-reg" placeholder="Your Vehicle Range (in Km or mile)" /> <br /><br />

          <span class="material-symbols-outlined icon-style" >airport_shuttle</span>
          <input type="number" name="capacity" class="input-reg" step="0.01" placeholder="Your vehicle Battery Capacity (in kWh)" /> <br /><br />

          <div style="display:none;">
            <span class="material-symbols-outlined icon-style">account_balance_wallet</span>
            <input type="text" name="balance" class="input-reg" value="0.00" /> <br /><br />
          </div>

          <div class="grid-reg-down">
            <div style="text-align: left;">By clicking Sign Up you agree that you have read and accepted the <span style="color: rgb(248, 122, 122);"> Terms and Conditions </span>  and <span style="color: rgb(248, 122, 122);">Privacy Policy</span> </div>

            <div><button type="submit" class="butt" id="register-btn">Sign Up &#8594; </button></div>
          </div>   
        </form> 
      </div><br>

      <p style="text-align: center;">Already registered <a href="login.php" style="text-decoration: none; color:rgb(248, 122, 122);">click here</a> to login.</p>
    </main><br><br>

    <div class="container-fluid ecpowerd_bg">
    <div class="container">
        <div class="row align-items-end">         
            <div class="col-md-12"></div>
        </div>
    </div>
<div class="container-fluid footer_bg">
    <div class="container">
        <div class="d-flex flex-wrap w-100">
            <div class="footer-col">
                <h3 class="footer-head">Important Links</h3>
                <div class="d-flex flex-column">
                    <a href="#" class="footer_links">EV Overview</a>
                    <a href="benefits-of-ev.php" class="footer_links">Benefits of EV</a>
                    <a href="limitations-of-ev.php" class="footer_links">EV Common Myths</a>
                    <a href="types-of-ev.php" class="footer_links">Types of EV</a>
                    <a href="ev-incentives.php" class="footer_links">EV Incentives</a>
                </div>
            </div>
            <div class="footer-col">
                <div class="d-flex flex-column footer_box">
                    <a href="#" class="footer_links">Calculator</a>
                    <a href="login.php" class="footer_links">Charging Cost</a>
                    <a href="login.php" class="footer_links">Charging Time</a>
                    <a href="login.php" class="footer_links">Charging Speed</a>

                </div>
            </div>
            <div class="footer-col border-rgt">
                <div class="d-flex flex-column footer_box">
                    <a href="#" class="footer_links">Account</a>
                    <a href="register.php" class="footer_links">Create Account</a>
                    <a href="login.php" class="footer_links">Login</a>
                    <p></p>
                    <a href="index.php"><p class="mb-0 footer_contact" style="text-align:center;"> &nbsp; &nbsp; <img src="img/logo1.png" width="100vw"></p></a>
                </div>
            </div>
            <div class="footer-col-large">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="pl-0 ml-md-3">
                            <h3 class="footer-head">Contact Us</h3>
                            <a href="mailto:info@lexioniqsolutions.tech" class="footer_contact"> <i class="fa fa-envelope pr-2" aria-hidden="true"></i>
                            info@lexioniqsolutions.tech</a>
                        </div>
                        <div class="d-flex align-items-center pl-3">
                            <a href="#" class="footer-social-icons"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="footer-social-icons"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="footer-social-icons"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        </div>
                        <div>
                            <h3 class="footer-head">Visitors Count</h3>
                            <p class="mb-0 footer_contact">Total Users: 420,784</p>
                        </div>
                   
                </div>
            </div>
        </div>
     
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="footer_copyright_txt">&copy; A joint initiative between US and UK Government</p>
        </div>
    </div>
</div>
<script src="js/mobile-navbar.js"></script>

 <!-- Register Ajax Request -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
           $("#register-btn").click(function(e){
           if($("#register-form")[0].checkValidity()){
             e.preventDefault();
             $("#register-btn").val('Please Wait...');
             if($("#rpassword").val() != $("#cpassword").val()){
               $("#passError").text('  * Password did not match !!');
               $("#register-btn").val('Sign Up');
             }
             else{
                $("#passError").text('');
                $.ajax({
                    url: 'secured/users/configurations/action.php',
                    method: 'post',
                    data: $("#register-form").serialize()+'&action=register',
                    success:function(response){
                        $("#register-btn").val('Sign Up');
                      if(response === 'register'){
                        window.location = 'secured/users/dashboard.php';
                      }
                      else{
                        $("#regAlert").php(response);
                      }
                    }
                });
             }
           }
           });
        });
    </script>
</body>

</html>