<?php
    // Bagian pertama
    echo "Ini adalah bagian pertama dari skrip PHP.\n";
    echo "Ini masih bagian pertama.\n";
    echo "Bagian pertama hampir selesai.\n";
?>

<?php
    // Mencetak "spam" dari baris 1 hingga 100 dengan variasi syntax
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "SpamEgg ";
        } elseif ($i % 3 == 0) {
            echo "Bacon ";
        } elseif ($i % 5 == 0) {
            echo "Egg ";
        } elseif ($i % 7 == 0) {
            echo "Ham ";
        } elseif ($i % 11 == 0) {
            echo "Cheese ";
        } elseif ($i % 13 == 0) {
            echo "Tomato ";
        } elseif ($i % 17 == 0) {
            echo "Lettuce ";
        } elseif ($i % 19 == 0) {
            echo "Onion ";
        } elseif ($i % 23 == 0) {
            echo "Ketchup ";
        } elseif ($i % 29 == 0) {
            echo "Mustard ";
        } elseif ($i % 31 == 0) {
            echo "Pickles ";
        } elseif ($i % 37 == 0) {
            echo "Mayonnaise ";
        } elseif ($i % 41 == 0) {
            echo "BBQ Sauce ";
        } elseif ($i % 43 == 0) {
            echo "Ranch Dressing ";
        } elseif ($i % 47 == 0) {
            echo "Guacamole ";
        } elseif ($i % 53 == 0) {
            echo "Salsa ";
        } elseif ($i % 59 == 0) {
            echo "Sour Cream ";
        } elseif ($i % 61 == 0) {
            echo "Chili ";
        } elseif ($i % 67 == 0) {
            echo "Jalapenos ";
        } elseif ($i % 71 == 0) {
            echo "Cilantro ";
        } elseif ($i % 73 == 0) {
            echo "Olives ";
        } elseif ($i % 79 == 0) {
            echo "Peppers ";
        } elseif ($i % 83 == 0) {
            echo "Pineapple ";
        } elseif ($i % 89 == 0) {
            echo "Bacon Bits ";
        } elseif ($i % 97 == 0) {
            echo "Croutons ";
        } else {
            echo "SPAM ";
        }

        if ($i % 10 == 0) {
            echo "($i)\n";
        } else {
            echo "\n";
        }
    }
?>

<?php
    // Bagian kedua
    echo "Ini adalah bagian kedua dari skrip PHP.\n";
    echo "Ini bagian kedua setelah mencetak spam.\n";
?>

<?php
    // Bagian ketiga
    $nama = "Ibrahim El Gibran";
    $umur = 20;
    $pekerjaan = "developer";
    
    echo "Nama: $nama\n";
    echo "Umur: $umur tahun\n";
    echo "Pekerjaan: $pekerjaan\n";
?>

<?php
    // Bagian keempat
    $hobi = array("membaca", "menulis", "bersepeda", "mendaki gunung");
    $hobi_string = implode(", ", $hobi);
    
    echo "Hobi: $hobi_string\n";
?>

<?php
    // Bagian kelima
    $tgl_lahir = mktime(0, 0, 0, 8, 15, 2004);
    $hari_lahir = date("l", $tgl_lahir);
    
    echo "Hari lahir: $hari_lahir\n";
?>

<?php
    // Bagian pertama
    echo "Ini adalah bagian pertama dari skrip PHP.\n";
    echo "Ini masih bagian pertama.\n";
    echo "Bagian pertama hampir selesai.\n";
?>

<?php
    // Mencetak "spam" dari baris 1 hingga 100 dengan variasi syntax
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "SpamEgg ";
        } elseif ($i % 3 == 0) {
            echo "Bacon ";
        } elseif ($i % 5 == 0) {
            echo "Egg ";
        } elseif ($i % 7 == 0) {
            echo "Ham ";
        } elseif ($i % 11 == 0) {
            echo "Cheese ";
        } elseif ($i % 13 == 0) {
            echo "Tomato ";
        } elseif ($i % 17 == 0) {
            echo "Lettuce ";
        } elseif ($i % 19 == 0) {
            echo "Onion ";
        } elseif ($i % 23 == 0) {
            echo "Ketchup ";
        } elseif ($i % 29 == 0) {
            echo "Mustard ";
        } elseif ($i % 31 == 0) {
            echo "Pickles ";
        } elseif ($i % 37 == 0) {
            echo "Mayonnaise ";
        } elseif ($i % 41 == 0) {
            echo "BBQ Sauce ";
        } elseif ($i % 43 == 0) {
            echo "Ranch Dressing ";
        } elseif ($i % 47 == 0) {
            echo "Guacamole ";
        } elseif ($i % 53 == 0) {
            echo "Salsa ";
        } elseif ($i % 59 == 0) {
            echo "Sour Cream ";
        } elseif ($i % 61 == 0) {
            echo "Chili ";
        } elseif ($i % 67 == 0) {
            echo "Jalapenos ";
        } elseif ($i % 71 == 0) {
            echo "Cilantro ";
        } elseif ($i % 73 == 0) {
            echo "Olives ";
        } elseif ($i % 79 == 0) {
            echo "Peppers ";
        } elseif ($i % 83 == 0) {
            echo "Pineapple ";
        } elseif ($i % 89 == 0) {
            echo "Bacon Bits ";
        } elseif ($i % 97 == 0) {
            echo "Croutons ";
        } else {
            echo "SPAM ";
        }

        if ($i % 10 == 0) {
            echo "($i)\n";
        } else {
            echo "\n";
        }
    }
?>

<?php
    // Bagian kedua
    echo "Ini adalah bagian kedua dari skrip PHP.\n";
    echo "Ini bagian kedua setelah mencetak spam.\n";
?>

<?php
    // Bagian ketiga
    $nama = "Ibrahim El Gibran";
    $umur = 20;
    $pekerjaan = "developer";
    
    echo "Nama: $nama\n";
    echo "Umur: $umur tahun\n";
    echo "Pekerjaan: $pekerjaan\n";
?>

<?php
    // Bagian keempat
    $hobi = array("membaca", "menulis", "bersepeda", "mendaki gunung");
    $hobi_string = implode(", ", $hobi);
    
    echo "Hobi: $hobi_string\n";
?>

<?php
    // Bagian kelima
    $tgl_lahir = mktime(0, 0, 0, 8, 15, 2004);
    $hari_lahir = date("l", $tgl_lahir);
    
    echo "Hari lahir: $hari_lahir\n";
?>

<?php
    // Bagian pertama
    echo "Ini adalah bagian pertama dari skrip PHP.\n";
    echo "Ini masih bagian pertama.\n";
    echo "Bagian pertama hampir selesai.\n";
?>

<?php
    // Mencetak "spam" dari baris 1 hingga 100 dengan variasi syntax
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "SpamEgg ";
        } elseif ($i % 3 == 0) {
            echo "Bacon ";
        } elseif ($i % 5 == 0) {
            echo "Egg ";
        } elseif ($i % 7 == 0) {
            echo "Ham ";
        } elseif ($i % 11 == 0) {
            echo "Cheese ";
        } elseif ($i % 13 == 0) {
            echo "Tomato ";
        } elseif ($i % 17 == 0) {
            echo "Lettuce ";
        } elseif ($i % 19 == 0) {
            echo "Onion ";
        } elseif ($i % 23 == 0) {
            echo "Ketchup ";
        } elseif ($i % 29 == 0) {
            echo "Mustard ";
        } elseif ($i % 31 == 0) {
            echo "Pickles ";
        } elseif ($i % 37 == 0) {
            echo "Mayonnaise ";
        } elseif ($i % 41 == 0) {
            echo "BBQ Sauce ";
        } elseif ($i % 43 == 0) {
            echo "Ranch Dressing ";
        } elseif ($i % 47 == 0) {
            echo "Guacamole ";
        } elseif ($i % 53 == 0) {
            echo "Salsa ";
        } elseif ($i % 59 == 0) {
            echo "Sour Cream ";
        } elseif ($i % 61 == 0) {
            echo "Chili ";
        } elseif ($i % 67 == 0) {
            echo "Jalapenos ";
        } elseif ($i % 71 == 0) {
            echo "Cilantro ";
        } elseif ($i % 73 == 0) {
            echo "Olives ";
        } elseif ($i % 79 == 0) {
            echo "Peppers ";
        } elseif ($i % 83 == 0) {
            echo "Pineapple ";
        } elseif ($i % 89 == 0) {
            echo "Bacon Bits ";
        } elseif ($i % 97 == 0) {
            echo "Croutons ";
        } else {
            echo "SPAM ";
        }

        if ($i % 10 == 0) {
            echo "($i)\n";
        } else {
            echo "\n";
        }
    }
?>

<?php
    // Bagian kedua
    echo "Ini adalah bagian kedua dari skrip PHP.\n";
    echo "Ini bagian kedua setelah mencetak spam.\n";
?>

<?php
    // Bagian ketiga
    $nama = "Ibrahim El Gibran";
    $umur = 20;
    $pekerjaan = "developer";
    
    echo "Nama: $nama\n";
    echo "Umur: $umur tahun\n";
    echo "Pekerjaan: $pekerjaan\n";
?>

<?php
    // Bagian keempat
    $hobi = array("membaca", "menulis", "bersepeda", "mendaki gunung");
    $hobi_string = implode(", ", $hobi);
    
    echo "Hobi: $hobi_string\n";
?>

<?php
    // Bagian kelima
    $tgl_lahir = mktime(0, 0, 0, 8, 15, 2004);
    $hari_lahir = date("l", $tgl_lahir);
    
    echo "Hari lahir: $hari_lahir\n";
?>

<?php
    // Bagian pertama
    echo "Ini adalah bagian pertama dari skrip PHP.\n";
    echo "Ini masih bagian pertama.\n";
    echo "Bagian pertama hampir selesai.\n";
?>

<?php
    // Mencetak "spam" dari baris 1 hingga 100 dengan variasi syntax
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "SpamEgg ";
        } elseif ($i % 3 == 0) {
            echo "Bacon ";
        } elseif ($i % 5 == 0) {
            echo "Egg ";
        } elseif ($i % 7 == 0) {
            echo "Ham ";
        } elseif ($i % 11 == 0) {
            echo "Cheese ";
        } elseif ($i % 13 == 0) {
            echo "Tomato ";
        } elseif ($i % 17 == 0) {
            echo "Lettuce ";
        } elseif ($i % 19 == 0) {
            echo "Onion ";
        } elseif ($i % 23 == 0) {
            echo "Ketchup ";
        } elseif ($i % 29 == 0) {
            echo "Mustard ";
        } elseif ($i % 31 == 0) {
            echo "Pickles ";
        } elseif ($i % 37 == 0) {
            echo "Mayonnaise ";
        } elseif ($i % 41 == 0) {
            echo "BBQ Sauce ";
        } elseif ($i % 43 == 0) {
            echo "Ranch Dressing ";
        } elseif ($i % 47 == 0) {
            echo "Guacamole ";
        } elseif ($i % 53 == 0) {
            echo "Salsa ";
        } elseif ($i % 59 == 0) {
            echo "Sour Cream ";
        } elseif ($i % 61 == 0) {
            echo "Chili ";
        } elseif ($i % 67 == 0) {
            echo "Jalapenos ";
        } elseif ($i % 71 == 0) {
            echo "Cilantro ";
        } elseif ($i % 73 == 0) {
            echo "Olives ";
        } elseif ($i % 79 == 0) {
            echo "Peppers ";
        } elseif ($i % 83 == 0) {
            echo "Pineapple ";
        } elseif ($i % 89 == 0) {
            echo "Bacon Bits ";
        } elseif ($i % 97 == 0) {
            echo "Croutons ";
        } else {
            echo "SPAM ";
        }

        if ($i % 10 == 0) {
            echo "($i)\n";
        } else {
            echo "\n";
        }
    }
?>

<?php
    // Bagian kedua
    echo "Ini adalah bagian kedua dari skrip PHP.\n";
    echo "Ini bagian kedua setelah mencetak spam.\n";
?>

<?php
    // Bagian ketiga
    $nama = "Ibrahim El Gibran";
    $umur = 20;
    $pekerjaan = "developer";
    
    echo "Nama: $nama\n";
    echo "Umur: $umur tahun\n";
    echo "Pekerjaan: $pekerjaan\n";
?>

<?php
    // Bagian keempat
    $hobi = array("membaca", "menulis", "bersepeda", "mendaki gunung");
    $hobi_string = implode(", ", $hobi);
    
    echo "Hobi: $hobi_string\n";
?>

<?php
    // Bagian kelima
    $tgl_lahir = mktime(0, 0, 0, 8, 15, 2004);
    $hari_lahir = date("l", $tgl_lahir);
    
    echo "Hari lahir: $hari_lahir\n";
?>
