<?php
session_start();
if(!isset($_SESSION['name'])){
   
    header('location:index.php');}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj group of hotels</title>
    <link rel="stylesheet" href="main.css">
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
   margin-left:-10px;
    margin-top:-10px;
    bottom:-10%;
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
}</style>
</head>
<body>
<header class = "header" id = "header">
            
            <div class = "book">
            <h2 style="text-align:center;"> Thank you for choosing us <?php echo $_SESSION['name'] ;?> !</h2>
            <h4 style="text-align:center;">Your booking has been confirmed! A confirmation mail has been sent to you and you can view you booking details in your bookings page. we are looking forward to have you as our guest!</h4>
            </div><br>
            <p><a href="login.php" style="background-color:var(--yellow);padding:10px;border-radius:6px;text-align:center;text-decoration:none;color:black;width:120px;margin-left:580px;"><b> GO BACK -> </b></a>  </p>
            </div>

</body>
</html>