<?php

if (isset($_POST['submit'])) {

  $nim = $_POST['nim'];
  $pilih_mk = $_POST['pilih_mk'];
  $nilai = $_POST['nilai'];

  $hasilUjian = ($nilai >= 75) ? "Lulus" : "Tidak Lulus";

  $grade = ($nilai >= 80) ? "A" : (($nilai >= 70) ? "B" : (($nilai >= 60) ? "C" : (($nilai >= 50) ? "D" : "E")));

  echo "<h2>Hasil Penilaian</h2>";
  echo "<p> NIM :" . $nim . "</p>";
  echo "<p> Mata Kuliah :" . $pilih_mk . "</p>";
  echo "<p> Nilai :" . $nilai . "</p>";
  echo "<p> Hasil Ujian :" . $hasilUjian . "</p>";
  echo "<p> Grade :" . $grade . "</p>";
  
}

?>