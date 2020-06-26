<?php

$curl = curl_init();
$html = file_get_contents("demo.php");
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pepipost.com/v5/mail/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{"from":{"email":"support@windsonpayroll.com","name":"Windson Payroll"},"subject":"Test Mail","content":[{"type":"html","value":"'.$html.'"}],"personalizations":[{"to":[{"email":"verifyemail425@gmail.com","name":"Shyam Patel"}]}]}',
    CURLOPT_HTTPHEADER => array(
        "api_key: b67f1ee573b7dbac3ea05f75b18e2fc4",
        "content-type: application/json"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}