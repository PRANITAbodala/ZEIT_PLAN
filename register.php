<?php
session_start();
if(!isset($_SESSION['name']))
{
    echo"you are logged out";
    header("location:welcome.html");
}
$name = $_POST['name'];
$emailid = $_POST['emailid'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$gender = $_POST['gender'];
if($password==$confirm)
{
   
    $conn = new mysqli("localhost","root","","app");

    if($conn->connect_error)
    {   echo "$conn->connect_error";
        die("connection Failed:" .$conn->connect_error);
    }       
    else
    {   
        $stmt = $conn->prepare("insert into register(name,emailid,phone,age,password,confirm,gender)values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiisss",$name,$emailid,$phone,$age,$password,$confirm,$gender);
        $stmt->execute();
        
        echo " registration sucessfull...";
        header("location:loginpage.html");
        $stmt->close();
        $conn->close();
    }
}
else
{
    die("enter correct password");
}

?>