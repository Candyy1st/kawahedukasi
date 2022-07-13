<?php
/*
    Tugas Soal No 2
        Buatlah program untuk pengecekan tipe data:

        var data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

        hasil yang di inginkan: 
        - index ke 0 adalah integer dengan data 1
        - index ke 1 adalah string dengan data kawah
        - dan jika nilai dari index itu kurang dari  0 maka keluarkan output:  Tidak bisa di validasi sistem

        contoh : 
        var contoh = [1, "mantap", 0 ];
        expektasi output: 
        - index ke 0 adalah integer dengan data 1
        - index ke 1 adalah string dengan data mantap
        - index ke 2 Tidak bisa di validasi sistem

        buatlah programnya sampai semua data tervalidasi
*/

    $data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1, 9.2];
    

    for($i=0; $i<count($data); $i++){
            echo "index ke ". $i. " adalah ";
            
            if (is_integer($data[$i])==TRUE){
                echo "integer ";}

            elseif(is_string($data[$i])==TRUE)
                {echo "string ";}

            else{
                echo "Tidak bisa divalidasi sistem ";
            }

            echo "dengan data ".$data[$i];
            echo "\n";
    }
?>

