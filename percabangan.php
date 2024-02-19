<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if and loop</title>
</head>
<body>
    <?php
    /*Studi Kasus :
        Buatlah Program untuk menentukan peringkat disebuah sekolah, 
        - Jika nilai 90 - 100 maka program akan mencetak peringkat “A”
        - Jika nilai 80-90 maka program akan mencetak peringkat “B”
        - Jika nilai 70-80 maka program akan mencetak peringkat “C”
        - Jika nilai kurang dari 70 maka program akan mencetak peringkat “D”*/
    
    $nilai = 90;
    echo "Variabel tersebut bernilai : {$nilai} </br>";

    if ($nilai >=90 && $nilai <=100){
        echo "Peringkat A";
    }else if ($nilai >=80 && $nilai <90){
        echo "Peringkat B";
    }else if ($nilai >=70 && $nilai <80){
        echo "Peringkat C";
    } else {
        echo "Peringkat D";
    }
    echo "<hr>";

    //perulangan / looping

    # inisialisasi variabel tidak harus dari angka 0
    for ($i = 1; $i <= 30; $i++) {
        if ($i % 10 === 0) {
        continue; # skip perulangan jika nilai $i habis dibagi 10
        }
        
        echo "Perulangan ke-{$i} <br>";

        if ($i > 20) {
        break; # hentikan perulangan jika $i lebih dari 20
        }
    }
    ?>
</body>
</html>