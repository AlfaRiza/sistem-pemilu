<?php
    require 'functions.php';

    //ambil data di url
    $calon = $_GET["id_calon"];
    $voter = $_GET["id_voter"];
    // $voter = $_GET["id_voter"];
    // query data mhs
    pilih($voter,$calon);
    echo "
    <script>
        alert('Selamat Anda Telah Memilih');
        document.location.href = 'login.php';
    </script>
    ";


?>