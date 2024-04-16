<?php
// Ambil data suhu dan kelembaban dari sensor (digunakan nilai dummy untuk contoh)
$suhu = rand(20, 30); // Nilai dummy antara 20°C dan 30°C
$kelembaban = rand(40, 60); // Nilai dummy antara 40% dan 60%

// Format data dalam format JSON
$data = array(
    'suhu' => $suhu,
    'kelembaban' => $kelembaban
);

// Set header untuk response sebagai JSON
header('Content-Type: application/json');

// Kembalikan data dalam format JSON
echo json_encode($data);
?>