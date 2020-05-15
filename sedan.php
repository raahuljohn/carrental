<?php

include ('header.php');
session_start();
$name = $_SESSION["name"];


if(isset($_POST["car1"]))
{
    $_SESSION["car"] = "img/ciaz.jpg";
    $_SESSION["carname"] = "Suzuki Ciaz";
    $_SESSION["price"] = "Rs.3500/Day";
    header('Location:final.php');
}
if(isset($_POST["car2"]))
{
    
    $_SESSION["car"] = "img/city.jpg";
    $_SESSION["carname"] = "Honda City";
    $_SESSION["price"] = "Rs.3500/Day";
    header('Location:final.php');
}
if(isset($_POST["car3"]))
{
    $_SESSION["car"] = "img/vento.jpg";
    $_SESSION["carname"] = "Volkswagan Vento";
    $_SESSION["price"] = "Rs.3000/Day";
    header('Location:final.php');
}



$sql = 'SELECT name,city,datefrom,dateto,image FROM rent';

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
    <title>SEDAN</title>
    <style>
        body{
          background-image: url(merc.jpg);
         
         background-size: cover;
         
          background-attachment:fixed;
          
        }
        #ford{
            object-fit:cover;
            width:80%;
            height:auto;
            position:relative;
            left:30px;
            
            
        }
        /* li{
            padding-top: 10px;
        } */
        #footer{
        position: relative;
        bottom:-260px;
       
      }
      #price{
            position: absolute;
            right:70px;
            bottom:20px;
        }
        #title{
            position:relative;
            left:-5px;
        }
        #fea 
        {
           padding:10px;
           text-align:left;
        }
        #fea span{
            position:relative;
            bottom:5px;
            padding-left:10px;
           
        }
        #type{
          position: relative;
          height: 70px;
          top:-30px;
          
      }
      #rj
        {
          width:auto;
          height:80px;
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
                        <h4><b>SEDAN</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <form method="POST">
            <div class="container">
                <div class="row">
                    <div class="col s12 l12">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 l4">
                                        <div class="card-title center" id="title"><h5><b>Suzuki Ciaz</b></h5></div>
                                        <p><img src="img/ciaz.jpg" id="ford" class="materialboxed"></p>
                                    </div>
                                    <div class="col s12 l4 ">
                                        <div style="padding-left:45px;" class="center container">
                                            
                                            <ul>
                                               
                                                <li id="fea"><i class="material-icons prefix">person</i><span>5</span></li>
                                                <li id="fea"><i class="fa fa-snowflake fa-2x" aria-hidden="true"></i><span>A/C</span></li>
                                                <li id="fea"><i class="fa fa-flask fa-2x" aria-hidden="true"></i><span>Petrol</span></li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12 l2 push-l3">                               
                                        <div class="input-field">                                          
                                            <button type="submit" name = "car1" class="btn-floating btn-large hoverable"> 
                                            <i class="material-icons">done</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row right" id="price">
                                    <div class="col s12 l12">
                                        <h4>Rs.3500/Day</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 l4">
                                    <div class="card-title center" id="title"><h5><b>Honda City</b></h5></div>
                                    <p><img src="img/city.jpg" id="ford" class="materialboxed"></p>
                                </div>
                                
                                <div class="col s12 l4">
                                    <div style="padding-left:45px;" class="center container">
                                            <ul>
                                               
                                               <li id="fea"><i class="material-icons prefix">person</i><span>5</span></li>
                                               <li id="fea"><i class="fa fa-snowflake fa-2x" aria-hidden="true"></i><span>A/C</span></li>
                                               <li id="fea"><i class="fa fa-flask fa-2x" aria-hidden="true"></i><span>Diesel</span></li>
                                             
                                           </ul>
                                    </div>
                                </div>
                                <div class="col s12 l2 push-l3">
                                    <div class="input-field">                                          
                                        <button type="submit" name = "car2" class="btn-floating btn-large hoverable"> 
                                        <i class="material-icons">done</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row right" id="price">
                                <div class="col s12 l12">
                                    <h4>Rs.3500/Day</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action ="car.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 l4">
                                    <div class="card-title center" id="title"><h5><b>Volkswagan Vento</b></h5></div>
                                    <p><img src="img/vento.jpg" id="ford" class="materialboxed"></p>
                                </div>
                                
                                <div class="col s12 l4">
                                    <div style="padding-left:45px;" class="center container">
                                            <ul>
                                               
                                               <li id="fea"><i class="material-icons prefix">person</i><span>5</span></li>
                                               <li id="fea"><i class="fa fa-snowflake fa-2x" aria-hidden="true"></i><span>A/C</span></li>
                                               <li id="fea"><i class="fa fa-flask fa-2x" aria-hidden="true"></i><span>Petrol</span></li>
                                             
                                           </ul>
                                    </div>
                                </div>
                                <div class="col s12 l2 push-l3">
                                    <div class="input-field">                                          
                                        <button type="submit" name = "car3" class="btn-floating btn-large hoverable"> 
                                        <i class="material-icons">done</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row right" id="price">
                                <div class="col s12 l12">
                                    <h4>Rs.3000/Day</h4>
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
                        <div class=" container">
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

    <footer class="page-footer grey darken-" id="footer">
      <div class="footer-copyright grey darken-4">
        <div class="container center-align">&copy;2020 RJ</div>
      </div>
    </footer>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){  
            $('.materialboxed').materialbox(); 
        });
        $(document).ready(function(){
        $('.modal').modal();
    });
      </script>
</body>
</html>