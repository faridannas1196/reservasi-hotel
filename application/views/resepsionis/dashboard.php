

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resepsionis</title>
</head>
<body><br><br><br><br>
  
  <div class="container">
  <div class="card">
  <div class="card-header">
    <h2>Selamat Datang</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Resepsionis | Farns Hotel</h5>
  </div>
</div>
</div><br><br><br><br><br><br><br>
    <h1 style="text-align : center;" id="tm">Data Reservasi Tamu !!! </h1><br><br>
    <div class="container">
    <form class="d-flex" method="post" action="<?= base_url('resepsionis/search'); ?>">
    <input class="form me-2" type="search" name="search" placeholder="Cari berdasarkan Nama" aria-label="Cari">
    <div class="input-group" style="width: 200px; margin-left: 10px;">
        <input class="form-control datepicker" type="date" name="date" aria-label="Pilih Tanggal">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Cari</button>
</form>
<br><br>
<table class="table caption-top" id="dt">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">No Kamar</th>
                <th scope="col">Tanggal Checkin</th>
                <th scope="col">Tanggal Checkout</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
    <tbody>
            <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <th scope="row"><?= $reservation['id']; ?></th>
                    <td><?= $reservation['nama']; ?></td>
                    <td><?= $reservation['email']; ?></td>
                    <td><?= $reservation['tipe_kamar']; ?></td>
                    <td><?= $reservation['nomor_kamar']; ?></td>
                    <td><?= $reservation['tanggal_checkin']; ?></td>
                    <td><?= $reservation['tanggal_checkout']; ?></td>
                    <td><a href="<?= base_url('resepsionis/selesai/' . $reservation['id']); ?>" class="btn btn-success mr-2">Selesai</a>
<a href="<?= base_url('resepsionis/tidak_sah/' . $reservation['id']); ?>" class="btn btn-danger">Tidak Sah</a>
</td>           </tr>       <?php endforeach; ?>
        </tbody>
    </table><br><br>


   
</div>
</div>
</body>
</html>