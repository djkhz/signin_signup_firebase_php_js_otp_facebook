<?php
session_start();
require 'dbconfig.php';
$result = '';
if(($_GET["logout"]=1) AND (isset($_SESSION['id']))){
                        session_destroy();
                        /* If user logout */
                    $result='<div class="alert alert-success">You Have Been Logged Out</div>';}

if(isset($_POST['submit'])){
    if(isset($_SESSION['result'])){
    session_destroy();}

    $email  =   $_POST['email'];
    $password  =   $_POST['password'];
    $fetchdata = $database->getReference('Users')->getValue();
    
    
    
    foreach($fetchdata as $key => $value)
    {
      if($email == ($value['email'])){
          if($password == ($value['password'])){
              $_SESSION['id']=$key;
              header('location:home.php');
          }else{
              $result='<div class="alert alert-danger">Password not match..</div>';
                 
      }
          
          
      }else{
           $result='<div class="alert alert-danger">Email Not Match..</div>';
     
    }
    
                    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign-Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/1000tra.png" rel="icon">
  <link href="assets/img/logotrans.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
  <style>
    /*kerrili buttons*/
.kbuttons{
  background: #eb5d1e;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
     
    
}
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">
        <span><img src="assets/img/1000tra.png" alt="Kerrili" class="img-fluid"> KERRILI</span>
        </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started"><a href="sign.php">Get Started</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sign-In Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Sign-In Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container-fluid h-100">
      <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
            <!-- Bg KERRILI Logo -->
            <div class="lavalite-bg" style="background-image: url('assets/img/bg6.png'); height: 100%;">
                 <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
            <div class="authentication-form mx-auto">
            <!-- Head Pic -->
            <div class="logo-centered">
            <center> <a href="index.php"><img src="assets/img/1080.png" style="border-radius: 20px" alt="" width="50px" height="50px"></a></center>
                            </div>
                            
                            
        <!-- Titles -->                    
        <h3 style="margin-right: 20px;margin-left: 20px">Welcome Back to KERRILI ?</h3>
        <p style="margin-right: 20px;margin-left: 20px">Happy to see you again!</p>
        <!-- alert --> 
         <?php if(isset($result)){echo $result;}
                if(isset($_SESSION['result'])){echo $_SESSION['result'];}?>                                  
                          
            <form method="post" style="margin-right: 20px;margin-left: 20px">
    
     <!-- Email Button -->
     <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope">&nbsp;</i></span>
      </div>
      <input type="email" class="form-control" placeholder="Email" required="" name="email">
    </div>
     
     <!-- Password Button -->         
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-unlock">&nbsp;</i></span>
      </div>
      <input type="password" class="form-control" placeholder="Password" required="" name="password" minlength="6">
    </div>
               
               
              
                               
                     
            <!-- Submit Button -->                   
                              
        <div class="sign-btn text-center ">
                     <input  type="submit" class="btn-get-started scrollto kbuttons" value="LogIn" style="height: 40px;margin-bottom: 10px;width:300px" name="submit">
                                    
                                </div>
                              
                               
                
                                  
<!-- Social Media buttons -->                                                                      
<div class="row">
   
   
    <div class="col">
      <div class="sign-btn float-right">
        <a class="btn btn-primary" style="background-color: #3b5998" href="#!" role="button" id="facebook" onclick="signinDB()" 
  >&nbsp;&nbsp;<i class="fab fa-facebook-f">&nbsp;&nbsp;Faceook</i
>&nbsp;&nbsp;</a>
                                    
  </div>
    </div>
    
    
    <div class="col">
      <div class="sign-btn float-left ">
         <a class="btn btn-primary" style="background-color: #dd4b39" href="#!" role="button"
  >&nbsp;&nbsp;<i class="fab fa-google">&nbsp;&nbsp;Google</i
>&nbsp;&nbsp;</a>       
                                    
</div>
    </div>        
              
            </div>
        
                            </form><br>
        <div class="register">
             <p style="margin-right: 20px;margin-left: 20px">Don't have an account?<a href="sign.php">Sign-Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
        
            
       
       
       

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
            <h3>Ninestars</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-auth.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  // var firebaseConfig = {
  //   apiKey: "AIzaSyDRgwuDAa9B8kotsxPqGR0nb6UGMF0kVt0",
  //   authDomain: "kerrili.firebaseapp.com",
  //   databaseURL: "https://kerrili-default-rtdb.firebaseio.com",
  //   projectId: "kerrili",
  //   storageBucket: "kerrili.appspot.com",
  //   messagingSenderId: "166943417273",
  //   appId: "1:166943417273:web:d414e1be4af985c5f58c68",
  //   measurementId: "G-RF2WX2KS33"
  // };
  var firebaseConfig = {
    apiKey: "AIzaSyDuFBysliGA3WfKCX6w8w_MvmlSsAwFOoA",
  authDomain: "authentication-php.firebaseapp.com",
  projectId: "authentication-php",
  storageBucket: "authentication-php.appspot.com",
  messagingSenderId: "416197084692",
  appId: "1:416197084692:web:54a8497635e04ef0d58901",
  measurementId: "G-6RQR0ZMTQX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="fb-login.js" type="text/javascript"></script>
</body>

</html>
