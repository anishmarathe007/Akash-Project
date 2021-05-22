<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="login.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
	<form action="login.php" method="post" class="login-form">
		<h1>login</h1>
		<div class="textb">
			<input type="text" name="uname">
			<span data-placeholder="Username"></span>
		<!-- 	<%
			String shared = "Username";
		//	request.setAttribute("user", shared); // add to request
		//	request.getSession().setAttribute("user", shared); // add to session
		//	this.getServletConfig().getServletContext().setAttribute("user", shared); //
			%> -->
		</div>
		<div class="textb">
			<input type="password" name="password">
			<span data-placeholder="Password"></span>
		</div>
		<input type="submit" class="logbtn" value="Login" name="login">
		<div class="bottom-text">
			Don't have account? <a href="register.php"> Sign Up</a>
		</div>

	</form>

	<script type="text/javascript">
		$(".textb input").on("focus",function(){
			$(this).addClass("focus");
		});
		$(".textb input").on("blur",function(){
			if($(this).val() == "")
				$(this).removeClass("focus");
		});
	</script>
</body>
</html>

<?php

$_SESSION['l'] = 0;

if (isset($_POST['login'])) {
	$user = "root";
	$pass = "root";
	$db = "project";

	$conn = mysqli_connect('localhost',$user,$pass,$db) or die("Couldn't Connect");

	// if($conn)
	// {
	// 	echo '<script>alert("Connected..!!")</script>';
	// }


	$username = $_POST['uname'];
	$password = $_POST['password'];

	$user_exists = "SELECT username, password FROM user where username = '$username' and password = '$password' ";

	$res = mysqli_query($conn,$user_exists);
	$count = mysqli_num_rows($res);



	if ($count==1)
	{
		if($username == 'admin')
		{
			if($password == 'admin')
			{
				echo "<script> location.href='/new/admin.php'; </script>";
			}
		}
		else{
			$_SESSION['lo'] = 1;
			$_SESSION['user'] = $username;
			echo "<script> location.href='/new/home.php'; </script>";
			exit;
		}
	}
	else
	{
		echo '<script>alert("Dear user you have not yet registered. Kindly Register..!!")</script>';
		echo "<script> location.href='/new/register.php'; </script>";
        exit;
	}


}


?>
