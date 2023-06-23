<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "project");
    $record = mysqli_query($con, "SELECT * FROM `cart`  ");
    $row_count = mysqli_num_rows($record);
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid font-monospace">
            <a href="fitness.php" class="navbar-brand">
                <h3 class="px-5">
                    <img src="img/ti.png" alt="" height ="20px">
                </h3>
        
        <div class="d-flex">
        
        <!-- <a href="cart.php" class="text-white text-decoration-none pe-2"><i class="fas fa-shopping-media"></i>cart(<?php echo $row_count ?>) |</a> -->
        <span class="text-danger pe-2 ">
            <i class="fas fa-user-shield "> </i> Hello,
            <?php
             session_start();
            if(isset(  $_SESSION['user'])){
           
            echo $_SESSION['user'] ; 
            echo"
           |<a href='logouts.php' class='text-danger text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Logout |</a>
         ";
        }
        else{
            echo"
            |<a href='user-login.php' class='text-danger text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Login |</a>
           
        ";
    }
  
            ?> 

            <a href="product/admin.php" class="text-danger text-decoration-none pe-2">Admin</a>
        </span>
        </div>
    </nav> 
 </div>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">

            <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class=" text-center">
                        <a class="text-light nav-link  active" aria-current="page" href="fitness.php">HOME</a>
                    </li>

                    <li class="col-4 text-center">
                        <a class="text-light nav-link" href="about.php">ABOUT US</a>
                    </li>
                    <li class="col-4 text-center">
                        <a class="text-light nav-link " href="contact.php">CONTACT US </a>
                    </li>
                    <li class="col-4 text-center">
                        <a class="text-light nav-link " href="delivery.php">DELIVERY</a>
                    </li>
                   

                </ul>
            </div>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <div class=" fs-5 font-monospace text-center">
       <p class="fixed-bottom text-white bg-danger text-center p-0  mb-0">Copyright © 2022  </p> 
    </div>
   
</body>

</html>