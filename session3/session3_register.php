<?php 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>create new Account</h1>

<!-- post=> send data
    get=> get data -->
<form enctype="multipart/form-data" action="./server.php" method="post"  class="container mt-5">
    <div class="mt-3 form-group">
        <label for="name" class="form-label">user name</label>
        <input class="form-control" type="text" name="username" id="name" >
    </div>

    <div class="mt-3 form-group">
        <label for="" class="form-label">user email</label>
        <input class="form-control" type="text" name="useremail" id="">
    </div>

    <div class="mt-3 form-group">
        <label for="" class="form-label">user password</label>
        <input class="form-control" type="password" placeholder="enter your password" name="userpassword" id="">
    </div>

    <div class="mt-3 form-group">
        <label for="" class="form-label">User image</label>
        <input class="form-control" type="file"  name="userimage" id="userimage">
    </div>

    <button class="btn btn-primary my-3" name="registerBtn">submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>