<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$date =$_POST['date'];
$doc =$_POST['doc'];

$conn = new mysqli("localhost","root","","app");

    if($conn->connect_error)
    {   echo "$conn->connect_error";
        die("connection Failed:" .$conn->connect_error);
    }       
    else
    {   
        $stmt = $conn->prepare("insert into book(name,phone,gender,age,date,doc) values (?,?,?,?,?,?)");
        $stmt->bind_param("sisiss",$name,$phone,$gender,$age,$date,$doc);
        $stmt->execute();

        header("location:index.html");
  
        $stmt->close();
        $conn->close();
    }

?>