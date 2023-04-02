<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="body">
    <div class="main">
        <div class="navbar">
            <a href="">RUMAH INAPAN INAI PUTIH</a>
            <div class="navbar-right">
           <!--<a href="http://localhost/fyp2/bookings/index.php">BOOKING</a>-->
                <a href="http://localhost/fyp2/payment/index.php">PAYMENT</a>
                <a href="http://localhost/fyp2/reservation/index.php">RESERVATION</a>
                <a href="http://localhost/fyp2/rooms/index.php">ROOM</a>
                <a href="http://localhost/fyp2/staff/index.php">STAFF</a>
                <a href="http://localhost/fyp2/customer/index.php">CUSTOMER</a>
                <a href="http://localhost/fyp2/log/logout.php">LOGOUT</a>
            </div>
        </div>
        <h1>Reservation</h1>
        <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="cust_ic">CUSTOMER IC NUMBER:</label>
            <input type="text" id="cust_ic" name="cust_ic">
            <button type="submit">Search</button>
        </form>
        <?php
        if (isset($_POST['cust_ic']) && !empty($_POST['cust_ic'])) {
            $cust_ic = $_POST['cust_ic'];
            $sql = "SELECT * FROM reservation WHERE cust_ic = '$cust_ic'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_object();
                ?>
                <table class="table">
                    <tr>
                        <th>RESERVATION ID</th>
                        <td>
                            <?php echo $row->reservation_id; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>ROOM CATEGORY</th>
                        <td>
                            <?php echo $row->room_category; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>ROOM NUMBER</th>
                        <td>
                            <?php echo $row->room_number; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>NAME</th>
                        <td>
                            <?php echo $row->cust_name; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>IC NUMBER</th>
                        <td>
                            <?php echo $row->cust_ic; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>GENDER</th>
                        <td>
                            <?php echo $row->cust_gender; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>CHECK IN DATE</th>
                        <td>
                            <?php echo $row->check_in_date; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>CHECK OUT DATE</th>
                        <td>
                            <?php echo $row->check_out_date; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>JOB </th>
                        <td>
                            <?php echo $row->job; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>STATUS</th>
                        <td>
                            <?php echo $row->status; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>COMMAND</th>
                        <td>
                        <a href="index2.php?edit=<?php echo $row->reservation_id; ?>" onclick="return sahkan()">EDIT</a>
                            <a href="padam.php?booking_id=<?php echo $row->reservation_id; ?>" onclick="return sahkan()">PADAM</a>
                        </td>
                    </tr>
                    <script>
                        function sahkan() {
                            return confirm('Are you sure?');
                        }
                    </script>
                </table>
                <?php
            } else {
                echo "<script>alert('IC Number are not found.');</script>";
            }
        }
        ?>
</body>

</html>