<?php
    $a = 100;
    $b= 10;
    $n= 6;
    // menampilkan jumlah data ke
    for($i = 1; $i <= $n; $i++){
        //menghitung data ke
        $un = $a+($i-1)*$b;
        //menentukan bulan
        $bulan = $i + $n;
        //menampilkan hasil deret bilangan
        echo "penjualan dibulan ke $i adalah ",($un);
        echo "<br>";
        // telah ditambahkan kembali oleh sindyka
}
?>