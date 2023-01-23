<?php

function ConvertLetter($text,$case)
{
  $replaceLower = array("ç", "ğ", "ı", "i", "ö", "ş", "ü"); //Dönüştürülecek türkçe-küçük karakter dizisi
  $replaceUpper = array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü"); //Dönüştürülecek türkçe-büyük karakter dizisi
  
  if($case == "upper")
  {
    $edit = str_replace($replaceLower, $replaceUpper, $text);
    $edit = strtoupper($edit);
  }elseif($case == "lower")
  {
    $edit = str_replace($replaceUpper, $replaceLower, $text);
    $edit = strtolower($edit);
  }elseif($case == "firstUpper")
  {
    $length = strlen($text);
    $firstLetter = mb_substr($text, 0, 1, "UTF-8");
    $otherLetter = mb_substr($text, 1, $length, "UTF-8");
    $editFL = str_replace($replaceL, $replaceU, $firstLetter);
    $editFL = strtoupper($editFL);
    $edit = $editFL.$otherLetter;
  }elseif($case == "firstLower")
  {
    $length = strlen($text);
    $firstLetter = mb_substr($text, 0, 1, "UTF-8");
    $otherLetter = mb_substr($text, 1, $length, "UTF-8");
    $editFL = str_replace($replaceU, $replaceL, $firstLetter);
    $editFL = strtolower($editFL);
    $edit = $editFL.$otherLetter;
  }
  
  return $edit; 
}



?>
