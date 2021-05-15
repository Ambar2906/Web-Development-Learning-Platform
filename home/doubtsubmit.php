<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['submit'])) {
   
  $name= mysqli_real_escape_string($db,$_POST["name"]);
  $email=mysqli_real_escape_string($db,$_POST["email"]);
  $subject=mysqli_real_escape_string($db,$_POST["subject"]);
  $message=mysqli_real_escape_string($db,$_POST["message"]);
  $query = "insert into contact(name,email,subject,message) values('$name','$email','$subject','$message')"; 
  //Insert query to add book details into the book_info table
  $result = mysqli_query($db,$query);
  if($result)
  {
    echo "<h2> Message sent successfully . Thank You!</h2>";
    
  }else{
   echo  "<h2>message not sent! Sorry for incovience</h2>";
   
  }
  
}
?>