<?php

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://odds.incub.space/v1/events/40/0/list/1/live/ru",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array("Package: Test_key_kiber78Hg42io90fg65sj78yh34"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
$arr = json_decode($response);
var_dump(json_decode($response)->body[0]);
}
?>