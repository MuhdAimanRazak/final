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
        <div class="heading"><br>
            <h2>Senarai Bilik</h2>
            <?php
            if (!isset($_GET['edit'])) {
                ?>
                <form action="simpan.php" method="post">
                    <input type="hidden" name="room_id">
                    <fieldset>
                        <legend>Bilik</legend>
                        <table>
                            <tr>
                                <td>ROOM CATEGORY</td>
                                <td><select name="room_category" required >
                                    <option>Choose Room Category</option>
                                    <option value="ABI">ABI</option>
                                    <option value="JEJAWI">JEJAWI</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>CAPACITY</td>
                                <td><input type="text" name="capacity" required></td>
                            </tr>
                            <tr>
                                <td>PRICE (RM)</td>
                                <td><input type="float" name="price" required ></td>
                            </tr>
                            <tr>
                                <td>AVAILABILITY</td>
                                <td><select name="availability" required >
                                    <option></option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select></td>
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
                $room_id = $_GET['edit'];
                $sql = "SELECT * FROM room WHERE room_id = $room_id";
                $row = $conn->query($sql)->fetch_object();
                ?>
                <form action="kemaskini.php" method="post">
                    <input type="hidden" name="room_id" value="<?php echo $row->room_id; ?>">
                    <fieldset>
                        <legend>Bilik</legend>
                        <table>
                            <tr>
                                <td>ROOM CATEGORY</td>
                                <td><select name="room_category" class="input" required value="<?php echo $row->room_category; ?>">
                                    <option>Choose Room Category</option>
                                    <option value="ABI">ABI</option>
                                    <option value="JEJAWI">JEJAWI</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>CAPACITY</td>
                                <td><input type="text" name="capacity" required value="<?php echo $row->capacity; ?>"></td>
                            </tr>
                            <tr>
                                <td>PRICE (RM)</td>
                                <td><input type="float" name="price" required value="<?php echo $row->price; ?>"></td>
                            </tr>
                            <tr>
                                <td>AVAILABILITY</td>
                                <td><select name="availability" required value="<?php echo $row->availability; ?>">
                                    <option></option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select></td>
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
                    <th>ROOM ID</th>
                    <th>ROOM TYPE</th>
                    <th>CAPACITY</th>
                    <th>PRICE (RM)</th>
                    <th>AVAILABILITY</th>
                    <th>COMMAND</th>
                </tr>
                <?php
                $sql = "SELECT * FROM room ORDER BY room_category";
                $result = $conn->query($sql);
                while ($row = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row->room_id; ?>
                        </td>
                        <td>
                            <?php echo $row->room_category; ?>
                        </td>
                        <td>
                            <?php echo $row->capacity; ?>
                        </td>
                        <td>
                            <?php echo $row->price; ?>
                        </td>
                        <td>
                            <?php echo $row->availability; ?>
                        </td>
                        <td>
                            <a href="index.php?edit=<?php echo $row->room_id; ?>" onclick="return sahkan()">EDIT</a>
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