<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
echo "Login berhasil";
} else {
echo "Login gagal";
}
}
?>
<form method="POST">
<input name="username" placeholder="Username"><br>
<input name="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>