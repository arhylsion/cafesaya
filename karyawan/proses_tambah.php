<?php
include '../config.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$penjualan = $_POST['penjualan'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Upload foto
$foto = $_FILES['foto']['name'];
$tmp_name = $_FILES['foto']['tmp_name'];
$target_dir = "../uploads/"; // Folder tempat menyimpan gambar
$target_file = $target_dir . basename($foto);

$check = getimagesize($tmp_name);
if ($check !== false) {
    // Pindahkan gambar yang diupload ke folder tujuan
    if (move_uploaded_file($tmp_name, $target_file)) 
    // Simpan path ke database
$stmt = $conn->prepare("INSERT INTO karyawan (nik, nama, jabatan, penjualan, foto, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $nik, $nama, $jabatan, $penjualan, $foto, $password);
$stmt->execute();
$stmt->close();
}


header("Location: karyawan.php");
exit();
?>
