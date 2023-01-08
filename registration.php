<?php

session_start();

<<<<<<< HEAD
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
=======
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistrations');
$name = $_POST['user'];
$password = $_POST['password'];
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo " Already registered";
}
else{
    $reg = "insert into usertable(name, password) values ($name, $password)";
    mysqli_query($con, $reg);
    echo " signed up";
}
>>>>>>> 9ce98227cf671218c780151fb07c1e89f593481f
?>