<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>booking</title>
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
      <div>
         <a href="room.php" class="btn">Back to catefory</a>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <!--<center>
        <form method="post" class="form1">

            <div class="container">
                <div class="box">
                    <p>check in <span>*</span></p>
                    <input type="date" name="check_in" class="input" required>
                 </div>
                 <div class="box">
                    <p>check out <span>*</span></p>
                    <input type="date" name="check_out" class="input" required>
                 </div>
                 <div class="box">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <div class="box">
                    <p>adults <span>*</span></p>
                    <select name="type of room" class="input" required>
                       <option value="1">single room</option>
                       <option value="2">double room</option>
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

                <button type="submit" value="submit" onClick="submit()">Confirm booking</button>
                
                <span class="psd"><a href="#">Cancle booking</a></span><br><br>
                <button type="button" class="cancelbtn"><a href="index.html">Cancel</a></button>
            </div>
            
        </form>
    </center>
  </section>-->

      <!-- header section ends -->
   </section>
   <section class="reservation" id="reservation">

      <form action="insert.php" method="post">
         <h3>make a reservation</h3>
         <div class="flex">
            <div class="box">
               <p>Room Category <span>*</span></p>
               <select name="room_category" class="input" required>
                 <option>Choose Room Category</option>
                 <option value="ABI">ABI</option>
                 <option value="JEJAWI">JEJAWI</option>
               </select>
             </div>
             <div class="box">
               <p>Room Number <span>*</span></p>
               <input type="number" min="1" max="10" placeholder="Enter Room Number" name="room_number" class="input" required>
             </div>
            <div class="box">
               <p>check in <span>*</span></p>
               <input type="date" name="check_in_date" class="input" required>
            </div>
            <div class="box">
               <p>check out <span>*</span></p>
               <input type="date" name="check_out_date" class="input" required>
            </div>
            <div class="box">
               <p>Name<span>*</span></p>
               <input type="text" placeholder="Enter Name" name="cust_name" class="input" required>
            </div>

            <div class="box">
               <p>IC NUMBER<span>*</span></p>
               <input type="text" placeholder="Enter IC Number" name="cust_ic" class="input" required>
            </div>

            <div class="box">
               <p>Phone Number<span>*</span></p>
               <input type="text" placeholder="Enter Phone Number" name="phone_num" class="input" required>
            </div>

            <div class="box">
               <p>Gender <span>*</span></p>
               <select name="cust_gender" class="input" required>
                  <option value="Male">MALE</option>
                  <option value="Female">FEMALE</option>
               </select>
            </div>

            <div class="box">
               <p>Job<span>*</span></p>
               <input type="text" placeholder="Enter Job" name="job" class="input" required>
            </div>
         </div>

         <input type="submit" value="submit" class="btn" onclick="return sahkan()">
      </form>
      <script>
            function sahkan(){
                return confirm('Are you sure?');
            }
        </script>

   </section>
</body>

</html>