<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body><br><br><br><br>

<div class="container bg-light">
  <h2 class="container ">
    Selamat Datang
  </h2>
  <div class="card-body">
    <p class="card-text">Silahkan klik reservasi dibawah ini. Untuk informasi akan muncul (Maksimal 1 Jam).</p>
    <a href="<?php echo base_url('reservasi/index'); ?>" class="btn btn-primary" style="background-color: black;">Reservasi</a>
    <a href="<?php echo base_url('user/info'); ?>" class="btn btn-primary" style="background-color: black;">Informasi</a></div>
</div>
<div class="album py-5 bg">
  <div class="container" >
    <h2 class="mb-2 h1 font-weight-bold" style="text-align: center;" id="kamar">Tipe Kamar :</h2><br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($kamar as $kamarItem): ?>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo base_url($kamarItem['gambar']); ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="card-body">
              <p class="card-text">
                <h6><?php echo $kamarItem['tipe_kamar']; ?></h6>
                <?php echo $kamarItem['fasilitas']; ?>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">No Kamar | <?php echo $kamarItem['no_kamar']; ?></small>
              </div>
              <div class="text-end mt-3">
                <h5 class="card-title"><?php echo $kamarItem['harga']; ?></h5>
                <p class="card-text">per malam</p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>  
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bVSTnYwy8sLlHb8K6PqW48q2ys4U7LbY/pfS5ti0Vfj2GMI8beFVZigVGfN2bH4W" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-d3ffZkMHkls1Yq8EbVuf8CpEmAq5E2uGfZhUJGuT/AAXOpbNje9QxwRYI1/Z9pL" crossorigin="anonymous"></script>

</body>
</html>
