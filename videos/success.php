<?php


require('./instamojo.php');
const API_KEY ="test_fbfe48252c79f922b6fcb73942e";
const AUTH_TOKEN = "test_96776ed94ddd67c44fc3a9f2dbd";


if(isset($_POST['purpose']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount']))
{
    $api = new Instamojo\Instamojo('test_fbfe48252c79f922b6fcb73942e','test_96776ed94ddd67c44fc3a9f2dbd' ,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['amount'],
            "send_email" => true,
            "email" => $_POST['email'],
            "redirect_url" => "http://localhost/instamojopayment/success.php"
            
            ));
        header('Location:'. $response['longurl'] );
        
        
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
    
}


$api = new Instamojo\Instamojo('test_fbfe48252c79f922b6fcb73942e','test_96776ed94ddd67c44fc3a9f2dbd' ,'https://test.instamojo.com/api/1.1/');
$payid=$_GET['payment_request_id'];
try{
  $response = $api->paymentRequestStatus($payid);
  echo "<h1>Payment Id:".$response['payments'][0]['payment_id']."</h1>";
}
catch(Exception $e){
print("Error:" .$e->getMessage());
}
 
 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <title>Document</title>
</head>
<body>
    <h1 class="centre">Successful Payment !</h1>  
    <a href="index.php" class="btn btn-primary">Go Back</a>
    header('location: PHP.php');
    <?php 
  if(isset($_REQUEST['id'])==1 ){
    
    echo "Thank you for buying Premium Course";
    echo "PHP Programming Language";
    echo "Rs.1000/-";
    $_SESSION['success'] = "You are now logged in";
  	header('location: PHP.php');
  }
  elseif(isset($_REQUEST['id'])==2 ){
    echo "Thank you for buying Premium Course";
    echo "JavaScript Programming Language";
    echo "Rs.1500/-";
    $_SESSION['success'] = "You are now logged in";
  	header('location: javascript.php');
  }
  elseif(isset($_REQUEST['id'])==3 ){
    echo "Thank you for buying Premium Course";
    echo "React.JS javascript Frontend Library";
    echo "Rs.2000/-";
    $_SESSION['success'] = "You are now logged in";
  	header('location: react.php');
  }
  elseif(isset($_REQUEST['id'])==4 ){
    echo "Thank you for buying Premium Course";
    echo "Node.JS";
    echo "Rs.2500/-";
    $_SESSION['success'] = "You are now logged in";
  	header('location: node.php');
  }
  else{
    echo "no such data";
  }  
  ?>  
 
      
  
  
  
            
</body>
</html>