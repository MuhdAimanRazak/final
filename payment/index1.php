<?php require 'conn.php'; ?>
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
        <div class="heading"><br>
            <h2>Confirmation Payment List</h2>
            <?php
            if (!isset($_GET['edit'])) {
                ?>
                <form action="simpan.php" method="post">
                    <input type="hidden" name="payment_id">
                    <fieldset>
                        <legend>Confirmation Payment</legend>
                        <table>
                            <span class="cen">
                                <table style="border-color: black">
                                    <tbody>
                                        <tr>
                                            <td>CUSTOMER IC</td>
                                            <td><input type="text" name="cust_ic" required></td>
                                        </tr>
                                        <tr>
                                            <td>AMOUNT (RM)</td>
                                            <td><input type="float" name="amount" required></td>
                                        </tr>
                                        <tr>
                                            <td>PAYMENT DATE (RM)</td>
                                            <td><input type="date" name="payment_date" required></td>
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
                $payment_id = $_GET['edit'];
                $sql = "SELECT * FROM payment WHERE payment_id = $payment_id";
                $row = $conn->query($sql)->fetch_object();
                ?>
                <form action="kemaskini.php" method="post">
                    <input type="hidden" name="payment_id" value="<?php echo $row->payment_id; ?>">
                    <fieldset>
                        <legend>Confirmation Payment</legend>
                        <table>
                            <tr>
                                <td>CUSTOMER IC</td>
                                <td><input type="text" name="cust_ic" required value="<?php echo $row->cust_ic; ?>"></td>
                            </tr>
                            <tr>
                                <td>AMOUNT (RM)</td>
                                <td><input type="float" name="amount" required value="<?php echo $row->amount; ?>"></td>
                            </tr>
                            <tr>
                                <td>PAYMENT DATE (RM)</td>
                                <td><input type="date" name="payment_date" required
                                        value="<?php echo $row->payment_date; ?>">
                                </td>
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
        </div>
    </div>
</body>

</html>