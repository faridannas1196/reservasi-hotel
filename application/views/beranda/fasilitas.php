<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><br><br><br> <br>
  <div class="container">
    <h2 class="mb-2 h1 font-weight-bold" id="fasilitas" style="text-align: center;">Fasilitas Hotel :</h2><br><br><br>

    <div class="row">
      <?php foreach ($fasilitas as $fasilitasItem): ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="vv profile-circel-image-200">
            <img src="<?php echo base_url($fasilitasItem['gambar']); ?>" class="img-fluid rounded-circle">
            <h5 class="mb-3 mt-5"><?php echo $fasilitasItem['nama']; ?></h5>
            <p class="mb-4 text-muted"><?php echo $fasilitasItem['deskripsi']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
