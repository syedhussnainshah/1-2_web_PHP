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

if (isset($_REQUEST['imgsubmit'])) {
    $filename = $_FILES['image']['name'];
    $path = $_FILES['image']['tmp_name'];
    $folder = 'img/' . $filename;
    if (move_uploaded_file($path, $folder)) {
        $insert = "INSERT INTO img (`image`) VALUES('$filename')";
        $query  = mysqli_query($conn, $insert);
        if ($query) {
            echo "Image Inserted";
        } else {
            echo "No insert";
        }
    } else {
        echo "not OK";
    }
}
if (isset($_REQUEST['addproduct'])) {
    $name = $_REQUEST['product_name'];
    $price = $_REQUEST['product_price'];
    $filename = $_FILES['product_img']['name'];
    $path = $_FILES['product_img']['tmp_name'];
    $folder = 'img/' . $filename;
    if (move_uploaded_file($path, $folder)) {
        $insert = "INSERT INTO products (product_name,product_price,product_img) VALUES ('$name','$price','$filename')";
        $qquery = mysqli_query($conn, $insert);
        if ($qquery) {
            header('location: index.php');
        } else {
            echo mysqli_error($conn);
        }
    } else {
        echo "No Move";
    }
}

if (isset($_REQUEST['addtocart'])) {
    $id = $_REQUEST['product_id'];
    $qty = 1;
    $_SESSION['mycart'][$id] = array('id' => $id, 'qty' => $qty);
    header('location: index.php');
}
