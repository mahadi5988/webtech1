<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>



<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>

 </head>
<body>



	<form action="home.php" method="POST" class="hpage"></form>
    <p class="welcome" style="font-size: 2rem; font-weight: 800;">Welcome</p>


    <p class="manager" style="font-size: 2rem; font-weight: 300;">Manager</p>
    <p class="name"  style="font-size: 2rem; font-weight: 800;">Mahadi Hasan</p>
	<p class="help-desk" style="font-size: 1rem; font-weight: 100;">Help Desk</br>Email-mahadi59@gmail.com</p>
	
	<a href="home.php">
				<input class="back-btn" type="submit" value="Back" name="btnClick">
				</a>
		<form action="review.php" method="POST" class="reviewpage">	</form>	
		<a href="review.php">
		<input class="review-btn" type="submit" value="Review" name="btnClick">
		</a>
		
		<form action="recommendation.php" method="POST" class="recommendation">	</form>	
		<a href="recommendation.php">
		<input class="recommendation" type="submit" value="Book Places To Visit!" name="btnClick">
		</a>
		
		<form action="addrecommendation.php" method="POST" class="add-recommendation">	</form>	
		<a href="addrecommendation.php">
		<input class="add-recommendation" type="submit" value="Recommanded Places To Visit!" name="btnClick">
		</a>

		<form action="userdata.php" method="POST" class="user-data">	</form>	
		<a href="userdata.php">
		<input class="user-data" type="submit" value="See User Data" name="btnClick">
		</a>
		<form action="showTicket.php" method="POST" class="search-ticket">	</form>	
		<a href="showTicket.php">
		<input class="search-ticket" type="submit" value="Search Ticket" name="btnClick">
		</a>
		
		<form action="emergency.php" method="POST" class="emergency">	</form>	
		<a href="emergency.php">
		<input class="emergency" type="submit" value="Emergency" name="btnClick">
		</a>

		<form action="logout.php" method="POST" class="logout">	</form>	
		<a href="logout.php">
		<input class="logout" type="submit" value="Logout" name="btnClick">
		</a>
		
		
</body>
</html>