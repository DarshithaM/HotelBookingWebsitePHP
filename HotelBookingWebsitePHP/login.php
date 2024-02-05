<?php
session_start();
if(!isset($_SESSION['name'])){
   
    header('location:index.php');}
    $mysqli=NEW MySQLi('localhost','root','','room');
$resultSet = $mysqli->query("SELECT roomtype, roomprice FROM roomprice");
   
?>
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
                .circle-icon {
                    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)) ;
                    color:white;
                    padding:9px;
                    border-radius: 50%;
                border:1px solid white;}
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
}
.head-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    position:fixed;
    margin-left:-4px;
    margin-top:-6px;
   }


    

           

</style>
    </head>
    <body>
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top" id="navbar">
                <div class = "site-nav">
                    <span id = "nav-btn"><i class = "fas fa-bars"></i> MENU </span>&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class = "site-name">
                    <span>THE TAJ GROUP OF HOTELS</span><br>

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
                    <h4> welcome <?php echo $_SESSION['name'] ;?></h1>
                <li><a href = "#header"><i class="fa fa-home" aria-hidden="true"></i> home</a></li>
                <li><a href = "#services"><i class="fa fa-coffee" aria-hidden="true"></i> services</a></li>
                <li><a href = "#customers"><i class = "fas fa-swimming-pool"></i> fun events</a></li>
                <li><a href = "#rooms"><i class="fa fa-bed" aria-hidden="true"></i> rooms</a></li>
                <li><a href = "#places"><i class="fa fa-plane" aria-hidden="true"></i> Places to Visit</a></li>
                <li><a href = "#footer"><i class="fa fa-address-card-o" aria-hidden="true"></i> About Us</a></li>
                <li><a href = "your bookings.php"><i class="fa fa-plane" aria-hidden="true"></i> Your Bookings</a></li><br>
					
                <a href="logout.php" style="background-color:var(--yellow);padding:10px;border-radius:6px;text-align:center;text-decoration:none;color:white;margin-left:80px;"><b> LOGOUT </b></a>
                </ul>
            
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->
        
        <!-- body content  -->
        <div class="body">
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
               
            </div>
        </article>
        
        <!-- end of single room -->
    </div>
</section>

<!-- end of body content -->
<div class = "book">
            <h2 style="text-align:center;"> Book your room now</h2><br>
            <form action="roomlogin.php" class="book-form" id="book-form" method="post">
            <input type="hidden" id="custname" name="custname" value="<?php echo $_SESSION['name'];?>">
            <div class = "form-item">
                    <label for="roomtype">Room type:</label>
                    <select id="roomtype" name="roomtype" style="margin: 4px 0 16px 0;padding: 12px 15px;border-radius: 5px;font-size: 17px; border: none;" required>
                    <?php
                    while($rows = $resultSet->fetch_assoc()){
                        $roomtype = $rows['roomtype'];
                        $roomprice = $rows['roomprice'];
                        echo "<option value ='$roomtype'>$roomtype:  $roomprice. Rs</option>";
                    }
                    ?></select></div><br>
            <div class = "form-item">
                        <label for = "rooms">Rooms: </label>
                        <input type = "number" min = "1" value = "1" name = "rooms" required >
                    </div>
               
                    <div class = "form-item">
                        <label for = "checkin-date">Check In Date: </label>
                        <input type = "date"  name = "chekin-date"  required >
                    </div><br>
                    <div class = "form-item">
                        <label for = "checkout-date">Check Out Date: </label>
                        <input type = "date" name = "chekout-date" required >
                    </div><br>
                    <div class = "form-item">
                    <button  style="text-align:center;padding:10px;border-radius:10px; background:rgba(0, 0, 0, 0.3);color:white;"id="paylogin" name="availability">Check Availability</button>
</div>
            </form></div>
<section class = "places" id = "places">
            <div class = "sec-width">
                <div class = "title">
                    <h2>Places to Visit</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                       <!----> 
                        <h3>Marina beach</h3>
                        <p>Predominantly a sandy beach, Marina is India’s longest and world’s second longest beach. It is the favorite hangout place of locals as well as tourists. Mesmerising sunset, horse rides, hot air balloons and some snacks, Marina Beach is a popular name among fun places to visit in Chennai with friends. Also, you can explore numerous places to visit near Marina beach for an amazing holiday.<br><b>Fun things to do:</b> Exploring an aquarium, ice house, kite flying, pony riding, and authentic seafood.</p>
                        <br><img src = "images/ebe34894dd35c4a79ceaa3d3d438c482.jpg" alt = "customer image">
                       
                    </div></a>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                        <h3>Vandalur zoo</h3>
                        <p>Arignar Anna Zoological Park, popularly known as Vandalur Zoo is another famous attraction among fun places in Chennai. A favourite among kids as well as adults, this zoological park is a conservation site for flora and fauna of Eastern and Western ghats which is used as an active breeding space for endangered species. <br>

<b>Fun things to do:</b> Visit Aquarium, deer safari, lion safari, and prey-predator enclosure, nocturnal animal house, snake house, butterfly house, white tiger exhibit, and waterfall entrance.</p>
                        <img src = "images/aestory591d4a386065e.jpg" alt = "customer image">
                    </div></a>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                        
                        <h3>VGP Universal Kingdom</h3>
                        <p>Located in the East coast road, VGP Universal Kingdom is an amusement park offering thrill and fun to visitors across all ages. This place among the favorite fun places in Chennai offers rides for kids, youths and family, eateries and live shows. A complete entertainment package. It is among the best entertainment places in Chennai for family.<br>

<b>Fun things to do:</b> Explore circus train, Aladdin, dashing car, go-karting, water chute, telecombat, balloon racer, doll kingdom, flying machine and jungle car. One can also enjoy live shows like folk music, dance and light, and semi-classical music performances.</p>
                        <img src = "images/R233e28c22031d8c6ab0035c02b5bf26a.jpg" alt = "customer image">
            
                    </div></a>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                        <h3>Guindy Snake Park</h3>
                        <p>One of the best adventure places in Chennai, Guindy Snake Park is an abode to various snakes, crocodiles, tortoises, earthworms, scorpions and mites. It is a great initiative of wildlife conservation for reptiles and alligators and some rare flora species. It is one of the most offbeat and intriguing places to visit in Chennai with friends.<br>

<b>Fun things to do:</b> Watch the rare species of snakes tortoises and crocodiles like King Cobra, Python, Turtle and Monitor Lizard.</p>
                        <br><br><br><br><br><img src = "images/guindy-national-park.jpg" alt = "customer image">
                    </div></a>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                        <h3>Fun City</h3>
                        <p>The Fun city is definitely a preferred name among the popular entertainment places in Chennai for family. It offers space for plenty of fun games, learning experiences, activities, rides and assures big smiles in return. Sundays can be relaxing and thrilling with such a visit!<br>

<b>Fun things to do:</b> Infants and toddlers can enjoy at ‘fun zones’ while children and young adults can indulge in bowling, pool and other fun rides like the ‘dashing car’.</p>
<br><br><br><img src = "images/OIP.jpg" alt = "customer image">
                    </div></a>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                        <h3>Birla Planetarium</h3>
                        <p>Like all other, Birla Planetarium organised simulated tours of universe, solar system and cosmic shows. It is a famous destination for school excursions, young children and families. The planetarium ensures a funful day out with effective learning. It is among the best places to see in Chennai. <br>

<b>Fun things to do:</b> Enjoy the shows on extra-terrestrial objects and universe and visit Defence Research and Development Organisation (DRDO) pavilion to see large size exhibits of missiles, naval systems, combat vehicles and advanced machine guns.</p>
                        <img src = "images/R16d40c3258e2ac444d2c46dc40c280b9.jpg" alt = "customer image">
                    </div></a>
                    <!-- end of single customer -->
                    
                <!-- single customer -->
                <a href="#" style="text-decoration:none;color:black;"><div class = "customer">
                        <h3>MGM Dizzee World</h3>
                        <p>Family time can be best spent where children love to go and enjoy to the fullest. MGM Dizzee World is one such place in Chennai, located in East Coast Road, that ensures super fun with its varied range of rides, swings and water slides. Visiting this super fun place is definitely one of the top things to do in Chennai. It is definitely among one of the most amazing entertainment places in Chennai.<br>

<b>Fun things to do:</b> Explore Big wheel, Disc saucer, Roll o Roll, Tomb Raider, shoe house. Families can also enjoy a boat ride, rain tree, and amphitheater. MGM offers a special experience of snow shower and snowman.</p>
                        <img src = "images/R65a0f0486c7a8199c9528a9c3facf4dd.jpg" alt = "customer image">
                    </div></a>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <a href="" style="text-decoration:none;color:black;"><div class = "customer">
                        <h3>Muttukadu</h3>
                        <p>Muttukadu is a backwater area in Kanchipuram district near Chennai. The place is famous for watersports and boating; and is ideal for relaxation and chilling out.<br>

<b>Fun things to do:</b> Karnakasi Ranger, Dashing Boat, Arrow Loop Roller Coaster, water sports and 110 feet Dizzee Shake. Visit Dakshinchitra, a small handicraft village.</p>
<br><br><br><br><br><br><br><br><br><br><img src = "images/16946b226a201886ff0a846d601d05b1.jpg" alt = "customer image">
                    </div></a>
                    <!-- end of single customer -->
                </div>
                <button type = "button" class = "head-btn" style="margin-left:430px;"> EXPLORE MORE -> </a></button>
            </div>
        </section>
        <!--footer-->
<!-- end of body content -->
        
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
        </footer></selection></div>
        <!-- end of footer -->
       <script>
       function changeBg(){
    var navbar = document.getElementById('navbar');
    var scrollvalue = window.scrollY;
    if(scrollvalue <400){
         navbar.classList.remove('bgColor');
         }else{
             navbar.classList.add('bgColor');
            }
        }
        window.addEventListener('scroll',changeBg);</script>
        <script src="script.js"></script>
    </body>
</html>