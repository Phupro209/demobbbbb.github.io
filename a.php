<?php


$post_data = array(
            'action' => 'sub-sale',
            'code_dich_vu' => 'sub_sale',
            'id' => 100057463665596,
            'soluong'=>1000,
            'server'=> 1,
        );
 $curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://autolikesub76.com/api/facebook/buy',
CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => $post_data,
CURLOPT_HTTPHEADER => array(
              'api-token: ZTc1MDQwNTdiMmVhMjE3ZjYyZTNjOGNiYjBmZDA0YmM=',
                'Content-Type: application/json'
                ),
        ));
$response = curl_exec($curl);
curl_close($curl);                     
echo $response;
