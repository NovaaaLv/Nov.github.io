<?php
    include "connection.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        // Lakukan query untuk mendapatkan data berdasarkan ID
        $result = mysqli_query($connection, "SELECT * FROM upload WHERE id = $id");
        $data = mysqli_fetch_array($result);

        // Kemudian gunakan $data untuk mengisi form atau tampilan update
        // Misalnya:
        $namaGame = $data['namaGame'];
        $deskGame = $data['deskGame'];
        $harga = $data['harga'];
        $thumbnailGame = $data['thumbnailGame'];
        // ...
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Update Game</title>
</head>
<body>

<div class="container mt-5">
    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="namaGame">Nama Game:</label>
            <input type="text" class="form-control" id="namaGame" name="namaGame" value="<?php echo $namaGame; ?>">
        </div>

        <div class="form-group">
            <label for="thumbnailGame">Thumbnail Game: ( 400 X 200 )</label>
            <input type="file" class="form-control" id="thumbnailGame" name="thumbnailGame" value="<?php echo $thumbnailGame; ?>">
        </div>

        <div class="form-group">
            <label for="deskGame">Deskripsi Game:</label>
            <textarea class="form-control" id="deskGame" name="deskGame"><?php echo $deskGame; ?></textarea>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
