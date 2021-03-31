<?php
    // Nama file bangun ruang
    require 'Bola.php';
    // Variabel untuk object baru yang dibuat dari kelas Bola
    $bola = new Bola;
    // Property dari bangun ruang bola
    $bola->setJariJari(15);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101090</title>
</head>
<body>
    <h3>Shafa Arika Anindira</h3>
    <h1>Bangun Ruang : Bola</h1>
    <ul>
        <!-- Menampilkan hasil dari method yang dibuat-->
        <li>Jari-Jari : <?php echo($bola->getJariJari())?></li>
        <li>Luas : <?php echo($bola->getLuas())?></li>
        <li>Volume : <?php echo($bola->getVolume())?></li>
    </ul>
</body>
</html>