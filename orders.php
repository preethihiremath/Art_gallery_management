<?php
include('conn.php');
$id = $_GET["AWID"];
$stmt =$conn->prepare("SELECT * FROM artwork where AWID=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_row();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="./style/orders.css">
 
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
  <header>
    <?php include('chunks/navbar.php'); ?>  
  </header>

  <div class="container main-section">
    <div class="row">
    <div class="col-lg-12 pb-2">
        <h3 class="myorders">My orders</h3>
    </div>
    <div class="col-lg-12 pl-3 pt-3">
        <table class="table table-hover border bg-white">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th style="width:10%;">Quantity</th>
                    <th>Subtotal</th>
                    <th>Remove</th>
                </tr>
            </thead>

        <tbody>
        <tr>
        <td>
            <div class="row">
                <div class="col-lg-2 Product-img">
                <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJ0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="img-responsive"/>
                </div>
                <div class="col-lg-10">
                       <h4 class="nomargin"><?php echo $row['name']; ?></h4>
                </div>
            </div>
        </td>

        <td> <?php echo $row['price']; ?> </td>

        <td data-th="Quantity">
             <input type="number" class="form-control text-center" value="1">
        </td>
        <td><?php echo $row['price']; ?></td>
        
        <td class="actions" data-th="" style="width:10%;">
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
        </td>
        <tfoot>
            </tr>
                <td><a href="collection.php" class="btn btn-warning text-white"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="1" class="hidden-xs"></td>
                <td class="hidden-xs text-center" style="width:10%;"><strong>Total </strong></td>
                <td class="hidden-xs text-center" class="total amount" style="width:10%;"><strong><?php echo $row['price']; ?></strong></td>
                <td> <?php echo '<a class="btn button" role="button" href="add-orders.php?id='. $row['AWID']. '">Add to cart</a>'; ?> </td>
            </tr>
        </tfoot>
        </table>
    </div>
    </div>
    </div>
    <?php include('chunks/footer.php'); ?>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>