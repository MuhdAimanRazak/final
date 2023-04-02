<?php require 'conn.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style1.css">
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
        <h1>Confirmation Payment</h1>
        <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="cust_ic">CUSTOMER IC:</label>
            <input type="text" id="cust_ic" name="cust_ic" maxlength="15">
            <button type="submit">Search</button>
            <a href="index1.php" class="btn btn-primary">Add</a>
        </form>
        <?php
        if (isset($_POST['cust_ic']) && !empty($_POST['cust_ic'])) {
            $cust_ic = $_POST['cust_ic'];
            $sql = "SELECT * FROM payment WHERE cust_ic = $cust_ic";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_object();
                ?>
                <table class="table">
                    <tr>
                        <th>PAYMENT ID</th>
                        <th>CUSTOMER IC</th>
                        <th>AMOUNT (RM)</th>
                        <th>PAYMENT DATE</th>
                        <th>COMMAND</th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $row->payment_id; ?>
                        </td>
                        <td>
                            <?php echo $row->cust_ic; ?>
                        </td>
                        <td>
                            <?php echo $row->amount; ?>
                        </td>
                        <td>
                            <?php echo $row->payment_date; ?>
                        </td>
                        <td>
                            <a href="index1.php?edit=<?php echo $row->payment_id; ?>" onclick="return sahkan()">EDIT</a>
                            <a href="padam.php?payment_id=<?php echo $row->payment_id; ?>" onclick="return sahkan()">PADAM</a>
                        </td>
                    </tr>
                    <script>
                        function sahkan() {
                            return confirm('Adakah anda pasti?');
                        }
                    </script>
                </table>
                <?php
            } else {
                echo "<script>alert('Booking ID not found.');</script>";
            }
        }
        ?>
</body>

</html>