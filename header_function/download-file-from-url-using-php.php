<?php

	
	$url = 'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png'; // İndirilecek dosya URL
	
	
	$file_name = basename($url); // Linkten dosyanın ismini alıyoruz
	
	// file_get_coontents ile linkteki dosyanın içeriğini file put contents ile $file_name adlı değişkenimizin içerisine alıyoruz.
	
	if (file_put_contents($file_name, file_get_contents($url)))
	{
		echo "File downloaded successfully";
	}
	else
	{
		echo "File downloading failed.";
	}

?>
