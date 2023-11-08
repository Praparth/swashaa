<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swashaa <?php $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="index.css">

    
        
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>



    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 100%;
        }
        
        .count{
            color: #252525;
        }

        #count{
            text-decoration: none;
        }


    </style>

    
</head>
<body ng-app="myApp" class="bg-light " width="100%" ng-controller="FromController">

    <!-------------------------------------------- nav-bar --------------------------------------------->
    <nav class="navbar navbar-light nav-1 ">
       
        <form class=" form-inline d-none d-md-flex ms-3 justify-content-around">
            <!-- <input class="form-control me-2 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Search</button> -->
            <img src="logo.JPG" alt="" width="25%">
          </form>
        <a class="navbar-brand  justify-content-center text-center fs-1 me-md-5  ms-md-0 ms-0 " href="home.php"> 
            <span class="web-name">SWASHAA </span></a>
        <span  class="icon  d-flex justify-content-end pe-2 pe-sm-5" >
            <!-- <a href="login.php" class="mx-1 mx-sm-5">
                <img src="man.png" alt="men" width="25px">
            </a> -->
            <a href="login.php" class="mx-1 mx-sm-5 text-decoration-none" style="color : #252525">
             
               <img src="man.png" alt="men" width="25px">
                
            </a>
            <?php
              $count = 0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
            ?>
            <a href="addtocart.php" id="count" class="btn btn-outline-success ">
                <img src="shopping-bag.png" alt="" width="25px" name="basket" >
                <span class="count "><?php echo $count; ?></span>
            </a>
        </span>
      </nav>

    
    
      <button class="btn btn-Dark d-md-none sticky-top pt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
            <p><img src="menu (1).png" alt="" class="" width="30px"></p>
      </button>
      
      <div class="offcanvas offcanvas-start text-warning " data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-dark" id="staticBackdropLabel" >SWASHAA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item ">
                 <a class="nav-link" href="shop.php">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="BESTSELLING.php">BEST SELLING</a>
              </li>
               
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="GIFITING.php" role="button" data-bs-toggle="dropdown">GIFITING</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item " href="FORHIM.php">FOR HIM</a></li>
                  <li><a class="dropdown-item" href="FORHER.php">FOR HER</a></li>
                  <li><a class="dropdown-item" href="MANGALSUTRA.php">MANGALSUTRA</a></li>
                </ul>
              </li>
            </ul>
            <form class=" form-inline  d-md-none d-flex ">
                <input class="form-control me-2 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success " type="submit">Search</button>
              </form>
        </div>
      </div>
      

      <nav class="navbar navbar-expand-md  navbar-light nav-2   sticky-top bg-light fs-5"  id="navbarToggleExternalContent">
        <div class="container-fluid ">
           
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                 <a class="nav-link" href="shop.php">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="BESTSELLING.php">BEST SELLING</a>
              </li>
               
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="GIFITING.php" role="button" data-bs-toggle="dropdown">GIFITING</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item " href="FORHIM.php">FOR HIM</a></li>
                  <li><a class="dropdown-item" href="FORHER.php">FOR HER</a></li>
                  <li><a class="dropdown-item" href="MANGALSUTRA.php">MANGALSUTRA</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      
      
    </body>
</html>