<?php
echo "Username: ".$_POST['username']."<br>";
echo "Password: ".$_POST['password']."<br>";
echo "Nama: ".$_POST['nama_lengkap']."<br>";
echo "Tanggal Lahir: ".$_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun']."<br>";
echo "Alamat: ".$_POST['alamat']."<br>";

echo  " <br> <a href='login.php'>Kembali ke login</a>";
?>
