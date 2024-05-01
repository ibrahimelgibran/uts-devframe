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
        } elseif ($i % 2 == 0) {
            echo "spam ";
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
