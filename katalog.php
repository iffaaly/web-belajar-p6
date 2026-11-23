<?php
// Drill 1: Array berisi 6 elemen buku dan ditampilkan dalam tabel
$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982],
    ["judul" => "Negeri 5 Menara", "pengarang" => "A. Fuadi", "tahun" => 2009],
    ["judul" => "Filosofi Kopi", "pengarang" => "Dee Lestari", "tahun" => 2006],
    ["judul" => "Ayat-Ayat Cinta", "pengarang" => "Habiburrahman El Shirazy", "tahun" => 2004]
];

echo "<h3>Drill 1: Seluruh Katalog Buku (6 Elemen)</h3>";
echo "<table border='1' cellpadding='6'><tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Tahun</th></tr>";
foreach ($buku as $i => $b) {
    echo "<tr><td>" . ($i + 1) . "</td><td>{$b['judul']}</td><td>{$b['pengarang']}</td><td>{$b['tahun']}</td></tr>";
}
echo "</table>";

// Drill 2: Filter buku dengan tahun di atas 1981 menggunakan array_filter
$bukuBaru = array_filter($buku, fn($b) => $b['tahun'] > 1981);

echo "<h3>Drill 2: Buku Terbitan di Atas Tahun 1981</h3>";
echo "<table border='1' cellpadding='6'><tr><th>Judul</th><th>Pengarang</th><th>Tahun</th></tr>";
foreach ($bukuBaru as $b) {
    echo "<tr><td>{$b['judul']}</td><td>{$b['pengarang']}</td><td>{$b['tahun']}</td></tr>";
}
echo "</table>";

// Drill 3: Urutkan dari tahun terlama ke terbaru dengan usort dan hitung jumlah buku
usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);
$jumlahBuku = count($buku);

echo "<h3>Drill 3: Katalog Diurutkan dari Tahun Terlama (Total: $jumlahBuku Buku)</h3>";
echo "<table border='1' cellpadding='6'><tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Tahun</th></tr>";
foreach ($buku as $i => $b) {
    echo "<tr><td>" . ($i + 1) . "</td><td>{$b['judul']}</td><td>{$b['pengarang']}</td><td>{$b['tahun']}</td></tr>";
}
echo "</table>";
?>
