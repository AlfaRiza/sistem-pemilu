<?php 
    //session_start();
$conn = mysqli_connect("localhost", "root", "", "project");
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function ctambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $idj = htmlspecialchars($data["jurusan"]);
    $ida = htmlspecialchars($data["angkatan"]);
    $ipk = htmlspecialchars($data["ipk"]);

    $foto = upload();
    if(!$foto){
        return false;
    }

    
    $query = "INSERT INTO vcalon 
    VALUES 
    ('', '$nama','$nim','$idj','$ida','$ipk','$foto')";

mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $idj = htmlspecialchars($data["jurusan"]);
    $ida = htmlspecialchars($data["angkatan"]);
    $pass = htmlspecialchars($data["pass"]);

    $foto = upload();
    if(!$foto){
        return false;
    }

    
    $query = "INSERT INTO voter 
    VALUES 
    ('', '$nama','$nim','$idj','$ida','$pass','$foto')";

mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];


    if(!$error === 4){
        echo "
        <script>
        alert('pilih gambar dahulu');
        </script>
        ";
        return false;
    }

    $ekstensi = ['jpg','jpeg','png'];
    $eksistensi = explode('.', $namaFile);
    $eksistensi = strtolower(end($eksistensi));

    if(!in_array($eksistensi,$ekstensi)){
        echo "
        <script>
        alert('yang anda upload bukan gambar');
        </script>
        ";
        return false;
    }

    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $eksistensi; 


    move_uploaded_file($tmpName, 'img/' . $namaBaru);
    return $namaBaru;


}

function hapus($id_voter){
    global $conn;

    mysqli_query($conn, "DELETE FROM voter WHERE id_voter = $id_voter");
    return mysqli_affected_rows($conn);


}

function pilih($voter,$calon){
    global $conn;
    //$id_voter = $_SESSION["id_voter"];
    $query = "INSERT INTO pilih 
    VALUES 
    ('', '$voter','$calon')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id_voter = $data["id_voter"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $idj= htmlspecialchars($data["jurusan"]);
    $ida = htmlspecialchars($data["angkatan"]);
    $pass = htmlspecialchars($data["pass"]);
    $fotolama = $data["fotolama"];

    if($_FILES['foto']['error'] === 4){
        $foto = $fotolama;
    } else{
        $foto = upload();
    }

    $query = "UPDATE voter SET 
                nama = '$nama',
                nim = '$nim',
                id_jurusan = '$idj',
                id_angkatan = '$ida',
                pass = '$pass',
                foto = '$foto'
                WHERE id_voter = '$id_voter'
                ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}


?>