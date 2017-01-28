<?php

$servername = "sql203.eb2a.com";
$username = "eb2a_19505061";
$password = "h12i34z56";

// Create connection
$sql = mysqli_connect($servername, $username, $password, "eb2a_19505061_helmi");

// Check connection
if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
}
