<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Username: " . $_POST['username'] . "<br>";
    echo "Password: " . $_POST['password'];
} else {
    echo "Tidak ada data masuk!";
}

echo  " <br> <a href='login.php'>Kembali</a>";
?>