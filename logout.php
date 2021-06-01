<?php
session_start();
unset($_SESSION["S_no"]);
header("Location:school_pg.php");
?>