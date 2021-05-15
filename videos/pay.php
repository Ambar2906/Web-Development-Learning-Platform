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
            "send_sms"   => true,
            "send_sms"  => $_POST['send_sms'],
            "email" => $_POST['email'],
            "redirect_url" => "http://localhost/SemProject/success.php"
            
            ));
        header('Location:'. $response['longurl'] );
        
        
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
    
}
?>