<?php session_start();
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
if (isset($_REQUEST['login'])) {
    echo   $email = $_REQUEST['email'];
    echo  $pass = $_REQUEST['pass'];
    $SELECT = "SELECT * FROM signup WHERE email = '$email' AND pass= '$pass'";
    $query = mysqli_query($conn, $SELECT);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        echo  $_SESSION['user_id'] = $row['id'];

        header('location: welcome.php');
    } else {
        echo "Inncorect";
    }
}

if (isset($_REQUEST['formsubmitimage'])) {
    $filename = $_FILES['image']['name'];
    echo $folder = $_FILES['image']['tmp_name'];
    $file = 'img/' . $filename;
    if (move_uploaded_file($folder, $file)) {
        echo "Ok";
    } else {
        echo "NotOK";
    }
}
