
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="css1/style.css" rel="stylesheet">
    <title>addbokk</title>
</head>
<body >
<header id="header" class="fixed-top">
    
      <div class="logo float-left">
      <h1 class="text-light"><a href="#header"><span  style="text-transform: lowercase;"><img src="img/self.png" alt="" class="img-fluid" style="width: 50px;height:40px;  ">Webzilla</span></a></h1>

        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
      <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../index.php">About Us</a></li>
          <li><a href="../home/service.php">Services</a></li>
          <li><a href="../home/portfolio.php">Portfolio</a></li>
          <li><a href="../home/team.php">Team</a></li>
          <li><a href="../videos/index.php">Courses</a></li>
          <li class="drop-down"><a href="">Admin</a>
            <ul>
              <li><a href="../videos/addvideo.php">add video</a></li>
              
                  <li><a href="../books/addbook.php">add book</a></li>
                  
              
            </ul>
          </li>
          <li><a href="../home/contact.php">Contact Us</a></li>
          
         
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  
  <!- ADD Books------------>
  <div class="card bg-dark text-white" style="margin-top: 95px;">
  
  <img src="img/about.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"><h1>Add Videos of different courses</h1></h5>
   
    <form action="addvideologic.php" method="post" name="form1" class="col-lg-4" enctype="multipart/form-data">
    <table class= "table table-bordered"  style="border-spacing: 5px;
  background-color: #0d47a1 ;border: 2px solid #f48fb1;">
  
  <tr>
<td> Enter Description  :</td>
<td> <input type="text" class="form-control form-control-lg"placeholder=" enter video name"  name="description" size="48"> </td>
</tr>

<tr>
<tr>
<td> Add Book File: </td>
<td> <input type="file" class="form-control form-control-lg" name="myfile"  size="48"> </td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" name="save" value="submit" class="btn btn-outline-warning" style="margin:6px;">
<input type="reset" value="Reset" class="btn btn-outline-warning" style="margin:8px;" >
</td>
</tr>
</table>
</form>


    
  </div>
</div>
</tbody>
</table>




<!- ADD Books--------!ends---->


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
  
  <!-- Template Main Javascript File -->
  <script src="js1/main.js"></script>
</body>
</html>