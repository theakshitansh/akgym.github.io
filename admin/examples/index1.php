<?php

    $server = "localhost";
    $username="root";
    $password="";
    $database="akgym";

    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $select2=$_POST['select'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT INTO `akgym`.`home` (`name`, `phone`, `select2`, `email`,`message`) VALUES ('$name', '$phone', '$select2', '$email', '$message');";
  
    if($con->query($sql)==true){
        echo "Thank you for register, will contact you soon";

    }
    else{
        echo "Error : $sql <br> $con->error";
    }
    $con->close();

?>