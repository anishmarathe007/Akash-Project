<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="register.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
	<form action="register.php" method="post" class="login-form" onsubmit="myfun()">
		<h1>Registration</h1>
		<div class="textb">
			<input type="text" name="uname">
			<span data-placeholder="Username" ></span>
		</div>
		<div class="textb">
			<input type="password" name="password">
			<span data-placeholder="Password"  ></span>
		</div>
		<div class="textb">
			<input type="text" name="phone">
			<span data-placeholder="Phone" ></span>
		</div>
		<div class="textb">
			<input type="text" name="email" id="emailcheck">
			<span data-placeholder="Email"  id="showmsg"></span>
		</div>
		<div class="textb">
			<input type="textarea" name="Addres">
			<span data-placeholder="Address" ></span>
		</div>
		<div class="radio">
			<p class="gen">Male<input type="radio" name="gender" value="male">
			              Female<input type="radio" name="gender" value="female"></p>
		</div>
		<input type="submit" value="submit" class="logbtn" name="register" >
		<div class="bottom-text">
			Already have account? <a href="login.html"> Login</a>
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

		function myfun()
		{
			var emailcheck = document.getElementById("emailcheck").value;
			var pattern = /^[a-z0-9](\.?[a-z0-9_-]){0,}@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/;

			if(pattern.test(emailcheck))
				{
				document.getElementById('showmsg').innerHTML = "Email Id is correct";
				}
			else
				{
				document.getElementById('showmsg').innerHTML = "Email Id is incorrect";
				return false;
				}
		}

	</script>
</body>
</html>

<?php
//$_SESSION['lo'] = 0;

if (isset($_POST['register'])) {
	$user = "root";
	$pass = "root";
	$db = "project";

	$conn = mysqli_connect('localhost',$user,$pass,$db) or die("Couldn't Connect");

	if($conn)
	{
		echo '<script>alert("Connected..!!")</script>';
	}

	$username = $_POST['uname'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];


	$db_username = "SELECT username, password FROM user where username = '$username'";
	$dup_user = "SELECT username, password FROM user where username = '$username' and password = '$password' ";


	$res1 = mysqli_query($conn,$db_username);
	$count = mysqli_num_rows($res1);

	if ($count>0)
	{
		$res = mysqli_query($conn,$dup_user);
		$count1 = mysqli_num_rows($res);

		if ($count1==1)
		{
			echo '<script>alert("You already have an account Kindly Log In with these credentials")</script>';
			echo "<script> location.href='/aprject/login.php'; </script>";
        	exit;
		}
		else
		{
			echo '<script>alert("Username has Already taken kindly choose some other name")</script>';
			echo "<script> location.href='/aproject/register.php'; </script>";
        	exit;
		}
	}
	else
	{
			$query = "INSERT INTO user(username,password,phone_no,email) VALUES('$username','$password','$phone','$email')";
			$result = mysqli_query($conn,$query);
			echo '<script>alert("You have successfully Registered..!! Kindly log in with the same credentials to continue.")</script>';
			echo "<script> location.href='login.php'; </script>";
			exit;
	}
}
?>
