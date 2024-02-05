
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TAJ GROUP OF HOTELS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
        <style>
           
            .places{
                margin-top: 40px;
                padding: 40px 0;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/wp3764447-theme-park-wallpapers.jpg") center/cover no-repeat fixed;
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
</div>

            <div class = "head-bottom flex">
                <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
                <p>The TAJ GROUP OF HOTELS provides you the best way to experience the beauty of mesmerising destinations.</p>
                <button type = "button" class = "head-btn"><a href="#rooms" style="text-decoration:none;color: #fff;">BOOK NOW</a></button>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
            <li><a href = "#header"><i class="fa fa-home" aria-hidden="true"></i> home</a></li>
                <li><a href = "#services"><i class="fa fa-coffee" aria-hidden="true"></i> services</a></li>
                <li><a href = "#customers"><i class = "fas fa-swimming-pool"></i> fun events</a></li>
                <li><a href = "#rooms"><i class="fa fa-bed" aria-hidden="true"></i> rooms</a></li>
                <li><a href = "#footer"><i class="fa fa-address-card-o" aria-hidden="true"></i> About Us</a></li>
                <li><a href = "#footer"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li><br>
                
                
            </ul>
            <a href="#" class = "btn log-in" id="loginbtn" style="text-align: center;text-decoration: none;"><i class="fa fa-user" aria-hidden="true"></i> Login/Register</a>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->
        <!-- login form  -->
        <div class="bg-modal" id="logid" >
            <div class="modal-content" style="height: 540px;">
                <div class="close">+</div>
                <img src="./images/login.jpg" alt="login" style="height:100px;width: 100px;margin-left: 150px;">
                <form action="validation.php" method="POST">
                    <div class="buttonbox">
                        <div id="bttn"></div>
                        <button type="button" class="toggle-btn" onclick="login()" style="text-align: center;">login</button>
                        <button type="button" class="toggle-btn" onclick="register()" style="text-align: center;">register</button>
                    </div>
                    <div class="form-group" id="login">
                    <div class="form-item">
                        <label for="username" style="padding: 10px;text-align: center;">&nbsp;&nbsp;&nbsp;Username</label>
                    <input type="text" placeholder="username" name="username" required style="width: 300px;text-align: center;margin-left: 20px;">
                </div>
                <div class="form-item">
                    <label for="Password" style="padding: 10px;text-align: center;">&nbsp;&nbsp;&nbsp;Password</label>
                <input type="password" placeholder="Password" required name="Password" style="width: 300px;text-align: center;margin-left: 20px;">
            </div><br>
            <a href="forgot password.php" style="color: blue; text-align: center;margin-left: 80px;">Forgot password? Click here</a>
            <div class="form-item">
            <a href="./login.php" style="text-decoration: none;color: black;"><input type = "submit" class = "btn" name="loginbtn" id= value="login" style="background-color:var(--yellow);margin-left:110px;"></a>
            </div>
            
        </div>
        </form>
        
<form action="registration.php" method="POST" onsubmit="validate()">
            <div class="form-group" id="register">
                <div class="form-item">
                    <label for="username" style="padding: 10px;text-align: center;margin-left: 20px;margin-top: -10px;">Username</label>
                <input type="text" placeholder="username" id="uname" name="username" style="width: 300px;text-align: center;margin-left: 20px;" required oninvalid='this.setCustomValidity(\"User ID is a must"\)'>
            </div>
                <div class="form-item">
                    <label for="Emailid" style="padding: 10px;text-align: center;margin-left: 20px;">Email ID</label>
                <input type="email" placeholder="Email ID" id="eid" name="Emailid" style="width: 300px;text-align: center;margin-left: 20px;" required>
            </div>
            <div class="form-item">
                <label for="Password" style="padding: 10px;text-align: center;margin-left: 20px;">Password</label>
            <input type="password" placeholder="Password" id="pass" name="Password" style="width: 300px;text-align: center;margin-left: 20px;"required>
        </div><br>
        
            <input type="checkbox" class="pass" id= "chk" style="margin-left: 40px;" required>
            <label for="pass" > i agree to the <a href="privacy policy.php" style="color: blue; text-align: center;"> terms and condition </a></label>
        <div class="form-item">
        <button type = "submit" class = "btn" name="registerbtn" style="background-color:var(--yellow);margin-left:110px;" >REGISTER</button>
        </div>
        
    </div>
        </form>
            </div>
        </div>
        <!--loginform js open-->
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("bttn");
            
            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }

            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
            const bgmodal = document.querySelector('.bg-modal');
            window.onload = function(){
                setTimeout(function(){
                    bgmodal.style.display = "flex"
                }, 10)
            }
        </script>
        <!--js close-->
        <!--end of login form-->
        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-content">
                        <h2><span>
                            <i class = "fas fa-utensils"></i>
                        </span> Food Service</h2>
                        <p>All meals are served in a buffet-style. The Snack Bar is a self-service bar, which is adjacent to the central swimming pool. It offers snacks, light meals, soft drinks, cocktails, juices, local beer, local wine as well as tea & filter coffee. The Lobby Bar is a self-service 
                            bar located at the hotel lobby 
                            near the Main Entrance.
                            It offers a variety of International 
                            and local alcoholic drinks, 
                            cocktails, as well as soft drinks, 
                            juices, aperitifs, house 
                            wine, tea & filter coffee.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-content">
                        <h2><span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span> Refreshment</h2>
                        <p> We provide a number of refreshment services such as swimming pool, gymnastics, aerobics, darts, aqua gym, evening shows, games,quizes, bingo nights and so on. The central pool operates with fresh water and is located in the 
                            surrounding area of the hotel main building, next to the Snack Bar.Sun beds and umbrellas are available free of charge, where our 
                            guests can relax and enjoy their drinks and the beautiful view of the 
                            sea in the background.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-content">
                        <h2><span>
                            <i class = "fas fa-broom"></i>
                        </span> Housekeeping</h2>
                        <p>A housekeeping service is provided 7 days a week. Please contact the Reception Desk to confirm your exact checkout time and so as to request assistance with your luggage.Please note that with a small surcharge you can request a late checkout.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-content">
                        <h2><span>
                            <i class = "fas fa-door-closed"></i>
                        </span> Room Service</h2>
                        <p>Room services include Independent Air Conditioning, Flat Screen TV, Wi-Fi Access (Surcharge), Telephone,Balcony or Terrace,
                             Outdoor Furniture,
                            Refrigerator,
                            Room Service (Surcharge), Safe (Surcharge)
                            Desk,
                            
                             wake-up-services.
                             </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>Fun things to do</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                       <!----> 
                        <h3>Evening shows</h3>
                        <p>We will fill your nights with events and fun. Enjoy a romantic evening with light music or get away by the energy of themed parties and dance performances. Sit back and enjoy one of the open-air shows that we put on in our spacious amphitheatre under beautiful starry skies in Wet’n Wild park.</p>
                        <img src = "images/cus1.jpg" alt = "customer image">
                       
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <h3>Seawater pool</h3>
                        <p>The seawater pool is located in a more secluded environment closer 
                            to the sea. 
                            Sun beds and umbrellas are available free of charge for our guests. 
                            This pool offers a quieter atmosphere closer to nature, with the 
                            spectacular view of the sea. The children’s playground and 
                            volleyball/football courts are nearby.</p>
                        <img src = "images/swi.jpg" alt = "customer image">
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        
                        <h3>aqua gym</h3>
                        <p>complete family entertainment HOTEL with facilities like Marriage hall, conference hall, Swimming pool, Health club, Permit Room, Kids play area, Open Air Theater, Indoor and Outdoor games etc. Fully Air condition furnished room with satellite T.V. </p>
                        <img src = "images/aqua.jpg" alt = "customer image">
            
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        
        
        
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
                        <button type = "button" class = "btn" id="logroom">book now</button>
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
                        <button type = "button" class = "btn" id="logroom1">book now</button>
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
                        <button type = "button" class = "btn" id="logroom2">book now</button>
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
                <button type = "button" class = "btn" id="logroom3">book now</button>
            </div>
        </article>
        <!-- end of single room -->
        <button type = "button" class = "head-btn" style="margin-left:430px;color:black;border:1px solid black;"> EXPLORE MORE -> </a></button>
    </div>
</section><br>
<script>
    document.getElementById('logroom').addEventListener('click',
function(){
   alert("login to book a room!");
   window.location.reload();
   window.location.href='index.php#header';
});
document.getElementById('logroom1').addEventListener('click',
function(){
   alert("login to book a room!");
   window.location.reload();
   window.location.href='index.php#header';
});
document.getElementById('logroom2').addEventListener('click',
function(){
   alert("login to book a room!");
   window.location.reload();
   window.location.href='index.php#header';
});
document.getElementById('logroom3').addEventListener('click',
function(){
   alert("login to book a room!");
   window.location.reload();
   window.location.href='index.php#header';
});
</script>

        <!--footer-->
<!-- end of body content -->

        
        <!--footer-->
    <selection class="footer" id="footer">
        <footer class = "footer"><br>
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
        
    </body>
</html>