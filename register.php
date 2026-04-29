<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body style="display:flex; justify-content:center; align-items:center; height:100vh;">
<div style="background:white; padding:30px; width:350px; border-radius:15px; box-shadow:0 0 10px rgba(0,0,0,0.2);">
<h1 style="text-align:center;">Registrasi Pengguna</h1>

<form action="proses_register.php" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

     Nama Lengkap:<br>
    <input type="text" name="nama_lengkap" required><br><br>

    Tanggal Lahir:<br>

    <select name="tanggal">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
     </select>
    <select name="bulan">
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>Apr</option>
        <option>Mei</option>
        <option>Jun</option>
        <option>Jul</option>
        <option>Agu</option>
        <option>Sep</option>
        <option>Okt</option>
        <option>Nov</option>
        <option>Des</option>
    </select>
     <select name="tahun">
        <?php
        for ($i = 2000; $i <= 2025; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>

    <br><br>
    Jenis Kelamin:<br>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female

    <br><br>
    Alamat:<br>
    <textarea name="alamat" rows="3"></textarea><br><br>

    <button type="submit">Daftar</button>
</form>

<br>
<a href="login.php">Sudah punya akun? Login</a>
</div>
</body>
</html>