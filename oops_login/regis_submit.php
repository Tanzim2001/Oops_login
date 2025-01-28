<?php
include "class.php";
extract($_POST);
if (isset($submit)) {
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "image/$img");

    $inserts = "INSERT INTO register (name, email, number, password, img) 
                VALUES ('$n', '$e', '$nm', '$p', '$img')";

    if ($obj->insert($inserts)) {
        $obj->url("index.php?msg=run");
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
