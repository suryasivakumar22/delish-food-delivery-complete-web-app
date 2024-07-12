<?php
	session_start();
	$categorynam = $_SESSION['catna'];
    if ( 0 < $_FILES['img']['error'] ) {
        echo 'Error: ' . $_FILES['img']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['img']['tmp_name'], '../../uploadedfiles/'.$_SESSION['hdatab'].'a/thumbnails/menuthumb/'.$categorynam.'/'. $_FILES['image']['name']);
    }

    print_r($_POST);

?>