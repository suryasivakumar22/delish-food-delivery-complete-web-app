<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<style>
  body{
  height:100vh;
  width:100vw;
  overflow: hidden;
  display:flex;
  /*background-image:radial-gradient(#21c999,white);*/
}

#controls{
  text-align:center;
  padding-bottom:20px;
}

#controls > p{
  font-size:30px;
  font-family: 'Montserrat', sans-serif;
  color:grey;
}

.buttons{
  height:50px;
  width:50px;
  font-size:30px;
  background-color: lightgrey;
}

.shopping-cart{
  display:inline-block;
  min-width:300px;
  margin:auto;
  padding:30px;
  border-radius:20px;
  box-shadow:0px 0px 20px darkgrey;
  background-color:white;
  text-align:center;
}

#badge{
  height:100px;
  width:100px;
  background-color:#21c999;
  color:white;
  font-size: 75px;
  position:relative;
  transform: rotate(-50deg);
  border-radius:20px;
  top:45px;
  left:120px;
  padding:10px;
  z-index:0;
  text-align:center;
  font-family: Arial;
}

.shopping-cart-icon{
  font-size:150px;
  opacity:1;
  z-index: 2;
  color:grey;
  position:relative;
}
</style>
<div class="shopping-cart">
  <div id="controls">
      <p>Add to cart</p>
      <button id="btnAdd" class="buttons">+</button>
      <button id="btnRemove" class="buttons">-</button>
  </div>
  <div id="badge">0</div>
  <i class="fas fa-shopping-cart shopping-cart-icon"></i>
</div>
<script>
  $(document).ready(function(){
  itemCount = 0;
  
  $("#btnAdd").on("click",function(){
    itemCount += 1;
    if (itemCount <= 99){    
      $("#badge")[0].textContent = itemCount;
    } else{
      $("#badge")[0].textContent = "99";
      itemCount = 99;
     }
   })})  
</script>
  <script>
  $("#btnRemove").on("click",function(){
    itemCount -= 1;
      if (itemCount >= 0 && itemCount <= 99){
        $("#badge")[0].textContent = itemCount;     
      }else if (itemCount < 0){
        itemCount = 0;
      }
    })  

</script>