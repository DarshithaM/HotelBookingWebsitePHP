
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <style>
         .header{
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)), url("images/bg.jpg") center/cover no-repeat fixed;
    min-height: 100vh;
    color: #fff;
    padding: 25px;
    display: flex;
    flex-direction: column;
    align-content: stretch;
}
table {
    padding:40px;
    border-radius:10px;
    border-collapse: collapse;
    width: 60%;
    text-align:center;
    margin-left:230px;
    background:linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url("images/bg.jpg") center/cover no-repeat;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5;color:black;}
</style>
</head>
<body>


</style>
</head>
<body>
<header class = "header" id = "header">
<h1 style="text-align:center;">YOUR BOOKINGS</h1>
    <table id="cus">
        <tr>
            <th>ROOM TYPE</th>
            <th>NUMBER OF ROOMS</th>
            <th>CHECK-IN-DATE</th>
            <th>CHECK-OUT-DATE</th>
</tr><br>
<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$name='room';
$conn= mysqli_connect($host,$user,$pass,$name);
$username = $_SESSION['name'];

$query1= "SELECT * FROM `availability` WHERE `name` = '$username'";
$run1=mysqli_query($conn, $query1);
if($run1){
    
    while($row=mysqli_fetch_array($run1)){
        ?>
        <tr>
            <td><?php echo htmlentities($row['roomtype']);?></td>
            <td><?php echo $row['rooms'];?></td>
            <td><?php echo $row['chekin-date'];?></td>
            <td><?php echo $row['chekout-date'];?></td>
    </tr>
    <?php
    }
}

?></table><br>
 <p> <button type = "button" class = "head-btn" style="margin-left:520px;"><a href="login.php" style="text-decoration:none;color: #fff;"> GO BACK -> </a></button><p>
</header>
</body>
</html>