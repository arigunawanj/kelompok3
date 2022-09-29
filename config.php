<?php
$koneksi = mysqli_connect('localhost','root', '','library');

// CEK KONEKSI
// if (!$koneksi) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// echo "Koneksi berhasil";
// mysqli_close($koneksi);


function read($table)
{
    global $koneksi;
    $query = "SELECT * FROM " . $table;
    $rows = mysqli_query($koneksi, $query);
    return $rows;
}


?>