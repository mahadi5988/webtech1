<?php
session_start();

   
?>



<!DOCTYPE html>
<html>
<head>



		<form action="welcome.php" method="POST" class="back-btn">	</form>	
		<a href="welcome.php">
		<p class="places" style="font-size: 2rem; font-weight: 800;">Places</p>	
			
		<input class="back-btn" type="submit" value="Back" name="btnClick">
		</a>

		<form action="traintickets.php" method="POST" class="recommendation">	</form>	
		<a href="traintickets.php">
		<input class="dhakatrain" type="submit" value="Dhaka Train Tickets" name="btnClick">
		</a>
		<form action="traintickets.php" method="POST" class="recommendation">	</form>	
		<a href="traintickets.php">
		<input class="chittagongtrain" type="submit" value="Chittagong Train Tickets" name="btnClick">
		</a>
		<form action="traintickets.php" method="POST" class="recommendation">	</form>	
		<a href="traintickets.php">
		<input class="coxsbazartrain" type="submit" value="Cox-Bazar Train Tickets" name="btnClick">
		</a>

</head>
</html>

