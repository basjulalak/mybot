<?php
$access_token = 'q+xIQwsY65TjTbtJUiBRw9NhoATe5DqrKurIhQDImrb8H1l2/nGSGsfg6+b8TZRYtTPiWaTSGRMFm/DFEm1avqUnYirYBLkxxAiiTnzjOt5/1aWcz+EV4InAjGqTOqG4wqTAHwvfCIHX7d1kwoPQDwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>