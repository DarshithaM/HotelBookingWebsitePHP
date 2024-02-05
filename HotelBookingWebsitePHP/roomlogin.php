<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:index.php');
}
$host='localhost';
	$user='root';
	$pass='';
	$name='room';

	$conn= mysqli_connect($host,$user,$pass,$name);
    
    if (isset($_POST['availability'])) {
        $room= $_POST['rooms'];
        $roomtype= $_POST['roomtype'];
        $chekindate= $_POST['chekin-date'];
        $chekoutdate= $_POST['chekout-date'];
        $name=$_POST['custname'];
        $query= "INSERT INTO `availability`( `roomtype`, `chekin-date`, `chekout-date`, `rooms`,`name`)  VALUES ('$roomtype','$chekindate','$chekoutdate', '$room', '$name')";
        $run = mysqli_query($conn, $query);
        $query1= "SELECT `roomprice` FROM `roomprice` WHERE roomtype = '$roomtype'";
        $run1=mysqli_query($conn, $query1); 
        while($row = mysqli_fetch_array($run1)){
            $roomprice= $row['roomprice'];}
            
        if ($run){
            
           }
         else{
             echo "rooms are not available for the required date!";
             echo "<script> window.location.assign('login.php'); </script>";
         }
         if($run1){
            $_SESSION['roomprice']=$roomprice;
             }
            else{
                 echo "hi";
            }
            function dateDiffInDays($date1, $date2) {
                // Calculating the difference in timestamps
                $diff = strtotime($date2) - strtotime($date1);
                  
                // 1 day = 24 hours
                // 24 * 60 * 60 = 86400 seconds
                return abs(round($diff / 86400));
            }
            
            // Start date
            $date1 = $_POST['chekin-date'];
              
            // End date
            $date2 = $_POST['chekout-date'];
              
            // Function call to find date difference
            $dateDiff = dateDiffInDays($date1, $date2);
            
            // Display the result
            
            
            $days = 0;
            if($dateDiff <= 0){
                $totalprice = $roomprice *1 *$room;
                $days = 1;
              }else{
                $totalprice = $roomprice * $dateDiff *$room;
                $days = $dateDiff;
              }            
        }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TAJ GROUP OF HOTELS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="sllider.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
        <style>
            .bgColor{
    background-color:white;
    color:black;
    border-bottom:1px solid lightgray;
    padding:10px 20px;
    top:0px;
    left:0px;
    right:0px;
    transition:all 1s;
 }
/* header */
.header{
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)), url("images/banner-img.jpg") center/cover no-repeat fixed;
    min-height: 100vh;
    color: #fff;
    padding: 25px;
    display: flex;
    flex-direction: column;
    align-content: stretch;
    height:600px;
}
.head-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    position:fixed;
    margin-left:-4px;
    margin-top:-6px;
   }
    .book{
    background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url("images/banner-img.jpg") center/cover no-repeat;
    color: #fff;
    padding: 40px 60px;
    width:700px;
    margin-right:10px;
    margin-left:480px;
    margin-top:-404px;
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
@media(min-width: 828px){
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
.book-form small{
    visibility: hidden;
    bottom:0;
    left:0;
}

.book-form .error small{
   color: #e74c3c;
   visibility:visible;
}
.book-form i{
    visibility: hidden;
    bottom:0;
    left:0;
}
.book-form .error i.fa-exclamation-circle{
    color: #e74c3c;
    visibility:visible;
 }
 .book-form .success i.fa-check-circle{
    color: #23802b;
    visibility:visible;
    margin-top: -45px;
    margin-left:310px;
 }
 .bill{
     position:absolute;
     background-color:white;
     padding:20px;
     height:490px;
     left:30px;
     color:black;
     margin-top:55px;
     width:410px;
     border-radius: 28px;
 }
 .bill:hover{
    background-color:#f5f5f5;color:black;
 }
 
</style>
    </head>
    <body>

        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top" id="navbar">
            <div class = "site-nav" >
                    <span id = "nav-btn">  <i class = "fas fa-bars"></i> MENU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <div class = "site-name" >
                    <span>THE TAJ GROUP OF HOTELS </span><br>
                </div>
            </div><br><br>
            
            <p><div class="bill">
                <h1 style="text-align:center;"><b><u>ESTIMATED </u></b><b><u>AMOUNT</u></b></h1>
               <h5 style="text-align:center;">Confirm Your Booking Now And Make Your Pay At Your Arrival At The Hotel.</h5><hr><br>
             <?php
             echo("<b>Welcome &nbsp;&nbsp; ". $name." ,") ;?></b><br><?php
            echo("ROOM TYPE : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>". $roomtype) ;?></b><br><?php
            echo("CHECK-IN-DATE : &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>". $chekindate) ;?></b><br><?php
            echo("CHECK-OUT-DATE : &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>". $chekoutdate) ;?></b><br><?php
            echo("NUMBER OF ROOMS : &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>". $room. " rooms") ;?></b><br><?php
            echo("ROOM PRICE/per night:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. ". $roomprice) ; ?></b>
            <div>
            </p><br><br><hr>
            <b style="padding:5px;padding-top:5px;padding-bottom:5px;"><?php
            echo("TOTAL AMOUNT : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. ". $totalprice) ;?></b><hr>
            <div class = "book">
            
             <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"      
          onload="if(submitted) {window.location.assign('thankyou.php');}"></iframe> 
                <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScgkqEWvI57RMig4aCHZwHtHpRy_Z5XwgqlqYhHjin1Ccdh5g/formResponse" class = "book-form" id="book-form"  method="post" target="hidden_iframe" onsubmit="return validateForm(); ">
                    <div class = "form-item">
                        <label for = "username">Username: </label>
                        <input type = "text" id = "username" placeholder="Enter your username" name="entry.1387288061" value="<?php echo $_SESSION['name'];?>" style="width:200px;">
                    </div><br>
                    <div class = "form-item">
                        <label for = "emailid">Email ID: </label>
                        <input type = "email" id = "emailid" placeholder="Enter your email id" name="entry.1055594797" style="width:200px;">
                    </div>
                    <div class = "form-item">
                        <label for = "accountno">Phone Number: </label>
                        <input type = "text" id = "accountno" placeholder="Enter your Phone number" name="entry.967071261" >
                    </div><br>

                    
                    <div class = "form-item">
                        <label for = "adult">Adults: </label>
                        <input type = "number" min = "1" max="2" value = "0" id = "adult" name="entry.132950982">
                    </div>
                    <div class = "form-item">
                        <label for = "children">Children: </label>
                        <input type = "number" min = "0" max="2" value = "0" id = "children" name="entry.1051323166">
                    </div><br>
                    
                    <div class = "form-item">
                    <label for="bed">Extra Bed:</label>
                    <select id="bed" name="bed" style="margin: 4px 0 16px 0;padding: 12px 15px;border-radius: 5px;font-size: 17px; border: none;" required>
                    <option value="yes">yes</option>
                    <option value="no">no</option></select>
                    </div><br>
                    <div class = "form-item">
                    <button  style="text-align:center;padding:10px;border-radius:10px;"id="paylogin" name="submit">Confirm Booking</button>
                    </div>
                </form>
                
            </div>
            
           <!--php email-->
        </header>
        <!--sidenav login-->
            <div class = "sidenav" id = "sidenav">
                <span class = "cancel-btn" id = "cancel-btn">
                    <i class = "fas fa-times"></i>
                </span>
    
                <ul class = "navbar">
                <h4> welcome <?php echo $_SESSION['name'] ;?></h1>
                <li><a href = "./login.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href = "#rooms"><i class="fa fa-bed" aria-hidden="true"></i> Rooms</a></li>
                    <li><a href = "#footer"><i class="fa fa-address-card-o" aria-hidden="true"></i> About Us</a></li>
                    <li><a href = "#footer"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
                    
               
                </ul><br>
                <a href="logout.php" style="background-color:var(--yellow);padding:10px;border-radius:6px;text-align:center;text-decoration:none;color:white;margin-left:80px;"><b> LOGOUT </b></a>

            </div>
            <div id = "modal"></div>
             <!-- login form  -->
        
        <!--js close-->
        <!--end of login form-->
            <section class = "rooms sec-width" id = "rooms">
                <div class = "title">
                    <h2>rooms</h2>
                </div>
                <div class = "rooms-container">
                    <!-- single room -->
                    <article class = "room">
                        <div class = "room-image">
                            <img src = "images/img1.jpg" alt = "room image">
                        </div>
                        <div class = "room-text">
                            <h3>Luxury Rooms</h3>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                            <ul>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    These rooms come with 1 Free Dinner at 
                                    Al a Carte Restaurant.
                                </li>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    They also have 20% Discount at Spa Centre.
                                </li>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    The bookers can have Fruit Basket & Wine Bottle 
                                    upon Arrival
                                </li>
                            </ul>
                            <p>These rooms are located in the hotel’s main building. They offer a 
                                minimal yet elegant design. They are more spacious than our 
                                double rooms and have double-pane sliding windows in this way 
                                offering uninterrupted panoramic views of the sea from every part 
                                of the room. These are ideal for a group of friends or family with 
                                one child who seek a touch of more comfort.</p>
                            <p>They consist of a unified bedroom with a separate living/sitting 
                                area. They each have a terrace or balcony offering great views of 
                                the sea. They are ideal for couples seeking greater luxury and 
                                comfort</p>
                            <p class = "rate">
                                <span>5999.00 RS /</span> Per Night
                            </p>
                            <button type = "button" class = "btn"><a href="roomlogin.php" style="text-decoration: none;color: black;">book now</a></button>
                        </div>
                    </article>
                    <!-- end of single room -->
                    <!-- single room -->
                    <article class = "room">
                        <div class = "room-image">
                            <img src = "images/img2.jpg" alt = "room image">
                        </div>
                        <div class = "room-text">
                            <h3>Delux room</h3>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                            <ul>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    These rooms come with 1 Free Dinner at 
                                    Al a Carte Restaurant.
                                </li>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    They also have 20% Discount at Spa Centre.
                                </li>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    The bookers can have Fruit Basket & Wine Bottle 
                                    upon Arrival
                                </li>
                            </ul>
                            <p>These rooms are located in the hotel’s main building. They offer a 
                                minimal yet elegant design. They are more spacious than our 
                                double rooms and have double-pane sliding windows in this way 
                                offering uninterrupted panoramic views of the sea from every part 
                                of the room. These are ideal for a group of friends or family with 
                                one child who seek a touch of more comfort.</p>
                            <p>They consist of a unified bedroom with a separate living/sitting 
                                area. They each have a terrace or balcony offering great views of 
                                the sea. They are ideal for couples seeking greater luxury and 
                                comfort</p>
                            <p class = "rate">
                                <span>2999.00 RS /</span> Per Night
                            </p>
                            <button type = "button" class = "btn"><a href="roomlogin.php" style="text-decoration: none;color: black;">book now</a></button>
                        </div>
                    </article>
                    <!-- end of single room -->
                    <!-- single room -->
                    <article class = "room">
                        <div class = "room-image">
                            <img src = "images/img3.jpg" alt = "room image">
                        </div>
                        <div class = "room-text">
                            <h3>Delux supreme</h3>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                            <ul>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    These rooms come with 1 Free Dinner at 
                                    Al a Carte Restaurant.
                                </li>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    They also have 20% Discount at Spa Centre.
                                </li>
                                <li>
                                    <i class = "fas fa-arrow-alt-circle-right"></i>
                                    The bookers can have Fruit Basket & Wine Bottle 
                                    upon Arrival
                                </li>
                            </ul>
                            <p>These rooms are located in the hotel’s main building. They offer a 
                                minimal yet elegant design. They are more spacious than our 
                                double rooms and have double-pane sliding windows in this way 
                                offering uninterrupted panoramic views of the sea from every part 
                                of the room. These are ideal for a group of friends or family with 
                                one child who seek a touch of more comfort.</p>
                            <p>They consist of a unified bedroom with a separate living/sitting 
                                area. They each have a terrace or balcony offering great views of 
                                the sea. They are ideal for couples seeking greater luxury and 
                                comfort</p>
                            <p class = "rate">
                                <span>4999.00 RS /</span> Per Night
                            </p>
                            <button type = "button" class = "btn"><a href="roomlogin.php" style="text-decoration: none;color: black;">book now</a></button>
                        </div>
                    </article>
                    <!-- end of single room -->
                
                <!-- single room -->
            <article class = "room">
                <div class = "room-image">
                    <img src = "images/img1.jpg" alt = "room image">
                </div>
                <div class = "room-text">
                    <h3>basic room</h3>
                    <div class = "rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "far fa-star"></i></span>
                    </div>
                    <ul>
                        <li>
                            <i class = "fas fa-arrow-alt-circle-right"></i>
                            These rooms come with 1 Free Dinner at 
                            Al a Carte Restaurant.
                        </li>
                        <li>
                            <i class = "fas fa-arrow-alt-circle-right"></i>
                            They also have 20% Discount at Spa Centre.
                        </li>
                        <li>
                            <i class = "fas fa-arrow-alt-circle-right"></i>
                            The bookers can have Fruit Basket & Wine Bottle 
                            upon Arrival
                        </li>
                    </ul>
                    <p>These rooms are located in the hotel’s main building. They offer a 
                        minimal yet elegant design. They are more spacious than our 
                        double rooms and have double-pane sliding windows in this way 
                        offering uninterrupted panoramic views of the sea from every part 
                        of the room. These are ideal for a group of friends or family with 
                        one child who seek a touch of more comfort.</p>
                    <p>They consist of a unified bedroom with a separate living/sitting 
                        area. They each have a terrace or balcony offering great views of 
                        the sea. They are ideal for couples seeking greater luxury and 
                        comfort</p>
                    <p class = "rate">
                        <span>1999.00 RS /</span> Per Night
                    </p>
                    <button type = "button" class = "btn"><a href="roomlogin.php" style="text-decoration: none;color: black;">book now</a></button>
                </div>
            </article>
            <!-- end of single room -->
        </div>
    </section>

    <!--footer-->
    <selection class="footer" id="footer">
            <footer class = "footer">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.646318775068!2d80.24514801384454!3d13.058170316508184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52664274918da1%3A0xc2a4e4c0d45dfa71!2sTaj%20Coromandel%2C%20Chennai!5e0!3m2!1sen!2sin!4v1624607619853!5m2!1sen!2sin" width="1263" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                <div class = "footer-container">
                    <div>
                        <h2>About Us </h2>
                        <p>We are a part of chain of luxury hotels which extends all over the world. We provide a luxorious stay with various value added and free services which will make you visit us over and over again.</p>
                        
                    </div>
    
                    <div style="text-align: center;">
                        <h2>Privacy</h2>
                        <a href = "#">Career</a>
                        <a href = "#">About Us</a>
                        <a href = "#">Contact Us</a>
                        <a href = "#services">Services</a><br>
                        <ul class = "social-icons">
                            <li class = "flex">
                                <i class = "fa fa-twitter fa-2x"></i>
                            </li>
                            <li class = "flex">
                                <i class = "fa fa-facebook fa-2x"></i>
                            </li>
                            <li class = "flex">
                                <i class = "fa fa-instagram fa-2x"></i>
                            </li>
                        </ul>
                    </div>
    
                    <div>
                        <h2>Have A Question</h2>
                        <div class = "contact-item">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                            </span>
                            <span>
                                No.3, narasimha perumal koil, Ramapuram, Chennai-89
                            </span>
                        </div>
                        <div class = "contact-item">
                            <span>
                                <i class = "fas fa-phone-alt"></i>
                            </span>
                            <span>
                                +919487994121
                            </span>
                        </div>
                        <div class = "contact-item">
                            <span>
                                <i class = "fas fa-envelope"></i>
                            </span>
                            <span>
                                darshitha.e0320043@sret.edu.in
                            </span>
                        </div>
                    </div>
                </div>
            </footer></selection>
            <!-- end of footer -->
       
            <script src="script.js"></script>
            <script type="text/javascript">var submitted=false;</script>
    
<script type="text/javascript">
    function validateName() {
            var name = document.getElementById('username').value;
            if(name.length == 0) {
              alert("Name can't be blank") ;
              return false;

            }
            if (!name.match(/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/)) {
              alert("Please enter your correct name") ;//Validation Message
              return false;
            }
            return true;
          }
          function validateEmail () {
              var email = document.getElementById('emailid').value;
              if(email.length == 0) {
                  alert("Email can't be blank") ;//Validation Message
                  return false;
                }
                return true;
            }
        function validateacct () {
              var account = document.getElementById('accountno').value;
              if(account.length == 0) {
                  alert("Phone Number can't be blank") ;//Validation Message
                  return false;
                }
                return true;
            }
            function validateForm() {
                if (!validateName() || !validateEmail()|| !validateacct()) {

    
            return false;
          } 
          else {
              alert("Booking has been Confirmed!");
            submitted=true;
            return true;
            include ('config.php');
          }
        }
        
            function changeBg(){
                var navbar = document.getElementById('navbar');
                var scrollvalue = window.scrollY;
                if(scrollvalue <400){
                     navbar.classList.remove('bgColor');
                     }else{
                         navbar.classList.add('bgColor');
                        }
                    }
                    window.addEventListener('scroll',changeBg);

        </script>
        </body>
    </html>