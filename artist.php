<?php include('conn.php');
$id = $_GET["id"];
$stmt =$conn->prepare("SELECT * FROM artwork where AID=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/artist.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
  <header>
    <?php include('chunks/navbar.php'); ?>  
  </header>
  <section class="artist">
    <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-bio-tab" data-toggle="pill" href="#pills-bio" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-image" aria-selected="false">Artwork</a>
              </li>
      </ul>
      <div class="tab-content mt-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-bio" role="tabpanel" aria-labelledby="pills-bio-tab">
          <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h4><?php echo $row['name'] ?></h4>
                        <p>Born 1975, Peshawar, Pakistan</p>
                        <br/>
                        <p>
                             <?php echo $row['description'] ?>
                        </p>
                       
                    </div>
                    <div class="d-none d-md-block col-md-6">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="500px" height="450px" alt="artist" class=""/>
                    </div>
                </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
        <div class="grid-container">
            <a href="art.html">
    
           <div class="grid-item item1">
                 <img class="image" src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHBhaW50aW5nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="artist1"/>
                 <h4 class="name">one</h4>
            </div>  </a>
            <div class="grid-item item2">
                <img class="image" src="https://images.unsplash.com/photo-1549289524-06cf8837ace5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8cGFpbnRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="artist1"/>
                <h4 class="name">two</h4>
           </div>
           <div class="grid-item item3">
            <img class="image" src="https://images.unsplash.com/photo-1583119912267-cc97c911e416?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGFpbnRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="artist1"/>
            <h4 class="name">three</h4>
           </div>
           <div class="grid-item item4">
            <img class="image" src="https://images.unsplash.com/photo-1579783928621-7a13d66a62d1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHBhaW50aW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="artist1"/>
            <h4 class="name">four</h4>
           </div>
           <div class="grid-item item5">
            <img class="image" src="https://images.unsplash.com/flagged/photo-1567934150921-7632371abb32?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHBhaW50aW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="artist1"/>
            <h4 class="name">four</h4>
           </div>
            <div class="grid-item item6">
                <img class="image" src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHBhaW50aW5nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="artist1"/>
                <h4 class="name">four</h4>
            </div>
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