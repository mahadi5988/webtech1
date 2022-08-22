
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
 table.center{
 	margin-left: auto; 
  margin-right: auto;
 }
 table,th,td {
  border : 2px solid black;
  border-collapse: collapse;
  width: 50%;

}
th,td {
  padding: 15px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
tr:hover {background-color: #3BAF9F;}

</style>
    
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		
		background-image:url(ticket.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
	}

	
	.back-btn{
		background-color:#C91A1A;
		display:block;
		margin:20px 0px 0px 20px;
		position:fixed;
		left:10px;
		top: 850px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 110px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}
	.myDiv {
  
  
      
  text-align: center;
}		
	</style>
</head>
<body>

	<div class="myDiv">
	<p style='font-size:200% ;font-family: verdana;'>Click On A Review!</p>
<p style='font-size:150% ;font-family: verdana ;' id='showCD'></p>

<table class="center" id="demo"></table>



<script>
const xhttp = new XMLHttpRequest();
let cd;
xhttp.onload = function() {
 const xmlDoc = xhttp.responseXML; 
 cd = xmlDoc.getElementsByTagName("CD");
 
 loadCD();

}
xhttp.open("GET", "review.xml");
xhttp.send();

function loadCD() {
  let table="<tr><th>Name</th><th>Review</th></tr>";
  for (let i = 0; i < cd.length; i++) { 
    table += "<tr onclick='displayCD(" + i + ")'><td>";
    table += cd[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue;
    table += "</td><td>";
    table += cd[i].getElementsByTagName("REVIEW")[0].childNodes[0].nodeValue;
    table += "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}

function displayCD(i) {
  document.getElementById("showCD").innerHTML =
  "E-Mail: " +
  cd[i].getElementsByTagName("E-MAIL")[0].childNodes[0].nodeValue +
  "<br>Comment: " +
  cd[i].getElementsByTagName("COMMENT")[0].childNodes[0].nodeValue +
  "<br>Date: " + 
  cd[i].getElementsByTagName("DATE")[0].childNodes[0].nodeValue;
}
</script>
</div>
		<p class="review" style="font-size: 4rem; font-weight: 100;"></p>
		
		<form action="welcome.php" method="POST" class="back-btn">	</form>	
		<a href="welcome.php">
		<input class="back-btn" type="submit" value="Back" name="btnClick">
		</a>
</body>
</html>