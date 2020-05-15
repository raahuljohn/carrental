<?php

include('header.php');
session_start();
if(isset($_POST["hatchback"]))
{
    header('location:hatchback.php');
}
if(isset($_POST["sedan"]))
{
    header('location:sedan.php');
}
if(isset($_POST["suv"]))
{
    header('location:suv.php');
}



?>


<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          background-image: url(merc.jpg);
         
          background-size: cover;
         
          background-attachment:fixed;
          
        }

        #footer{
        position: relative;
        bottom:-270px;
      }
      #type{
          position: relative;
          height: 70px;
          top:-30px;
          
      }

     img{
        object-fit: cover;
        height: auto;
        width:260px;
     }
     img#big{

         height:auto;
         width:260px;
     }
     p.center{
         position: relative;
         left:30px;
         
     }
        #rj{
        width:auto;
        height:80px;
        }
    </style>
</head>
<body>
    <!-- nav-bar -->
    <header>
        <nav >
          <div class="nav-wrapper grey darken-3">
            <a href="#" class="brand-logo center"><i class="material-icons left">directions_car</i>Car Rentals</a>
            <ul class="right hide-on-med-and-down"> 
              <li><a href="index.php" class="hoverable"><i class="material-icons left">home</i>Home</a></li>
              <li><a href="#contact" class="hoverable modal-trigger"><i class="material-icons left">local_phone</i>Contact</a></li>
              <li><a href="login.php" class="hoverable"><i class="material-icons left">account_circle</i>Login</a></li>
            </ul>
          </div>  
        </nav>
    </header>

    <!-- type -->

    <div class="section center container">
        <div class="row">
            <div class="col s12 l12">
                <div  class="card">
                    <div  id="type" class="card-content">
                        <h4><b>TYPE</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form -->

    <form method="POST">
        <div style="position:relative;padding-left:70px;padding-right:70px;" class="content-container">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-contents">
                            <div class="row">
                                <div class="col s12 l4">
                                    <div class="container input-field">
                                       <div class="center card-title"><p><b>HATCHBACK</b></p></div>
                                        <p>
                                            <label>
                                               <img src="img/small.png" alt="">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="input-field section center container">
                                        <button type="submit" name="hatchback" class="hoverable btn">
                                            <i class="material-icons">done</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col s12 l4">
                                    <div class="container input-field">
                                        <div class="center card-title"><p><b>SEDAN</b></p></div>
                                        <p>
                                            <label>
                                                <img src="img/sedan.png" alt="">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="section center container">
                                        <button type="submit" name="sedan" class="hoverable btn">
                                            <i class="material-icons">done</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col s12 l4">
                                    <div class="container input-field">
                                        <div class="center card-title"><p><b>SUV</b></p></div>
                                        <p>
                                            <label>
                                                <img id="big" src="img/suv.png" alt="">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="section center container">
                                    <button type="submit" name="suv" class="hoverable btn">
                                            <i class="material-icons">done</i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                      </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </form>
    
     <!-- contact -->
      
     <div id="contact" class="modal">
      <div class="grey darken-2 modal-content">
        <div class="card">
          <div class="grey center card-contents">
              <h4 style="padding:20px;">Connect With Me</h4>
          </div>  
          <div class="row">
            <div class=" col s12 l8">
              <div class="section container">
                <ul>
                  <li style="padding-bottom:10px;"><a href="https://www.instagram.com/raahuljohn/" class="btn-floating btn-small pink li"><i class="fab fa-instagram"></i></a><span style="padding-left:5px;"><a href="https://www.instagram.com/raahuljohn/">https://www.instagram.com/raahuljohn/</a></span></li>
                  <li style="padding-bottom:10px;"><a href="#" class="btn-floating btn-small green li"><i class="fab fa-whatsapp"></i></a><span style="padding-left:5px;">+917598014871</span></li>
                  <li style="padding-bottom:10px;"><a href="https://www.facebook.com/raahul.john" class="btn-floating btn-small blue li"><i class="fab fa-facebook"></i></a><span style="padding-left:5px;"><a href="https://www.facebook.com/raahul.john">https://www.facebook.com/raahul.john</a></span></li>
                  <li style="padding-bottom:10px;"><a href="www.linkedin.com/in/raahuljohn" class="btn-floating btn-small blue li darken-4"><i class="fab fa-linkedin"></i></a><span style="padding-left:5px;"><a href="www.linkedin.com/in/raahuljohn">www.linkedin.com/in/raahuljohn</a></span></li>
                  <li style="padding-bottom:10px;"><a href="https://mail.google.com/mail/u/0/#inbox" class="btn-floating btn-small red li"><i class="far fa-envelope"></i></a><span style="padding-left:5px;"><a href="https://mail.google.com/mail/u/0/#inbox">rraahuljohn@karunya.edu.in</a></span></li>
                </ul>
              </div>
            </div>

            <div style="padding-top:20px;" class=" center col s12 l4">
              <img class="circle" src="img/rj.jpg" id="rj">
              <div style="font-size:20px;" class="section container">
                R Raahul John
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
   
    <!-- footer -->

    <footer class="page-footer grey darken" id="footer">
        <div class="footer-copyright grey darken-4">
          <div class="container center-align">&copy;2020 RJ</div>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
         $(document).ready(function(){
      $('.modal').modal();
       });
    </script>
</body>
</html>