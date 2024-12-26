<?php
$nama = "John";
$peran ="";

if(empty($nama) && empty($peran) || empty($nama)){
  echo "Nama harus diisi!";
} else if(empty($peran)){
  echo "Halo $nama, Pilih peranmu untuk memulai game!";
} else {
  echo "Selamat datang di Dunia Werewolf, $nama!";
}

switch(strtolower($peran)):
  case "penyihir":
    echo "";
    break;
?>
