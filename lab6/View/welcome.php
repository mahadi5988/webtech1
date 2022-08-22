<?php
include '../Controller/welcomedata.php';


?>


<!DOCTYPE html>
<html>
<head>
    
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		
		background-image:url(bg.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
	}
	.welcome{
				position:fixed;
				left:600px;
				top: 10px;
				width:600px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
	.manager{
				position:fixed;
				left:1570px;
				top: 10px;
				width:300px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
		.name{
				position:fixed;
				left:1570px;
				top: 70px;
				width:300px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
	.help-desk{
				position:fixed;
				left:10px;
				top: 10px;
				width:300px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
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
	.review-btn{
		background-color:#C91A1A;
		display:block;
		margin:200px 0px 0px 750px;
		position:fixed;
		left:-10px;
		top: 600px;
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
	.add-recommendation{
		background-color:#C91A1A;
		display:block;
		margin:200px 0px 0px 750px;
		position:fixed;
		left:-115px;
		top: 50px;
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
	.recommendation{
		background-color:#C91A1A;
		display:block;
		margin:200px 0px 0px 750px;
		position:fixed;
		left:-65px;
		top: 170px;
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
	.user-data{
		background-color:#C91A1A;
		display:block;
		margin:300px 0px 0px 775px;
		position:fixed;
		left:-65px;
		top: 170px;
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
	.search-ticket{
		background-color:#C91A1A;
		display:block;
		margin:300px 0px 0px 775px;
		position:fixed;
		left:-65px;
		top: 270px;
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
	.emergency{
		background-color:#C91A1A;
		display:block;
		margin:20px 0px 0px 20px;
		position:fixed;
		left:1500px;
		top: 850px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #73365f;
		padding: 14px 110px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}
	.logout{
		background-color:#C91A1A;
		display:block;
		margin:20px 0px 0px 20px;
		position:fixed;
		left:1500px;
		top: 750px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #73365f;
		padding: 14px 110px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}	
	</style>
	
