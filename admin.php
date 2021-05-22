<?php

session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Groccery Store Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="admin.php" method="POST">
	<!-- ----------navbar section----------- -->
	<section id="nav-bar"> <nav
		class="navbar navbar-expand-lg navbar-light"> <a
		class="navbar-brand" href="#"><img src="logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarNav" aria-controls="navbarNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			<!--  <li class="nav-item">
        <a class="nav-link" href="#top">HOME</a>
      </li> -->
			<!--  <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li> -->
			<!--  <li class="nav-item">
        <a class="nav-link" href="#about-us">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">TESTIMONIALS</a>
      </li> -->
			<li class="nav-item"><a class="nav-link" href="login.php">SIGNOUT</a>
			</li>
		</ul>
	</div>
	</nav> </section>
	<!-- --------------main services section---------- -->
		<section id="services">
<div class="container text-center">
<h1 class="title">Administration Page</h1>
<div class="row text-center">
<div class="col-md-3 services">
<img src="grains.jpg" class="service-img" style="padding-bottom: 20px;">
<div>
  <button type="submit" name="itemSelected" value="grain" class="btn btn-primary">GRAINS</button>
</div>
</div>

<div class="col-md-3 services">
<img src="flour.jpg" class="service-img" style="padding-bottom: 20px; height: 137px;">
<div>
  <button type="submit" name="itemSelected" value="flours" class="btn btn-primary"><a class="anchor">FLOURS</a></button>
</div>
<!-- <P> Get worlds best baby products her<p> -->
</div>


<div class="col-md-3 services">
<img src="dryfruit.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value='dry fruits' class="btn btn-primary"><a class="anchor">DRY FRUITS</a></button>

</div>
<!-- <P> Get healthy and safe tips for your baby care<p> -->
</div>


<div class="col-md-3 services">
<img src="vegetables.jpg" class="service-img" style="padding-bottom: 20px; height: 137px;">
<div>

<button type="submit" name="itemSelected" value="vegetables" class="btn btn-primary"><a href="know.html" class="anchor">VEGETABLES</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="fruits.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="fruits" class="btn btn-primary"><a href="know.html" class="anchor">FRUITS</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="oil.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="oil & spices" class="btn btn-primary"><a class="anchor">OIL & SPICES</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="dairy.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="dairy" class="btn btn-primary"><a class="anchor">DAIRY</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="toiletries.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit"  class="btn btn-primary" name="itemSelected" value="toiletries"><a class="anchor">TOILETRIES</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="munchings.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="munchings" class="btn btn-primary"><a class="anchor">MUNCHINGS</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="juices.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="juices" class="btn btn-primary"><a class="anchor">JUICES & DRINKS</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="bakery.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="bakery" class="btn btn-primary"><a class="anchor">BAKERY</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="household.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="household" class="btn btn-primary"><a class="anchor">HOUSEHOD & CLEANING</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>

</div>
<!-- <button type="button" class="btn btn-primary">All Services</button>
 --></div>
</section>
</form>
</body>
</html>

<?php

if(isset($_POST['itemSelected'])){
        $_SESSION['ADcategory'] = $_POST['itemSelected'];
        echo "<script> location.href='/new/item_update.php'; </script>";
    }
?>
