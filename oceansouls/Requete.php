<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

if (!empty($name) || !empty($email) || !empty($phone) || !empty($message)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ocean";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From message Where email = ? Limit 1";
     $INSERT = "INSERT Into message (name, email, phone, message) values('$name','$email','$phone','$message')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already message using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
