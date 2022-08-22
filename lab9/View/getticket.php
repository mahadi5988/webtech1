<?php
$mysqli = new mysqli("localhost", "root", "", "product_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, departure, destination, journeydate, returndate,class
FROM ticket WHERE destination = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $departure, $destination, $journeydate, $returndate, $class, );
$stmt->fetch();
$stmt->close();

echo "<table>
  <tr>
    <th>Ticket ID</th>
   
    <th>Departure</th> 
    <th>Destination</th>
    <th>Journey Date</th>
    <th>Return Date</th>
    <th>Class</th>
  </tr>
  <tr>
    <td>" . $id . "</td>
    
    <td>" . $departure . "</td>
    <td>" . $destination . "</td>
    <td>" . $journeydate . "</td>
    <td>" . $returndate . "</td>
    <td>" . $class . "</td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    
  </tr>
</table>";
?>











