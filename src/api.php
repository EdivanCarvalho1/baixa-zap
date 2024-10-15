<?php
header('Content-Type: application/json');

// Configurações da API
$config = [
    'api_url' => 'https://social-download-all-in-one.p.rapidapi.com/v1/social/autolink',
    'api_key' => '12958136eemsh2d61056ab8d18a0p13380fjsn80f281aa92cf',
    'api_host' => 'social-download-all-in-one.p.rapidapi.com'
];

$input = json_decode(file_get_contents('php://input'), true);
$videoUrl = $input['url'];

// Inicializa o cURL
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $config['api_url'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode(['url' => $videoUrl]),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "x-rapidapi-host: " . $config['api_host'],
        "x-rapidapi-key: " . $config['api_key']
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro na requisição à API externa: ' . $err]);
} else {
    echo $response;
}
?>
