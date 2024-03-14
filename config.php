<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tour";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "". mysqli_connect_error();
}
