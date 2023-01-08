<?php

session_start();

$con = mysqli_connect('localhost', 'root', '','userregistrations');

// mysqli_select_db($con, 'userregisteration');
$name = $_POST['name'];
$password = $_POST['password'];
echo $name;
echo $password;
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo " Already registered";
}
else{
    $reg = "insert into usertable(name, password) values ('$name', '$password')";
    mysqli_query($con, $reg);
    mysqli_commit($con);
    echo " signed up";
}
?>