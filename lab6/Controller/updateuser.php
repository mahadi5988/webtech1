<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Information</title>
	<link rel="stylesheet" href="../CSS/register.css">
	
</head>
<body>
	<div class="information">
		<?php
			if(isset($_SESSION['status']))
			{
				echo"<h4>".$_SESSION['status']."</h4>";
				unset($_SESSION['status']);
			}

		?>


		<form name="myform" autocomplete="off" action="../Model/updatecode.php" method="POST"  class="login"; >
            
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Here</p>
			
			<div class="registration">
			<table>
			<tr>
				<td>USER ID</td>
				<td>:</td>
				<td><input class="password" type="id" placeholder="User ID" id="id" name="id"  >
				<br/><span id="idd"></span>		
			</td>
			</tr>

			<tr>
				<td>Name</td>
				<td> :</td>
				<td>
					<input class="name" type="name" placeholder="Username" id="name" name="name" >
					<br/><span id="namee"></span>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input class="email" type="email" placeholder="Email" id="email" name="email" >
				<br/><span id="emaill"></span>
			</td>
			</tr>

			
			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input class="radio" type="radio" name="gender"  value="Male" > &nbsp;Male
					<input class="radio" type="radio" name="gender"  value="Female"> &nbsp;Female
					<input class="radio" type="radio" name="gender"  value="Others"> &nbsp;Others
					<br/><span id="genderr"></span>
				</td>
			</tr>
			
			<tr>
					<td>Login As</td>
					<td>:</td>
					<td>
					
						<select class="loginuser" id="selection" name="user">
						<option >Select One</option>
						<option >Customer</option>
						<option >Manager-Train</option>
						<option >Manager-Bus</option>
						<option >Manager-Air</option>
						<br/><span id="selectionn"></span>
					</td>
			</tr>
				<tr>
					<td><input class="btn" type="submit" value="Update" name="update"></td>
				</tr>
			</table>

		</form>
		
	</div>
	
	</div>
	<form action="../View/userdata.php" method="POST" class="back-btn"> </form>   
          <a href="../View/userdata.php">
               
          <input class="back-btn" type="submit" value="Back" name="btnClick">
          </a>

<style type="text/css">
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
</style>
</body>
</html>