<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
</head>
<body>
<form method="POST" action="bill.php">
<div id="contentDW" class="container">
  <h1 style = 'text-align: center;'>AK's Online Grocery Stores</h1>
  <p style = 'text-align: center;'>GSTIN : 27AAHFA5304J1ZL</p>
  <p style = 'text-align: center;'>Main Branch : 1537, Sadashiv Peth, Tilak Road, Near Mharashtra Mandal, Pune 411030</p>
  <p style = 'text-align: center;'>Factory : Plot No. 2, Sr No 26, Kondhwa Tayani Industrial Istate, Sutarwala Compound, Kondhwa Budruk, Pune 411048</p>
  <p style = 'text-align: center;'>Contact : 8408817441</p>
  <p>Recipt No : 1</p>
  <?php $_date = date("d-m-Y"); ?>
  <p>Date : <?php echo $_date; ?></p>
   <p>Customer Name : <?php echo $_SESSION['CName']; ?></p>
   <p>Billing Address : <?php echo $_SESSION['bAddress']; ?></p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>ITEM QTY</th>
        <th>MRP per ITEM</th>
        <th>NO. OF SUCH ITEMS</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $conn = mysqli_connect('localhost','root','root','project') or die('Unable To connect');
            $query = "SELECT * FROM cart";
            $result = mysqli_query($conn,$query);
            $grandtotal = 0;
            $greatGrandTotal = 0;
            while($row = mysqli_fetch_assoc($result)){
                if($row['qty']!=NULL){ ?>
                         <tr>
                            <td><?php echo $row['iname'];?></td>
                            <td><?php echo $row['qty']; ?></td>
                            <td><?php echo ($row['price'] / $row['size']); ?></td>
                            <td><?php echo $row['size']; ?></td>
                            <td><?php echo $row['price'];
                                   $grandtotal = $grandtotal + $row['price']; ?></td>
                         </tr>
          <?php }
            }?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Sub Total</td>
        <td><?php echo $grandtotal; $greatGrandTotal += $grandtotal; ?></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>CGST 9%</td>
        <td><?php echo $grandtotal*0.09; $greatGrandTotal += $grandtotal*0.09; ?></td>
      </tr>
       <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>SGST 9%</td>
        <td><?php echo $grandtotal*0.09; $greatGrandTotal += $grandtotal*0.09 ?></td>
      </tr>
       <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total</td>
        <td><?php echo $greatGrandTotal; ?></td>
      </tr>
    </tbody>
  </table>
      &copy; AK's Online Grocery Stores
    <center>
      <a href="javascript:demoFromHTML()" class="button">DOWNLOAD</a>
      <br><br>
      <button type="submit" name="logout"> LOGOUT</button>
    </center>

</div>
<script type="text/javascript">
  function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#contentDW')[0];

        // we support special element handlers. Register them with jQuery-style
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 20,
            bottom: 5,
            left: 5,
            width: 1000
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                // dispose: object with X, Y of the last line add to the PDF
                //          this allow the insertion of new lines after html
                pdf.save('Invoice.pdf');
            }, margins
        );
    }
</script>
</script>
</form>
</body>
</html>

<?php
  if(isset($_POST['logout'])){
    $_SESSION['lo'] = 0;
    echo "<script>alert('Thank You for shopping!');</script>";
    echo "<script> location.href='/new/home.php'; </script>";
  }
?>
