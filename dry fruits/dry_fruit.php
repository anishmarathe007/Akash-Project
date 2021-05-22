<?php
session_start();
?>

<html>
<head>
<title>OGS</title>
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
<form action="dry_fruit.php" method="POST">
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

<!-- ---------- Dry Fruits  section------------ -->

<section id="boyfashion">
	<div class="container">
		<h1 class="title text-center" style="margin-top: 50px;"> DRY FRUITS </h1>
		<div class="row">
			<div class="col-md-3 testimonials">
				<img src="Almond.jpg">
				<div>
					<p class="user-details"> <b>Almond</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 50 per 100 gm</b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="alselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="alselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>

				<input type="submit" value="ADD TO CART" name="almondadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Cashew.jpg">
				<div>
					<p class="user-details"> <b>Cashew</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 55 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="caselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="caselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="cashewadd" class="btn btn-info" style="margin-left: 55px;">

				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Pista.jpg">
				<div>
					<p class="user-details"> <b>Pista</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 45 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="piselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="piselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="pistaadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Dry Anjeer.jpg">
				<div>
					<p class="user-details"> <b>Dry Anjeer</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 55 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="daselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="daselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="dryanjeeradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Jardalu.jpg">
				<div>
					<p class="user-details"> <b>Jardalu</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 50 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="jselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="jselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="jardaluadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Bedana.jpg">
				<div>
					<p class="user-details"> <b>Bedane</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 45 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="beselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="beselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="bedaneadd" class="btn btn-info" style="margin-left: 55px;">

				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Dates Powder.jpg">
				<div>
					<p class="user-details"> <b>Dates Powder</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="dpselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="dpselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="datespowderadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Raisins.jpg">
				<div>
					<p class="user-details"> <b>Raisins</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 40 per 100 gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="raselectgm">
                        <option>100gm</option>
                        <option>200gm</option>
                        <option>300gm</option>
                        <option>400gm</option>
                        <option>500gm</option>
                        <option>600gm</option>
                        <option>700gm</option>
                        <option>800gm</option>
                        <option>900gm</option>
                        <option>1000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="raselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
				<input type="submit" value="ADD TO CART" name="raisinadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

</div></div>
</section>
</form>
</body>
</html>

<?php
function returnValue($val){
    if($val=='100gm')
        return 1;
    else if($val=='200gm')
        return 2;
    else if($val=='300gm')
        return 3;
    else if($val=='400gm')
        return 4;
    else if($val=='500gm')
        return 5;
    else if($val=='600gm')
        return 6;
    else if($val=='700gm')
        return 7;
    else if($val=='800gm')
        return 8;
    else if($val=='900gm')
        return 9;
    else if($val=='1000gm')
        return 10;
}

$conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');

if(isset($_POST['almondadd'])){

    $val = $_POST['alselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Almond'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['alselectgm'];
    $dsize = $_POST['alselectqty'];
    $alTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$alTotal WHERE iname='Almond'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['cashewadd'])){

    $val = $_POST['caselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Cashew'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['caselectgm'];
    $dsize = $_POST['caselectqty'];
    $alTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$caTotal WHERE iname='Almond'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['pistaadd'])){

    $val = $_POST['piselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Pista'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['piselectgm'];
    $dsize = $_POST['piselectqty'];
    $piTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$piTotal WHERE iname='Pista'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['dryanjeeradd'])){

    $val = $_POST['daselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Dry Anjeer'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['daselectgm'];
    $dsize = $_POST['daselectqty'];
    $daTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$daTotal WHERE iname='Dry Anjeer'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['jardaluadd'])){

    $val = $_POST['jselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Jardalu'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['jselectgm'];
    $dsize = $_POST['jselectqty'];
    $jTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$jTotal WHERE iname='Jardalu'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['bedaneadd'])){

    $val = $_POST['beselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Bedane'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['beselectgm'];
    $dsize = $_POST['beselectqty'];
    $beTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$beTotal WHERE iname='Bedane'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['datespowderadd'])){

    $val = $_POST['dpselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Dates Powder'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['dpselectgm'];
    $dsize = $_POST['dpselectqty'];
    $dpTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$dpTotal WHERE iname='Dates Powder'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['raisinadd'])){

    $val = $_POST['raselectgm'];
    $gms = returnValue($val);

    $query = "SELECT drprice FROM dry_fruit WHERE drname='Raisin'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['drprice'];
    }

    $dqty = $_POST['raselectgm'];
    $dsize = $_POST['raselectqty'];
    $raTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$raTotal WHERE iname='Raisin'";
    $res = mysqli_query($conn,$query);
}
?>
