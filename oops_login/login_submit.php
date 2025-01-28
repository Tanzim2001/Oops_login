<?php
include "class.php";
extract($_POST);
if (isset($login)) {
    $email = $obj->run->real_escape_string($e);
    $password = $obj->run->real_escape_string($p);

    $select = "SELECT email, password FROM register WHERE email='$e' AND password='$p'";

    if ($obj->login($select)) 
	{
		$_SESSION['email']=$e;
        $obj->url("home.php?msg=run");
    } else 
	{
        $obj->url("index.php?err=error");
    }
}
?>