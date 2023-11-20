<?php

include "connection.php";

$namaGame = $_POST['namaGame'];

$thGame = $_FILES['thGame']['name'];
$file_tmpThGame = $_FILES['thGame']['tmp_name'];

$deskGame = $_POST['deskGame'];

$harga = $_POST['harga'];

$thTrailer = $_FILES['thTrailer']['name'];
$file_tmpThTrailer = $_FILES['thTrailer']['tmp_name'];
$linkTrailer = $_POST['linkTrailer'];

$thUpdate = $_FILES['thUpdate']['name'];
$file_tmpThUpdate = $_FILES['thUpdate']['tmp_name'];
$linkUpdate = $_POST['linkUpdate'];

$thGameplay = $_FILES['thGameplay']['name'];
$file_tmpThGameplay = $_FILES['thGameplay']['tmp_name'];
$linkGameplay = $_POST['linkGameplay'];

move_uploaded_file($file_tmpThGame, 'ResultUpload/thumbnailDesk/'.$thGame);
move_uploaded_file($file_tmpThTrailer, 'ResultUpload/thumbnailGame/'.$thTrailer);
move_uploaded_file($file_tmpThUpdate, 'ResultUpload/thumbnailGame/'.$thUpdate);
move_uploaded_file($file_tmpThGameplay, 'ResultUpload/thumbnailGame/'.$thGameplay);
$query = "INSERT INTO upload SET 
      namaGame = '$namaGame',
      thumbnailGame = '$thGame',
      deskGame = '$deskGame',
      harga = '$harga',
      thumbnailTrailer = '$thTrailer',
      linkTrailer = '$linkTrailer',
      thumbnailUpdate = '$thUpdate',
      linkUpdate = '$linkUpdate',
      thumbnailGameplay = '$thGameplay',
      linkGameplay = '$linkGameplay'
      ";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("SQL ERROR " . mysqli_error($connection));
} else {
    header('Location: adminGame.php');
    exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan pengalihan header
}
?>