<?php 
    require 'functions.php';

    if( isset($_POST["login"])){
        $username = $_POST["username"];
        $pass = $_POST["password"];

        $result = mysqli_query($conn,"SELECT * FROM dataadmin WHERE username = '$username' AND pass = '$pass'");

        if(mysqli_num_rows($result) === 1){
    
                header("Location: admin.php");
                exit;
            }
            else{
                echo "<script>
                alert('Username atau Password Salah');
                </script>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="modif.css">
    <title>Halaman Login Admin</title>
</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4 text-center">Halaman Admin</h1>
        <p class="lead text-center">Dilarang masuk selain karyawan</p>
        <hr class="my-4">
        <a href=""></a>
    </div>
        <!-- Akhir Jumbotron -->

        <a href="login.php" class="btn btn-danger mx-5">kembali</a>
        <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-4 border">
        <form action="" method="post">
            <legend>Form Login</legend>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
                    <button type="submit" name="login" class="btn btn-primary ">Login</button>
        </form>
        </div>
        </div>

        <footer class="footer d-flex justify-content-center">
        <p>&copy;2019</p>
        </footer>

</body>
</html>