<!--reset password-->
<?php
$host='localhost';
$user='root';
$pass='';
$name='userregistration';

$conn= mysqli_connect($host,$user,$pass,$name);


if(isset($_POST['submit'])){
    $password = $_POST['password'];
$confirmpass =  $_POST['confirmpassword'];
    if($password=$confirmpass){
        if(mysqli_query($conn,"UPDATE registration SET password = '$_POST[password]' WHERE name = '$_POST[username]'")){
            ?>
            <script type="text/javascript">
            alert("password updated successfully!");
            window.location.replace('index.php');
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
            alert("password update failed!");
            </script>
            <?php  
        }  
    }else{
        ?>
        <script type="text/javascript">
        alert("passwords does not match!");  
        </script>
            <?php
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="REFRESH" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
    <style>
    /* booking form */
    .header{
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)), url("images/bg.jpg") center/cover no-repeat fixed;
    min-height: 100vh;
    color: #fff;
    padding: 25px;
    display: flex;
    flex-direction: column;
    align-content: stretch;
}
.book{
    background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85));
    color: #fff;
    padding: 40px 70px;
    margin-left:340px;
    margin-right:340px;
}
.book-form{
    display: grid;
}
.form-item{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.book-form input[type = "submit"]{
    margin: 18px 0 0 0;
    background: var(--dark);
    color: #fff;
    border: 1px solid #fff;
}
.book-form label, .book-form input{
    width: 100%;
}
.book-form label{
    font-weight: 600;
    word-spacing: 5px;
    padding-bottom: 8px;
}
.book-form input:not(.btn){
    margin: 4px 0 16px 0;
    padding: 12px 15px;
    border-radius: 5px;
    font-size: 17px;
    border: none;
}
.book-form input:focus{
    outline: 0;
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.4);
}
@media(min-width: 768px){
    .book-form{
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 24px;
    }
}
@media(min-width: 1170px){
    .book-form{
        grid-template-columns: repeat(3, 1fr);
    }
}
@media(min-width: 1370px){
    .book-form{
        grid-template-columns: 2fr 2fr 1fr 1fr 1fr 2fr;
    }
    .book{
        height: 40vh;
        display: grid;
    }
}
@media(max-width: 500px){
    .book{
        padding-left: 20px;
        padding-right: 20px;
    }
}

    </style>
</head>
<body>
<header class = "header" id = "header">
            
            <div class = "book">
            <h2 style="text-align:center;"> Reset Your Password</h2><br>
            <form action="" method="post" class = "book-form" id="book-form">
            <div class = "form-item">
    <label for="username" style="padding: 10px;text-align: center; ">&nbsp;&nbsp;&nbsp;username</label>
    <input type="text" placeholder="username" name="username"  required style="width: 300px;margin-left: 300px;text-align: center;margin-left: 20px;">
    <label for="password" style="padding: 10px;text-align: center;">&nbsp;&nbsp;&nbsp;password</label>
    <input type="password" placeholder="password" name="password" required style="width: 300px;margin-left: 300px;text-align: center;margin-left: 20px;">
    <label for="confirmpassword" style="padding: 10px;text-align: center;">&nbsp;&nbsp;&nbsp;confirm password</label>
    <input type="password" placeholder="confirm password" name="confirmpassword" required style="width: 300px;margin-left: 300px;text-align: center;margin-left: 20px;">
    <button type = "submit" class = "btn" name="submit"  value="login" style="width:200px;background-color:var(--yellow);margin-left:70px;"> Reset password</button>
    </form> </div>
                
            </div>

   

</body>
</html>