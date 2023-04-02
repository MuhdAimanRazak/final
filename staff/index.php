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
        <div class="heading">
            <h1>STAFF LIST</h1>
            <?php
            if (!isset($_GET['edit'])) {
                ?>
                <form action="simpan.php" method="post">
                    <input type="hidden" name="staff_id">
                    <fieldset>
                        <legend>Staff</legend>
                        <table>
                            <span class="cen">
                                <table style="border-color: black">
                                    <tbody>
                                        <tr>
                                            <td>STAFF NAME</td>
                                            <td><input type="text" name="staff_name" required></td>
                                        </tr>
                                        <tr>
                                            <td>STAFF IC</td>
                                            <td><input type="text" name="staff_ic" required></td>
                                        </tr>
                                        <tr>
                                            <td>PHONE NUMBER</td>
                                            <td><input type="float" name="phone_num" required></td>
                                        </tr>
                                        <tr>
                                            <td>EMEL</td>
                                            <td><input type="text" name="emel" required></td>
                                        </tr>
                                        <tr>
                                            <td>PASSWORD</td>
                                            <td><input type="text" name="pass" required></td>
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
                $staff_id = $_GET['edit'];
                $sql = "SELECT * FROM staff WHERE staff_id = $staff_id";
                $row = $conn->query($sql)->fetch_object();
                ?>
                <form action="kemaskini.php" method="post">
                    <input type="hidden" name="staff_id" value="<?php echo $row->staff_id; ?>">
                    <fieldset>
                        <legend>Staff</legend>
                        <table>
                            <span class="cen">
                                <table style="border-color: black">
                                    <tbody>
                                        <tr>
                                            <td>STAFF NAME</td>
                                            <td><input type="text" name="staff_name" required value="<?php echo $row->staff_id; ?>" ></td>
                                        </tr>
                                        <tr>
                                            <td>STAFF IC</td>
                                            <td><input type="text" name="staff_ic" required value="<?php echo $row->staff_ic; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>PHONE NUMBER</td>
                                            <td><input type="float" name="phone_num" required value="<?php echo $row->phone_num; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>EMEL</td>
                                            <td><input type="text" name="emel" required value="<?php echo $row->emel; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>PASSWORD</td>
                                            <td><input type="text" name="pass" required></td>
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
            <table class="table">
                <tr>
                    <th>STAFF ID</th>
                    <th>STAFF NAME</th>
                    <th>STAFF IC</th>
                    <th>PHONE NUMBER</th>
                    <th>EMEL</th>
                    <th>COMMAND</th>
                </tr>
                <?php
                $sql = "SELECT * FROM staff ORDER BY staff_id";
                $result = $conn->query($sql);
                while ($row = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row->staff_id; ?>
                        </td>
                        <td>
                            <?php echo $row->staff_name; ?>
                        </td>
                        <td>
                            <?php echo $row->staff_ic; ?>
                        </td>
                        <td>
                            <?php echo $row->phone_num; ?>
                        </td>
                        <td>
                            <?php echo $row->emel; ?>
                        </td>
                        <td>
                            <a href="index.php?edit=<?php echo $row->staff_id; ?>" onclick="return sahkan()">EDIT</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <script>
                    function sahkan() {
                        return confirm('Adakah anda pasti?');
                    }
                </script>
                </tbody>
            </table>
            </span>
        </div>
    </div>
</body>

</html>