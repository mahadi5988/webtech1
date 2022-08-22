
<!DOCTYPE html>  
 <html>  
      <head>  
     <style >table, th, td {
     border: 1px solid;
      }</style>
        <title>Book Ticket</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


           <form action="welcome.php" method="POST" class="back-btn"> </form>   
          <a href="welcome.php">
               
          <input class="back-btn" type="submit" value="Back" name="btnClick">
          </a>

          <a href="addticket.php">
               
          <input class="add-btn" type="submit" value="Add Ticket" name="btnClick">
          </a>


             
      </head>  
      <body>  
        <div class="container" style="width:1000px;">  
        <h1 class="bg-success text-center text-white p-5 m-5" >Available Tickets</h1>            
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                       <tr>
                    <th style='text-align:center;'>Id</th>
                    <th style='text-align:center;'>Departure</th>

                    <th style='text-align:center;'>Destination</th>
                    <th style='text-align:center;'>JourneyDate</th>
                    <th style='text-align:center;'>ReturnDate</th>
                    <th style='text-align:center;'>Class</th>
                    <th colspan="2" align= "center">Operations</th>
                        </tr> 
<?php
    //$conn = new mysqli('localhost','root','','transport_management');
      include ("connectiondb.php") ;
    error_reporting(0);
    $query = "select * from ticket";

    $data = mysqli_query ($conn, $query) ;
    $total = mysqli_num_rows($data) ;


    if ($total!=0)
    {
        
        while($result=mysqli_fetch_assoc($data))
        {
            echo "
            <tr >
            <td style='text-align:center;'>".$result['id']."</td>
            <td style='text-align:center;'>".$result['departure']."</td>
            <td style='text-align:center;'>".$result['destination']."</td>
            <td style='text-align:center;' >".$result['journeydate']."</td>
            <td style='text-align:center;'>".$result['returndate']."</td>
            <td style='text-align:center;'>".$result['class']."</td>
            
            <td  style='text-align:center;'><a href='../Controller/updateticket.php?
            id=$result[id]&departure=$result[departure]&destination=$result[destination]&journeydate=$result[journeydate]&returndate=$result[returndate]&class=$result[class]'>
            <input style='background:green ;font-size: 19px;'type='submit' value='Edit/Update' id='editbtn'></td>
            

            <td  style='text-align:center;'><a href='../View/deleteticket.php?id=$result[id]' onclick='return checkdelete()'>
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
                   </div>
                 </div>

<script>
        function checkdelete()
        {
            return Confirm('Are You Sure You Wanna Delete?');
        }
</script>






      </body> 



 </html>  


<br><br>