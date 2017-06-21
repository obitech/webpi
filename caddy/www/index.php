<?php
$dsn = "mysql:host=<ENTER HOST IP>;dbname=<ENTER DB NAME>";
$username = "<ENTER USERNAME>";
$password = "<ENTER PASSWORD>";

$dbh = new PDO($dsn, $username, $password);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Docker(Caddy + MariaDB) on Raspberry Pi</title>
</head>
<body>
    <h1>Hello World!</h1>
</body>
</html>
