<?php
$nama = "John";
$peran ="";

if(empty($nama) && empty($peran) || empty($peran)){
  echo "Nama harus diisi!";
} else if(empty($peran)){
  echo "Halo $nama, Pilih peranmu untuk memulai game!";
} else {

}
?>
