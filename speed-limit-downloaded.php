<?php

$yerel_dosya = "deneme.zip"; //Kaynak Dosya
$indirilecek_dosya = "indirilendosya.zip"; //İndirilecek hedef dosya

$indirme_hizi = 30;

if(file_exists($yerel_dosya) && is_file($yerel_dosya)) {

    header("Content-Type: application/octet-stream");
    header("Content-Length: ".filesize($yerel_dosya));
    header("Content-Disposition: attachment; filename=" .$indirilecek_dosya);

    flush();

    $dosya = fopen($yerel_dosya, "r");
    while(!feof($dosya)) {

        print fread($dosya, round($indirme_hizi * 1024) );
        flush();
        sleep(1);

    }


    fclose($dosya);

}else {

    echo 'Dosya mevcut degil';

}
?>
