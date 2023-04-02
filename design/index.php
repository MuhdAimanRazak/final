<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NORASHIDA RENTAL ROOM SYSTEM</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>

<body>

   <!-- header section starts  -->

   <section class="header">
      <div class="flex">
         <a href="index.php" class="logo">NORASHIDAH RENTAL ROOM SYSTEM</a>
         <a href="http://localhost/fyp2/log/index.php" class="btn">Log In</a>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="about.php">about</a>
         <a href="room.php">room</a>
         <a href="contact.php">contact</a>
         <a href="checkbooking.php">check booking</a>
      </nav>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="box swiper-slide">
               <img src="images/pic1.jpeg" alt="">
               <div class="flex">
               </div>
            </div>

            <div class="box swiper-slide">
               <img src="images/pic2.png" alt="">
               <div class="flex">
               </div>
            </div>

            <div class="box swiper-slide">
               <img src="images/pic3.jpeg" alt="">
               <div class="flex">
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- availability section starts  -->

   <!--<section class="availability" id="availability">

      <form action="" method="post">
         <div class="flex">
            <div class="box">
               <p>check in <span>*</span></p>
               <input type="date" name="check_in" class="input" required>
            </div>
            <div class="box">
               <p>check out <span>*</span></p>
               <input type="date" name="check_out" class="input" required>
            </div>
            <div class="box">
               <p>adults <span>*</span></p>
               <select name="adults" class="input" required>
                  <option value="1">1 adult</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
               </select>
            </div>
            <div class="box">
               <p>childs <span>*</span></p>
               <select name="childs" class="input" required>
                  <option value="-">0 child</option>
                  <option value="1">1 child</option>
                  <option value="2">2 childs</option>
                  <option value="3">3 childs</option>
                  <option value="4">4 childs</option>
                  <option value="5">5 childs</option>
                  <option value="6">6 childs</option>
               </select>
            </div>
            <div class="box">
               <p>rooms <span>*</span></p>
               <select name="rooms" class="input" required>
                  <option value="1">1 room</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>
         </div>
         <input type="submit" value="check availability" name="check" class="btn">
      </form>-->

   </section>

   <!-- availability section ends -->

   <!-- reservation section starts  -->

   <!--<section class="reservation" id="reservation">

      <form action="" method="post">
         <h3>make a reservation</h3>
         <div class="flex">
            <div class="box">
               <p>check in <span>*</span></p>
               <input type="date" name="check_in" class="input" required>
            </div>
            <div class="box">
               <p>check out <span>*</span></p>
               <input type="date" name="check_out" class="input" required>
            </div>
            <div class="box">
               <p>adults <span>*</span></p>
               <select name="adults" class="input" required>
                  <option value="1">1 adult</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
               </select>
            </div>
            <div class="box">
               <p>childs <span>*</span></p>
               <select name="childs" class="input" required>
                  <option value="-">0 child</option>
                  <option value="1">1 child</option>
                  <option value="2">2 childs</option>
                  <option value="3">3 childs</option>
                  <option value="4">4 childs</option>
                  <option value="5">5 childs</option>
                  <option value="6">6 childs</option>
               </select>
            </div>
            <div class="box">
               <p>rooms <span>*</span></p>
               <select name="rooms" class="input" required>
                  <option value="1">1 room</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>
         </div>
         <input type="submit" value="check availability" name="check" class="btn">
      </form>

   </section>-->

   <!-- reservation section ends -->
   <!--room-->
   <section class="room top" id="room">
      <div class="container">
         <div class="heading_top flex1">
            <div class="heading">
               <h2>Location and Category </h2>
            </div>
         </div>

         <div class="content grid">
            <div class="box">
               <div class="img">
                  <img src="images/abi.jpg" alt="">
               </div>
               <div class="text">
                  <p> <span>ABI</span> <br><span>INAI PUTIH HOMESTAY</span><br><span>LOCATION<br>Inai Putih
                        Homestay,Jalan Abi Tok Hashim,<br>01000 Kangar Perlis </p>
                  <a href="ABI.html" class="btn">View Room</a>
               </div>
            </div>
            <div class="box">
               <div class="img">
                  <img src="images/jejawi.jpg" alt="">
               </div>
               <div class="text">
                  <p> <span>JEJAWI <br><span>NORASHIDA Rental Room</span><br><span>LOCATION<br>Inai Putih Homestay,Jalan
                           Abi Tok Hashim,<br>01000 Kangar Perlis </p>
                  <a href="JEJAWI.html" class="btn">View Room</a>
               </div>
            </div>

         </div>
      </div>
      </div>
   </section>
   <!--room-->


   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <div class="row">

         <form action="" method="post">
            <h3>send us message</h3>
            <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
            <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
            <input type="number" name="number" required maxlength="10" min="0" max="9999999999"
               placeholder="enter your number" class="box">
            <textarea name="msg" class="box" required maxlength="1000" placeholder="enter your message" cols="30"
               rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
         </form>

         <div class="faq">
            <h3 class="title">frequently asked questions</h3>
            <div class="box active">
               <h3>how to cancel?</h3>
               <p></p>
            </div>
            <div class="box">
               <h3>is there any vacancy?</h3>
               <p></p>
            </div>
            <div class="box">
               <h3>what are payment methods?</h3>
               <p></p>

            </div>
         </div>

      </div>

   </section>

   <!-- contact section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">
            <div class="swiper-slide box">
               <img src="images/MIE.png" alt="">
               <h3>mie</h3>
               <p>MUHAMMAD AIMAN (18DDT20F1234)</p>
            </div>
            <div class="swiper-slide box">
               <img src="images/ASHURA.png" alt="">
               <h3>ashura</h3>
               <p>ASHURA (18DDT20F5678)</p>

            </div>

            <div class="swiper-pagination"></div>
         </div>

   </section>

   <!-- reviews section ends  -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <a href="tel:0169087831"><i class="fas fa-phone"></i> +0169087831</a>
            <a href="tel:1112223333"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="mailto:xingyichan5941@gmail.com"><i class="fas fa-envelope"></i> xingyichan5941@gmaill.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> kangar, malaysia - 01007</a>
         </div>

         <div class="box">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#reservation">reservation</a>
            <a href="#gallery">room</a>
            <a href="#contact">contact</a>
            <a href="#reviews">reviews</a>
         </div>

         <div class="box">
            <a href="#">facebook <i class="fab fa-facebook-f"></i></a>
            <a href="#">twitter <i class="fab fa-twitter"></i></a>
            <a href="#">instagram <i class="fab fa-instagram"></i></a>
            <a href="#">linkedin <i class="fab fa-linkedin"></i></a>
         </div>

      </div>

      <div class="credit">&copy; copyright @ 2022 by mr. chan| all rights reseved!</div>

   </section>

   <!-- footer section ends -->








   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>