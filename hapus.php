<?php 
require 'functions.php';
$id_voter = $_GET["id_voter"];

if( hapus($id_voter) > 0){
    echo "
            <script>
                alert('Data Berhasil DiHapus');
                document.location.href = 'admin.php';
            </script>
            ";
}
else{
    echo "
            <script>
                alert('Data Gagal DiHapus');
                document.location.href = 'admin.php';
            </script>
            ";
}


?>