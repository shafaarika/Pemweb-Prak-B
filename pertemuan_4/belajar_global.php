<?php
    require "Tabung.php";

    // Mengecek kelas tabung bisa dipanggil apa tidak
    // $tabung = new Tabung;
    // $tabung->tes()

    // Menampilkan array kosong, jika menggunakan $_GET array kosong, bisa diisi melalui URL
    // print_r($_GET)

    // $_POST juga kosong seperti $_GET, $_POST bisanya mdari form, tidak bisa melalui URL, $_POST membaca data melalui name
    // var_dump($_POST)

    // Cara mengisi $_GET
    // $_GET['nama'] = 'Shafa Arika Anindira';
    // $_GET['nim'] = '192410101090';
    // var_dump($_GET);

    // Cara mengisi $_POST
    // var_dump($_POST);
    
    // Cara mengecek value 1
    // if (isset($_POST['submit_btn'])) {
    //     if (strlen($_POST['diameter']) > 0) {
    //         echo "Login";
    //     } else{
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // }

    // Menampilkan diameter dan tinggi, menghitung luas selimut, dan volume tabung
    // $luas = 0;
    // $volume = 0;

    $tabung = new Tabung;

    if (isset($_POST['button_submit'])){
        // $diameter = $_POST['diameter'];
        // $tinggi = $_POST['tinggi'];
        // $r = $diameter / 2;

        // $luas = 3.14 * $diameter * $tinggi;
        // $volume = 3.14 * $r * $r * $tinggi;

        // echo "Diameter $diameter <br/>";
        // echo "Tinggi $tinggi <br/>";

        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();
        $tabung->hitungVolume();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Global</title>
</head>
<body>
    <!-- <h1>Nama <?php echo isset($_GET['nama'])? $_GET['nama'] : 'Undefined'; ?></h1> -->

    <!-- Menampilkan $_POST -->
    <!-- <form action="" method='post'>
        <input type="text" name="diameter">
        <button name='submit_btn'>Submit</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="button_submit">Hitung</button>

        <hr>
    </form>
    <ul>
        <li>Luas Selimut : <?= $tabung->getLuasSelimut(); ?></li>
        <li>Volume : <?= $tabung->getVolume(); ?></li>
    </ul>
</body>
</html>