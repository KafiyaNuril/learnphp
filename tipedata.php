<?php
//tipe data string menggunakan metode single quoted
$string1 = 'ini adalah contoh string sederhana';
$string2 = 'variabel juga tidak otomatits ditampilkan : $string1';

echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
echo $string2;
echo "<hr>";

//Double quote dapat digunakan untuk mencetak variabel pada string. Sedangkan single quote tidak dapat mencetak variabel pada string.

echo "<h4>Operator aritmatika</h4>";

//aritmatika
$a = 5;
$b = 2;

//penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";


echo "<h4>Operator Perbandingan</h4>";

//relasi / perbandingn
$x = 5;
$y = 2;

//menggunakan operator relasi lebih sama dengan
$z = $x == $y;
echo "$x == $y = $z";
echo "<hr>";

//menggunakan lebih tidak sama dengan
$z = $x != $y;
echo "$x != $y = $z";
echo "<hr>";

//menggunakan lebih besar sama dengan
$z = $x >= $y;
echo "$x >= $y = $z";
echo "<hr>";

//menggunakan lebih kecil sama dengan
$z = $x <= $y;
echo "$x <= $y = $z";
echo "<hr>";
?>