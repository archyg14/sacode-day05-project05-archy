<?php

echo $_POST['email'];
echo "<br>"
echo $_POST['nama'];

/*
    Fungsi isset() memeriksa apakah suatu
variabel disetel.
yang berakhir variabel tersebut harus
dideklarasikan dan bukan null.
*/

if(isset($_POST['nama']))
{
    // membuat variabel
    $alamat_email = $_POST['email'];
    $nama = $_POST['nama'];

    // menampilkan nilai variabel ke layar
    echo $alamat_email
    echo "<br>"
    echo $nama;
}

?>