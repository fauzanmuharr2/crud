<?php
include '../database.php';
$siswa = new Siswa();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
}

if ($aksi == "tambah") {
    $siswa->create($nama, $nis, $alamat);
    header("location:index.php");
} elseif ($aksi == "update") {
    $siswa->update($id, $nis, $nama, $alamat);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $siswa->delete($_GET['id']);
    header("location:index.php");
}