<?php
$con=new mysqli('localhost','root','','school_website');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>