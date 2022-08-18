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
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="action.php" method="POST">
                    <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                    <br>
                    <input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
                    <br>
                    <input type="submit" name="login" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

</body>

</html>