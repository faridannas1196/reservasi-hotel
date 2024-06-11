<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    <div class="container mt-4">
        <h1 class="text-center mb-4">Informasi</h1>
        
        <?php foreach ($info as $item): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><strong>Atas Nama </strong><?= $item['nama_tamu']; ?></h5>
                    <p class="card-text"><strong>Email: </strong><?= $item['email']; ?></p>
                    <p class="card-text"><strong>Pesan: </strong><?= $item['pesan']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="<?php echo base_url('user/dashboard')?>" type="button" class="btn btn-primary">Beranda</a>
</body>
</html>
