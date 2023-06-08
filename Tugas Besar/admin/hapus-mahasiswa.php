<?php

require('../config/session.php');
require('../config/database.php');

if($_SESSION['level'] != 'Admin'){
    header("Location: ../user/index.php"); 
  }

$id = $_GET['id'];

try {
    $sql = "DELETE FROM pengguna WHERE id = '{$id}';";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query) {
        echo "<script>alert('Mahasiswa gagal dihapus!');</script>";
    } else {
        echo "<script>alert('Mahasiswa berhasil dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID Mahasiswa tidak ditemukan!');</script>";
}


header('Location: index.php');