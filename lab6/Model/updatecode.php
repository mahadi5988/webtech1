<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','product_db');
   
    error_reporting(0);

    if(isset($_POST['update']))
    {
        $id =  $_POST['id'];
        $name = $_POST['name'];
	    $email = $_POST['email'];
	    $gender = $_POST['gender'];
	    $user= $_POST['user'];
        
        $query = "UPDATE INFO SET id= '$id',name= '$name',email= '$email',gender= '$gender',user= '$user' WHERE id='$id' ";
        $query_run = mysqli_query ($conn, $query) ;

    if($query_run)
    {
    $_SERSSION['status']="Successfylly Updated Record into Database";
       
       echo "<script>alert('Successfylly Updated Record into Database');window.location='../View/userdata.php'</script>";
    }
    else
    {
        $_SERSSION['status']="Failed to Update Record from Database";
       
    }

    }
  
?>