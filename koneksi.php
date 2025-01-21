<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "digitallibrary_manda";

//membuat koneksi
$conn = mysqli_connect($hostname, $username, $password, $database);


if (! $conn)
// memeriksa koneksi
{
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "koneksi berhasil"
?>