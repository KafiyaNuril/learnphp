<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Bilangan 1 sampai 50 dengan Do-While Loop</title>
    <style>
    </style>
</head>
<body>
<h4>Kafiya Nuril Kautsar <br> PPLG X-3 <br> Ciawi 2 <br> Nis : 12309692</h4> 
<div style="display: flex; justify-content:space-around;">
    <div>
    <?php
    print "<h5>bilangan</h5>";
    $angka = 1;

        do {
            echo $angka, '<br>';
            $angka++;
        } while ($angka <= 50);
    ?>
    </div>
    <div>
    <?php
    echo "<h5>bilangan</h5>";
    $i = 1;
    
    do {
         if ($i % 2 == 0){
            echo $i, ' genap</br>';
        } else {
            echo $i ,' ganjil</br>';
        }$i++;
    } while ($i <= 50);
    ?>
    </div>
</div>

<div style="display: flex; justify-content:space-around;">
    <div>
    <?php
        //bilangan ganjil 
    echo "<h5>bilangan ganjil</h5>";
    $i = 1;
    
    do {
        if ($i % 2 == 1){
            echo $i, '</br>';
        }$i++;
    } while ($i <= 50);
    ?>
    </div>

    <div>
    <?php
    //bilangan genap 
    echo "<h5>bilangan genap</h5>";
    $i = 1;
    
    do {
         if ($i % 2 == 0){
            echo $i, '</br>';
        }$i++;
    } while ($i <= 50);
    ?>
    </div>
</div>
</body>
</html>