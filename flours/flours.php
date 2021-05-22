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
<form action="flours.php" method="POST">
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

<!-- ---------- Flours section------------ -->

<section id="boyfashion">
	<div class="container">
		<h1 class="title text-center" style="margin-top: 50px;">FLOURS</h1>
		<div class="row">
			<div class="col-md-3 testimonials">
				<img src="Wheat Flour.jpg">
				<div>
					<p class="user-details"> <b>Wheat Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 1000gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="whselectgm">
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="whselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="wheatflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Jowar Flour.jpg">
				<div>
					<p class="user-details"> <b>Jowar Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 50 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="joselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="joselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="jowarflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Bajara Flour.jpg">
				<div>
					<p class="user-details"> <b>Bajara Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 44 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="baselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="baselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="bajaraflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Ragi Flour.jpg">
				<div>
					<p class="user-details"> <b>Ragi Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="raselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
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
				<input type="submit" value="ADD TO CART" name="ragiflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Upwas Bhajani.jpg">
				<div>
					<p class="user-details"> <b>Upwas Bhajani</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 75 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="upselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="upselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="upwasbhajaniadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>
			<div class="col-md-3 testimonials">
				<img src="Chakali Bhajani.jpg">
				<div>
					<p class="user-details"> <b>Chakali Bhajani</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 65 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="chselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="chselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="chakalibhajaniadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Gram Flour Fine.jpg">
				<div>
					<p class="user-details"> <b>Fine Gram Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b>90 per 500gm</b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="fgfselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="fgfselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="finegramflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Gram Flour.jpg">
				<div>
					<p class="user-details"> <b>Gram Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b>90 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="gfselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="gfselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="gramflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Varai Peeth.jpg">
				<div>
					<p class="user-details"> <b>Varai Peeth</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 65 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="vaselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="vaselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="varaipeethadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Shingada Peeth.jpg">
				<div>
					<p class="user-details"> <b>Shingada Peeth</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 100 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="shselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="shselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="shingadapeethadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Rice Flour.jpg">
				<div>
					<p class="user-details"> <b>Rice Flour</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 35 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="rfselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="rfselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="riceflouradd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Thalipeeth Bhajani.jpg">
				<div>
					<p class="user-details"> <b>Thalipeeth Bhajani</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 130 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="tbselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="tbselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="thalipeethbhajaniadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Satu Flour.jpg">
				<div>
					<p class="user-details"> <b>Satu Peeth</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="spselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="spselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="satupeethadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Peethisakhar.jpg">
				<div>
					<p class="user-details"> <b>Peethisakhar</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="psselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="psselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="pithisakharadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Amboli Peeth.jpg">
				<div>
					<p class="user-details"> <b>Amboli Peeth</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="apselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="apselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="ambolipeethadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Moong Dal Peeth.jpg">
				<div>
					<p class="user-details"> <b>Moong Dal Peeth</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 70 per 250gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="mdselectgm">
                    	<option>250gm</option>
                        <option>500gm</option>
                        <option>750gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="mdselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="moongdaalpeethadd" class="btn btn-info" style="margin-left: 55px;">
				</div>
			</div>

			<div class="col-md-3 testimonials">
				<img src="Maida.jpg">
				<div>
					<p class="user-details"> <b>Maida</b> <br><br>
					<i class="fa fa-inr" style="font-size:15px"></i>
					<b> 44 per 500gm </b><br>
					<br/><b> Quantity</b> &nbsp;&nbsp;&nbsp;
                    <select name="maiselectgm">
                        <option>500gm</option>
                        <option>1000gm</option>
                        <option>1500gm</option>
                        <option>2000gm</option>
                    </select>
                    <br/>
                    <br><b> Size </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="maiselectqty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
					</p>
				<input type="submit" value="ADD TO CART" name="maidaadd" class="btn btn-info" style="margin-left: 55px;">
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
    else if($val=='150gm')
        return 1.5;
    else if($val=='200gm')
        return 2;
    else if($val=='250gm')
        return 2.5;
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
    else if($val=='750gm')
        return 7.5;
    else if($val=='800gm')
        return 8;
    else if($val=='900gm')
        return 9;
    else if($val=='1000gm')
        return 10;
    else if($val=='1500gm')
        return 10.5;
    else if($val=='2000gm')
        return 11;
}

$conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');

if(isset($_POST['wheatflouradd'])){

    $val = $_POST['whselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Wheat Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['whselectgm'];
    $dsize = $_POST['whselectqty'];
    $whTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$whTotal WHERE iname='Wheat Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['bajaraflouradd'])){

    $val = $_POST['baselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Bajara Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['baselectgm'];
    $dsize = $_POST['baselectqty'];
    $baTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$baTotal WHERE iname='Bajara Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['jowarflouradd'])){

    $val = $_POST['joselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Jowar Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['joselectgm'];
    $dsize = $_POST['joselectqty'];
    $joTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$joTotal WHERE iname='Jowar Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['chakalibhajaniadd'])){

    $val = $_POST['chselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Chakali Bhajani'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['chselectgm'];
    $dsize = $_POST['chselectqty'];
    $chTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$chTotal WHERE iname='Chakali Bhajani'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['ambolipeethadd'])){

    $val = $_POST['apselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Amboli Peeth'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['apselectgm'];
    $dsize = $_POST['apselectqty'];
    $apTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$apTotal WHERE iname='Amboli Peeth'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['finegramflouradd'])){

    $val = $_POST['fgfselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Fine Gram Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['fgfselectgm'];
    $dsize = $_POST['fgfselectqty'];
    $fgfTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$fgfTotal WHERE iname='Fine Gram Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['gramflouradd'])){

    $val = $_POST['gfselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Gram Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['gfselectgm'];
    $dsize = $_POST['gfselectqty'];
    $gfTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$gfTotal WHERE iname='Gram Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['moongdaalpeethadd'])){

    $val = $_POST['mdselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Moong Dal Peeth'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['mdselectgm'];
    $dsize = $_POST['mdselectqty'];
    $mdTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$mdTotal WHERE iname='Moong Dal Peeth'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['pithisakharadd'])){

    $val = $_POST['psselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Peethisakhar'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['psselectgm'];
    $dsize = $_POST['psselectqty'];
    $psTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$psTotal WHERE iname='Peethisakhar'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['ragiflouradd'])){

    $val = $_POST['raselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Ragi Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['raselectgm'];
    $dsize = $_POST['raselectqty'];
    $raTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$raTotal WHERE iname='Ragi Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['riceflouradd'])){

    $val = $_POST['rfselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Rice Flour'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['rfselectgm'];
    $dsize = $_POST['rfselectqty'];
    $rfTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$rfTotal WHERE iname='Rice Flour'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['satupeethadd'])){

    $val = $_POST['saselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Satu Peeth'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['saselectgm'];
    $dsize = $_POST['saselectqty'];
    $saTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$saTotal WHERE iname='Satu Peeth'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['shingadapeethadd'])){

    $val = $_POST['shselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Shingada Peeth'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['shselectgm'];
    $dsize = $_POST['shselectqty'];
    $shTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$shTotal WHERE iname='Shingada Peeth'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['thalipeethbhajaniadd'])){

    $val = $_POST['tbselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Thalipeeth Bhajani'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['tbselectgm'];
    $dsize = $_POST['tbselectqty'];
    $tbTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$tbTotal WHERE iname='Thalipeeth Bhajani'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['upwasbhajaniadd'])){

    $val = $_POST['upselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Upwas Bhajani'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['upselectgm'];
    $dsize = $_POST['upselectqty'];
    $ubTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$ubTotal WHERE iname='Upwas Bhajani'";
    $res = mysqli_query($conn,$query);
}
else if(isset($_POST['varaipeethadd'])){

    $val = $_POST['vaselectgm'];
    $gms = returnValue($val);

    $query = "SELECT fprice FROM flours WHERE fname='Varai Peeth'";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row['fprice'];
    }

    $dqty = $_POST['vaselectgm'];
    $dsize = $_POST['vaselectqty'];
    $vaTotal = ($gms * $dsize * $price);

    $query = "UPDATE cart SET qty = '$dqty', size=$dsize, price=$vaTotal WHERE iname='Varai Peeth'";
    $res = mysqli_query($conn,$query);
}
?>
