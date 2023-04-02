<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Booking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .table {
            background-color: #C1B086;
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }
    </style>


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
    </section>
    <section class="check" id="check">

        <<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="cust_ic">Customer IC:</label>
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
                                <a href="padam.php?booking_id=<?php echo $row->booking_id; ?>"
                                    onclick="return sahkan()">PADAM</a>
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
    </section>

    <!-- header section ends -->

</body>

</html>