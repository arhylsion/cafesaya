<?
$target_dir = "../uploads";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true); // Buat folder dengan izin 0777
}

if (move_uploaded_file($foto["tmp_name"], $target_file)) {
    echo "File berhasil diunggah.";
} else {
    die("Gagal mengunggah file. Periksa izin direktori.");
}

?>