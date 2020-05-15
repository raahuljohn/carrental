<?php
    session_start();
    define('ABSPATH', dirname(__FILE__));
    include('header.php');
    $name = $_SESSION["name"];
    $city = $_SESSION["city"];
    $datefrom= $_SESSION["datefrom"];
    $dateto = $_SESSION["dateto"];
    $car = $_SESSION["car"];
    $carname = $_SESSION["carname"];
    $price = $_SESSION["price"];
    //echo $datefrom;
    if(isset($_POST["confirm"]))
{
    //$doc_root = $_SERVER['DOCUMENT_ROOT']."/rental/$car";
    $doc_root = ABSPATH.DIRECTORY_SEPARATOR."$car";
    
    //$finalcar = "R:/XAMPP/htdocs/rental/$car";
    $doc_root = str_replace("\\", '/', $doc_root);
   // echo $doc_root;
    $sql = "UPDATE rent set image = LOAD_FILE('$doc_root') , price = '$price' WHERE name = '$name'";
    if(mysqli_query($conn,$sql))
    {
        //success
        //echo "SUCCESS";
        header('Location:thank.php');
        
    }
    else
    {
        //error
        echo "query Error".mysqli_error($conn);
    }
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
    <title>final</title>
    <style>
        body{
          background-image: url(merc.jpg);
         
         background-size: cover;
         
          background-attachment:fixed;
          
        }
        #ford{
            object-fit:cover;
            width:auto;
            height:200px;
            
        }
        #image{
            object-fit:cover;
            width:100%;
            height:auto;
            left:20px;
        }
        #hr{
        padding-left:20px;
        padding-right:20px;
        }
        h1,h2,h3,h4,h5,h6{
            display:inline;
        }
        li{
            margin:auto;
            padding-top:10px;
            padding-bottom:10px;
        }
        #last{
            display:inline;
            padding-left:20px;
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
    <div class="section center container">
        <div class="row">
            <div class="col s12 l12">
                <div class="card">
                    <div class="row">
                        <div class="col s12 l3">
                            <div class="card-image section">
                                <img src="<?php echo $car?>" id="image" alt="">
                            </div>
                        </div>
                        <div class="col s12 l7">
                            <div class="center container">
                             <h3 style="display:block"><?php echo $carname?></h3>   
                            </div>
                            <div class="container">
                                <h4><?php echo $price ?></h4>
                            </div>
                        </div>
                        
                    </div>
                    <div id="hr"><hr></div>
                    <div class="left-align container center" id="dis">
                        <ul>
                            <li><h5>Name: </h5><h6><?php echo $name ?></h6></li>
                            <li><h5>City: </h5><h6><?php echo $city ?></h6></li>
                            <li><h5>From: </h5><h6><?php echo $datefrom ?></h6></li>
                            <li><h5>To: </h5><h6><?php echo $dateto ?></h6></li>
                        </ul>
                    </div> <div id="hr"><hr></div>
                   <div class="card-content">
                       <form method="post">
                            <div class="container">
                                    <button type="submit" name = "confirm" class="btn pulse hoverable z-depth-2 grey darken-2"> 
                                       <p>CONFIRM</p>
                                    </button>
                                    <!-- <a type="submit" class="btn grey" name="confirm">CONFIRM</a> -->
                            </div>
                       </form>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
   
</body>
</html>