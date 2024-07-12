<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<button id="btnclick">Click to Load Ajax From PHP File</button>
<div id="ajaxcontent"></div>
<script>
$("#btnclick").click(function(){
  $.get("ajaxphpfile.php", function(data, status){
    $("#ajaxcontent").html(data);
  });
});
</script>
</body>
</html>