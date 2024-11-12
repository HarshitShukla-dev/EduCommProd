<?php
// Database connection details
$host = "educomm-bhism.j.aivencloud.com";
$username = "avnadmin";
$password = "AVNS_sUsweFQEc3-FUEnwql7";
$db_name = "defaultdb";
$port = 24334;

// SSL certificate
$ssl_ca = __DIR__ . '/ca.pem';

// Create connection variable with SSL
$link = mysqli_init();
if (!$link) {
    die('mysqli_init failed');
}

mysqli_ssl_set($link, NULL, NULL, $ssl_ca, NULL, NULL);
if (!mysqli_real_connect($link, $host, $username, $password, $db_name, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
