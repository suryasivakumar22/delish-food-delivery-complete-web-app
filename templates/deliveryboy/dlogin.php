<?php 
  $conn1 = mysqli_connect('localhost', 'root','rootpw', 'dmanager');
  session_start();
  require_once("../../sendmail.php");
  if(isset($_POST['submit'])){
    $olb1 = 0;
    $hemail1 = mysqli_real_escape_string($conn1, $_POST['demail1']);
    $_SESSION['demail1'] = htmlentities($_POST['demail1']);
    $query9 = 'select demail from dsignup';
    $mrss = mysqli_query($conn1, $query9);
    $env1 = mysqli_fetch_all($mrss);
    foreach ($env1 as $k2 => $v2) {
      foreach ($v2 as $k3 => $v3) {
        if ($v3 === $_SESSION['demail1']) {
          $olb1 = 1;
          $_SESSION['he'] = $v3;
          
        }

      }
    }
    if ($olb1 === 1) {
      $_SESSION['otppd1']= (mt_rand(100000,999999));
        new SendMail($_SESSION['demail1'],'hi',$_SESSION['otppd1'], "this is ur otp");
        echo $hemail1;
        $query11 = "SELECT * from dsignup where demail = '".$demail1."'";
        $mr11= mysqli_query($conn1, $query11);
        $ps = mysqli_fetch_all($mr11, MYSQLI_ASSOC);
        var_dump($ps);
        $_SESSION['page'] =   'dlogin';
        $_SESSION['ddatab'] = $ps[0]['dnumber'];
        $_SESSION['app'] = $ps[0]['approved'];
        #$_SESSION['ps'] =$ps;
        header('location: ../otp1.php');
    }elseif ($olb1 === 0) {
      echo "pls signup , invalid email";
    }
  }
?> 
<!DOCTYPE html>
<html>
<title>Delivery agent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="icon" type="image/png" href='logsignup/images/icons/favicon.ico' />
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href='../../logsignup/vendor/bootstrap/css/bootstrap.min.css' >
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href= '../..//logsignup/fonts/font-awesome-4.7.0/css/font-awesome.min.css' >
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href='../../logsignup/fonts/iconic/css/material-design-iconic-font.min.css'>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href= '../../logsignup/vendor/animate/animate.css' >
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href='../../logsignup/vendor/css-hamburgers/hamburgers.min.css' >
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href='../../logsignup/vendor/animsition/css/animsition.min.css'>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href='../../logsignup/vendor/select2/select2.min.css'>
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href='../../logsignup/vendor/daterangepicker/daterangepicker.css' >
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href='../../logsignup/css/util.css'>
  <link rel="stylesheet" type="text/css" href='../../logsignup/css/main.css' >
  


<style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
  body{
          font-family: 'Ubuntu Condensed';
          font-size: 23px;
          background: #e5e5e5;
        }

  .sp {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 30px;

}

.dl {
  left: 0;
  
}

.sl {
  right: 0;
  

}

.parti {
  position:absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */


 

  #dlogo{
    width: 400px;
    height:400px;
  }


</style>
<body>
  <div class="sp dl">
    <div class="parti">
    <img src="../../logsignup/ha/delishdelivery.png" id="dlogo">
  </div>
  </div>
  <div class="sp sl">
    <div class="parti">
      <nav class="navbar  navbar-expand-lg navbar-light fixed-top " id="hik" >
      <div class="container" id="ft">
        <img src="../../logsignup/ha/delis.jpeg" id="logo" >
    
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        <input id="searchTextField" type="text" size="50"> 
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
              <a class="nav-link active" href="login.php">
                login <i class="fa fa-sign-in" ></i>

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="signup.php">
                signup
                <i class="fa fa-user-plus"></i>
              </a>
            </li>
             <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="card.html">
                Offers
        
              <i class="fa fa-gift"></i>

          </a>

            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">
                  cart
                  
                  <i class="fa fa-shopping-cart"></i>
                 
                </a>
            </li>
             -->
            
        
          </ul>
        </div>
      </div>
    </nav>
  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form class="login100-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <span class="login100-form-title p-b-37">
          Delivery Agent Login
        </span>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
          <input class="input100" type="text" name="demail1" placeholder="Enter Email">
          <span class="focus-input100"></span>
        </div>
        <br>
      
        <div class="container-login100-form-btn">
          <button class="login100-form-btn" name="submit" value="Submit">
            Proceed
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          <span class="txt1">
          </span>
        </div>



        <div class="text-center">
          <a href="hsignup.php" class="txt2 hov1">
            Signup
          </a>
        </div>
      </form>

      
    </div>
  </div>
  
  

  <div id="dropDownSelect1"></div>
  

    </div>

 </div>
<script src='../../logsignup/vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
  <script src='../../logsignup/vendor/animsition/js/animsition.min.js' ></script>
<!--===============================================================================================-->
  <script src='../../logsignup/vendor/bootstrap/js/popper.js' ></script>
  <script src='../../logsignup/vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
  <script src='../../logsignup/vendor/select2/select2.min.js'></script>
<!--===============================================================================================-->
  <script src='../../logsignup/vendor/daterangepicker/moment.min.js' ></script>
  <script src='../../logsignup/vendor/daterangepicker/daterangepicker.js'></script>
<!--===============================================================================================-->
  <script src='../../logsignup/vendor/countdowntime/countdowntime.j'></script>
<!--===============================================================================================-->
  <script src='../../logsignup/js/main.js'></script>

</body>
</html>
