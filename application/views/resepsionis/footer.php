

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resepsionis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body><br><br><br><br><br><br><br><br>
  <div class="container" id="htr">
  <h1 style="text-align : center;" id="tm">Riwayat Reservasi !!! </h1><br><br>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($history_reservations as $history_reservation): ?>
                <tr>
                    <th scope="row"><?= $history_reservation['id']; ?></th>
                    <td><?= $history_reservation['nama']; ?></td>
                    <td><?= $history_reservation['email']; ?></td>
                    <td><?= $history_reservation['tipe_kamar']; ?></td>
                    <td><?= $history_reservation['nomor_kamar']; ?></td>
                    <td><?= $history_reservation['tanggal_checkin']; ?></td>
                    <td><?= $history_reservation['tanggal_checkout']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>