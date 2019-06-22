<?php
    require 'functions.php';
    if( isset($_POST["submit"])){



        if( tambah($_POST) > 0){
            echo "
            <script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'admin.php';
            </script>
            ";
        }else{
            echo "
            <script>
            alert('Data Gagal Ditambah');
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
    <title>Tambah Data Pemilih</title>
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
            <a href="admin.php" class="btn btn-danger mx-5 my-5">Kembali</a>
            </div>
    <div class="row">
    <div class="col-lg-4 offset-4 d-flex justify-content-center border">
        <form action="" method="post" enctype="multipart/form-data">
        <legend class="text-center border-bottom">Tambah Data voter</legend>
            <div  class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control" >
            </div>
            <div  class="form-group">
                    <label for="nim">Nim </label>
                    <input type="text" name="nim" id="nim" class="form-control">
            </div>
            <div class="form-group">
                    <label for="jurusan">Id Jurusan </label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value=""><---></option>
                        <option value="121">121</option>
                        <option value="122">122</option>
                        <option value="123">123</option>
                        <option value="124">124</option>
                    </select>
            </div>
            <div class="form-group">
                    <label for="angkatan">Id Angkatan </label>
                    <select name="angkatan" id="angkatan" class="form-control">
                    <option value=""><---></option>
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
                    <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control-file">
            </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
            </div>
            </div>
        </form>
</body>
</html>