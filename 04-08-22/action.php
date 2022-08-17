<?php
include_once "connection.php";
if (isset($_REQUEST['formsubmit'])) {
    echo $name = $_REQUEST['user_name'];
    echo $email = $_REQUEST['user_email'];
    echo $pass = $_REQUEST['user_pass'];
    $insert = "INSERT INTO `signup` (`name`,`email`,`pass`) VALUES('$name', '$email', '$pass')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo "Ok Insert";
    } else {
        echo mysqli_error($conn);
    }
}
if (isset($_REQUEST['formupdate'])) {
    echo $name = $_REQUEST['user_name'];
    echo $email = $_REQUEST['user_email'];
    echo $pass = $_REQUEST['user_pass'];
    echo $id = $_REQUEST['edit_id'];
    $update = "UPDATE signup SET `name`='$name', `email`='$email', `pass`='$pass' WHERE id ='$id'";
    $query = mysqli_query($conn, $update);
    if ($query) {
        echo "update";
    } else {
        echo "No Update";
    }
}
