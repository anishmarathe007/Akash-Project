<?php
    session_start();
    $category = $_SESSION['ADcategory'];
    $conn = mysqli_connect('localhost','root','root','project') or die('Unable To connect');
    $q = "SELECT * from product where category='$category'";
    $r = mysqli_query($conn,$q);

    $getLastPno = 'SELECT pno FROM product order by pno';
    $res = mysqli_query($conn,$getLastPno);

    $count = mysqli_fetch_lengths($res);

    $i = 0;

    while($row = mysqli_fetch_assoc($res)){
        $srNo = $row['pno'];
    }
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
<form action="item_update.php" method="POST">
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      </li>
       <li class="nav-item">
        <a class="nav-link" href="admin.php">BACK</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!-- ---------- Dairy  section------------ -->

<section id="boyfashion">
    <div class="container">
        <h1 class="title text-center" style="margin-top: 50px;"> <?php echo $category; ?></h1>

        <div class="row">
            <?php
                $i=0; $array = array();
                while($row = mysqli_fetch_assoc($r)){
            ?>
            <div class="col-md-3 testimonials">
                <img src='<?php echo $row['image']; ?>'>
                <div>
                    <p class="user-details"> <b><?php echo $row['pname']; ?></b> <br><br>
                    <i class="fa fa-inr" style="font-size:15px"></i>
                    <b> <?php echo $row['price']; ?> per <?php echo $row['qty']; ?> </b><br>
                    <br/><b> Quantity <?php echo $row['qty']; ?></b><br/><br><br>
                    <button type="submit" value='<?php echo $row['pname']; ?>' name="Submit" class="btn btn-info" style="margin-left: 55px;">EDIT</button><button type="submit" value='<?php echo $row['pname']; ?>' name="Remove" class="btn btn-info" style="margin-left: 55px;">REMOVE</button>
                </p>
                </div>
            </div>

        <?php
        }
        ?>
        <div class="col-md-3 testimonials">
                <input type="file" name="image">

                <div>
                    <br>

                    <p class="user-details"> <b>Serial Number : <?php echo $srNo+1; ?></b> <br>
                    <p class="user-details"> <b><input type="text" placeholder="Enter Product Name" name="name"></b> <br>
                    <p class="user-details"> <b><input type="text" placeholder="Enter Product Nick Name" name="nname"></b> <br><br>
                            <b> <input type="text" name="price" placeholder="Enter Price"></b><br><br>
                            <b>Quantity</b><br>
                            <br><input type="radio" name="r1" value="100 ml">100 ml &nbsp;&nbsp;&nbsp; <input type="radio" name="r1" value="100 gm">100 gm <br>
                            <!-- <br/><b> Quantity  </b><br/><br><br>
                            <br/><b> Quantity 100gm</b><br/><br><br> -->
                            <br/><br><br>
                        <button type="submit" name="ADD" class="btn btn-info" style="margin-left: 55px;">ADD Product</button>
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
</form>
</body>
</html>
<?php
$conn = mysqli_connect('localhost','root','root','project') or die('Unable To connect');

if(isset($_POST['Submit'])){
    $_SESSION['dbname'] = $_POST['Submit'];
    echo "<script> location.href='/new/update.php'; </script>";
}
else if (isset($_POST['ADD'])) {

    $name = $_POST['name'];
    $nickName = $_POST['nname'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $quantity = $_POST['r1'];

    if(!(empty($name)))
        {
            if(!(empty($nickName)))
            {
                if(!(empty($image)))
                {
                    if(!(empty($price)))
                    {
                        if(!(empty($quantity)))
                        {
                            $q = "INSERT INTO product values($srNo+1,'$name',$price,'$image','$category','$quantity');";
                            $r = mysqli_query($conn,$q);
                            $cq = "INSERT INTO cart(iname,nn) values('$name','$nickName');";
                            $cr = mysqli_query($conn,$cq);
                            echo "<script>alert('Data Inserted Successfully..!!');</script>";
                            echo "<script> location.href='/new/item_update.php'; </script>";
                        }
                        else{
                            echo "<script>alert('Please select the quantity');</script>";
                        }
                    }
                    else{
                        echo "<script>alert('Please enter the price');</script>";
                    }
                }
                else{
                    echo "<script>alert('Please select some image');</script>";
                }
            }
            else{
                echo "<script>alert('Please enter some nick name');</script>";
            }
        }
        else{
            echo "<script>alert('Please enter some name');</script>";
        }
}
else if(isset($_POST['Remove'])){
    $remove = $_POST['Remove'];

    $cq = "DELETE FROM product WHERE pname='$remove'";
    $cr = mysqli_query($conn,$cq);

    $cq = "DELETE FROM cart WHERE iname='$remove'";
    $cr = mysqli_query($conn,$cq);

    echo "<script>alert('Removed Successfully..!!');</script>";
    echo "<script> location.href='/new/item_update.php'; </script>";
}
?>
