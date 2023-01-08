<?php

session_start();

$con = mysqli_connect('localhost', 'root', '','userregisteration');
if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";
// mysqli_select_db($con, 'userregisteration');
// $name = $_POST['user'];
// $password = $_POST['password'];
// $s = " select * from usertable where name = '$name'";
// $result = mysqli_query($con, $s);
// $num = mysqli_num_rows($result);
// if($num == 1){
//     echo " Already registered";
// }
// else{
//     $reg = "insert into usertable(name, password) values ($name, $password)";
//     mysqli_query($con, $reg);
//     echo " signed up";
// }
?>