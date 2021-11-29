<?php 
    $sumber = "https://indodax.com/api/tickers";
    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);

    foreach ($data as $value){
        foreach ($value as $value)
    }
?>
