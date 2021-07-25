<?php
include('conn.php');
$sql = 'SELECT * FROM artist';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/allArtist.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
    <header>
      <?php include('chunks/navbar.php'); ?>
  </header>
  <section>
    <div class="title">Our Artists</div>
      <div class="grid-container">
       
      <?php if($result = mysqli_query($conn, $sql)){
         $x=mysqli_num_rows($result);
         if(mysqli_num_rows($result) > 0){
          for ($i =0 ; $i <= $x; $i++) {
          while($row = mysqli_fetch_array($result) ){
           $i++;
            echo  '<div class="grid-item item'.$i.' ">';
            echo   '<img class="image" src="https://images.unsplash.com/photo-1621786040662-455f23dcb6ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8ZmFtb3VzJTIwYXJ0aXN0c3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="artist1"/>';
            echo '<a class="name" href="artist.php?id='. $row['AID']. '">' . $row['name']. '</a>'; 
            echo "</div>";
          }
        }
    } else{
        echo "Artists Empty";
    }
} else{
    echo "ERROR: Could not able to execute" ;
}
 ?>
    
       
       </div>
  </section>
  <?php include('chunks/footer.php'); ?>  
</body>
</html>