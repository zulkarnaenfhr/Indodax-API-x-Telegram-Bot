<?php
$content = file_get_contents("php://input");
if($content){
    $token = '2114872958:AAEpeTVx9Mi3G-r_W1i0P-G_mrt6WlPVE1Q';
    
    $apiLink = "https://api.telegram.org/bot$token/%22";  
    
    echo '<pre>content = '; print_r($content); echo '</pre>';
    $update = json_decode($content, true);
    if(!@$update["message"]) $val = $update['callback_query'];
    else $val = $update;
    
    $chat_id = $val['message']['chat']['id'];
    $text = $val['message']['text'];
    $update_id = $val['update_id'];
    $sender = $val['message']['from'];
    ?>
    <?php 
    $data = json_decode(file_get_contents("https://api.bingbon.com/api/v1/market/symbols%22")  , TRUE);
    $a = 1;
    if($text==="/view"){
        $msg .= "Bot Developed by Kelompok API 7!%0a%0a%0a";
        for($i=0; $i<15; $i++){
        $asset = $data['data']['result'][$i]['base_currency'];
        $pair = $data['data']['result'][$i]['quote_currency'];
        $tesPesan = number_format($data['data']['result'][$i]['last_price'],3 , "," , ".");
        $tesPesan1 = number_format($data['data']['result'][$i]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data['data']['result'][$i]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan1-$tesPesan,3 , "," , ".");
        $lastlow = number_format($tesPesan-$tesPesan2,3 , "," , ".");
        if($tesPesan===$lastlow){
            $status = "Harga Terendah!";
        }
        elseif($tesPesan===$lasthigh){
            $status = "Harga Tertinggi!";
        }
        else{
            $status = "Harga diantara terendah dan tertinggi!";
        }
        $tb .="No ".$a ." Asset : ".$asset. 
            "_". $pair. 
            "%0aLast Price : ".$tesPesan.
            "%0aHigh : ". $tesPesan1.
            "%0aLow : ". $tesPesan2.
            "%0aLast-high : ". $lasthigh.
            "%0aLast-Low  : ". $lastlow.
            "%0a". $status.
            "%0a%0a%0a";
        $a++;
    }
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb."...");
}
    if($text==="/view1"){
        $a=16;
    for($i=16; $i<30; $i++){
        $asset = $data['data']['result'][$i]['base_currency'];
        $pair = $data['data']['result'][$i]['quote_currency'];
        $tesPesan = number_format($data['data']['result'][$i]['last_price'],3 , "," , ".");
        $tesPesan1 = number_format($data['data']['result'][$i]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data['data']['result'][$i]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan1-$tesPesan,3 , "," , ".");
        $lastlow = number_format($tesPesan-$tesPesan2,3 , "," , ".");
        if($tesPesan===$lastlow){
            $status = "Harga Terendah!";
        }
        elseif($tesPesan===$lasthigh){
            $status = "Harga Tertinggi!";
        }
        else{
            $status = "Harga diantara terendah dan tertinggi!";
        }
        $tb .="No ".$a ." Asset : ".$asset. 
            "_". $pair. 
            "%0aLast Price : ".$tesPesan.
            "%0aHigh : ". $tesPesan1.
            "%0aLow : ". $tesPesan2.
            "%0aLast-high : ". $lasthigh.
            "%0aLast-Low  : ". $lastlow.
            "%0a". $status.
            "%0a%0a%0a";
        $a++;
    }
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$tb."...");
    }
    if($text==="/view2"){
        $a=30;
    for($i=30; $i<48; $i++){
        $asset = $data['data']['result'][$i]['base_currency'];
        $pair = $data['data']['result'][$i]['quote_currency'];
        $tesPesan = number_format($data['data']['result'][$i]['last_price'],3 , "," , ".");
        $tesPesan1 = number_format($data['data']['result'][$i]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data['data']['result'][$i]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan1-$tesPesan,3 , "," , ".");
        $lastlow = number_format($tesPesan-$tesPesan2,3 , "," , ".");
        if($tesPesan===$lastlow){
            $status = "Harga Terendah!";
        }
        elseif($tesPesan===$lasthigh){
            $status = "Harga Tertinggi!";
        }
        else{
            $status = "Harga diantara terendah dan tertinggi!";
        }
        $tb .="No ".$a ." Asset : ".$asset. 
            "_". $pair. 
            "%0aLast Price : ".$tesPesan.
            "%0aHigh : ". $tesPesan1.
            "%0aLow : ". $tesPesan2.
            "%0aLast-high : ". $lasthigh.
            "%0aLast-Low  : ". $lastlow.
            "%0a". $status.
            "%0a%0a%0a";
        $a++;
    }
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$tb."...");
    }
    if ($text==="/fahri") {
        $msg .= "Halo Fahri";
    }
    file_get_contents($apiLink. "sendmessage?chat_id=$chat_id&text=".$msg);
    echo 'Response sent.<br /><br />';
} else echo 'Only telegram can access this url.';
?>