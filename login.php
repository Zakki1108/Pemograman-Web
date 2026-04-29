<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body style="margin:0; padding:0; font-family:Arial; background-color:#f0f0f0; display:flex; justify-content:center; align-items:center; height:100vh;">

<div style="background:white; padding:25px; width:300px; border-radius:10px; box-shadow:0 0 10px">
<h1 style="text-align:center;">Login</h1>

<form action="proses_login.php" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<br>
<a href="register.php">Belum punya akun? Register</a>

</body>
</html>