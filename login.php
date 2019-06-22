<?php 
    session_start();
    require 'functions.php';

    if( isset($_POST["login"])){
        $username = $_POST["username"];
        $pass = $_POST["password"];

        $login = query("SELECT * FROM voter WHERE nama = '$username' AND pass = '$pass'");
        $result = mysqli_query($conn,"SELECT * FROM voter WHERE nama = '$username' AND pass = '$pass'");

        foreach($login as $row){
            $row["id_voter"];
        }

        if(mysqli_num_rows($result) === 1){
                // login($row["id_voter"]);
                $_SESSION["login"] = true;
                $_SESSION["id_voter"] = $row["id_voter"];

                header("Location: index.php");
                
                exit;
            }else{
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
    <title>Halaman Login</title>
</head>
<body>
        
        <div class="row mt-5">
        <div class="col-lg-4 text-center offset-4 border">
        <form action="" method="post" class="text-center ">
            <legend class="border-bottom">Form Login</legend>
            <ul>
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control " placeholder="Username" required>
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control " placeholder="Password" required>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Masukkan password yang telah diberi
                </small>
                </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
            </ul>
        </form>
        </div>
        </div>

        <a href="loginAdmin.php" class="btn btn-warning text-center">Login sebagai admin</a>

</body>
</html>