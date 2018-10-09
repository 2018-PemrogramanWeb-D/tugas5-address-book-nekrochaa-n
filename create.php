<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Buku Alamat</title>
</head>
<body>
    <h1>Membuat Buku Alamat</h1>
    <div class="container">
        <form action="create_process.php" method="POST" role="form">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label for="kodepos">Kode pos :</label>
                <input type="text" class="form-control" name="kodepos">
            </div>
            <div class="form-group">
                <label for="telpon">Telpon :</label>
                <input type="text" class="form-control" name="telpon">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>