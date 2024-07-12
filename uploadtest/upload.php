<?php

    if ( 0 < $_FILES['image']['error'] ) {
        echo 'Error: ' . $_FILES['img']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/' . $_FILES['image']['name']);
    }

    print_r($_POST);

?>