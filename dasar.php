<!-- contoh nampilkan program di php -->
<?php
    // echo "Hello World";
    // menampilkan variable harus menggunakan dolar
    // $angka = 1;
    
    // tipe-tipe data
    // $contoh_str = "hello"; //string
    // $contoh_int = 1; // int
    // $contoh_double = 1.1; //double
    // $contoh_arr = []; //array
    $arr = [
        [
            'nama' => 'shafa',
            'nim' => '192410101001',
            'usia' => '17'
        ],
        [
            'nama' => 'arika',
            'nim' => '192410101002',
            'usia' => '18'
        ],
        [
            'nama' => 'anindira',
            'nim' => '192410101003',
            'usia' => '19'
        ]
    ];

    $arr2 = ['shafa', '192410101090', '18']
?>
?>

<!-- bisa dijalankan didalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < 5; $i++);?>
        <?php if($i % 2 === 0):?>
            <h2>Hello World</h2>
        <?php else : ?>
            <h1>Hello World</h1>
        <?php endif; ?>
    <?php endforeach; ?>
    
    <?php
        $str_satu = "Pemrograman";
        $str_dua = "Website";

        echo $str_satu . " " . $str_dua;
    ?>

    <?php
        for ($angka = 0; $angka < 6; $angka++) {
            echo '<h2>Hellp World</h2>';
        }
    ?>

    <?php
        echo "Hello World" . '<br/>';
        echo "Hello World" . '<br/>';
        echo $angka;
        echo $contoh_double;
    ?>

    <!-- == '0' == 0 ? true -->
    <?php
        $array = ['Pemrograman', 'Webstie', 'Kelas B', 'Semster 4'];
        // var_dump($array);
        foreach ($array as $value) {
            echo $value . " ";
        }
        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . "<br>";
        }
    ?>


    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $arr2[0]; ?></td>
                <td><?= $arr2[1]; ?></td>
                <td><?= $arr2[2]; ?></td>
            </tr>
        </tbody>
        <br>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs); ?>
                <tr>
                    <td><?php echo $mhs['nama'] ?></td>
                    <td><?php echo $mhs['nim'] ?></td>
                    <td><?php echo $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>