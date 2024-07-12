<?php 
  session_start();
  #$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');


  if (isset($_POST['config'])) {
      $conn1 = mysqli_connect('localhost','root','rootpw',$_SESSION['hdataba']);
      $conn12 = mysqli_connect('localhost','root','rootpw','hmanager');
  /*
        $query = "UPDATE rconfig SET restaurantname
     = '".$_POST['rname']."', remail ='".$_POST['remail']."',rnumber =".$_POST['rnumber'].",raddress =".$_POST['raddress'].",rdescription = '".$_POST['rdesc']."',rpincode =".$_POST['rpincode'].",rcuisines".$_POST['rcusines']."" WHERE id =1" ;
      mysqli_query($conn1, $query);
  */
      $rname = $_POST['rname'] ;
      $remail =$_POST['remail'];
      $rnumber = $_POST['rnumber'];
      $raddress = $_POST['raddress'];
      $rdescription = $_POST['rdesc'];
      $rpincode = $_POST['rpincode'];
      $rcuisines = $_POST['rcusines'];

      $sql = "UPDATE rconfig SET restaurantname = '".$rname."', remail ='".$remail."', rnumber =". $_POST['rnumber'].", raddress ='".$raddress."', rdescription = '".$_POST['rdesc']."', rpincode = ".$_POST['rpincode'].", rcuisines ='".$_POST['rcusines']."',imgname ='".$_FILES['img1']['name']."'  WHERE id=1";
      echo $sql;
      $fl = $_FILES['img1']['name'];
      print_r($_FILES);
      $ll = "../../uploadedfiles/".$_SESSION['hdataba']."/thumbnails/mainthumb/".$fl;
      echo $ll;
      if (move_uploaded_file($_FILES['img1']['tmp_name'],$ll)) {
        if(mysqli_query($conn1, $sql)){
            $quer13 = 'UPDATE hsignup set approved = "bothsubmitted" where hemail = "'.$_SESSION['hemail1'].'"';
            mysqli_query($conn12, $quer13);
            header('location: hsubmitted.php');
          }
      }
  }
?>



<!DOCTYPE html>
<html>
<title>Admin</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
        header {
              color: white;
              background: black;
              padding:3px;
              
        }
        body{
          font-family: 'Ubuntu Condensed';
          font-size: 23px;
          background: white;
        }
        h1{
          font-family: 'Ubuntu Condensed';
        }
        .flr{

          float: right;
          padding-top: 30px;
        }
        .flr input{
          width: 50%;
        }
        .flr button{
          border-radius: 7px;
          width: 50%;
          background: black;
          color: white;
          border:1px solid black;
          outline: none;
        }
        .flr button:hover{
          color: grey;
        }
        label{
          color: black;
        }
        .pd{
          padding-left: 21.5%;
        }
        #he{
          padding-left: 5px;
          padding-top: 7.5px;

          border: 1px solid rgb(206,212,218);
          border-radius: 5px;
          padding-bottom:5px;
        }
        #hee{
          width: 50%;
        }
</style>

    <header>
     <center>
      <h1>
         Update Config
      </h1>
     </center>
      
    </header>
<body>
<!--
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card"  style="width:160px;">
  <a href="hadmin.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="#" class="w3-bar-item w3-button">Allmenu</a>
  <a href="#" class="w3-bar-item w3-button">Thumbnails</a>
  <a href="hcategories.php ?>" class="w3-bar-item w3-button">Categories</a>
  <a href="#" class="w3-bar-item w3-button">All offers</a>
  <a href="#" class="w3-bar-item w3-button">Logout</a>
</div>
-->
<div class="container flr" id="fly">
   <div class="pd" >
            <label>
              <strong>
              Enter Your Restaurant Details 
              </strong>  
            </label>
            <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group" id="inle">
              <input type="text"  name="rname" id="rname" class="form-control" placeholder="Enter Restaurant Name" required>
            </div>
            <div class="form-group" id="inle">
              <input name="raddress" id="raddress" class="form-control" placeholder="Enter Restaurant Address" maxlength="255" required>
            </div>
            <div class="form-group" id="inle">
              <input type="digit"  name="rnumber" id="rnumber" class="form-control" placeholder="Enter Restaurant Number" maxlength="10" minlength="10" required>
            </div>
            <div class="form-group" id="inle">
              <input type="email"  name="remail" id="remail" class="form-control" placeholder="Enter Restaurant email " required>
            </div>
            <div class="form-group" id="inle">
              <input type="digit"  name="rpincode" id="rpincode" class="form-control" placeholder="Enter Restaurant Pincode" maxlength="6" minlength="6" required>
            </div>
            <div class="form-group" id="inle">
              <input  name="rdesc" id="rdesc" class="form-control" placeholder="Enter Restaurant Description" required>
            </div>
            <div class="form-group" id="inle">
              <input type="text"  name="rcusines" id="rcusines" class="form-control" placeholder="Enter Restaurant Cuisines " required>
            </div>
            <!--input for city and state-->
         
            <div id="hee">
                <div class="form-group inle" id="he">
                    <input type="file" class="form-control-file"  name="img1"  id="img1" required>
                </div>
            </div>
            <div class="form-group">
              <button id="config" name="config" value="config">Submit</button>
            </div>
            </form>
   </div>
</div>
<script type="text/javascript">
  /*
      function returnfunction(){

      document.getElementById("rname").value = "<?php #echo $en1[0]['restaurantname']?>";
      document.getElementById("rnumber").value = "<?php# echo $en1[0]['rnumber']?>";
      document.getElementById("rpincode").value = "<?php# echo $en1[0]['rpincode']?>";
      document.getElementById("rcusines").value = "<?php# echo $en1[0]['rcuisines']?>";
      document.getElementById("remail").value = "<?php #echo $en1[0]['remail']?>";
      document.getElementById("rdesc").value = "<?php #echo $en1[0]['rdescription']?>";
      $('#raddress').val() = "<?php #echo $en1[0]['raddress']?>";
    }*/
</script>
<script type="text/javascript">
/*
  $("#config").click(function(){
        $.post("hconfigadd.php",
        {
          rname: $("#rname").val(),
          rnumber: $("#rnumber").val(),
          rpincode: $("#rpincode").val(),
          rcusines: $("#rcusines").val(),
          remail: $("#remail").val(),
          rdesc: $("#rdesc").val(),
          raddress: $("#raddress").val()

        },
      )};
*/
</script>
</body>
</html>
