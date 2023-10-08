<?php
$email=$_POST['email'];
$psw=$_POST['psw'];
$psw-repeat=$_POST['psw-repeat'];
$remember=$POST['remember'];

//database connection
$conn=new mysqli('localhost', 'root','','signup');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into signup(email,psw,psw-repeat,remember)
    values(?,?,?)");
    $stmt->bind_param("vvv",$email,$psw,$psw-repeat);
    $stmt->execute();
    echo "signup successfull...";
    $stmt->close();
    $conn->close();
}
