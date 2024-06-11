<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kamar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Tambah Kamar</h2>
    <form action="<?= base_url('admin/tambah_kamar'); ?>" method="post">
        <div class="mb-3">
            <label for="harga" class="form-label">Harga/Malam:</label>
            <input type="text" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tipe_kamar" class="form-label">Tipe Kamar:</label>
            <input type="text" name="tipe_kamar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="no_kamar" class="form-label">No Kamar:</label>
            <input type="text" name="no_kamar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fasilitas" class="form-label">Fasilitas:</label>
            <input type="text" name="fasilitas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar:</label>
            <input type="text" name="gambar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
