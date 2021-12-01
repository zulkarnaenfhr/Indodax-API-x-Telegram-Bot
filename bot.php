<?php 
    $content = file_get_contents("php://input");
    if ($content) {
        $token = '2140611723:AAHuWxwVQ9FrT5KDWQJdV2bjzUqV9dky7iI';
        
        $apiLink = "https://api.telegram.org/bot$token/";  

        echo '<pre>content = '; print_r($content); echo '</pre>';
        $update = json_decode($content, true);
        if(!@$update["message"]) $val = $update['callback_query'];
        else $val = $update;

        $chat_id = $val['message']['chat']['id'];
        $text = $val['message']['text'];
        $update_id = $val['update_id'];
        $sender = $val['message']['from'];
    }
?>

<?php 
    $sumber = "https://indodax.com/api/tickers";
    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);
    $data = $data['tickers'];
    $a = 1;
    $panjangData = count($data);

    if ($text=="/view") {
        $msg .= "Bot Developed by Kelompok API 7!%0a%0a%0a";
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
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg1."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg2."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg3."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg4."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg5."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg6."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg7."...");
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$msg8."...");
    }
    else echo 'Only telegram can access this url.';
?>
