<?php

    include('header.php');

    $sql = 'SELECT name,city,datefrom,dateto,image,price FROM rent';

    $result = mysqli_query($conn,$sql);

    $details = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<html lang="en">
<head>
    <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #image{
           
           max-height:300px;
           padding-bottom: 20px;
            
        }
        body{
          background-image: url(merc.jpg);
         
         background-size: cover;
         
          background-attachment:fixed;
          
        }
        #footer{
        position: relative;
        bottom:-270px;
      }
      #dis{
          padding:5px;
          font-size:20px;
          text-align:left;
      }
      #list{
          padding-top:35px;
          padding-left:50px;
      }
      #type{
          position: relative;
          height: 70px;
          top:-30px;
          
      }
    </style>
</head>
<body>
    <header>
            <nav >
                <div class="nav-wrapper grey darken-3">
                <a href="#" class="brand-logo center"><i class="material-icons left">directions_car</i>Car Rentals</a>
                <ul class="right hide-on-med-and-down"> 
                    <li><a href="index.php" class="hoverable"><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="#contact" class="hoverable modal-trigger"><i class="material-icons left">local_phone</i>Contact</a></li>
                    <!-- <li><a href="#" class="hoverable"><i class="material-icons left">account_circle</i>Login</a></li> -->
        
                </ul>
                </div>
            </nav>
    </header>


    <!-- type -->
    <div class="center container">
        <div class="row">
            <div class="col s12 l6 push-l3">
                <div  class="card">
                    <div  id="type" class="card-content">
                        <h4><b>All Bookings</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- card -->

    <?php foreach($details as $detail): ?>

    <div class="section container">
    <div class="row">
        <div class="col s12 l12">
            <div class="card">
                <div class="row">
                    <div class="col s12 l6">
                        <div class="card-contents">
                           
                            <div id="list" class="container center">
                                <ul>
                                   <li id="dis"> <span><b>Name :</b></span> <?php echo $detail["name"];?></li>
                                   <li id="dis"> <span><b>City :</b></span> <?php echo $detail['city'];?></li> 
                                   <li id="dis"> <span><b>From :</b></span> <?php echo $detail["datefrom"];?></li>
                                   <li id="dis"> <span><b>To :</b></span>   <?php echo $detail["dateto"];?></li>
                                   <li id="dis"> <span><b>Price :</b></span>  <span class="class red-text"> <b><?php echo $detail["price"];?></b></span></li>
                                </ul>
                            </div>
                           
                        </div> 
                    </div>
                    <div class="col s12 l6">
                        <div class="center container">
                            <img  id = "image" src="data:image/jpg;base64,<?php echo base64_encode($detail['image']); ?>" />
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?php endforeach; ?>

    <!-- contact -->
    <?php
    
      include('contact.php');
    ?>
    <!-- footer -->
    <footer class="page-footer grey darken-" id="footer">
        <div class="footer-copyright grey darken-4">
            <div class="container center-align">&copy;2020 RJ</div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>