<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Hallo Dunia</h1>
    <?php
        $tipe_data = "Santai Saja"; // tipe data string
        $tipe_data = 5; // tipe data integer
    ?>

    <h2><?=$tipe_data?></h2>

    <?php
        $pecahan = 5.85; // tipe data float/pecahan
    ?>

    <h2>Saya menampilkan nilai Pecahan ini <?=$pecahan?></h2>

    <?php
           //  $perbandingan = true; // tipe data boolean

           // echo $perbandingan; 
            echo "<br/>";
    ?>

    <?php

        /*
           $provinsi[0] = "Jawa Timur";
           $provinsi[1] = "DKI Jakarta";
           $provinsi[2] = "IKN";
        */

            /* $provinsi = array("Jawa Timur", 
                              "DKI Jakarta",
                              "IKN"); */


            $hasil = 5;

            echo $hasil--;
            echo "<br/>";
            echo $hasil;
            echo "<br/>";

            define("SATU", 1);

            echo $SATU;

            echo "<br/>";

           /* if($perbandingan == true) {
                echo "ucapkan selamat pagi";
            } else {
                echo "ucapkan selamat";
            }
            */
            /* $perbandingan = 4;
            switch($perbandingan) { // percabangan
                case 1:
                    $pesan = "soto ayam";
                break;
                case 2:
                    $pesan = "ayam goreng";
                break;
                default:
                    $pesan = "engga ding";
            }
 
            echo $pesan; */

            $pesan = ($hasil == 2) ? "santai saja" : "salah";

            echo $pesan;
            echo "<br/>";
            
            $provinsi = array("Jawa Timur", 
                              "DKI Jakarta",
                              "IKN",
                              "Jawa Tengah",
                              "Jawa Barat");

            foreach($provinsi as $key) {
                echo $key;
                echo "<br/>";
            }

            $i=1;

            while($i<5) {
                echo "topi bundar <br/>";
                $i++;
            }
    ?>
    <!--
    <?php for ($i=0; $i<100; $i++) { ?>
        <h2>Hello World</h2>
    <?php } ?>
    -->
</body>
</html>