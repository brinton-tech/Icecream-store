
<?php
include('config/app.php');
include('codes/authentication.php');

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ice Cream Shop Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



<!-- <a href="./css/style.css"> -->
<link rel="stylesheet" href="./css/mainstyle.css">
	
<style>
	.overlay{
		margin-top: 5%;
		justify-content: center;
		align-items: center;
		text-align: center;
	}

	.overlay h1{
		color: red;
		font-size: 50px;
		font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
	}
	body{
		background: url(./asset/img/scale.jpg);
		background-size: cover;
	}
	form{
    background: grey;
		justify-content: center;
		align-items: center;
		text-align: center;
		width: 40%;
		margin-right: auto;
		margin-left: auto;
		opacity: 0.9;
		border-top-right-radius: 30px;
		border-bottom-left-radius: 30px;
		border: solid wheat;
	}

	form h1{
		font-size: 50px;
	}

	.overlay p{
		font-size: 20px;
		font-weight: bold;
	}

	form .inputs input{
		font-size: 30px;
		margin: 20px;
	}

	form button{
		display: inline;
		padding: 10px;
		width: 30%;
		margin-bottom: 10px;
		font-size: 30px;
		border-top-right-radius: 30px;
		border-bottom-left-radius: 30px;
		border-top-left-radius: 30px;
		border-bottom-right-radius: 30px;
		cursor: pointer;
	}

	form button:hover{
		background: red;
		color: white;
		border: 4px solid wheat;

	}

</style>

</head>
<body>



<div class="box-form">
	<div class="left">
		<div class="overlay">

    
		<center behavior="alternate" direction="left"><h1>Ice Cream Shop.</h1></center>
		<p>The Best Ice Cream Vendor in Town!</p>
		
		</div>
	</div>
	
	
	<form class="right" method="post" action="">
		<h1>Login</h1>
		<?php include_once('message.php'); ?>
		<div class="inputs">
			<input type="email" placeholder="user Email"  name="email">
			<br>
			<input type="password"  placeholder="password" name="password">
		</div>

		<p>Don't have an account? <a href="./user.php">Creat Your Account</a> it takes less than a minute</p>
			
			<br>
			
		
			
			<br>
		<button type="login" name="login">Login</button>
	</form>
	
</div>



</body>
</html>