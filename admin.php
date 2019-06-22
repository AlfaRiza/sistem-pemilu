<?php 
require 'functions.php';

$voter = query("SELECT * FROM voter;");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="modif.css">
    <title>Halaman Admin</title>
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
    <div>
    <div  class="d-flex justify-content-center">
    <a href="tambah.php" class="btn btn-primary mx-5 my-5">Tambah Data Pemilih</a>
    <!-- <a href="tcalon.php" class="btn btn-primary mx-5 my-5 readonly">Tambah Data Calon</a> -->
    </div>
    <div class="d-flex justify-content-end my-5 mx-5">
    <a href="login.php" class="btn btn-danger ">logout</a>
    </div>
    </div>
  <table class="tabel table" border="2" cellpadding="5" cellspacing="0"  width="90%">
        <tr>
            <th scope="col">No.</th>
            <th scope="col" class="aksi">Aksi</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Foto</th>
        </tr>
  <?php $i =1 ?>
        <?php foreach($voter as $row) : ?>
        <tr>
            <td scope="row"><?= $i ?></td>
            <td class="aksi">
                <a href="ubah.php?id_voter=<?= $row["id_voter"]; ?>">ubah</a> |
                <a href="hapus.php?id_voter=<?= $row["id_voter"]; ?>" 
                onclick="return confirm('Anda Yakin?');"
                >hapus</a>
            </td>
            <td> <?= $row["nama"] ?>
            </td>
            <td> <?= $row["nim"] ?>
            </td>
            <td>
              <img src="img/<?= $row["foto"]?>" width="100">
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    </table>

    <footer class="footer d-flex justify-content-center">
        <p>&copy;2019</p>
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>