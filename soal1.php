<?php
//     Tugas Soal No 1
//         - buatlah program FizzBuzz dengan looping: 
//         - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
//         - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
//         - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz" 


// Menambah Data 55
    $data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200, 55];

    for ( $i=0; $i < count($data); $i++) { 
        // Gabungan 5x11=55, Jadi data 55 akan berubah menjadi fizzbuzz
        if (($data[$i] %5 == 0) && ($data[$i] %11 == 0)){
            echo "FizzBuzz";
        
        // Hanya Data 5
        } elseif ($data[$i] == 5) {
            echo "Fizz \n";

        // Hanya Data 11
        } elseif ($data[$i] == 11) {
            echo "Buzz \n";
        
        // Tidak Ketiganya
        } else {
            echo $data[$i] . "\n";
        }
    }

?>

