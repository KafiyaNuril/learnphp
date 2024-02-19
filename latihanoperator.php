<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php
    //menghitung luas persegi jika sisinya 4
    $a = 4;
    $luaspersegi = $a*$a;
    echo "Luas persegi jika sisinya $a adalah $luaspersegi";
    echo "<hr>";


    //program untuk menghitung luas lingkaran jika jari-jarinya 8 cm
    $r = 8;
    $Luaslingkaran = 3.14 * ($r * $r);
    print "luas lingkaran yang berjari-jari $r adalah $Luaslingkaran";
    echo "<hr>";


    //membandingkan angka 19 dan 20
    $s = 19;
    $d = 20;
    $pembandingan = $s < $d;
    echo "Pembandingan $s < $d = $pembandingan";
    ?>
</body>
</html>