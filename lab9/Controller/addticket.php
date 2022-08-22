
<?php
error_reporting(0);
	$departure = $_POST['departure'];
	$destination = $_POST['destination'];
	$journeydate = $_POST['journeydate'];
	$returndate = $_POST['returndate'];
	$class = $_POST['class'];
	

// Database connection
	$conn = new mysqli('localhost','root','','product_db');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into ticket(departure,destination,journeydate,returndate,class) values(?, ?, ?,?,?)");
		$stmt->bind_param("sssss", $departure,$destination,$journeydate,$returndate,$class);
		$execval = $stmt->execute();
		echo $execval;
		echo"";
		
        
		


		$stmt->close();
		$conn->close();


	}
?>

