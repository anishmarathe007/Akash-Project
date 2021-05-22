<?php

session_start();
$proName = $_SESSION['dbname'];
$conn = mysqli_connect('localhost','root','1248','project') or die('Unable To connect');
$q = mysqli_query($conn,"SELECT * FROM product WHERE pname='$proName'");

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Groccery</title>
<link rel="stylesheet" href="update.css">
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
<form action="update.php" method="POST">
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
			<?php
				 while($row = mysqli_fetch_row($q)){
     			   $sno = $row[0];
     			   $name = $row[1];
     			   $price = $row[2];
     			   $image = $row[3];
    			}
			?>
			<div class="col-md-6">
				<h1>Old Details</h1>
				<p>Serial Number: <?php echo $sno; ?> </p>
				<p>Product Name: <?php echo $name; ?></p>
				<p>Product Price: <?php echo $price; ?></p>
				<p>Product Image: <img src=<?php echo $image; ?> ></p>

			</div>
			<div class="col-md-6 text-center">
				<h1>New Details</h1>
				<!-- <p>Serial Number: <input type="text"></p> -->
				<p>Product Name: <input type="text" name="newName"></p>
				<p>Product Nick-Name: <input type="text" name="newNickName"></p>
				<p>Product Price: <input type="text" name="newPrice"></p>
				<p>Product Image: <input type="file" value="Browse" name ="image"></p>
				<p><input type="submit" name="s1" value="UPDATE">
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
	if(isset($_POST['s1'])){

		$newMname = $_POST['newName'];
		$newMPrice = $_POST['newPrice'];
		$newImage = $_POST['image'];
		$newnickName = $_POST['newNickName'];

		if(!(empty($newMname)))
		{
			if(!(empty($newMPrice)))
			{
				if(!(empty($newImage)))
				{
					if(!(empty($newnickName)))
					{
						if($newMname == $name)
						{
							echo "<script>alert('Enter differant Name from that of the previous.');</script>";
						}
						else
						{
							if($newMPrice == $price)
							{
								echo "<script>alert('Enter differant Price from that of the previous.');</script>";
								$flag=1;
							}
							else
							{
								$q = "UPDATE product SET pname = '$newMname', price = $newMPrice WHERE pno = $sno";
								$r = mysqli_query($conn,$q);
								$cq = "UPDATE cart SET iname = '$newMname', nn = '$newnickName' where iname = '$name'";
								$r = mysqli_query($conn,$cq);
								echo "<script>alert('Data Updated Successfully..!!');</script>";
								echo "<script> location.href='/aproject/admin.php'; </script>";
							}
						}
					}
					else
					{
						echo "<script>alert('Nick Name Field Cannot be empty');</script>";
					}
				}
				else
				{
					echo "<script>alert('Choose some image, you can choose the same one also.');</script>";
				}
			}
			else
			{
				echo "<script>alert('Updated Price Field Cannot be empty');</script>";
			}
		}
		else
		{
			echo "<script>alert('Name Field Cannot be empty');</script>";
		}
	}
?>
