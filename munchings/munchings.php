<?php
session_start();

$conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');

$names = array();
$q = "SELECT mname FROM munchings order by msno";
$r = mysqli_query($conn,$q);
$i=0;
while($row = mysqli_fetch_assoc($r)){
    $names[$i] = $row['mname'];
    $i++;
}


$q = mysqli_query($conn,"select * from munchings where mname='". $names[0] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname1 = $row['mname'];
	$price1 = $row['mprice'];
	$mimage1 = $row['mimage'];
}

$q = mysqli_query($conn,"select * from munchings where mname='". $names[1] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname2 = $row['mname'];
	$price2 = $row['mprice'];
	$mimage2 = $row['mimage'];
}

$q = mysqli_query($conn,"select * from munchings where mname='". $names[2] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname3 = $row['mname'];
	$price3 = $row['mprice'];
	$mimage3 = $row['mimage'];
}

$q = mysqli_query($conn,"select * from munchings where mname='". $names[3] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname4 = $row['mname'];
	$price4 = $row['mprice'];
	$mimage4 = $row['mimage'];
}

$q = mysqli_query($conn,"select * from munchings where mname='". $names[4] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname5 = $row['mname'];
	$price5 = $row['mprice'];
	$mimage5 = $row['mimage'];
}

$q = mysqli_query($conn,"select * from munchings where mname='". $names[5] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname6 = $row['mname'];
	$price6 = $row['mprice'];
	$mimage6 = $row['mimage'];
}

$q = mysqli_query($conn,"select * from munchings where mname='". $names[6] . "'");

while($row = mysqli_fetch_assoc($q)){
	$mname7 = $row['mname'];
	$price7 = $row['mprice'];
	$mimage7 = $row['mimage'];
}
?>

<html>
<head>
<title>Munchings</title>
<link rel="stylesheet" href="product.css">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="munchings.php" method="POST">
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/aproject/cart.php">CART</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/aproject/home.php#services">BACK</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!-- ---------- Munchings section------------ -->

<section id="boyfashion">
	<div class="container">
		<h1 class="title text-center" style="margin-top: 50px;">MUNCHINGS & SNACKS</h1>
		<div class="row">
			<div class="col-md-3 testimonials">
				<img src= <?php echo $mimage1; ?> />
				<div>
					<p class="user-details"> <b><?php echo $mname1; ?></b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b><?php echo $price1; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="spselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="shankarpaleadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>
			<div class="col-md-3 testimonials">
				<img src="Farsan.jpg">
				<div>
					<p class="user-details"> <b><?php echo $mname2; ?></b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> <?php echo $price2; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="fselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="farsanadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Tomato.jpg">
				<div>
					<p class="user-details"> <b><?php echo $mname3; ?> (200 gm)</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> <?php echo $price3; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="tsselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="tomatoshevadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>
			<div class="col-md-3 testimonials">
				<img src="Kachori.jpg">
				<div>
					<p class="user-details"> <b><?php echo $mname4; ?></b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> <?php echo $price4; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="kselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="kachoriadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Chana.jpg">
				<div>
					<p class="user-details"> <b><?php echo $mname5; ?> (200 gm)</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> <?php echo $price5; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="mcselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="masalachanaadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Bakarwadi.jpg">
				<div>
					<p class="user-details"> <b><?php echo $mname6; ?> (200 gm)</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> <?php echo $price6; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="bselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="bakarwadiadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Oregano.jpg">
				<div>
					<p class="user-details"> <b><?php echo $mname7; ?> (200 gm)</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> <?php echo $price7; ?> per 200gm </b><br>
					<br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="osselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="oreganosevadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>
</div></div>
</section>
</form>
</body>
</html>

<?php
$conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');

if(isset($_POST['shankarpaleadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname1'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['spselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname1'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['bakarwadiadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname6'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['spselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname6'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['farsanadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname2'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['fselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname2'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['tomatoshevadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname3'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['tsselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname3'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['kachoriadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname4'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['kselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname4'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['oreganosevadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname7'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['osselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname7'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['masalachanaadd'])){

    // $val = $_POST['bselectgm'];
    $gms = 1;

    $query = "SELECT mprice FROM munchings WHERE mname='$mname5'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['mprice'];
    }

    $dqty = '200gm';
    $dsize = $_POST['mcselectqty'];
    $Total = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$Total WHERE iname='$mname5'";
    $res = mysqli_query($conn,$query);
}
?>
