<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['id']) && isset($_POST['namaGame']) && isset($_POST['deskGame']) && isset($_POST['harga']) && isset($_POST['thumbnailGame'])) {
        $id = $_POST['id'];
        $namaGame = $_POST['namaGame'];
        $deskGame = $_POST['deskGame'];
        $harga = $_POST['harga'];
        $thumbnailGame = $_POST['thumbnailGame'];

        // Lakukan update ke database
        $query = "UPDATE upload SET namaGame='$namaGame',thumbnailGame='$thumbnailGame', deskGame='$deskGame', harga='$harga' WHERE id='$id'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: update_success.php");
            exit();
        } else {
            header("Location: update_error.php");
            exit();
        }
    }
}
?>
