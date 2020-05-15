<?php
session_start();

$name = $city = $from = $to = '';

if(isset($_POST["submit"]))
{
  include ('header.php');
  if(!empty($_POST["name"]))
  {
    $name = $_POST["name"];
  }
  if(!empty($_POST["city"]))
  {
    $city = $_POST["city"];
  }
  if(!empty($_POST["from"]))
  {
    $from = $_POST["from"];
  }
  if(!empty($_POST["to"]))
  {
    $to = $_POST["to"];
  }
$_SESSION["name"] = $_POST["name"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["datefrom"] = $_POST["from"];
$_SESSION["dateto"] = $_POST["to"];
  //insert
$sql = "INSERT INTO rent(name,city,datefrom,dateto) VALUES ('$name','$city','$from','$to')";
$q = "SET GLOBAL max_allowed_packet=32*1024*1024; ";
if(mysqli_query($conn,$sql))
			{
				//success
				header('Location:carmod.php');
			}
      else
      {
				//error
				echo "query Error".mysqli_error($conn);
			}
if(mysqli_query($conn,$q))
			{
				//success
			//	header('Location:car.php');
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
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rental</title>
    <style>
      body{

          background-image: url(merc.jpg);
         
          background-size: cover;
         
          background-attachment:fixed;
          
        }
       
        body.background
        {
          opacity:50%;
        }
        #footer
        {
          position: relative;
          bottom:-270px;
        }
        .datepicker-modal 
        {
          transform: scale(0.7);
        }
        #rj
        {
          width:auto;
          height:80px;
        }
        @media screen and (max-width: 670px){
          header{
            min-height:700px;
          }
      }


</style>
</head>
<body>
    <header>
      <nav >
        <div class="nav-wrapper grey darken-3">
          <a href="index.php" class="brand-logo center"><i class="material-icons left">directions_car</i>Car Rentals</a>
          <a href="" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down"> 
            <li><a href="index.php" class="hoverable"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="#contact" class="hoverable modal-trigger"><i class="material-icons left">local_phone</i>Contact</a></li>
            <li><a href="login.php" class="hoverable"><i class="material-icons left">account_circle</i>Login</a></li>
          </ul>
          <ul class="sidenav grey lighten-2" id="mobile-menu">
            <li><a href="index.php" class="hoverable"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="#contact" class="hoverable modal-trigger"><i class="material-icons left">local_phone</i>Contact</a></li>
            <li><a href="login.php" class="hoverable"><i class="material-icons left">account_circle</i>Login</a></li>
            </ul> 
        </div>  
      </nav>
    </header>

    <!-- form -->
    <form action="index.php" method="POST">
      <section style="padding-top: 4vw; padding-bottom: 4vw;" class="container section">
          <div class="row">
              <div class="col s12 l6">
                
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Name</span>
                    <div class="input-field indigo-text">
                      <input type="text" name = "name" autofocus="autofocus" class="validate " required>
                      <label for="text">Enter Your Name</label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col s12 l6">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">City</span>
                    <div class="input-field">
                      <input type="text" name = "city" class="validate" required>
                      <label for="text">Enter the City</label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col s12 l12">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Date</span>
                    <div class="row">
                      <div class="col s12 l6">
                        <div class="input-field">
                          <input type="text" id="date" name="from" class="datepicker" required>
                          <label for="date">From</label>
                        </div>
                      </div>
                      <div class="col s12 l6">
                        <div class="input-field">
                          <input type="text" id="date" name="to" class="datepicker" required>
                          <label for="date">To</label>
                          
                        </div>
                      </div>
                    
                      
                    </div>
                  </div> 
                </div>
                <div class="col s12 l3 push-l5">
                  <div class="input-field">
                    <!-- <a href="car.html" class="btn pulse"><i class="material-icons right">arrow_forward</i>Choose Car</a> -->
                    <input type="submit" name = "submit" value="Choose Car" class="btn indigo pulse"> 
                  </div>
                </div>
              </div>
          </div>
      </section>
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
    <footer class="page-footer grey darken-" id="footer">
      <div class="footer-copyright grey darken-4">
        <div class="container center-align">&copy;2020 RJ</div>
      </div>
    </footer>
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
        var minDate=new Date();
        $('.datepicker').datepicker({
         minDate:minDate
        });
      });

      $(document).ready(function(){
      $('.modal').modal();
       });
    </script>

  </body>
</html>