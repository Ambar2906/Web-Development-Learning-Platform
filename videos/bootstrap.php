
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>selflearning sites</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link href="img/self.png" rel="icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style.css" />
      <link href="css1/style.css" rel="stylesheet">

      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      
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
          <li><a href="home/team.php">Team</a></li>
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
         
         <!-- section -->
         <div class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2>Free Course</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-11 col-sm-4 col-md-4 col-lg-10 offset-lg-1">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img  src="images/getbootstrap-icon.svg" alt="#" />
                            
                         </div>
                         <div class="full">
                            <h4>BootStrap Course</h4>
                         </div>
                         <div class="full">
                           <p>Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites..</p>
                         </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <!-- end section -->

         
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><strong class="small theme_color"> Watch BOOTSTRAP COURSE</strong><br></h2>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="full center">
                        <a class="readmore_bt" href="#">BootStrap COURSE</a>
                      </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                     <?php
                     $db = mysqli_connect('localhost', 'root', '', 'registration');
                     $selectquery= "select * from addvideo where id=6";
                     $query= mysqli_query($db,$selectquery);
                     while($result = mysqli_fetch_array($query)){
                        $filepath = $result['filepath'];
                        
                        echo "<div >";
                        echo "<video src='".$filepath."' controls width='700px' height='440px' >";
                         echo "</div>";
                     }
                      ?>
                      <div>
                      </div>
                     
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->

         <!-- section -->
         <div class="section dark_blue_layout white_fonts layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="full">
                        <div class="heading_main text_align_left" style="margin-bottom: 0;">
                           <h2><strong class="small">Solve your doubts with our trained experts  </strong><br> Professors</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                     <div class="full">
                         <div class="form_section">
                            <form class="news_submit_form">
                              <fieldset>
                              <div class="full contact_form">
                              <form class="contact_form_inner" action="doubtsubmit.php" method="post">
                                    <fieldset>
                                       <div class="field">
                                          <input type="text" name="name" placeholder="Your name" />
                                       </div>
                                       <div class="field">
                                          <input type="email" name="email" placeholder="Email" />
                                       </div>
                                       <div class="field">
                                          <input type="text" name="subject" placeholder="Phone number" />
                                       </div>
                                       <div class="field">
                                          <textarea placeholder="Message" name="message"></textarea>
                                       </div>
                                       <div class="field center">
                                          <button class="margin-top_30" type="submit" name="submit" >SEND</button>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div> 
                              </fieldset>
                            </form>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->

         <!-- Start Footer -->
         <footer class="footer-box">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2></h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                         <p>Address<br><small>151 Ho Ba Kien Street,<br>Ward 15, District 10,<br>Ho Chi Minh City, Vietnam</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Phone<br><small>+84 126 922 0162<br>+84 905 333 333<br>Monday - Sunday<br>08:00 am - 05:00 pm</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>Email<br><small>support@sofbox.com<br>24 X 7 online support</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Social media</p>
                         <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>

         
         
         
         
         
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">© Copyrights 2019 design by <a href="https://html.design" title="Free Website Templates">Free Website Templates</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
      </script>
      
   </body>
</html>
