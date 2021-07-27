<?php
include('conn.php');
$id = $_GET["id"];
$stmt =$conn->prepare("SELECT * FROM artwork where AWID=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

/*$sql2="SELECT * FROM artist
LEFT JOIN artwork
ON AID = '$id'.AID";
 $query2=mysqli_query($conn,$sql2);
 //$row1=$query2->fetch_assoc();
//$r = mysqli_fetch_array($query);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/art.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
<header>
    <?php include('chunks/navbar.php'); ?>  
  </header>
  <section>
      <div class="container pt-5">
          <div class="row">

              <div class="col-12 col-md-6">
               
                <?php  echo '<img class="image w-100" src="'. $row['imgsrc']. '" alt="'. $row['name']. '  class="w-100 h-100""/>'; ?>
              </div>

              <div class="col-12 col-md-6 p-5">
                <h2><?php echo $row['name'] ?></h2>
               <h1 style="color: white;">&#8377;<?php echo $row['price'] ?></h1>
               <p><?php echo $row['description'] ?>
           </p>
          <a class="btn button" role="button" href="order.php?AWID=<?php echo $row['AWID'] ?>">Buy Now</a>
               
              </div>

          </div>
      </div>
  </section>
  <?php include('chunks/footer.php'); ?>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>