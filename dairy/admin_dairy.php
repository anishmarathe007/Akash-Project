<?php
    session_start();
    $conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');
    $q = "SELECT * from product where category='dairy'";
    $r = mysqli_query($conn,$q);
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
<form action="admin_dairy.php" method="POST">
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
        <a class="nav-link" href="#nursary">BACK</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!-- ---------- Dairy  section------------ -->

<section id="boyfashion">
    <div class="container">
        <h1 class="title text-center" style="margin-top: 50px;"> DAIRY </h1>

        <div class="row">
            <?php
                $i=0; $array = array();
                while($row = mysqli_fetch_assoc($r)){
            ?>
            <div class="col-md-3 testimonials">
                <img src=<?php echo $row['image']; ?>>
                <div>
                    <p class="user-details"> <b><?php echo $row['pname']; ?></b> <br><br>
                    <i class="fa fa-inr" style="font-size:15px"></i>
                    <?php
                    if($row['pname'] == 'Milk'){ ?>
                        <b> <?php echo $row['price']; ?> per 500 ml </b><br>
                        <br/><b> Quantity 100ml </b><br/><br><br>
                    <?php
                    }
                    else{ ?>
                        <b> <?php echo $row['price']; ?> per 100 gm </b><br>
                        <br/><b> Quantity 100gm</b><br/><br><br>
                    <?php
                    } ?>
                    <button type="submit" value=<?php echo $row['pname']; ?> name="Submit" class="btn btn-info" style="margin-left: 55px;">EDIT</button>
                </p>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</section>
</form>
</body>
</html>
<?php
$conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');

if(isset($_POST['Submit'])){
    $_SESSION['dbname'] = $_POST['Submit'];
    echo "<script> location.href='/new/dairy/update.php'; </script>";
}
?>
