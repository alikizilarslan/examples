<?php

ob_start();
if($_SERVER['REQUEST_METHOD'] == "GET") 
{
    if(isset($_GET['filename']))
    {
        if(is_file($_GET['filename']))
        {
            $filename = basename($_GET['filename']);//filename = "files/xyz.rar"
            $filename_path = "files/".$filename;
            $filesize = filesize($filename_path);
            //$file_extension = ".".pathinfo($filename,PATHINFO_EXTENSION); //Opsiyonel, uniqid() kullanıldığında dosya uzantısı işinize yarayabilir.
            header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
            header("Cache-Control: no-cache");
            header("Pragma: no-cache");
            header("Content-Length: ".filesize($filename_path));
            header('Content-Type: application/octet-stream');
            header("Content-Transfer-Encoding: Binary");
            header('Content-Disposition: attachment; filename="'. $filename .'"');
            readfile($filename_path);
        }else{
            echo "Böyle bir dosya bulunamadı.";
        }
    }
}


?>
