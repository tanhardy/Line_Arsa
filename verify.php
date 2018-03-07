<?php
$access_token = '86Suw6GP6893JxkDTdhTzba6knL3pUx5bE57OoAz8eCEbnTbBIFntFC5vWvcY3MHKwPE6eNmm4hiP7XoH37kiRqKgxNwsUKuAMhYI5NzGJl229cqBsUrlbweSu6hkAXXnq0eVH8edhLF8D+IyE08QAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
