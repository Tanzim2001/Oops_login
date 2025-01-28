<?php

include "class.php";

if (!isset($_SESSION['email'])) {
    $obj->url("index.php"); // Redirect if session is not set
}

echo "<center>
<h2 style='background:red;padding:10px;color:white'>
    Welcome {$_SESSION['email']}
    <a href='logout.php?msg=run' style='float:right;color:white;'>Logout</a>
</h2>
</center>";

$em = $_SESSION['email'];
$query = "SELECT * FROM register WHERE email = '$em'";
$obj->profile($query);

foreach ($obj->val as $data) {
    echo "<center>
        <h2>Name: {$data->name}</h2>
        <h2>Email: {$data->email}</h2>
        <h2>Mobile: {$data->number}</h2>
    </center>";
}
if($obj->loggedin()=="")
{
	$obj->url("index.php");
}

?>