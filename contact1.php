<?php

    $server = "localhost";
    $username="root";
    $password="";
    $database="akgym";

    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $message=$_POST['message'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
   
    $sql="INSERT INTO `akgym`.`contact` (`message`, `name`, `email`, `subject`) VALUES ('$message', '$name', '$email', '$subject');";
  
    if($con->query($sql)==true){
        echo "Thank you for contacting";

    }
    else{
        echo "Error : $sql <br> $con->error";
    }
    $con->close();

?>