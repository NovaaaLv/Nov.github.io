<?php

$connection = mysqli_connect(
  "localhost",
  "root",
  "",
  "db_login_register"
);
if(mysqli_connect_errno()){
  echo"Koneksi Gagal" .mysqli_connect_error();
}
?>