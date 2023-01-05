<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrations');
$name = $_POST['Name'];
$email= $_POST['Email'];
$password = $_POST['Password'];
$s = " select * from usertable where Name = '$name' && Password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    header('location:index.html');
}else{
    header('location:login.php');
}
?>