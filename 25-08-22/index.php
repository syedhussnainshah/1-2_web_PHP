<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row p-3 bg-info">
            <div class="col-md-6 offset-3">
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="product_name" class="form-control" placeholder="Enter Your Name">
                    <br>
                    <input type="number" name="product_price" class="form-control" placeholder="Enter Your Product Price">
                    <br>
                    <input type="file" name="product_img" class="form-control">
                    <br>
                    <input type="submit" name="addproduct" class="btn btn-success">
                </form>
            </div>
        </div>
        <div class="row bg-warning">
            <?php
            include_once 'connection.php';
            $select = "SELECT * FROM product";
            $query = mysqli_query($conn, $select);
            while ($row = mysqli_fetch_array($query)) {

            ?>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img src="img/<?php echo $row['product_img']?>" width="100%" alt="">
                        </div>
                        <div class="card-body">
                            <h4><?php echo $row['product_name'] ?></h4>
                            <h5><?php echo $row['product_price'] ?></h5>
                            <input type="submit" class="btn btn-info">
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>