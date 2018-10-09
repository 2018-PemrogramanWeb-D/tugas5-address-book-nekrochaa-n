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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Tugas Buku Alamat <small>by Jihad Rausyan</small></h1>
            </div>
            <div class="col-md-6 align-right">
                <h1><a href="create.php" class="btn btn-primary">Kontak baru</a></h1>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered table-responsive">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kodepos</th>
                    <th>Telpon</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        $result = $con->query("SELECT * FROM addresslist");
                        $i=1;
                        if ($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['kodepos']; ?></td>
                        <td><?php echo $row['telpon']; ?></td>
                        <td>
                            <!-- <a href="edit.php" class="btn btn-warning" margin="20px">Edit</a>
                            <a href="delete.php" class="btn btn-danger" margin="20px">Delete</a> -->
                            <form action="edit.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="nama" value="<?php echo $row['nama']; ?>">
                                <input type="hidden" name="alamat" value="<?php echo $row['alamat']; ?>">
                                <input type="hidden" name="kodepos" value="<?php echo $row['kodepos']; ?>">
                                <input type="hidden" name="telpon" value="<?php echo $row['telpon']; ?>">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            <form action="delete_process.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <?php
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>