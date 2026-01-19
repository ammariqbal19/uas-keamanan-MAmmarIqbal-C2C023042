<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
<title>UAS Keamanan Data</title>
</head>
<body>
<h2>Simulasi Keamanan Web</h2>
<ul>
<li><a href="vulnerable/login.php">Vulnerable Login</a></li>
<li><a href="vulnerable/komentar.php">Vulnerable Komentar</a></li>
<li><a href="vulnerable/file.php?file=test.txt">Vulnerable File</a></li>
<hr>
<li><a href="secure/login.php">Secure Login</a></li>
<li><a href="secure/komentar.php">Secure Komentar</a></li>
<li><a href="secure/file.php?file=about.php">Secure File</a></li>
</ul>
</body>
</html>