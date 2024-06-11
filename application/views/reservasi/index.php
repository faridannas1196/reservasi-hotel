<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Reservasi</title>
    <!-- Tambahkan referensi Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h2 class="mb-4">Form Reservasi</h2>
    <form method="post" action="<?php echo site_url('reservasi/submit_reservasi'); ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="no_telepon" class="form-label">No Telepon:</label>
            <input type="text" class="form-control" name="no_telepon" required>
        </div>
        <div class="mb-3">
            <label for="tipe_kamar" class="form-label">Tipe Kamar:</label>
            <select class="form-select" name="tipe_kamar" required>
                <option value="standar">Standar 1-20 </option>
                <option value="superior">Superior 21-40</option>
                <option value="deluxe">Deluxe 41-50</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nomor_kamar" class="form-label">Nomor Kamar:</label>
            <input type="text" class="form-control" name="nomor_kamar" required placeholder="Isi sesuai dengan tipe kamar hotel">
        </div>
        <div class="mb-3">
            <label for="tanggal_checkin" class="form-label">Tanggal Checkin:</label>
            <input type="date" class="form-control" name="tanggal_checkin" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_checkout" class="form-label">Tanggal Checkout:</label>
            <input type="date" class="form-control" name="tanggal_checkout" required>
        </div>
        <button type="submit" class="btn bg-success text-light">Submit</button>
        <a href="<?php echo base_url('user/dashboard')?>" class="btn bg-danger text-light">Batal</a>
    </form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
