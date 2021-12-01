<?php
$content = file_get_contents("php://input");
if($content){
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
    ?>
    <?php 
    $sumber = "https://indodax.com/api/tickers";
    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);
    $data = $data['tickers'];
    //Eksekusi data
    $a = 1;
    if($text=="/view1"){
        $msg .= "Bot Developed by Kelompok API 7!%0a%0a%0a";
        for($i=0; $i<25; $i++){
        $asset = array_keys($data)[$i];
        $tesPesan = number_format ($data[$asset]['last'],3,",",".");
        $tesPesan1 = number_format($data[$asset]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data[$asset]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan-$tesPesan1,3 , "," , ".");
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
    if($text==="/view2"){
        $a=26;
    for($i=26; $i<51; $i++){
        $asset = array_keys($data)[$i];
        $tesPesan = $data[$asset]['last'];
        $tesPesan1 = number_format($data[$asset]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data[$asset]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan-$tesPesan1,3 , "," , ".");
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
    if($text==="/view3"){
        $a=51;
    for($i=52; $i<77; $i++){
        $asset = array_keys($data)[$i];
        $tesPesan = $data[$asset]['last'];
        $tesPesan1 = number_format($data[$asset]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data[$asset]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan-$tesPesan1,3 , "," , ".");
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
    if($text==="/view4"){
        $a=76;
    for($i=78; $i<103; $i++){
        $asset = array_keys($data)[$i];
        $tesPesan = $data[$asset]['last'];
        $tesPesan1 = number_format($data[$asset]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data[$asset]['low'],3 , "," , ".");
        $lasthigh = number_format($tesPesan-$tesPesan1,3 , "," , ".");
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
    if($text==="/view5"){
        $a=100;
    for($i=76; $i<100; $i++){
        $asset = array_keys($data)[$i];
        $tesPesan = $data[$asset]['last'];
        $tesPesan1 = number_format($data[$asset]['high'],3 , "," , ".");
        $tesPesan2 = number_format($data[$asset]['low'],3 , "," , ".");
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
    echo 'Response sent.<br /><br />';
} else echo 'Only telegram can access this url.';
?>