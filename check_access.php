<?php
$allowed_ips = ['83.31.137.53']; // Zmień na IP swojego serwera FiveM

if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Access denied');
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pełnoekranowy iframe</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none; 
        }
    </style>
</head>
<body>
    <iframe src="https://script.google.com/macros/s/AKfycbwm7N-UdxaRufswaF0ttoKVnyCf8Pvcd5KW5J2ozaPgymxzJtAiDsUrxiBkjJl47hkqtg/exec"></iframe>
</body>
</html>
