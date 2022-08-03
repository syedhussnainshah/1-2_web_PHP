<?php
$dbName = "demo";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = new  mysqli($dbhost, $dbuser, $dbpass, $dbName);
if ($conn) {
    echo "connected";
} else {
    echo "Not Connect";
}
