<?php

session_start();
header('location: login.html');
$con = mysqli_connect('localhost', 'root', '','registrations');

/*mysqli_select_db($con, 'registrations');*/
$name = $_POST['Name'];
$email= $_POST['Email'];
$password = $_POST['Password'];
$s = " select * from usertable where Name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo " Already registered";
}
else{
    $reg = "insert into usertable(Name, Email, Password) values ($name, $email, $password)";
    mysqli_query($con, $reg);
    echo " signed up";
}
?>