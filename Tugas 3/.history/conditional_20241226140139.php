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
      echo "Halo Penyihir $nama, kamu dapat melihat siapa yang menjadi werewolf!";
      break;
    case "guard":
      echo "Halo Guard $nama, kamu akan membantu melindungi temanmu dari serangan werewolf.";
      break;
    case "werewolf":
      echo "Halo Werewolf $nama, Kamu akan memakan mangsa setiap malam!";
      break;
    default:
      echo "Peran Invalid";
      break;
?>
