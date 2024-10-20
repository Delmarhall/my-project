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

    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!---- Screen reader acess js ------>
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
