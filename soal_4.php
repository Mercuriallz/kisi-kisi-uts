<?php
$nilai = [78, 85, 90, 66, 88];

$nilai_tertinggi = max($nilai);
$nilai_terendah = min($nilai);
$rata_rata = array_sum($nilai) / count($nilai);

echo "<h3>Analisis Nilai Ujian</h3>";
echo "Nilai Tertinggi: $nilai_tertinggi <br>";
echo "Nilai Terendah: $nilai_terendah <br>";
echo "Rata-rata Nilai: $rata_rata";
?>