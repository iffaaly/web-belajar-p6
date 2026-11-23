    <?php
$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982]
];
echo "<p>Jumlah buku: " . count($buku) . "</p>";
// Langkah 2: Tampilkan isi array mentah dengan print_r
echo "<pre>";
print_r($buku);
echo "</pre>";
// Langkah 4: Urutkan berdasarkan tahun dengan usort sebelum foreach
usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);
// Langkah 3: Ubah array menjadi tabel HTML dengan foreach
echo "<h3>Daftar Buku (Tabel)</h3>";
echo "<table border='1' cellpadding='6'><tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Tahun</th></tr>";
foreach ($buku as $i => $b) {
    echo "<tr><td>" . ($i + 1) . "</td><td>{$b['judul']}</td><td>{$b['pengarang']}</td><td>{$b['tahun']}</td></tr>";
}
echo "</table>";
?>
