<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Fasilitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Update Fasilitas</h2>
    <form action="<?= base_url('admin/update_fasilitas/'.$fasilitas['id']); ?>" method="post">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Fasilitas:</label>
            <input type="text" name="nama" value="<?= $fasilitas['nama']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar:</label>
            <input type="text" name="gambar" value="<?= $fasilitas['gambar']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" required><?= $fasilitas['deskripsi']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
