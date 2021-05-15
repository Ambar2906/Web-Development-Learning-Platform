<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
</head>
<body>
<?php 
  if(isset($_REQUEST['id']) && $_REQUEST['id']==1 ){
    
    $info="Thank you for buying Premium Course";
    $course="PHP Programming Language";
    $price="Rs.1000/-";
  }
  elseif(isset($_REQUEST['id'])&& $_REQUEST['id']==2 ){
    $info="Thank you for buying Premium Course";
    $course="JavaScript Programming Language";
    $price="Rs.1500/-";
  }
  elseif(isset($_REQUEST['id'])&& $_REQUEST['id']==3 ){
    $info="Thank you for buying Premium Course";
    $course="React.JS javascript Frontend Library";
    $price="Rs.2000/-";
  }
  elseif(isset($_REQUEST['id'])&& $_REQUEST['id']==4 ){
    $info="Thank you for buying Premium Course";
    $course="Node.JS";
    $price="Rs.2500/-";
  }
  else{
    echo "no such data";
  }  
  
  
 
 ?>
  <div class="container">
  <p><b><h1><?php echo  $info; ?></h1></b></p>
  <p><b><h5>COURSE NAME:</h5><?php echo $course; ?></b></p>
  <p><b><h5>Price:</h5><?php echo $price; ?></b></p>
  </div>
  
       <div class="container">
      <h1 class="text-center">Fill the required details for payment!</h1>
      
      <form action="pay.php" method="POST">
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            required
            name="name"
            id=""
            placeholder="name"
          />
        </div>
        
        <div class="form-group">
            <input
              type="text"
              class="form-control"
              required
              name="purpose"
              id=""
              placeholder="purpose"
            />
          </div>
        <div class="form-group">
          <input
            type="email"
            class="form-control"
            required
            name="email"
            id=""
            placeholder="email"
          />
        </div>
        
        <div class="form-group">
            <input
              type="number"
              class="form-control"
              required
              name="amount"
              id=""
              placeholder="amount"
            />
          </div>
        <div class="form-group">
            <button class="btn btn-danger btn-block">
                Create Payment Link
            </button>
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>