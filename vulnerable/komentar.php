<?php
if (isset($_POST['komentar'])) {
echo "Komentar: " . $_POST['komentar'];
}
?>
<form method="POST">
<textarea name="komentar"></textarea><br>
<button>Kirim</button>
</form>