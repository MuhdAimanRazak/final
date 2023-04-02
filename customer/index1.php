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
        <?php
        if (!isset($_GET['edit'])) {
            ?>
            <form action="simpan.php" method="post">
                <input type="hidden" name="cust_id">
                <fieldset>
                    <legend>Customer</legend>
                    <table>

                        <tr>
                            <td> NAME</td>
                            <td><input type="text" name="staff_name" required></td>
                        </tr>
                        <tr>
                            <td> IC NO</td>
                            <td><input type="text" name="staff_ic" required></td>
                        </tr>
                        <tr>
                            <td>PHONE NUMBER</td>
                            <td><input type="float" name="phone_num" required></td>
                        </tr>
                        <tr>
                            <td>GENDER</td>
                            <td><input type="text" name="cust_gender" required></td>
                        </tr>
                        <tr>
                            <td>JOB</td>
                            <td><input type="text" name="job" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit">SIMPAN</button>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <?php
        } else {
            $cust_id = $_GET['edit'];
            $sql = "SELECT * FROM customer WHERE cust_id = $cust_id";
            $row = $conn->query($sql)->fetch_object();
            ?>
            <form action="kemaskini.php" method="post">
                <input type="hidden" name="cust_id" value="<?php echo $row->cust_id; ?>">
                <fieldset>
                    <legend>Customer</legend>
                    <table>

                        <tr>
                            <td> NAME</td>
                            <td><input type="text" name="staff_name" required></td>
                        </tr>
                        <tr>
                            <td> IC NO</td>
                            <td><input type="text" name="staff_ic" required></td>
                        </tr>
                        <tr>
                            <td>PHONE NUMBER</td>
                            <td><input type="float" name="phone_num" required></td>
                        </tr>
                        <tr>
                            <td>GENDER</td>
                            <td><input type="text" name="cust_gender" required></td>
                        </tr>
                        <tr>
                            <td>JOB</td>
                            <td><input type="text" name="job" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit">SIMPAN</button>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <?php
        }
        ?>
</body>

</html>