<!--    
    Tugas Soal No 1
        - buatlah program FizzBuzz dengan looping: 
        - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
        - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
        - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz" 
-->

<?php

function fizzBuzz($data){

    // Gabungan 5 x 11 = 55, Jadi nanti angka 55,110 dan 165 akan berubah menjadi fizzbuzz
    if ($data % 55 == 0){
        echo "FizzBuzz\n";}

    // Hanya angka 5
    elseif ($data % 5 == 0){
        echo "Fizz\n";}

    // Hanya angka 11
    elseif ($data % 11 == 0){
        echo "Buzz\n";}

    // Tidak ketiganya
    else{
        echo $data. "\n";}
}

for($i=1; $i<=200; $i++){
    fizzBuzz($i);
}

?>

