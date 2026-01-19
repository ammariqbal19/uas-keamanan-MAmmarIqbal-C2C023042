<?php
$allowed = ['about.php'];


if (isset($_GET['file']) && in_array($_GET['file'], $allowed)) {
include $_GET['file'];
} else {
echo "Akses ditolak";
}
?>