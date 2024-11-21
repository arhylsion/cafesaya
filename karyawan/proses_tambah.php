<?php
include '../config.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$penjualan = $_POST['penjualan'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Upload foto
$foto = $_FILES['foto'];
$target_dir = "../uploads";
$target_file = "uploads/" . basename($foto["name"]);
move_uploaded_file($foto["tmp_name"], $target_file);

// Simpan path ke database
$stmt = $conn->prepare("INSERT INTO karyawan (nik, nama, jabatan, penjualan, foto, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $nik, $nama, $jabatan, $penjualan, $target_file, $password);
$stmt->execute();
$stmt->close();

header("Location: karyawan.php");
exit();
?>
