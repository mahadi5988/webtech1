<html>
     <head>
     <title> Transport Management </title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="../CSS/userdisplay.css">
     
     </head>
<body>
     <div class="container" style="width:1000px;">  
        <h1 class="bg-success text-center text-white p-5 m-5" >User Data</h1>            
                <div class="table-responsive"> 
                     <table class="table table-bordered">

     <table border='2' width=100% >
     <tr>
     <th style='text-align:center;'>Id</th>
     <th style='text-align:center;'>Name</th>

     <th style='text-align:center;'>Email</th>
     <th style='text-align:center;'>Gender</th>
     <th style='text-align:center;'>User</th>
     <th colspan="2" align= "center">Operations</th>
</tr>

                    <a href="../View/welcome.php">
                    <input class="back-btn" type="submit" value="Back" name="btnClick">
                    </a>

<?php
     //$conn = new mysqli('localhost','root','','product_db');
       include ("connectiondb.php") ;
     error_reporting(0);
     $query = "select * from info";

     $data = mysqli_query ($conn, $query) ;
     $total = mysqli_num_rows($data) ;


     if ($total!=0)
     {
          
          while($result=mysqli_fetch_assoc($data))
          {
               echo "
               <tr >
               <td style='text-align:center;'>".$result['id']."</td>
               <td style='text-align:center;'>".$result['name']."</td>
               <td style='text-align:center;'>".$result['email']."</td>
               <td style='text-align:center;' >".$result['gender']."</td>
               <td style='text-align:center;'>".$result['user']."</td>
               
               <td  style='text-align:center;'><a href='../Controller/updateuser.php?
               id=$result[id]&name=$result[name]&email=$result[email]&gender=$result[gender]&user=$result[user]'>
               <input style='background:green ;font-size: 19px;'type='submit' value='Edit/Update' id='editbtn'></td>
               

               <td  style='text-align:center;'><a href='../Controller/deleteuser.php?id=$result[id]' onclick='return checkdelete()'>
               <input style='background:red ;font-size: 19px;'type='submit' value='Delete' id='deleteBtn'></td>
               
               </tr>
               ";
          }
     }
     else
     {
          echo "No records found";
     }

     ?>
     </table>
        <script>
          function onclickdelete()
          {
               return Confirm('Are You Sure You Wanna Delete?');
          }
</script>
 
</body>
</html>




 