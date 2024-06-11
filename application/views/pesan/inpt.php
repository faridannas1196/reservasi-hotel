<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="my-4">Input Pesan</h1>

    <a href="<?php echo base_url('resepsionis/dashboard');?>" class="btn btn-primary mb-3">Kembali</a>
    <?php echo validation_errors('<div style="color: red;">', '</div>'); ?>

    <?php echo form_open('pesan/submit'); ?>
        <div class="mb-3">
            <label for="nama_tamu" class="form-label">Nama Tamu:</label>
            <input type="text" name="nama_tamu" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan:</label>
            <textarea name="pesan" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    <?php echo form_close(); ?>
    

    <table class="table caption-top mt-4">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($info as $item): ?>
                <tr>
                    <th scope="row"><?= $item['id']; ?></th>
                    <td><?= $item['nama_tamu']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['pesan']; ?></td>
                   
                   <td>
                        <a href="<?= base_url('pesan/delete/' . $item['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                   </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8J+ua/CkiUkI2UAgvKi4wyM6m8ae2x12qIu3FvC5b0AxQ5w8+ndDJZsGZEf8" crossorigin="anonymous"></script>
</body>
</html>
