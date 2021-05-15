<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body style="background: url(img/intro-img.svg);" >
    <nav>
    <div class="navbar-fixed pink lighten-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="" class="brand-logo " style="position: absolute;left: 10%;font-size: 38px;font-family: cursive;" >Webzilla<i class=" material-icons  right" style="position: absolute; font-size: 35px; top: 4px;left: 95%;" >layers</i></a>
      </div>
    </div>
    </div>
  </nav>
  <form name="form1" action="SignUp.php" method="post" onsubmit="return validation()" >
    <?php include('errors.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col l7 offset-l3">
          <div class="card" style="margin-top: 7%; border: tomato 1px solid;">
            <div class="card-action">
              <h3 >SignUp  <i class=" medium material-icons left">person</i></h3>
            </div>
            <div class="card-content">
              
              <div class="input-field" >
                <input type="email"   id="email" name="email" value="<?php echo $email; ?>">
                <label for="email1" id="EMAIL" style="font-size: large;"> <i class=" small material-icons">email</i>Email</label>
                <span id="fn3" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter Email !</span>
                </div>
                <br>
                <div class="input-field" >
                  <input type="text"  id="u_name" name="username"autocomplete="off" value="<?php echo $username; ?>">
                  <label for="Username" id="un" style="font-size: large;" ><i class=" small material-icons">perm_identity</i>Username</label>
                  <span id="fn4" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter Username !</span>
                  
                  </div>
                  <br>
                  <div class="input-field" >
                    <input type="password"  id="password" name="password_1"autocomplete="off"  >
                    <label for="password" id="p1" style="font-size: large;" ><i class=" small material-icons">enhanced_encryption</i>Password</label>
                    <span id="fn5" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter password !</span>
                  </div>
                  <br>

                  <div class="input-field" >
                    <input type="password"  id="password1" name="password_2"autocomplete="off" >
                    <label for="password1" id="p2" style="font-size: large;" ><i class=" small material-icons">assignment_turned_in</i>Confirm Password</label>
                    <span id="fn6" style="color: coral;visibility: hidden;font-size: 17px;font-weight: bold;font-style: oblique;">please enter confirm password !</span>
                  </div>
                  <br>
                    
                      
                  

               <div class=" card-action center" >
                <button type="submit" name="reg_user" style="border: 1px solid red ; background-color: transparent;"  
                class="btn-large waves-effect waves-gray black-text z-depth-3 " id="b1" >
                  <h5>Submit<i class=" large material-icons">near_me</i></h5></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>


    <!--JavaScript at end of body for optimized loading-->
    
    <script type="text/javascript" src="js/jquery.js"></script>                                    
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script type="text/javascript" src="js/SignUp.js"></script>
    
    
    <div style="height:400px;"></div>
    <script>
      $(document).ready(function(){
        
        $('.sidenav').sidenav();
        

       });
    </script>
  </body>   
</html>
      