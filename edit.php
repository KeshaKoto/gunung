<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'koneksi.php';
    $id_gunung = $_GET['Id_gunung'];
    $data = mysqli_query($konek, "SELECT * FROM korban WHERE id_gunung='$id_gunung'");
    while ($hasil = mysqli_fetch_array($data)) {
        ?>
        <br>
        <h2>Edit Data Korban</h2>
        <form method="POST" action="prosesedit.php">
            <div class="mb-3">
                <label class="form-label"><b>Nama Gunung</label>
                <input type="text" name="nama_gunung" class="form-control" value="<?php echo $hasil['nama_gunung']; ?>">
            </div>
            <div class="mb-3">
                <input type="hidden" name="id_gunung" value="<?php echo $hasil['id_gunung']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" value="<?php echo $hasil['lokasi']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Kejadian</label>
                <input type="text" name="tahun" class="form-control" value="<?php echo $hasil['tahun']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Korban Jiwa</label>
                <input type="text" name="korban" class="form-control" value="<?php echo $hasil['korban']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>