<?php 

$sumber = "https://indodax.com/api/tickers";
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
$data = $data['tickers'];

 
define('BOT_TOKEN', '2140611723:AAHuWxwVQ9FrT5KDWQJdV2bjzUqV9dky7iI');
define('CHAT_ID','1062055729');

function kirimTelegram($pesan){
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$kirimPesan = json_decode(file_get_contents("https://indodax.com/api/tickers"), TRUE); 
$panjangData = count($data);
for ($i=0; $i < ($panjangData*1/8); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg1 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*1/8))+1 ; $i < floor(($panjangData*2/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg2 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*2/8))+1 ; $i < floor(($panjangData*3/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg3 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*3/8))+1 ; $i < floor(($panjangData*4/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg4 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*4/8))+1 ; $i < floor(($panjangData*5/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg5 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*5/8))+1 ; $i < floor(($panjangData*6/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg6 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*6/8))+1 ; $i < floor(($panjangData*7/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg7 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
for ($i= floor(($panjangData*7/8))+1 ; $i < floor(($panjangData*8/8)); $i++) { 
    $nomor = $i+1;
    $asset = array_keys($data)[$i];
    $last = $data[$asset]['last'];
    $high = $data[$asset]['high'];
    $low = $data[$asset]['low'];
    $sell = $data[$asset]['sell'];
    $buy = $data[$asset]['buy'];
    $msg8 .= "Nomor : ".$nomor."%0aAsset : ".$asset."%0aLast Price : ".$last."%0aHigh 24H : ".$high."%0aLow 24H : ".$low."%0aSell : ".$sell."%0aBuy : ".$buy."%0a%0a";
}
kirimTelegram($msg1);
kirimTelegram($msg2);
kirimTelegram($msg3);
kirimTelegram($msg4);
kirimTelegram($msg5);
kirimTelegram($msg6);
kirimTelegram($msg7);
kirimTelegram($msg8);

kirimTelegram("halo");
// echo $panjangData;
// echo    "<script>
//             document.location.href = 'indodaxAPIxTelegramHomepage.php'
//         </script>";
?>

