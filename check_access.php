<?php
$allowed_ips = ['83.31.137.53']; // Zmień na IP swojego serwera FiveM

if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Access denied');
}

// Jeśli IP jest dozwolone, przekieruj do pliku HTML
header('Location: index.html');
exit();
?>
