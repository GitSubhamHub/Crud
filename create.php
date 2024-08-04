<?php
    include "connection.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $q = " INSERT INTO `crud1`(`name`, `email`, `phone`) VALUES ( '$name', '$email', '$phone') ";
         
        $query = mysqli_query($conn,$q); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</a>
        </li>
      </ul>
    </nav>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-white text-center">  Create New Member  </h1>
                </div><br>

                <label> NAME: </label>
                <input type="text" name="name" class="form-control"> <br>

                <label> EMAIL: </label>
                <input type="text" name="email" class="form-control"> <br>

                <label> PHONE: </label>
                <input type="text" name="phone" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                <a class="btn btn-info" type="submit" name="cancel" href="index.php">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
