<?php
include_once "connection.php";
if (isset($_REQUEST['formsubmit'])) {
    echo $name = $_REQUEST['user_name'];
    echo $email = $_REQUEST['user_email'];
    echo $pass = $_REQUEST['user_pass'];
    $insert = "INSERT INTO `signup` (`name`,`email`,`pass`) VALUES('$name', '$email', $pass)";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo "Ok Insert";
    } else {
        echo "No Insert";
    }
}
