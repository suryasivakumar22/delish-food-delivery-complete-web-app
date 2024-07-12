<?php
session_start();
$categorynam = $_SESSION['catna'];
$fileName = $_FILES['imgg']['name'];
$fileTmpName  = $_FILES['imgg']['tmp_name'];
$dir = "../../uploadedfiles/".$_SESSION['hdatab']."a/thumbnails/menuthumb/".$categorynam.'/';
$tdir = $dir.basename($fileName);
move_uploaded_file($fileTmpName, $tdir);

?>