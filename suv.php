<?php

include ('header.php');
session_start();
$name = $_SESSION["name"];


if(isset($_POST["car1"]))
{
    $_SESSION["car"] = "img/ciaz.jpg";
    $_SESSION["carname"] = "Toyota Fortuner";
    $_SESSION["price"] = "Rs.5500/Day";
    header('Location:final.php');
}
if(isset($_POST["car2"]))
{
    
    $_SESSION["car"] = "img/city.jpg";
    $_SESSION["carname"] = "Ford Ecosport";
    $_SESSION["price"] = "Rs.5000/Day";
    header('Location:final.php');
}
if(isset($_POST["car3"]))
{
    $_SESSION["car"] = "img/vento.jpg";
    $_SESSION["carname"] = "Renault Duster";
    $_SESSION["price"] = "Rs.5000/Day";
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
    <title>SUV</title>
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
                        <h4><b>SUV</b></h4>
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
                                        <div class="card-title center" id="title"><h5><b>Toyota Fortuner</b></h5></div>
                                        <p><img src="img/fortuner.jpg" id="ford" class="materialboxed"></p>
                                    </div>
                                    <div class="col s12 l4 ">
                                        <div style="padding-left:45px;" class="center container">
                                            
                                            <ul>
                                               
                                                <li id="fea"><i class="material-icons prefix">person</i><span>7</span></li>
                                                <li id="fea"><i class="fa fa-snowflake fa-2x" aria-hidden="true"></i><span>A/C</span></li>
                                                <li id="fea"><i class="fa fa-flask fa-2x" aria-hidden="true"></i><span>Diesel</span></li>
                                              
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
                                        <h4>Rs.5500/Day</h4>
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
                                    <div class="card-title center" id="title"><h5><b>Ford Ecosport</b></h5></div>
                                    <p><img src="img/ecosport.jpg" id="ford" class="materialboxed"></p>
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
                                    <h4>Rs.5000/Day</h4>
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
                                    <div class="card-title center" id="title"><h5><b>Renualt Duster</b></h5></div>
                                    <p><img src="img/duster.jpg" id="ford" class="materialboxed"></p>
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
                                        <button type="submit" name = "car3" class="btn-floating btn-large hoverable"> 
                                        <i class="material-icons">done</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row right" id="price">
                                <div class="col s12 l12">
                                    <h4>Rs.5000/Day</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
      
    <?php
        include('contact.php');
    ?>
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