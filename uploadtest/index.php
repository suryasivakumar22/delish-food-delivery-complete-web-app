<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" name="first" value="Bob" />
    <input type="text" name="middle" value="James" />
    <input type="text" name="last" value="Smith" />
    <input name="image" type="file" />
    <button>Submit</button>
</form>

<script>

$("form#data").submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);    

    $.ajax({
        url: "upload.php",
        type: 'POST',
        data: formData,
        success: function (data) {
            console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

</script>
</body>
</html>