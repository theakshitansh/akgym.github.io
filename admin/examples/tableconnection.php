<?php

$db = mysqli_connect("localhost","root","","akgym");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>