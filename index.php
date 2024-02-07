<!DOCTYPE html>
<html>
<head>
    <title>IP Address Viewer</title>
</head>
<body>

    <h1>IP Address Server Anda adalah</h1>

    <?php
        // Mendapatkan alamat IP server
        $ip_address = $_SERVER['SERVER_ADDR'];

        // Menampilkan alamat IP server
        echo "<p>Your IP Address is: $ip_address</p>";
    ?>

</body>
</html>
