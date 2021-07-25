<?php
include('conn.php');
$id = $_GET["id"];
$stmt =$conn->prepare("SELECT * FROM artwork where AWID=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$sql="SELECT  name FROM artist
LEFT JOIN artwork
ON AID = artwork.AID";

$query = mysqli_query($conn,"SELECT  name FROM artist
LEFT JOIN artwork
ON AID = artwork.AID");
//$r = mysqli_fetch_array($query);
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
                <img src="https://images.unsplash.com/photo-1586537049236-b212dc756931?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fHBhaW50aW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                        alt="" 
                        class="w-100 h-100"
                />
              </div>

              <div class="col-12 col-md-6 p-5">
                <h2><?php echo $row['name'] ?></h2>
               <h1 style="color: white;">&#8377;99</h1>
               <a  class="link" href="#"><h5>Artist name</h5></a>
               <p><?php echo $row['description'] ?>
           </p>
          <?php echo '<a class="btn button" role="button" href="orders.php?id='. $row['AWID']. '">Add to cart</a>'; ?> 
               
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