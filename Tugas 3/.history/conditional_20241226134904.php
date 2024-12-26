<?php

$nama = "John"; // Ganti sesuai input
$peran = ""; // Ganti sesuai input

// Logika untuk menghasilkan output
if (empty($nama)) {
  echo "Nama harus diisi!";
} elseif (empty($peran)) {
  echo "Halo $nama, Pilih peranmu untuk memulai game!";
} else {
  echo "Selamat datang di Dunia Werewolf, $nama\n";

  switch (strtolower($peran)) {
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
      echo "Peran tidak valid, silakan pilih antara Penyihir, Guard, atau Werewolf.";
  }
}
