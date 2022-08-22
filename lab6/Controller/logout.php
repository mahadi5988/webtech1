
<?php  

session_start();
session_unset();

session_destroy();

header("Location:index.php");
?>



</head>
<body>
	<p class="logout" style="font-size: 2rem; font-weight: 500;">Logout Done!</p>

	<a href="home.php">
				<input class="login-again" type="submit" value="Login" name="btnClick">
				</a>

</body>
</head>

