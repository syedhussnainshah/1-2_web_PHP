<?php
include_once 'connection.php';
$id = $_GET['edit_id'];
$Select = "SELECT * FROM signup WHERE id ='$id'";
$query = mysqli_query($conn, $Select);
$row = mysqli_fetch_array($query);

?>
<form action="action.php" method="POST">
    <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
    <input type="text" name="user_name" value="<?php echo $row['name']; ?>">
    <input type="text" name="user_email" value="<?php echo $row['email']; ?>">
    <input type="password" name="user_pass" value="<?php echo $row['pass']; ?>">
    <input type="submit" name="formupdate" value="Update">
</form>