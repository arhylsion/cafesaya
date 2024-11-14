<?php
include '../config.php';

// Get input data safely
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

// Prepare the SQL statement to prevent SQL injection
$stmt = $conn->prepare("UPDATE karyawan SET id=?, nama=?, jabatan=? WHERE nik=?");
$stmt->bind_param("sssi", $nik, $nama, $jabatan, $id);

// Execute the statement
if ($stmt->execute()) {
    // Redirect after successful update
    header('Location: karyawan.php');
    exit();
} else {
    // Provide a user-friendly error message
    echo "Error updating record: " . htmlspecialchars($stmt->error);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>