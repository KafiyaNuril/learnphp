<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Latihan Pertama Belajar PHP <br><hr>";
    echo "Contoh skrip PHP yang disisipkan pada HTML (ini udah langsung di htmlnya) <br><hr>";

    //no3 (dekralasi variabel penjumlahan)
    $a = 5;
    $b = 10;
    $penjumlahan = $a + $b;
    echo "Hasil dari penjumlahan dari $a dan $b adalah $penjumlahan <hr>";

    //no 4 (3 variabel)
    $txt = "Hai calon Programmer";
    $x = 5;
    $y = 10.5;
    echo "$txt $x $y <hr>";

    //no 5 (variabel nama dan umur)
    $nama = "Kafiya";
    $umur = 15;
    echo "Nama Saya Adalah $nama<br>Umur Saya Adalah $umur Tahun <hr>";

    //no6 (deklarasi 2 variabel)
    $d = 4;
    $e = 10.5;
    $hasilpembagian = $e / $d;
    echo "hasil dari variabel b $e dibagi $d adalah $hasilpembagian<hr>";

    //no7 
    $aa = 4;
    $bb = 10.5;
    $kali = $aa * $bb;
    echo "hasil perhitungan perkalian $aa dengan $bb adalah $kali<hr>";

    //no 8
    $xx = 5770;
    var_dump($xx);
    echo "<hr>";

    //no9 
    $xy = 57.70;
    var_dump($xy);
    echo "<hr>";

    //no10
    $angka = 3;
    $text = "tiga";
    if ($angka == $text){
        echo "Sama";
    } else {
        echo "Tidak sama";
    } echo " Alasannya karena nilai valuenya berbeda <hr>";

    //no 14
    $waktu = 16;
    if ($waktu < 20){
        echo "Have a good day! <hr>";
    };

    //no 15
    $nilaiawal = 20;
    if ($nilaiawal > 50){
        echo "Anda Lulus dengan nilai = $nilaiawal";
    } else {
        echo "Mohon Maaf anda tidak lulus, tetap SEMANGAT!!";
    }echo "<hr>";

    //no 16
    $awal = 5;
    if ($awal < 0){
        echo $awal * -1;
    } else {
        echo $awal;
    } echo "<hr>";

    //no17
    $hari = "Selasa";
    if ($hari == "Minggu"){
        echo "Have a nice weekend";
    } else {
        echo "Have a nice weekday";
    } echo "<hr>";

    #no 18
    $umur = 15;
    if ($umur < 17){
        echo "Anda belum cukup umur untuk Melanjutkan pendaftaran";
    } else {
        echo "Anda Tidak Melanjutkan!";
    }echo "<hr>";

    #no 19
    # pakai if else
    $value = 87;
    if ($value == 100){
        echo "Istimewa";
    } else if ($value <100 && $value >=90){
        echo "Baik Sekali";
    } else if  ($value <90 && $value >=80){
        echo "Baik";
    } else if  ($value <80 && $value >=70){
        echo "Cukup Sekali";
    } else if  ($value <70 && $value >=60){
        echo "Cukup";
    } else {
        echo "Belajar lagi";
    } echo "<hr>";

    #no 20 Switch case
    $kendaraan = "motor";
    switch ($kendaraan) {
        case "motor":
            echo "Motor ini adalah kendaraan roda 2";
            break;
        
        case "mobil":
            echo "Mobil ini adalah kendaraan roda 4";
            break;

        case "kereta":
            echo "Kereta ini adalah kendaraan roda banyak";
            break;
    }
    ?>
</body>
</html>