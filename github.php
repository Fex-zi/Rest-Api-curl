<?php
//GET GITHUB CLASSIC TOKEN--https://www.youtube.com/watch?v=rQqR-gKBBz0
// .env file reader function AND YES THE API IN THE ENV IS INVALID NOW
function loadEnv($path) {
    if (!file_exists($path)) {
        throw new Exception('.env file not found');
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

// Load environment variables
loadEnv('.env');

$headers = [
    "User-Agent: Just a Test Api",
    "Authorization: token " . $_ENV['GITHUB_TOKEN']
];

$ch = curl_init();
$url = $_ENV['URL_API'];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

$i = 1;
foreach ($data as $repository){

    echo $i++. '--'. $repository["full_name"], " ",
         $repository["name"], " ",
         $repository["description"], "<br>";
         
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>