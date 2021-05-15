<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
  <meta content="" name="description">
  <title>selflearning sites</title>

  <!-- Favicons -->
  <link href="img/self.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  
  <style>
  .form-control
  {
  background: white;
  border: 1px solid black;
  color: black;
  font-family: "Montserrat", sans-serif;
  font-size: 15px;
  font-weight: 300;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 0 20px 20px 0;
  
}
  
  </style>
  
</head>
<body style="background: #bbdefb;" >
  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        
        <h1 class="text-light"><a href="#header"><span  style="text-transform: lowercase;"><img src="img/self.png" alt="" class="img-fluid" style="width: 50px;height:40px;  ">Webzilla</span></a></h1>
        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
      <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../index.php">About Us</a></li>
          <li><a href="../home/service.php">Services</a></li>
          <li><a href="../home/team.php">Team</a></li>
          <li><a href="../videos/index.php">Courses</a></li>
          <li class="drop-down"><a href="">Admin</a>
            <ul>
              <li><a href="../videos/addvideo.php">Add video</a></li>
              
              <li><a href="../books/addbook.php">Add book</a></li>
            </ul>
          </li>
          <li><a href="../home/contact.php">Contact Us</a></li>
          
         
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
    <main id="main">
      <!--==========================
      Contact Section
    ============================-->
    <section id="contact" >
        <div class="container-fluid">
        <main id="main">
          <div class="about-bg">
            <div class="container" >
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle" style="margin-top: 10px;">
                <h2>Contact Us</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
  

 
              <div class="section-header">
            <h3 style="margin-top: 20px; color:black;" >Get excited already? Reach Us! </h3>
          </div>
  
          <div class="row wow fadeInUp">
  
            <div class="col-lg-6">
              <div class="map mb-4 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
              </div>
            </div>

    
  
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-5 info">
                  <i class="ion-ios-location-outline"></i>
                  <p>A108 Adam Street, NY 535022</p>
                </div>
                <div class="col-md-4 info">
                  <i class="ion-ios-email-outline"></i>
                  <p>info@example.com</p>
                </div>
                <div class="col-md-3 info">
                  <i class="ion-ios-telephone-outline"></i>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
  
              <div class="form" >
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="doubtsubmit.php" method="post" role="form" class="contactForm" enctype="multipart/form-data" onsubmit="return validation()">
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name"  />
                      
                      <span id="fn1" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter Email !</span>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder=" Enter Your Email"  />
                      
                      <span id="fn2" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter Email !</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="phone number"  />
                    
                    <span id="fn3" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter Email !</span>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" id="message"  rows="5" data-rule="required"  placeholder="Enter Message"></textarea>
                    
                    <span id="fn4" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter Email !</span>
                  </div>
                  <div class="text-center"><button type="submit" name="submit" title="Send Message"   >Send Message</button></div>
                 
                </form>
              </div>
            </div>
  
          </div>
  
              </div>
            
      </section><!-- #contact -->
    
    </main>

 

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