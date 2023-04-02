<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
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
        <h1>Customer</h1>
        <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="cust_ic">CUSTOMER IC:</label>
            <input type = "text" id = "cust_ic" name ="cust_ic" require>
            <button type="submit">Search</button>
            <a href="index1.php" class="btn btn-primary">Add</a>
        </form><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cust_ic'])) {
            $cust_ic = $_POST['cust_ic'];
            $sql = "SELECT * FROM customer WHERE cust_ic = '$cust_ic'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th> NAME</th>
                            <th> IC NO</th>
                           <th>PHONE NUMBER </th>
                            <th>GENDER</th>
                            <th>JOB</th>
                            <th>COMMAND</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_object()) {
                        ?>
                            <tr>
                                <td><?php echo $row->cust_id; ?></td>
                                <td><?php echo $row->cust_name; ?></td>
                                <td><?php echo $row->cust_ic; ?></td>
<td><?php echo $row->phone_num;  ?></td>
                                <td><?php echo $row->cust_gender; ?></td>
                                <td><?php echo $row->job; ?></td>
                                <td>
                                    <a href="index.php?edit=<?php echo $row->cust_id; ?>" onclick="return sahkan()">EDIT</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
            } else {
                echo "<script>alert('Booking ID not found.');</script>";
            }
        }
        ?>
</body>

</html>