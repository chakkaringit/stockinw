<?php
$access_token = 'IJqpmoQ9nwIb9UztQnaaeJfY+B+R0sCw97kvQdM3D/DdMnfOO61HW7T96ex6UQNFs7M8UV1zdC4LRs+y8BXs2r09rVkGyNR6qbjl8n9zVS/nCyEu2gXauFhBTz4HBjj1QoLzeVGLsI89niQfGxp/ZQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
