<?php
      session_start();
     // echo $_SESSION['hdatab'] ;
      if(isset($_POST["submit"])) {#validation of file and other validations pending 
              $filename = $_FILES['pdf1']['name'];
              $location = "../../uploadedfiles/".$_SESSION['hdatab'].'a'."/required/".$filename;
              $filename1 = $_FILES['pdf2']['name'];
              $location1 = "../../uploadedfiles/".$_SESSION['hdatab'].'a'."/required/".$filename1;
              $filename2 = $_FILES['pdf3']['name'];
              $location2 = "../../uploadedfiles/".$_SESSION['hdatab'].'a'."/required/".$filename2;
              $filename3 = $_FILES['pdf4']['name'];
              $location3 = "../../uploadedfiles/".$_SESSION['hdatab'].'a'."/required/".$filename3;

              if((move_uploaded_file($_FILES['pdf1']['tmp_name'],$location)) && (move_uploaded_file($_FILES['pdf2']['tmp_name'],$location1)) && move_uploaded_file($_FILES['pdf3']['tmp_name'],$location2) && move_uploaded_file($_FILES['pdf4']['tmp_name'],$location3)){
                  $conn20 = mysqli_connect('localhost', 'root','rootpw', 'hmanager');
                  $quer12 = 'UPDATE hsignup set approved = "submitted" where hemail = "'.$_SESSION['hemail1'].'"';
                  mysqli_query($conn20, $quer12);
                  header('location: hconfig.php');
              }
              #change hsignup approved column to submitted 
      }
          
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title></title>
    <header >
        <h1><center>Registration Approval Files</center></h1>
    </header>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
        header{
            color: white;
            background: black;
            padding: 10px;

        }
        body{
          font-family: 'Ubuntu Condensed';
          background: white;
        }
        .container{
          padding: 15px;
          font-size: 20px;
          font-weight: 20em;

        }
        .form-group{
          border-bottom: 1px grey solid;
          padding: 5px;
        }
        .form-group label{
          color: black;
        }
        #buttonid{
          background:  black;
          color: white;
          outline: none;
          border:none;
          border-radius: 5px;
          width: 100%;
          height: 7%;
        }
        #buttonid:hover{
          color: grey;
        }
    </style>
  </head>
  <body>

    <div class="container">
       <form  method="POST" enctype="multipart/form-data"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="exampleFormControlFile1"><strong>FSSAI Certificate</strong> </label>
          <input type="file" class=" form-control-file" name="pdf1" value="Pdf1" id="pdf1" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1"><strong>Health/Trade License</strong> </label>
          <input type="file" class=" form-control-file" name="pdf2" value="Pdf2" id="exampleFormControlFile2" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1"><strong>Shop and Establishment License</strong> </label>
          <input type="file" class=" form-control-file" name="pdf3" value="Pdf3" id="exampleFormControlFile3" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1"><strong>Certificate of Environmental Clearance</strong> </label>
          <input type="file" class="form-control-file" name="pdf4" value="Pdf4" id="exampleFormControlFile4" required>
        </div >

        <button id="buttonid" class="but" name="submit" value="Submit">
            submit
        </button>

     </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>