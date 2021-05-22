<?php
session_start();
$_SESSION['category'] = '';
?>

<?php
if(isset($_SESSION['lo'])){
 }
else{
    $_SESSION['lo'] = 0;
    $_SESSION['user'] = '';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Groccery</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>
    <form action="home.php#services" method="POST">
	<section id="nav-bar"> <nav
		class="navbar navbar-expand-lg navbar-light"> <a
		class="navbar-brand" href="#"><img src="ak1.jpg"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarNav" aria-controls="navbarNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto" id="list">
			<li class="nav-item"><a class="nav-link" href="#top">HOME</a></li>
			<li class="nav-item"><a class="nav-link" href="#services">SERVICES</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="#about-us">ABOUT
					US</a></li>
			<li class="nav-item"><a class="nav-link" href="#testimonials">TESTIMONIALS</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="#footer">CONTACT</a>
			<?php
			if($_SESSION['lo'] == 0){ ?>
			</li>
				<li class="nav-item"><a class="nav-link" href="/new/login.php">LOGIN</a>
			</li>
		<?php }
			else{
			?>
			</li>
				<li class="nav-item"><a class="nav-link"><?php echo $_SESSION['user']; ?></a>
			</li>
			</li>

				<li class="nav-item"><input class="nav-link" type="submit" name="logout" value="SIGNOUT" />
				</li>

		<?php }
            if(isset($_POST['logout'])){
                $_SESSION['lo'] = 0;
                echo "<script> location.href='home.php'; </script>";
            }
        ?>
		</ul>
	</div>
	</nav> </section>
<!-- --------------------------banner section -->
	<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="promo-title">AK'S ONLINE GROCCERY STORE</p>
				<P>follow us on istagram for more information and updates</P>
			</div>
			<div class="col-md-6 text-center">
				<img src="potli.jpg" class="img-fluid">
			</div>
		</div>
	</div>
	<!-- <img src="wave.png" class="bottom-img"> --> </section>
	<section id="anim">
	<div class="wave"></div>
	</section>
	<!-- ----------------Service section---------------- -->
	<section id="services">
<div class="container text-center">
<h1 class="title">WHAT WE SERVE TO YOU ?</h1>
<div class="row text-center">
<div class="col-md-3 services">
<img src="grains.jpg" class="service-img" style="padding-bottom: 20px;">
<div>
<button type="submit" name="itemSelected" value="grain" class="btn btn-primary">GRAINS</button>
</div>
<!-- <P> Find worlds best baby name suggetions here<p> -->
</div>


<div class="col-md-3 services">
<img src="flour.jpg" class="service-img" style="padding-bottom: 20px; height: 137px;">
<div>
  <form>
<button type="submit" name="itemSelected" class="btn btn-primary" value="flours"><a class="anchor">FLOURS</a></button>
  </form>
</div>
<!-- <P> Get worlds best baby products her<p> -->
</div>


<div class="col-md-3 services">
<img src="dryfruit.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" class="btn btn-primary" value="dry fruits"><a class="anchor">DRY FRUITS</a></button>

</div>
<!-- <P> Get healthy and safe tips for your baby care<p> -->
</div>


<div class="col-md-3 services">
<img src="vegetables.jpg" class="service-img" style="padding-bottom: 20px; height: 137px;">
<div>

<button type="submit" name="itemSelected" class="btn btn-primary" value="vegetables"><a class="anchor">VEGETABLES</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="fruits.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" class="btn btn-primary" value="fruits"><a class="anchor">FRUITS</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="oil.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" class="btn btn-primary" value="oil & spices"><a class="anchor">OIL & SPICES</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="dairy.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" class="btn btn-primary" name="itemSelected" value="dairy">DAIRY</button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="toiletries.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" name="itemSelected" value="toiletries" class="btn btn-primary">TOILETRIES</button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="munchings.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" class="btn btn-primary" name="itemSelected" value="munchings">MUNCHINGS</button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="juices.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" class="btn btn-primary" name="itemSelected" value="juices"><a class="anchor">JUICES & DRINKS</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="bakery.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" class="btn btn-primary" name="itemSelected" value="bakery"><a class="anchor">BAKERY</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>


<div class="col-md-3 services">
<img src="household.jpg" class="service-img" style="padding-bottom: 20px;  height: 137px;">
<div>

<button type="submit" class="btn btn-primary" name="itemSelected" value="household"><a class="anchor">HOUSEHOD & CLEANING</a></button>

</div>
<!-- <P> Get details about your baby<p> -->
</div>

</div>
<button type="submit" class="btn btn-primary">All Services</button>
</div>
</section>
<!-- -----------About us ----------- -->
	<section id="about-us">
	<div class="container">
		<h1 class="title text-center">WHY CHOOSE US ?</h1>
		<div class="row">
			<div class="col-md-9 about-us">
				<p class="about-title">We work with an aim to cater the ever-changing demand of our esteemed customers in the best possible manner.
				Processed and prpared in confomism with the set of standards of industry, the provided products are highly cherished amongst our customers.
			Apart from this, our huge distribution ability and prompt delivery of orders has helped us to achieve utmost satisfaction of our clients.
		Other main factors behind the success we have achieved comprise:</p>
				<ul>
					<li>Adept team of professionals</li>
					<li>Modular infrastructure</li>
					<li>Economical Prices</li>
					<li>Ethical buisness practices</li>
					<li>Flexible modes of payment</li>
					<li>Client centric approach</li>
				</ul>
			</div>
			<div class="col-md-3">
				<img src="abtus.jpg" class="img-fluid">
			</div>
		</div>
	</div>
	</section>
<!-- --------testimonials-------- -->
<section id="testimonials">
	<div class="container">
		<h1 class="title text-center">WHAT CLIENT SAY</h1>
		<div class="row">
			<div class="col-md-3 testimonials">
				<p>This web site helps me to take care of my baby, even they are helping me in vaccinnatins and baby products also</p>
				<img src="mk.jpg">
				<p class="user-details"><b>Aakash</b><br> MSC Student</p>
			</div>
			<div class="col-md-3 testimonials">
				<p>Awsome website ,its much  more helpful for parents,it gives us tips on parenting also</p>
				<img src="sm.jpg">
				<p class="user-details"><b>Karan</b><br> MSC Student</p>
			</div>
			<div class="col-md-3 testimonials">
				<p>Awsome website ,its much  more helpful for parents,it gives us tips on parenting also</p>
				<img src="kirti1.jpg">
				<p class="user-details"><b>Karan</b><br> MSC Student</p>
			</div>
			<div class="col-md-3 testimonials">
				<p>Awsome website ,its much  more helpful for parents,it gives us tips on parenting also</p>
				<img src="kirti.jpg">
				<p class="user-details"><b>Karan</b><br> MSC Student</p>
			</div>
			<div class="col-md-3 testimonials">
				<p>Awsome website ,its much  more helpful for parents,it gives us tips on parenting also</p>
				<img src="shubh.jpg">
				<p class="user-details"><b>Karan</b><br> MSC Student</p>
			</div>
</section>
<!-- -----   contact section----- -->
<section id="social-media">
<div class="container text-center">
<p>FIND US ON SOCIAL MEDIA</p>
<div class="social-icons">
<a href="https://www.instagram.com/aakasht3634?r=nametag"><img src="insta.png"></a>
<a href="#"><img src="fb.png"></a>
<a href="#"><img src="twit.png"></a>
<a href="#"><img src="what.png"></a>
<a href="#"><img src="linked.png"></a>
<a href="#"><img src="you.png"></a>
</div>
</div>
</section>
<!-- -----------footer section------- -->
<section id="footer">
<img src="wave3.png" class="footer-img">
<div class="container">
<div class="row">
<div class="col-md-1 footer-box">
  <img src="ashu.jpg" class="kirti">
</div>
<div class="col-md-7 footer-box">
  <p><i class="fa fa-map-marker"></i>sr no 44,kothrud,pune</p>
  <p><i class="fa fa-phone"></i>+91 9112749435</p>
  <p><i class="fa fa-envelope-o"></i>ashwinikhawale205@gmail.com</p>
</div>
<div class="col-md-1 footer-box">
  <img src="kirti1.jpg" class="kirti">
</div>
<div class="col-md-3 footer-box">
  <p><i class="fa fa-map-marker"></i>Jakat Naka,Pune</p>
  <p><i class="fa fa-phone"></i>+91 7796862057</p>
  <p><i class="fa fa-envelope-o"></i>kirti.pawar97@gmail.com</p>
</div>
</div>
<hr>
<p class="copyright"><b>AK's Online Grocerry Store</b></p>
</div>
</section>
</form>
</body>
</html>

<?php
    if(isset($_POST['itemSelected'])){
        $_SESSION['category'] = $_POST['itemSelected'];
        echo "<script> location.href='/new/item.php'; </script>";
    }
?>
