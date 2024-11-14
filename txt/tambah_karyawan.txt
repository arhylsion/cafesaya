<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Tambah Karyawan</h2>
    
    <form action="proses_tambah.php" method="POST">
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <select class="form-control" id="jabatan" name="jabatan" required>
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
                <option value="koki">Koki</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <!-- Tombol Tambah dan Batal -->
        <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
        <a href="karyawan.php" class="btn btn-secondary ml-2">Batal</a>
    </form>
</div>

<!-- Link Bootstrap JS and dependencies (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
