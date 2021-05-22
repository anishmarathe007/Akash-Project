<?php
session_start();

$conn = mysqli_connect('localhost','root','root','project') or die('Unable To connect');
$query = "SELECT * FROM cart";
$result = mysqli_query($conn,$query);
$grandtotal=0;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
</head>
<body>
    <form action="cart.php" method="POST">
         <center>
            <hr/>
            <h2> Your CART </h2>
            <hr/>
            <br/>
            <table border=1 cellspacing="2px" cellpadding="3px" style="text-align: center;">
                <tr>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                    <th>Price Per Item </th>
                    <th>Number of such items</th>
                    <th>Total Price</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['qty']!=NULL){ ?>
                         <tr>
                            <td><?php echo $row['iname'];?></td>
                            <td><?php echo $row['qty']; ?></td>
                            <td><?php echo ($row['price'] / $row['size']); ?></td>
                            <td><?php echo $row['size']; ?></td>
                            <td><?php echo $row['price'];
                                   $grandtotal = $grandtotal + $row['price']; ?></td>
                            <td> <button name="remove" type="submit" value='<?php echo $row['iname'];?>'>Remove</button> </td>
                        </tr>
                <?php
                    }
                }
                ?>
                    <tr>
                        <th colspan="4">GRAND TOTAL</th>
                        <th><?php echo $grandtotal; ?></th>
                    </tr>
            </table>
            <hr/>
            <input type="submit" name="back" value="Go Back">
            <input type="submit" name="chk" value="CheckOut">
        </center>
    </form>
    </body>
</html>

<?php

if (isset($_POST['remove'])) {
    $prodName = $_POST['remove'];
    $query = "UPDATE cart SET qty = NULL, size=NULL, price=NULL WHERE iname='$prodName'";
    $res = mysqli_query($conn,$query);
    echo "<script> location.href='cart.php'; </script>";
}
else if(isset($_POST['back'])){
     echo "<script> location.href='/new/item.php'; </script>";
}
else if(isset($_POST['chk'])){
     if($_SESSION['lo']==1){
        echo "<script>alert('Kindly Enter the Billing Address details, so that we can deliver the GOODS.');</script>";
        echo "<script> location.href='/new/billaddr.php'; </script>";

    }
     else{
        echo "<script>alert('Dear User, you have not logged in yet. Please Login to start shoping..!!');</script>";
        echo "<script> location.href='/new/login.php'; </script>";
        exit;
    }
}

?>
