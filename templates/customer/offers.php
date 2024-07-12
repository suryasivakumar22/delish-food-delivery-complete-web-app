<!DOCTYPE html>
<html>
<head>
	<title>Offers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');

body {
  margin: 0;
  padding: 0;
   font-family: 'Ubuntu Condensed';
}

section {
  width: 100%;
  height: 100vh;
  box-sizing: border-box;
  padding: 140px 0; 
  
}

#ft img{
  margin-top: 10px;
  border-radius: 7px;
  transform:scale(1.3);
}

.card {
  position: relative;
  min-width: 300px;
  height: auto;
  overflow: hidden;
  border-radius: 15px;
  margin: 0 auto;
  padding: 40px 20px;
  /*box-shadow: 0 10px 15px rgba(0,0,0,0.1);*/
  transition: .5s;
}
.card:hover {
  transform:scale(1.1);
}



.title .fa {
  color: #fff;
  font-size: 60px;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  text-align: center;
  line-height: 100px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
}
.title h2 {
  position: relative;
  margin: 20px 0 0;
  padding: 0;
  color: #fff;
  font-size: 28px;
  z-index: 2;
}

.option {
  position: relative;
  z-index: 2;
}
.option ul {
  margin: 0;
  padding: 0;
}
.option ul li {
  margin: 0 0 10px;
  padding: 0;
  list-style: none;
  color: #000000;
  font-size: 16px;
}
.col-sm-4{
  margin-top: 30px;
}
.card a {
  display: inline-block;
  position: relative;
  z-index: 2;
  background-color: #fff;
  color: #262ff;
  width: 150px;
  height: 40px;
  text-align: center;
  margin: 20px auto 0;
  line-height: 40px;
  border-radius: 40px;
  font-size: 16px;
  cursor: pointer;
  text-decoration: none;
  box-shadow: 0 5px 10px rgba(0,0,0, .1);
}
#cbut:hover{
  background:#4B79A1;
}
.card a:hover {
  
}
  </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<section>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top bg">
      <div class="container" id="ft">
        <img src="../../logsignup/index/delish.jpeg" id="logo" width="50px" height="50px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        <input id="searchTextField" type="text" size="50">

          
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="card.html">Offers

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
          </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cart
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
                </a>
            </li>
            
            
        
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid bg-white">
      <div class="container">
        
      </div>
    </div>
  
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" id="cbut" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
</div>
</div>

<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" id="cbut" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
</div>
</div>
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
           <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" id="cbut" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" id="cbut" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" id="cbut" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>          
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>
<br>
<br>

 <div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>    
<br>
<br>

<div class="col-sm-4">
          <div class="card card_red text-center">
            <div class="title"></div>
            <div class="option">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i>Get 20% discount using IndusInd Bank Credit Cards</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>get 20% discount up to Rs.100 on orders above Rs.400</li>
                </ul>
            </div>
            <p id="p1">CODE</p>

<button class="btn btn-outline-secondary" onclick="copyToClipboard('#p1')">Copy CODE</button>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
            </div>
            </div>    
    

  </div> 
  </div>
</section>
</body>
</html>