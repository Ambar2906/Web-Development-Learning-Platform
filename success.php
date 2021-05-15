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
  echo "<h1 '>Thank You for buying courses!</h1>";

  echo "<h1>Payment Id:".$response['payments'][0]['payment_id']."</h1>";
  echo "<h1>Your Name:".$response['payments'][0]['buyer_name']."</h1>";
  echo "<h1>Email:".$response['payments'][0]['buyer_email']."</h1>";
  echo "<h1>Phone Number:".$response['payments'][0]['buyer_phone']."</h1>";
  echo "<h1>Toatal Amount Paid:".$response['payments'][0]['amount']."</h1>";
  
}
catch(Exception $e){
print("Error:" .$e->getMessage());
}
 
echo  "<h1><a href='videos/PHP.php'class='btn btn-primary' >Go Back</a></h1>";

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
<body style="background-repeat: no-repeat;background-size:100%;background-image:url('https://www.jing.fm/clipimg/detail/209-2090709_thank-you-your-submission-has-been-successfully-sent.png');  ">
  <h1 class="centre">Successful Payment !</h1>           
</body>
</html>