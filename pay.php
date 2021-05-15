<?php
require('./instamojo.php');
const API_KEY ="test_011cce126e13e37468051719bf9";
const AUTH_TOKEN = "test_cf5af4717fe3101c56a8c7ab9fc";


if(isset($_POST['purpose']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount']))
{
    $api = new Instamojo\Instamojo('test_011cce126e13e37468051719bf9','test_cf5af4717fe3101c56a8c7ab9fc','https://www.instamojo.com/api1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['amount'],
            "send_email" => true,
            "email" => $_POST['email'],
            "redirect_url" => "http://localhost/instamojopayment/success.php"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>