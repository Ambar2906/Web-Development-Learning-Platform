
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: SignIn.php');
  }

  if(!isset($_SESSION['username'])){
    header('Location: SignIn.php');
    exit;
}
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: SignIn.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>selflearning sites</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  
  
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    
    <div class="container">

      <div class="logo float-left">
        
        <h1 class="text-light"><a href="#header"><span  style="text-transform: lowercase;"><img src="img/favicon.png" alt="" class="img-fluid" style="width: 50px;height:65px;  ">Webzilla</span></a></h1>
        <!-- Uncomment below if you prefer to use  logo -->
      <!--- <a href="#intro" class="scrollto"><img src="img/self.png" alt="" class="img-fluid" ></a>-->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php">About Us</a></li>
          <li><a href="home/service.php">Services</a></li>
          <li><a href="home/team.php">Team</a></li>
          <li><a href="videos/index.php">Courses</a></li>
          <li class="drop-down"><a href="">Admin</a>
            <ul>
              <li><a href="videos/addvideo.php">Add video</a></li>
              <li><a href="books/addbook.php">Add book</a></li>
            </ul>
          </li>
          <li><a href="home/contact.php">Contact Us</a></li>
          <li>
          <!-- logged in user information -->
     <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="index.php?logout='1'" style="color: red;border-radius: 10px;font-size:17px;left:88%;position:absolute;border:red 1px solid;padding:6px;top:20%;">Logout</a> </p>
    <?php endif ?></li>
         
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
        <div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Kindly Submit yours feedback & queries!</strong>After visiting site to & us know about our services!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
      </div>

      <div class="intro-info">
        <h2>Your career in <br><span>web development</span><br> starts here...</h2>
        <h4 style="color: red;">The Beginner's Guide to Website Development</h4>
        <div>
          <a href="books/readbook.php" class="btn-get-started scrollto">Get Started</a>
          <a href="home/service.php" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
    <!-------Message for Login---------------->
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3 style="margin-top:8%;top:9%;position:absolute;font-size:20px;border:blue solid 2px;padding:5px;background: purple;color:white;left:43%;">
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
     <!-- logged in user information -->
     <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="margin-top:3%;border-radius: 19px;top:10%;position:absolute;font-size:20px;border:white solid 2px;padding:15px;background: purple;color:white;left:45%;"> Welcome <?php echo $_SESSION['username']; ?></p>
    <?php endif ?>
</div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3 style="color: #e91e63;" >About Us</h3>
          <p>WebZilla supports the act of teaching and learning on multiple platforms like online or offline via material downloads. We know things aren’t supposed to be devoured in a short time, you can always access our knowledge base from any device.</p>
        </header>
        <ul class="technologies list-inline Center">
        <li class="list-inline-item"><img src="img//logo-html5.svg" alt="HTML5"></li>
          <li class="list-inline-item"><img src="img//logo-css3.svg" alt="CSS3"></li>
          <li class="list-inline-item"><img src="img//logo-bootstrap.svg" alt="Bootstrap"></li>
          <li class="list-inline-item"><img src="img//logo-sass.svg" alt="Sass"></li>
          <li class="list-inline-item"><img src="img//php-ar21.svg" alt="Sass"></li>
          <li class="list-inline-item"><img src="img/icons8-angularjs-48.png" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img//nodejs-ar21.svg" alt="Sass"></li>
          <li class="list-inline-item"><img src="img//logo-jquery.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img//icons8-javascript.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img//icons8-react-native.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img/icons8-vue-js.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img/icons8-python.svg" alt="jQuery"></li> 
      </ul>

        <div class="about">
          <div class="container">
             <div class="row">
                
             </div>
             <div class="row border">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                   <div class="about-box">
                      <p><h1 style="color: #e65100 ;" >The best books for web development beginners</h1>
                      The number of learning methods has drastically changed between now and the time I first learned how to build websites. There’s YouTube, digital books for your mobile devices, blogs, and immersive online courses.<br> But I still believe that one of the best ways to learn web design for those of us who are self-taught is through reading books.
                      <br> Here we have shortlisted,organized all the upcoming technical skills books according to the users needs. </The>
                      </p>
                      <a href="books/readbook.php">Read Books</a>
                  
                      <div class="alert alert-primary alert-dismissible fade show" role="alert"><h5><strong>Hey watch Techanical  courses videos!</strong> Also Check full stack developer Courses!.</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                      <a href="books/addbook.php">Share your's Books</a>
                   </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                   <div class="about-box">
                      <figure><img src="img/about.png" alt="img" /></figure>
                   </div>
                </div>
             </div>
          </div>
       </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>We will respond to your queries as quickly as possible .</h4>
            <p>
              Our assistance always make it sure that every user's releted queries,doubts should be responded within 24 hours.
            </p>
            <p>
            If you are finding any difficulty for accessing our resources kindly contact us we will definitely try to solve that issues.
            Your feedback is enormously valuable to us.
               We promise to keep improving our system for better stability and flexibility.
            </p>
          </div>
        </div>
      </div>
    </section><!-- #about -->
 
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3> WebZilla</h3>
            <p>Read about the basics of web development, the process of creating a website, and additional resources for those who <br>
             want to learn more.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="home/service.php">Services</a></li>
              <li><a href="home/team.php">Team</a></li>
              <li><a href="videos/index.php">Courses</a></li>
              <li><a href="books/readbook.php">Books</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              Mumbai, NY 535022<br>
              Bandra (west)<br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> webzilla12@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
          
            <h4>Our Newsletter</h4>
            <p>Get latest updated alert about  Web Development Trends and the Latest Web Technology Stacks in 2020.</p>
            <form action="server.php" method="post"> 
            <input type="email" name="email" ><input type="submit" name="submit"  value="Subscribe">
            

            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright " style="color: black;">
        &copy; Copyright <strong>WebZilla</strong>. All Rights Reserved
      </div>
      <div class="credits ">
       
        Designed by <a href="">Designed by ANA team</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
