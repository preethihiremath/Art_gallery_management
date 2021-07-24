<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css" >
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Name of the website</title>
</head>
<body>
    <div class="mainDiv">
        <section>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="./img/feather.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Name
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><img src=""/></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="collection.html">Artwork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allArtists.html">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                  </ul>
        
                   <div style="z-index: 100;">
  
                   <!-- <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="home.php?logout='1'">
                    <? if (isset($_SESSION['name'])): ?>
                        Logout</p>

                        <? else: ?>
                        <p>Login</p>
                        <? endif; ?>
                            
                  </a> -->
                  <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="login.php">
                        Login</p>       
                  </a>
                  <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="home.php?logout='1'">
                        Logout</p>       
                  </a>

                    <?php if(isset($_SESSION['name'])): ?>
                        <button>
                        <?php   echo $_SESSION['name']; ?>
                    </button>
                     <?php endif ?>

                </div> 
                </div>
              </nav>  
                <div class="container-fluid">
                    <div class="row">
                        <div class="container col-12 col-sm-6 ">
                            <div class=" container intro ml-5">
                                <h1>Arteiste is the one place quench your thirst for genius and beauty</h1>
                                <svg width="100" height="3">
                                    <rect width="100" height="3" rx="3" ry="3" style="fill:#E7B554;opacity:0.7" />
                                  </svg>
                                <h6>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                                </h6>
                                <a class="button1 " href="#" role="button"><span>Explore</span></a>
                            </div>
                           
                        </div>
                        <div class="col-12 col-sm-6">
                           <img class=" mainImg " src="https://images.unsplash.com/photo-1578301978162-7aae4d755744?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzF8fGFydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="mainImage">
                        </div>
                      
                    </div>
                </div>
            </section>
        <section class="exhibition">
    <div class=" container row ">
        <div class=" cont col-12 col-sm-6 mt-5 pt-3">
         
                <input type="radio" name="position" />
                <input type="radio" name="position" checked />
                <input type="radio" name="position" />
                <input type="radio" name="position" />
         
            
            <main id="carousel">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
              <main>
        </div>
        <div class="col-12 col-sm-6">
            <div class=" container exhi ml-5">
                <h1>Our Exhibition</h1>
                <svg width="100" height="3">
                    <rect width="100" height="3" rx="3" ry="3" style="fill:white;opacity:0.7" />
                  </svg>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                </p>
                <a class="button1 " href="#" role="button"><span>Explore</span></a>
            </div>
        </div>
    </div>
        </section>
    
        <section class="artwork">
          <div class=" container row">
                <div class="col-12 col-sm-4">
                    <div class="intro ml-5 pl-5">
                        <h1>Catergories</h1>
                        <svg width="100" height="3">
                            <rect width="100" height="3" rx="3" ry="3" style="fill:#E7B554;opacity:0.7" />
                        </svg>
                        <h6>
                            Explore magnificent stuff based on catergory of myth and all your choices bitchhh
                        </h6>
                        <a class="button1 " href="#" role="button"><span>Explore</span></a>
                    </div>
                </div>
                <div class="container col-12 col-sm-6">
                        <div class="grid-container">
                            <div class="grid-item item1">   <img src="https://images.unsplash.com/photo-1576773689115-5cd2b0223523?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bXl0aG9sb2d5JTIwYXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="catergory"/> 
                            </div>
                            <div class="grid-item item2"><div class="overlay">
                                <h1 class="text">+4</h1>
                              </div><img src=https://images.unsplash.com/photo-1536924940846-227afb31e2a5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="catergory"/></div>
                            <div class="grid-item item3">   <img src="https://images.unsplash.com/photo-1547826039-bfc35e0f1ea8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="catergory"/></div>
                            <div class="grid-item item4">   <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="catergory"/></div>
                        </div>
                 </div>
        </section>
        
        <section  class="footer">

        <footer >
            <div class="container">
                <div class="row">    
                   
                    <div class="col-7 col-sm-6 pt-5">
                        <h5>Our Address</h5>
                        <address>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        HONG KONG<br>
                        <i class="fa fa-phone fa-lg"></i> Tel.: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>Fax: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>Email: <a href="mailto:confusion@food.net">someonezawesome@gmail.com</a>
                    </address>
                    <form class="form-inline my-2 my-lg-0">
                        <input style="background-color: #555557;color: white;" class="form-control form-ip mr-sm-2" type="email" placeholder="Email" aria-label="Email">
                        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Subscribe newsletter</button>
                      </form>
                    </div>
                    
                    <div class="col-4  col-sm-4 pt-5">
                        <div ><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Art%20gallery)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>      
                    </div>
                    <div class="col-12 col-sm-4 align-self-center">
                        <div class="text-center">
                            <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class=" fa fa-google-plus  fa-lg"></i></a>
                            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class=" fa fa-facebook fa-lg"></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class=" fa fa-linkedin  fa-lg"></i></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class=" fa fa-twitter  fa-lg"></i></a>
                            <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class=" fa fa-youtube  fa-lg"></i></a>
                            <a class="btn btn-social-icon btn-envelope" href="mailto:"><i class=" fa fa-envelope  fa-lg"></i></a>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-center">             
                    <div class="col-auto">
                        <p>© Preeethi V Hiremath</p>
                    </div>
            </div>
            </div>
        </footer>    
    </section>
    </div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>