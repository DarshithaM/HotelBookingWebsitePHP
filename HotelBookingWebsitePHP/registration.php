<?php
session_start();
include('index.php');
$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'userregistration');

$name = $_POST['username'];
$email  = $_POST['Emailid'];
$password = $_POST['Password'];

$s = "select * from registration where name= '$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);



if($num == 1){
   
    echo '<script type="text/javascript"> alert("username already taken!")</script>';
    echo "<script> window.location.assign('index.php'); </script>";
}else{
    $reg= " insert into registration(name,  emailid, password) values ( '$name' , '$email', '$password')";
    mysqli_query($conn, $reg);
    echo '<script type="text/javascript"> alert("registration successful!")</script>';
    echo "<script> window.location.assign('login.php'); </script>";
}
?>