<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SureMyCab - Easy User Friendly Online Cab Booking Service">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Sure My Cab - Online Cab | Taxi Booking Service </title> 
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/baguetteBox.min.css">
    <link rel="stylesheet" href="css/rangeslider.css">
    <link rel="stylesheet" href="css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
  <style>
    
    .standard-tab .btn.active {
    background-color: darkorange;
    color: #ffffff;}
    .minimal-tab .btn {
    padding: 5px;}
    .minimal-tab .btn.active {
    color: white;
    background-color: darkorange;}
    .card-body {
    padding: 0rem;}
    .standard-tab .nav {
    border: none;  
    }
    
    .sidenav-nav li a:hover {  color:darkorange;}
    .sidenav-profile .user-profile {width: 210px; height: auto;}
    .sidenav-profile {background-color: whitesmoke;}
    .sidenav-profile .user-info span {color: black;}
    
    
    .header-area {height:55px;}
    .header-content {height: 55px;}
    .header-content .logo-wrapper a img {    max-height: 32px;}
  </style>
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner-grow text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- # Paste your Header Content from here -->
        <!-- # Header Five Layout -->
        <!-- # Copy the code from here ... -->
        <!-- Header Content -->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
          <!-- Logo Wrapper -->
          <div class="logo-wrapper"><a href="index.php"><img src="img/core-img/logo.png" alt=""></a></div>
          <!-- Navbar Toggler -->
          <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
        <!-- # Header Five Layout End -->
      </div>
    </div>
    <!-- # Sidenav Left -->
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
      <button class="btn-close btn-close-black text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <div class="offcanvas-body p-0">
        <!-- Side Nav Wrapper -->
        <div class="sidenav-wrapper">
          <!-- Sidenav Profile -->
          <div class="sidenav-profile bg-gradient">
            <div class="sidenav-style1"></div>
            <!-- User Thumbnail -->
            <div class="user-profile"><img src="img/core-img/logo.png" alt="SureMyCab"></div>
            <!-- User Info -->
            <div class="user-info">
              <h6 class="user-name mb-0"></h6><span>Online Cab Booking Service</span>
            </div>
          </div>
          <!-- Sidenav Nav -->
          <ul class="sidenav-nav ps-0">
            <li><a href="index.php"><i class="bi bi-house-door"></i>Home</a></li>
            <!-- <li><a href="elements.php"><i class="bi bi-folder2-open"></i>Elemts<span class="badge bg-danger rounded-pill ms-2">220+</span></a></li> -->
            <!-- <li><a href="pages.php"><i class="bi bi-collection"></i>Pages<span class="badge bg-success rounded-pill ms-2">100+</span></a></li> -->
            <li><a href="about.php"><i class="bi bi-info-square"></i>About Us</a></li>
            <li><a href="sale.php"><i class="bi bi-gift"></i>Sale</a></li>
            <li><a href="routes.php"><i class="bi bi-map"></i>Routes</a></li>
            <li><a href="contact.php"><i class="bi bi-person-lines-fill"></i>Contact Us</a></li>
            <li><a href="policy.php"><i class="bi bi-shield-check"></i>Privacy Policy</a></li>
            <li><a href="terms.php"><i class="bi bi-file-earmark-lock"></i>Terms & Conditions</a></li>
              
            
            
          </ul>
          <!-- Social Info -->
          <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-linkedin"></i></a></div>
          <!-- Copyright Info -->
          <div class="copyright-info">
            <p>2021 &copy; Made by<a href="https://7cloudinfotech.com/">7Cloud Infotech</a></p>
          </div>
        </div>
      </div>
    </div>
    