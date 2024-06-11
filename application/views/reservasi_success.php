<!-- application/views/reservasi_success.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reservasi Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body><br><br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Wajib cetak sebagai bukti!!!</h4>
                <h5>jika No kamar tidak sesuai maka tidak sah</h5>
            </div>
            <div class="card-body">

            <h3>Farn Hotel</h3><br><br>
                <h5 class="card-title">Reservasi Anda Berhasil  :</h5><br>
                
                <p class="card-text">Nama Tamu : <?php echo $nama; ?></p>
                <p class="card-text">Tipe Kamar : <?php echo $tipe_kamar; ?></p>
                <p class="card-text">No Kamar : <?php echo $nomor_kamar; ?></p>
                <p class="card-text">Tanggal Checkin : <?php echo $tanggal_checkin; ?></p>
                <p class="card-text">Tanggal Checkout : <?php echo $tanggal_checkout; ?></p>

                <small class="text-muted">Kirim bukti reservasi dan bayar kepada resepsionis</small>
            </div>
            <div class="card-footer text-muted">
                <a href="#" class="btn bg-success text-light" onclick="cetakBuktiReservasi()">Cetak Bukti Reservasi</a>
                <a href="<?php echo base_url('user/dashboard'); ?>" class="btn bg-dark text-light">Beranda</a>
            </div>
        </div>
    </div>
    <!-- Tambahkan script untuk memuat html2pdf.js -->
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <!-- Tambahkan script JavaScript untuk menangani cetak ke PDF -->
    <script>
        function cetakBuktiReservasi() {
            var element = document.querySelector('.card-body'); // Pilih elemen yang akan dicetak
            html2pdf(element);
        }
    </script>
</body>
</html>