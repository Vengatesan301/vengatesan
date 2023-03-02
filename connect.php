<?php
$username =$_POST['username'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$number =$_POST['number'];
$password =$_POST['password'];

$conn=new mysqli('localhost','root','','tourdb');
if($conn->connect_error){
die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into register(username,lastname,email,number,password)values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$username,$lastname,$email,$number,$password);
    $stmt->execute();
    echo"registration Successfully..";
    $stmt->close();
    $conn->close();
}

?>