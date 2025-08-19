<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->get('https://jsonplaceholder.typicode.com/posts/1');
echo $response->getBody();
