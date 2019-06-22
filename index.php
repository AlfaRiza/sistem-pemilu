<?php 
  session_start();
require 'functions.php';

if( !isset($_SESSION["login"])){
  header("Location: login.php");
  die;
}
// var_dump($_SESSION["login"]);
// var_dump($_SESSION["id_voter"]);

$id_voter = $_SESSION["id_voter"];

$calon = query("SELECT * FROM vcalon ");

if(isset($_GET["pilih"])){
  
  if( pilih($_GET) > 0){
    echo "
        <script> alert('Berhasil!!!');
        document.location.href = 'index.php';
        </script>
    ";
    header ("Location  : login.php");
}else{
    echo "<script> alert('Error mas');
    document.location.href = 'index.php';
    </script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="modif.css">
    <title>Pemilu 2019</title>
  </head>
  <body>
  <!-- navbar -->
  <div class="container ">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
</div>
  <!-- Jumbotron -->
  <div class="jumbotron">
  <h1 class="display-4 text-center">Ayo Pilih Calon mu</h1>
  <p class="lead text-center">Jangan Golput ya...</p>
  <hr class="my-4">
  <a href=""></a>
  </div>
  <!-- Akhir Jumbotron -->


  <!-- Pemilih -->
  <br><br><br>
    <a href="logout.php" class="btn btn-danger">logout</a>
    <br><br><br>
    <div class="container pemilih">
        <div class="row d-flex justify-content-center">
        <?php $no=1;?>
        <?php foreach($calon as $row) : ?>
            <div class="col-lg offset-1 text-center  border">
            <div>
            <?= $no?>
            </div>
            <div>
            <img src="img/<?= $row["nama"] ?>.jpg" width="100">
            </div>
            <div>
            <?= $row["nama"]; ?>
            </div>
            <a type="button" class="btn btn-primary" href="pilih.php?id_voter=<?=$id_voter?>&id_calon=<?=$row["id_calon"]?>" 
                onclick="return confirm('Anda Yakin?');"
                >pilih</a>
            </div>
            <?php $no++;?>
        <?php endforeach; ?>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer d-flex justify-content-center">
      <p>&copy;2019 Panitia Pemilu</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>