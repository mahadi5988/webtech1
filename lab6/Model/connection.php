<?php
error_reporting(0);
?>

<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
     $gender = $_POST['gender'];
     $user= $_POST['user'];

// Database connection
     $conn = new mysqli('localhost','root','','product_db');

     if($conn->connect_error){
          echo "$conn->connect_error";
          die("Connection Failed : ". $conn->connect_error);
     } else {
          $stmt = $conn->prepare("insert into info(name,email, password,cpassword,gender,user) values(?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssss", $name,$email, $password, $cpassword, $gender,$user);
          $execval = $stmt->execute();
          echo $execval;
          echo "Registration successfull...";
          $stmt->close();
          $conn->close();
     }
?>