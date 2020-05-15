<?php

include('header.php');
$username=$password='';
if(isset($_POST["login"]))
{
    if(!empty($_POST["username"]))
    {
        $username = $_POST["username"];
    }
    if(!empty($_post["password"]))
    {
        $password = $_POST["password"];
    }   

    $sql = "SELECT * FROM login WHERE user = '$username' AND pass = '$password'";

    if(mysqli_query($conn,$sql))
    {
        header('Location:display.php');
    }
}

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       body{
          background-image: url(merc.jpg);
         
         background-size: cover;
         
          background-attachment:fixed;
          
        }
        #login{
            position: relative;
            top:100px;
            
        }
        #logtitle{
            padding-top: 20px;;
        }
        .card{
            position: relative;
            top:50px;
        }
        #footer{
        position: relative;
        bottom:-270px;
      }
      </style>
</head>
<body>

    <header>
        <nav >
            <div class="nav-wrapper grey darken-3">
                <a href="#" class="brand-logo center"><i class="material-icons left">directions_car</i>Car Rentals</a>           
            </div>
        </nav>
    </header>  

    <form action="login.php" method="post">
        <section class="container section">
            <div class="row">
                <div class="col s12 l6 push-l3">
                    <div class="card z-depth-3">
                        <div class="container center" id="logtitle"><i class="fas fa-sign-in-alt fa-3x"></i></div>
                        <div class="card-content">
                            <span class="card-title">Username</span>
                            <div class="input-field">
                                <input type="text" name="username" autofocus="autofocus">
                                <label for="text">Username</label>
                            </div>
                            <span class="card-title">Password</span>
                            <div class="input-field">
                                <input type="password" name="password">
                                <label for="text">Password</label>
                            </div>
                        </div>
                        <div class="section input-field center ">
                            <!-- <a href="car.html" class="btn pulse"><i class="material-icons right">arrow_forward</i>Choose Car</a> -->
                            <input type="submit" name = "login" value="LOGIN" class="z-depth-2 btn indigo pulse"> 
                        </div>
                    </div>  
                </div>   
            </div>
        </section>
    </form>

    <footer class="page-footer grey darken-" id="footer">
      <div class="footer-copyright grey darken-4">
        <div class="container center-align">&copy;2020 RJ</div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>