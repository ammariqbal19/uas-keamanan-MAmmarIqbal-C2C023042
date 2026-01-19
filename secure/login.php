<?php
session_start();
$hash = password_hash('admin123', PASSWORD_BCRYPT);
$_SESSION['attempts'] = $_SESSION['attempts'] ?? 0;


if ($_SESSION['attempts'] > 3) {
die('Terlalu banyak percobaan login');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($_POST['username'] === 'admin' && password_verify($_POST['password'], $hash)) {
echo "Login berhasil";
$_SESSION['attempts'] = 0;
} else {
$_SESSION['attempts']++;
echo "Login gagal";
}
}
?>
<form method="POST">
<input name="username"><br>
<input name="password" type="password"><br>
<button>Login</button>
</form>