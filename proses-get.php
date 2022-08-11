<?php

echo $_GET['email'];
echo "<br>"
echo $_GET['nama'];

/*
    Fungsi isset() memeriksa apakah suatu
variabel disetel.
yang berakhir variabel tersebut harus
dideklarasikan dan bukan null.
*/

if(isset($_GET['nama']))
{
    // membuat variabel
    $alamat_email = $_GET['email'];
    $nama = $_GET['nama'];

    // menampilkan nilai variabel ke layar
    echo $alamat_email
    echo "<br>"
    echo $nama;
}

?>