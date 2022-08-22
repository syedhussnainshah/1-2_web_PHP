<?php
include_once 'connection.php';
?>
<form action="action.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="imgsubmit">
</form>
<table>
    <tr>
        <th>Image</th>
    </tr>
    <?php
    $select = "SELECT * FROM img";
    $query = mysqli_query($conn, $select);
    while ($row =  mysqli_fetch_array($query)) {

    ?>
        <tr>
            <td><img src="img/<?php echo $row['image']?>" width="20%" alt=""></td>
        </tr>
    <?php
    }
    ?>
</table>