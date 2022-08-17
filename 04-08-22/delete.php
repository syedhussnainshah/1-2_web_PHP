<?php 
include_once 'connection.php';
$id = $_GET['del_id'];
$del = "DELETE FROM `signup` WHERE id = '$id'";
$query = mysqli_query($conn, $del);
if($query){
   header('location: index.php');
}else{
    echo "No DEl";
}
?>