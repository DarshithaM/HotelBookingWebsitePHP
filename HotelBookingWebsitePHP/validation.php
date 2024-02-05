<?php
session_start();

$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'userregistration');

$name = $_POST['username'];

$password = $_POST['Password'];

$s = "select * from registration where name= '$name' && password = '$password'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['name'] = $name;
    echo '<script type="text/javascript"> alert("login successful!")</script>';
    echo "<script> window.location.assign('login.php'); </script>";
   
}else{
    echo '<script type="text/javascript"> alert("invalid username or password!")</script>';
    echo "<script> window.location.assign('index.php'); </script>";
}?>