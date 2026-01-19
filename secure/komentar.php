<?php
if (isset($_POST['komentar'])) {
echo "Komentar: " . htmlspecialchars($_POST['komentar'], ENT_QUOTES, 'UTF-8');
}
?>
<form method="POST">
<textarea name="komentar"></textarea><br>
<button>Kirim</button>
</form>