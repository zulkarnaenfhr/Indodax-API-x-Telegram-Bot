<?php
 
define('BOT_TOKEN', '2140611723:AAHuWxwVQ9FrT5KDWQJdV2bjzUqV9dky7iI');
define('CHAT_ID','1536466209');
 
function kirimTelegram($pesan) {
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$sumber = "https://indodax.com/api/tickers";
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
$data = $data['tickers'];
$i = 0;
$asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg1 = "%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";

    kirimTelegram($msg1);