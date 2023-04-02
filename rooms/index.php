<?php
require 'conn.php';
?>

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
        <h1>Search Room</h1>
        <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="room_category">ROOM CATEGORY:</label>
            <select name="room_category" id="room_category" required>
                <option value="ABI">ABI</option>
                <option value="JEJAWI">JEJAWI</option>
            </select>
            <button type="submit">Search</button>
        </form><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['room_category'])) {
            $room_category = $_POST['room_category'];
            $sql = "SELECT * FROM room WHERE room_category = '$room_category'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ROOM ID</th>
                            <th>ROOM CATEGORY</th>
                            <th>CAPACITY</th>
                            <th>PRICE (RM)</th>
                            <th>AVAILABILITY</th>
                            <th>COMMAND</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_object()) {
                        ?>
                            <tr>
                                <td><?php echo $row->room_id; ?></td>
                                <td><?php echo $row->room_category; ?></td>
                                <td><?php echo $row->capacity; ?></td>
                                <td><?php echo $row->price; ?></td>
                                <td><?php echo $row->availability; ?></td>
                                <td>
                                    <a href="index.php?edit=<?php echo $row->room_id; ?>" onclick="return sahkan()">EDIT</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo "<script>alert('No rooms found for the selected category.');</script>";
            }
        }
        ?>

        <script>
            function sahkan() {
                return confirm('Are you sure?');
            }
        </script>
    </div>
</body>

</html>
