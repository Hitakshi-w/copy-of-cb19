<?php

session_start();

$con = mysqli_connect('localhost', 'root', '','userregistrations');


// mysqli_select_db($con, 'registrations');
$name = $_POST['name'];

$password = $_POST['password'];
$s = " select * from usertable where name = '$name' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    // mysqli_commit($con);
    header('location:index.html');
}else{
    header('location:login.html');
}
?>