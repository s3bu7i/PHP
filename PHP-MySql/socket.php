<?php
$host = 'example.com';
$port = 80;
$path = '/api/endpoint';

// Soketə qoşulmaq üçün bağlantı nöqtəsini yaradın
$socket = fsockopen($host, $port, $errno, $errstr, 30);
if (!$socket) {
    echo "Soket qurmaq mümkün olmadı: $errstr ($errno)";
    exit;
}

// POST sətirini yaradın
$data = [
    'param1' => 'value1',
    'param2' => 'value2'
];
$data = http_build_query($data);
$postRequest = "POST $path HTTP/1.1\r\n";
$postRequest .= "Host: $host\r\n";
$postRequest .= "Content-Type: application/x-www-form-urlencoded\r\n";
$postRequest .= "Content-Length: " . strlen($data) . "\r\n";
$postRequest .= "Connection: close\r\n\r\n";
$postRequest .= $data;

// HTTP sorğusunu göndərin
fwrite($socket, $postRequest);

// Cavabı alın və çap edin
$response = '';
while (!feof($socket)) {
    $response .= fgets($socket, 128);
}

// Cavabı çap edin
echo $response;

// Əlaqəni bağlayın
fclose($socket);
?>