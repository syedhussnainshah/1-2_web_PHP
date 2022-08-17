<?php
include_once "connection.php";
$Select = "SELECT * FROM signup";
$query = mysqli_query($conn, $Select);
?>
<form action="action.php" method="POST">
    <input type="text" name="user_name">
    <input type="text" name="user_email">
    <input type="password" name="user_pass">
    <input type="submit" name="formsubmit" value="Submit">
</form>
<br>
<table border="">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query)) {

    ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['pass'] ?></td>
            <td><a href="edit.php?edit_id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="delete.php?del_id=<?php echo $row['id'] ?>">Delete</a></td>

        </tr>
    <?php
    }
    ?>
</table>