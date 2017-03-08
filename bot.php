<?php
$path = __DIR__ . '/vendor/autoload.php';
require_once $path;

$channel_access_token = 'IJqpmoQ9nwIb9UztQnaaeJfY+B+R0sCw97kvQdM3D/DdMnfOO61HW7T96ex6UQNFs7M8UV1zdC4LRs+y8BXs2r09rVkGyNR6qbjl8n9zVS/nCyEu2gXauFhBTz4HBjj1QoLzeVGLsI89niQfGxp/ZQdB04t89/1O/w1cDnyilFU=';
$channel_secret = '6f5cf08d93f0988ceb5468a23c8fc789';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($channel_access_token);
$bot = new \LINE\LINEBot($httpClient, [$channel_secret]);

$signature = $_SERVER["HTTP_".\LINE\LINEBot\Constant\HTTPHeader::X_LINE_SIGNATURE];
$body = file_get_contents("php://input");

$events = $bot->parseEventRequest($body,$channel_secret,$signature);

echo "OK";