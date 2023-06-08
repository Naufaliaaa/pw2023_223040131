<?php

require('../config/session.php');
require('../config/database.php');

if($_SESSION['level'] != 'Admin'){
    header("Location: ../user/index.php"); 
  }

$id = $_GET['id'];

try {
    $sql = "DELETE FROM jurusan WHERE id = '{$id}';";
    $query = mysqli_query($DB_CONNECTION, $sql);

    if($query) {
        echo "<script>alert('jurusan berhasil dihapus!');</script>";
    } else {
        echo "<script>alert('jurusan gagal dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID jurusan tidak ditemukan!');</script>";
}


header('Location: jurusan.php');