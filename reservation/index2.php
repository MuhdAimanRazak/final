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
        <div class="heading"><br>
            <h2>Senarai Reservation</h2>
            <?php
            if (!isset($_GET['edit'])) {
                ?>
                <form action="simpan.php" method="post">
                    <input type="hidden" name="reservation_id">
                    <fieldset>
                        <legend>Reservation</legend>
                        <table>
                            <span class="cen">
                                <table style="border-color: black">
                                    <tbody>
                                        <tr>
                                            <td>USER ID</td>
                                            <td><input type="text" name="user_id" required></td>
                                        </tr>
                                        <tr>
                                            <td>ROOM ID</td>
                                            <td><input type="number" name="room_id" required></td>
                                        </tr>
                                        <tr>
                                            <td>CHECK IN DATE</td>
                                            <td><input type="date" name="check_in_date" required></td>
                                        </tr>
                                        <tr>
                                            <td>CHECK OUT DATE</td>
                                            <td><input type="date" name="check_out_date" required></td>
                                        </tr>
                                        <tr>
                                            <td>STATUS</td>
                                            <td><select id="status" name="status">
                                                    <option> </option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Confirmed">Confirmed</option>
                                                    <option value="Cancel">Cancel</option>
                                                </select required>
                                            <td>
                                        </tr>
                                        <tr>
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
                $reservation_id = $_GET['edit'];
                $sql = "SELECT * FROM reservation WHERE reservation_id = $reservation_id";
                $row = $conn->query($sql)->fetch_object();
                ?>
                <form action="kemaskini.php" method="post">
                    <input type="hidden" name="reservation_id" value="<?php echo $row->reservation_id; ?>">
                    <fieldset>
                        <legend>Reservation</legend>
                        <table>
                            <tr>
                                <td>ROOM CATEGORY</td>
                                <td><select id="room_category" name="room_category">
                                    <option value="ABI">ABI</option>
                                    <option value="JEJAWI">JEJAWI</option>
                                </select required value="<?php echo $row->room_category; ?>"></td>
                            </tr>
                            <tr>
                                <td>ROOM NUMBER</td>
                                <td><input type="number" name="room_number" required value="<?php echo $row->room_number; ?>"></td>
                            </tr>
                            <tr>
                                <td>CUSTOMER NAME</td>
                                <td><input type="text" name="cust_name" required value="<?php echo $row->cust_name; ?>"></td>
                            </tr>
                            <tr>
                                <td>IC NUMBER</td>
                                <td><input type="text" name="cust_ic" required value="<?php echo $row->cust_ic; ?>"></td>
                            </tr>
                            <tr>
                                <td>GENDER</td>
                                <td><select id="cust_gender" name="cust_gender" required value="<?php echo $row->cust_gender; ?>">
                                    <option value="Male">MALE</option>
                                    <option value="Female">FEMALE</option>
                                </select ></td>
                            </tr>
                            <tr>
                                <td>PHONE NUMBER</td>
                                <td><input type="text" name="phone_num" required value="<?php echo $row->phone_num; ?>"></td>
                            </tr>
                            <tr>
                                <td>CHECK IN DATE</td>
                                <td><input type="date" name="check_in_date" required
                                        value="<?php echo $row->check_in_date; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>CHECK OUT DATE</td>
                                <td><input type="date" name="check_out_date" required
                                        value="<?php echo $row->check_out_date; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>JOB</td>
                                <td><input type="text" name="job" required
                                        value="<?php echo $row->job; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>STATUS</td>
                                <td><select id="status" name="status">
                                    <option value="Pending">Pending</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Cancel">Cancel</option>
                                </select required value="<?php echo $row->status; ?>"></td>
                            </tr>
                            <tr>
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