<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body><br><br><br><br><br>
<div class="container">
<div class="card">
  <div class="card-header">
    <h2>Selamat Datang</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Admin | Farns Hotel </h5>
  </div>
</div>
</div><br><br>
<div class="container" id="kamar">
<h1 style="text-align: center;">Kamar</h1><br>
<table class="table caption-top">
 <thead>
   <tr>
   <th scope="col">NO</th>
   <th scope="col">Harga/Malam</th>
     <th scope="col">Tipe Kamar</th>
     <th scope="col">No Kamar</th>
     <th scope="col">Fasilitas</th>
     <th scope="col">Gambar</th>
     <th scope="col">Aksi</th>
   </tr>
 </thead>
 <tbody>
 <?php foreach ($kamar as $kamarr): ?>
   <tr>
   <th scope="row"><?= $kamarr['id']; ?></th>
                    <td><?= $kamarr['harga']; ?></td>
                    <td><?= $kamarr['tipe_kamar']; ?></td>
                    <td><?= $kamarr['no_kamar']; ?></td>
                    <td><?= $kamarr['fasilitas']; ?></td>
                    <td><?= $kamarr['gambar']; ?></td>  
                    <td><a href="<?= base_url('admin/update_kamar/'.$kamarr['id']); ?>" class="btn btn-warning">Update</a>
    <a href="<?= base_url('admin/hapus_kamar/'.$kamarr['id']); ?>" class="btn btn-danger mt-2" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
</td>
 </td>     
   </tr>
   <?php endforeach; ?> 
 </tbody>
</table>
<div class="position-absolute end-1">
    <a href="<?= base_url('admin/tambah_kamar'); ?>" class="btn btn-primary">Tambah</a>
</div>
<br><br><br><br><br><br><br><br><br>
<div class="container" id="htl">
  <h1 style="text-align: center;">Fasilitas Hotel</h1><br>
<table class="table caption-top">
 
 <thead>
   <tr>
   <th scope="col">NO</th>
     <th scope="col">Nama Fasilitas</th>
     <th scope="col">Gambar</th>
     <th scope="col">Deskripsi</th>
     <th scope="col">Aksi</th>
   </tr>
 </thead>
 <tbody>
    <?php foreach ($fasilitas as $fasilitass): ?>
        <tr>
            <th scope="row"><?= $fasilitass['id']; ?></th>
            <td><?= $fasilitass['nama']; ?></td>
            <td><?= $fasilitass['gambar']; ?></td>
            <td><?= $fasilitass['deskripsi']; ?></td>
            <td>
                <a href="<?= base_url('admin/update_fasilitas/'.$fasilitass['id']); ?>" class="btn btn-warning">Update</a>
                <a href="<?= base_url('admin/hapus_fasilitas/'.$fasilitass['id']); ?>" class="btn btn-danger mt-2" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?> 
</tbody>
</table>
<div class="position-absolute end-1">
    <a href="<?= base_url('admin/tambah_fasilitas'); ?>" class="btn btn-primary">Tambah</a>
</div><br><br><br>
<div class="container" id="kontak">
    <h1 style="text-align: center;">Kontak</h1><br>
    <table class="table caption-top">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Subjek</th>
                <th scope="col">Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kontak as $item): ?>
                <tr>
                    <th scope="row"><?= $item['no']; ?></th>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['alamat']; ?></td>
                    <td><?= $item['subjek']; ?></td>
                    <td><?= $item['pesan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


</body>
</html>