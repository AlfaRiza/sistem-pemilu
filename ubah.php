<?php
    require 'functions.php';

    $id_voter = $_GET["id_voter"];

    $data = query("SELECT * FROM voter WHERE id_voter = $id_voter")[0];


    if( isset($_POST["submit"])){



        if( ubah($_POST) > 0){
            echo "
            <script>
                alert('Data Berhasil DiUbah');
                document.location.href = 'admin.php';
            </script>
            ";
        }else{
            echo "
            <script>
            alert('Data Gagal DiUbah');
            document.location.href = 'admin.php';
            </script>
            ";
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
    <title>Ubah Data Pemilih</title>
</head>
<body>
    <!-- Jumbotron -->
        <div class="jumbotron">
        <h1 class="display-4 text-center">Tambah Data Pemilih</h1>
        <p class="lead text-center">Dilarang masuk kecuali karyawan</p>
        <hr class="my-4">
        <a href=""></a>
        </div>
        <!-- Akhir Jumbotron -->

            <div>
            <a href="admin.php" class=" btn btn-danger mx-5 my-5">Kembali</a>
            </div>
            <div class="row d-flex justify-content-center">
            <div class="col-lg-4  border">
        <form action="" method="post" enctype="multipart/">
            <input type="hidden" name="id_voter" value="<?= $data["id_voter"] ?>">
            <input type="hidden" name="fotolama" value="<?= $data["foto"] ?>">
            <div class="form-group">
                    <label for="nama">Nama </label>
                    <input class="form-control" type="text" name="nama" id="nama" value="<?= $data["nama"] ?>">
            </div>
            <div class="form-group">
                    <label for="nim">Nim </label>
                    <input class="form-control" type="text" name="nim" id="nim" value="<?= $data["nim"] ?>">
            </div>
            <div class="form-group">
                    <label for="jurusan">Id Jurusan </label>
                    <select class="form-control" name="jurusan" id="jurusan">
                        <option value=" <?=$data["id_jurusan"]?> "><?=$data["id_jurusan"]?></option>
                        <option value="121">121</option>
                        <option value="122">122</option>
                        <option value="123">123</option>
                        <option value="124">124</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="angkatan">Id Angkatan </label>
                    <select class="form-control" name="angkatan" id="angkatan">
                    <option value=" <?=$data["id_angkatan"]?> "><?=$data["id_angkatan"]?></option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="pass">Password</label>
                    <input class="form-control" type="password" name="pass" id="pass" value="<?= $data["pass"] ?>">
                    </div>
                    <div class="form-group">
                    <label for="foto">Foto</label> <br>
                    <img src="img/<?= $data['foto']; ?>" width="40px">
                    <input class="form-control-file" type="file" name="foto" id="foto">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
        </form>
        </div>
        </div>
</body>
</html>