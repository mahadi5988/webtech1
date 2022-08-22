<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','product_db');
   
    error_reporting(0);

    if(isset($_POST['update']))
    {
        $id =  $_POST['id'];
        $departure = $_POST['departure'];
        $destination = $_POST['destination'];
       // $journeydate = $_POST['journeydate'];
       // $returndate = $_POST['returndate'];
        $class= $_POST['class'];
        
        $query = "UPDATE ticket SET id= '$id',departure= '$departure',destination= '$destination',class= '$class' WHERE id='$id' ";
        $query_run = mysqli_query ($conn, $query) ;

    if($query_run)
    {
    $_SERSSION['status']="Successfylly Updated Record into Database";
        
       echo "<script>alert('Successfylly Updated Record into Database');window.location='../View/airtickets.php'</script>";
    }
    else
    {
        $_SERSSION['status']="Failed to Update Record from Database";
      
    }

    }
  
?>