
<title>LOGIN</title>
 


<div class="lginformation">
		
			<form action= "login.php" method="post">
				
		<?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
			
            
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Log In</p>
	<div class="login">
	
	<table>
			
			<tr>
				<td><h2 style="color:whitesmoke;">Username</h2></td>
				<td>:</td>
				<td><input type="text" name="uname" placeholder="Name" value="<?php if(isset($_COOKIE['uname'])) {echo $_COOKIE['uname'];} ?>"  required></td>
			</tr>
			
			
			<tr>
				<td><h2 style="color:whitesmoke;">Password</h2></td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"  
					required></td>
			</tr>
			<tr>
				<td><h2 style="color:whitesmoke;">Remember Me</h2></td>
				<td>:</td>
				<td align="center"><input type="checkbox"  name="remember" value="remember" ></td>
			</tr>


			<tr>
				<td>
	
				<input class="btn" type="submit" value="Login" name="login">

				<h2 style="color:whitesmoke;"><a href="registration.php" >Register Here </h2>

				</a>

				</td>
			</tr>
				

	</table>
	
	</form>
	
	</div>




