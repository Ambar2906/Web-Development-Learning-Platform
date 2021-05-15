<?php include ('uploadfileLogic.php'); ?>
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
  <style>
    #neha
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
     #btn1
  {
  background: #007bff;
  border: 2px solid #007bff;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-size: 25px;
  font-weight: 600;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 0 20px 20px 0;
  color: #fff;
  
}

  #btn1:hover
  {
    background: brown;
    border-color: brown;
    color: #fff;
  }
  table {
  width: 20%;
  border-collapse: collapse;
  color: #3949ab;
  background-color: #b2ebf2;
  margin-left: 5%;
}

table, td, th {
  border: 2px solid black;
  padding: 10px;
  font-family: "Times New Roman", Times, serif;
  letter-spacing: 1px;
  text-align: centre;
  font-size:16px;
  overflow: hidden;
    
}
tr:hover {
  
  text-shadow: 1px 1px red;
  background-color: #80deea ;
  color: red;
  font-size:20px;
}

th 
{
  text-align: centre;
  font-size:20px;
  height: 20px;
  font-family: "Times New Roman", Times, serif;
  color: green;
  text-shadow: 2px 2px black;
  background-color: #4CAF50;
  color: white;
  
}
#img_div{
   	width: 100px;
      height: 100px;
   	padding: 5px;
   	margin: 15px ;
   	
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   #img1{
   	float: left;
   	margin: 5px;
   	width: 100px;
   	height: 100px;
   }
   
  
  </style>

  
</head>
<body >
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
              <li><a href="videos/addvideo.php">Add video</a></li>
              <li><a href="books/addbook.php">Add book</a></li>
            </ul>
          </li>
          <li><a href="../home/contact.php">Contact Us</a></li>
         
         
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <main id="main">
  <div class="about-bg">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
             <div class="abouttitle">
                <h2> Get Popular Web development books </h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--Books -->
 <div class="Books">
    <div class="container">
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="titlepage">
                <span> Come and search books  which you want and share your feedback with us whether <br> you liked a book collection or not .</span> 

                <div class="alert alert-info alert-dismissible fade show" role="alert"><strong><a href="../home/contact.php">Kindly Submit yours feedback & queries!</a></strong> <a href="../videos/index.php">Check courese for Full Stack developer !</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                </div>
             </div>
          </div>
       </div>
       <div class="row box">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
             <div class="book-box">
                <figure><img src="img/book-1.jpg" alt="img"/></figure>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="book-box">
                <figure><img src="img/book-2.jpg" alt="img"/></figure>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
             <div class="book-box">
                <figure><img src="img/book-1.jpg" alt="img"/></figure>
             </div>
          </div>
          <div class="col-md-6 offset-md-3">
             <p>Here you will get all the beginner,intermediate and more advance level in depth all kinds of book related to Full Stack Developer.</p>
          </div>
          <ul class="technologies list-inline Center" ">
          <li class="list-inline-item" ><img src="img//logo-html5.svg" alt="HTML5" ></li>
          <li class="list-inline-item" ><img src="img//logo-css3.svg" alt="CSS3" ></li>
          <li class="list-inline-item"><img src="img//logo-bootstrap.svg" alt="Bootstrap" ></li>
          <li class="list-inline-item"><img src="img//logo-sass.svg" alt="Sass" ></li>
          <li class="list-inline-item" ><img src="img//logo-jquery.svg" alt="jQuery" ></li>
          <li class="list-inline-item"><img src="img/icons8-angularjs-48.png" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img//php-ar21.svg" alt="Sass"></li>
          <li class="list-inline-item"><img src="img//nodejs-ar21.svg" alt="Sass"></li>
          <li class="list-inline-item"><img src="img//icons8-javascript.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img//icons8-react-native.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img/icons8-vue-js.svg" alt="jQuery"></li>
          <li class="list-inline-item"><img src="img/icons8-python.svg" alt="jQuery"></li>
         </ul>
       </div>
       <div class="container">
          <div class="row">
             <div class="col-md-12">
             <div class="read-more">
             <form action="" method="post" enctype="multipart/form-data">
             <input class="form-control form-control-lg" name="query" id="neha" type="search" placeholder="enter book name" aria-label=".form-control-lg example" style="padding:30px;">
             <br>
             <input type="submit" id="btn1" name="submit1"  value="search books" class="btn btn-default red">
             </form>
            </div>
             </div>
          </div>
       </div>
       <?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
$result = mysqli_query($db, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_POST['submit1'])) {
$query=$_REQUEST["query"];
$selectquery= "select * from addbook where (name like '%$query%' OR 
title like '%$query%' OR  author like '%$query%' OR 
edition like '%$query%' OR publication like '%$query%' OR 
recommendation like '%$query%' )  ";

$query= mysqli_query($db,$selectquery);
//$result=mysqli_fetch_array($query);
echo "<center><h2>List of Books</h2></center>";
   echo "<table >";
   echo "<thead>";
   echo "<tr>";
   echo "<th>Book</th>";
   echo "<th> name</th>";
   echo "<th>size</th>";
   echo "<th>title</th>";
   echo "<th>author</th>";
   echo "<th>edition</th>";
   echo "<th>publication</th>";
   echo "<th>recommendation</th>";
   echo "<th>viewBook</th>";
   echo "<th>downloadBook</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>"; 



while($result = mysqli_fetch_array($query)){
   
?>
<tr>
<td>
<?php 

echo "<div id='img_div'>";
      	echo "<img  src='".$result['imagepath']."' id='img1'   >";
      echo "</div>";
      ?>
</td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['size']; ?></td>
<td><?php echo $result['title']; ?></td>
<td><?php echo $result['author']; ?></td>
<td><?php echo $result['edition']; ?></td>
<td><?php echo $result['publication']; ?></td>
<td><?php echo $result['recommendation']; ?></td>
<td><a href="<?php echo $result['filepath']; ?>" target="_blank">View</a></td>
<td><a href="<?php echo $result['filepath']; ?>" download target="_blank" >Download</a></td>

</tr>
<?php
}
}

?>
</tbody>
</table>
    </div>
 </div>
<!-- end Books -->

 
 
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
  <script src="contactform/contactform.js"></script
</body>
</html>