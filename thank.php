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
     
              </ul>
            </div>
        </nav>
    </header>
   <div class="section container center">
        <div class="row">
            <div class="col s12 l12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa fa-thumbs-up" style="font-size:48px;color:green"></i>
                        <div class="container" id="last">
                            <h4>THANK YOU</h4>
                        </div>
                        <div class="section container">
                            <a href="index.php" class="btn greylighten-2">GO HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <?php
    
      include('contact.php');
    ?>
   <footer class="page-footer grey darken-" id="footer">
    <div class="footer-copyright grey darken-4">
      <div class="container center-align">&copy;2020 RJ</div>
    </div>
  </footer>
</body>
</html>