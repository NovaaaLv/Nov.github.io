<?php

  include "connection.php";
  $data = mysqli_query ($connection, "SELECT * FROM upload WHERE id = '$_GET[id]'");
  $row = mysqli_fetch_array($data);

  $thGame = $row['thumbnailGame'];
  if(file_exists('ResultUpload/thumbnailDesk/'.$thGame)){
    unlink('ResultUpload/thumbnailGame/'.$thGame);
  }
  $query = "DELETE FROM upload WHERE id = '$_GET[id]'";
  $query = mysqli_query($connection, $query);
if (!$query) {
    die("SQL ERROR " . mysqli_error($connection));
} else {
    header('Location: adminGame.php');
    exit();
}
?>