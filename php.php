<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Informasi Siswa</title>
</head>
<body>
<header>
    <h1>Belajar php</h1>
    <hr>
    <h4>Kafiya Nuril Kautsar<br> 12309692<br> PPLG X-3<br> Ciawi 2</h4>
    <hr>
</header>
<?php
// Data siswanya
$siswa = [
    ['nis' => '001', 'nama' => 'Moes', 'rombel' => 'XII-A'],
    ['nis' => '002', 'nama' => 'Aditya', 'rombel' => 'XII-B'],
    ['nis' => '003', 'nama' => 'aliya', 'rombel' => 'XI-A'],
    ['nis' => '004', 'nama' => 'siti', 'rombel' => 'XII-D'],
    ['nis' => '005', 'nama' => 'indah', 'rombel' => 'XI-C'],
    ['nis' => '006', 'nama' => 'Moes', 'rombel' => 'XII-A'],
    ['nis' => '007', 'nama' => 'dhino', 'rombel' => 'XII-B'],
    ['nis' => '008', 'nama' => 'aliya', 'rombel' => 'XI-A'],
    ['nis' => '009', 'nama' => 'siti', 'rombel' => 'XII-D'],
    ['nis' => '010', 'nama' => 'indah', 'rombel' => 'XI-C'],
    
    // Tambahkan lebih banyak siswa jika diperlukan
];
?>

<div style="display:flex ; flex-wrap: wrap;">
    <?php
    // Mencetak Informasi Siswa
    foreach ($siswa as $data) {
        echo "<div>";
        echo "<p>NIS: {$data['nis']}</p>";
        echo "<p>Nama: {$data['nama']}</p>";
        echo "<p>Rombel: {$data['rombel']}</p>";
        echo "</div>";
        echo "<hr>";
        
    }
    ?>
</div>

</body>
</html>
