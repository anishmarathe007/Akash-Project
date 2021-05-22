<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Groccery</title>
<link rel="stylesheet" href="billaddr.css">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Billing Address</title>
</head>
<body>
<form action="billaddr.php" method="POST">
	<section id="nav-bar"> <nav
		class="navbar navbar-expand-lg navbar-light"> <a
		class="navbar-brand" href="#"><img src="ak1.jpg"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarNav" aria-controls="navbarNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="#top">Back</a></li>
			<li class="nav-item"><a class="nav-link" href="login.jsp">SignOut</a>
			</li>
		</ul>
	</div>
	</nav> </section>
<!-- --------------------------banner section -->
	<section id="banner">
	<div class="container">
		<div class="row">

			<div class="col-md-12 text-center">
				<h1>Billing Address Details</h1>
				<p style="margin-left: 35px">Name : <input name="cName" style="margin-left: 55px" type="text"></p>
				<p style="margin-left: 35px; margin-bottom:35px;">Billing Address :<textarea name="address"></textarea></p>
				<input type="submit" value="continue" size="5px" name="submit">
			</div>
		</div>
	</div>
	</section>
	<section id="anim">
	<div class="wave"></div>
	</section>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$_SESSION['CName'] = $_POST['cName'];
	$_SESSION['bAddress'] = $_POST['address'];

	echo "<script>alert('Generating Bill..!! Please Wait..!!');</script>";
	echo "<script> location.href='/new/bill.php'; </script>";
	exit;
}

?>
