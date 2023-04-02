<?php
session_start();
session_destroy();
?>
<script>
    alert("Anda telah berjaya log out!");
    window.location = 'http://localhost/fyp2/design/index.php';
</script>