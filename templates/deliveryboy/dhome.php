 <?php 
  $conn = mysqli_connect('localhost', 'root','rootpw', 'dmanager');
  session_start();
  require_once("../../sendmail.php");
  #$_SESSION['conn1'] = $conn;
  if(isset($_POST['submit'])){

    $ola1 = 2;
    $cname = mysqli_real_escape_string($conn, $_POST['cdname']);
    $hemail = mysqli_real_escape_string($conn, $_POST['demail']);
    $hnumber = mysqli_real_escape_string($conn,$_POST['dnumber']);
    $_SESSION['demail11'] = htmlentities($_POST['demail']);
    $_SESSION['dnumber'] = htmlentities($_POST['dnumber']);
    $_SESSION['cdname'] = htmlentities($_POST['cdname']);
    $query6 = 'select demail,dnumber from dsignup';
    $mrr = mysqli_query($conn, $query6);
    $envv = mysqli_fetch_all($mrr);
    foreach ($envv as $kk => $vv) {
      foreach ($vv as $kk1 => $vv1) {
        if ($vv1 === $_SESSION['demail11'] || $v1 === $_SESSION['dnumber']) {
          $ola1 = 1;
          break;
        }
      }
    }
    if ($ola1 === 2) {
      $_SESSION['otppd']= mt_rand(100000,999999);
        new SendMail($_SESSION['demail11'],$_SESSION['cdname'],$_SESSION['otppd'], "this is ur otp");
      $_SESSION['page'] =  'dhome';   
      header('location: ../otp1.php');
    }elseif ($ola1 === 1) {
      echo "invalid";
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
      
        <img src="../../logsignup/ha/delis.jpeg">
    
        </div>
      </div>
    </nav>
  <div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form class="login100-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <span class="login100-form-title p-b-37">
          Delivery Agent signup
        </span>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter company Name">
          <input class="input100" type="text" name="cdname" placeholder="Enter your Name">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter  Email">
          <input class="input100" type="text" name="demail" placeholder="Enter Email">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Number">
          <input class="input100" type="text" name="dnumber" placeholder="Enter Number" maxlength="10">
          <span class="focus-input100"></span>
        </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn" name="submit" value="Submit">
            Sign Up
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          <span class="txt1">
            
          </span>
        </div>



        <div class="text-center">
          <a href="dlogin.php" class="txt2 hov1">
            Login
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
