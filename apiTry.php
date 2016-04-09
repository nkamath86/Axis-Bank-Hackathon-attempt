<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://secure.payu.com/api/v2_1/orders/3LKCPDMM6T160409GUEST000P01",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer 3e5cac39-7e38-4139-8fd6-30adc06a61bd",
    "cache-control: no-cache",
    "postman-token: 88fd6750-09be-a3c2-1afd-370a4cdefd67"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

$jsonobj=json_decode($response,true);

$temp=$jsonobj['orders'][0];
// $temp1=$temp[0];
// echo $temp['orderId'];
foreach ($temp as $key => $value) {
//   # code...
  echo $key;
  echo $value;
}

?>