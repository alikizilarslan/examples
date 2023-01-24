<?php

class convertletter
{
    public $replaceLower = ['ç', 'ğ', 'ı', 'i', 'ö', 'ş', 'ü']; //Dönüştürülecek türkçe-küçük karakter dizisi
    public $replaceUpper = ['Ç', 'Ğ', 'I', 'İ', 'Ö', 'Ş', 'Ü']; //Dönüştürülecek türkçe-büyük karakter dizisi
    
    public function upper($text)
    {
        $edit = str_replace($this->replaceLower, $this->replaceUpper, $text);
        $edit = strtoupper($edit);
        return $edit;
    }
    public function lower($text)
    {
        $edit = str_replace($this->$replaceUpper, $this->$replaceLower, $text);
        $edit = strtolower($edit);
        return $edit;
    }
    public function firstupper($text)
    {
        $length = strlen($text);
        $firstLetter = mb_substr($text, 0, 1, "UTF-8");
        $otherLetter = mb_substr($text, 1, $length, "UTF-8");
        $editFL = str_replace($this->$replaceLower, $this->$replaceUpper, $firstLetter);
        $editFL = strtoupper($editFL);
        $edit = $editFL.$otherLetter;
        return $return;
    }
    public function firstlower($text)
    {
        $length = strlen($text);
        $firstLetter = mb_substr($text, 0, 1, "UTF-8");
        $otherLetter = mb_substr($text, 1, $length, "UTF-8");
        $editFL = str_replace($this->$replaceUpper, $this->$replaceLower, $firstLetter);
        $editFL = strtolower($editFL);
        $edit = $editFL.$otherLetter;
        return $edit;
    }
    public function wordupper($text)
    {
        $arr = explode(" ",$text);
        $str = "";
        for($i=0; $i<count($arr); $i++)
        {
            $length = strlen($arr[$i]);
            $wordUpper = mb_substr($arr[$i], 0, 1, "UTF-8");
            $otherLetter = mb_substr($arr[$i], 1, $length, "UTF-8");
            $editFL = str_replace($this->replaceLower, $this->replaceUpper, $wordUpper);
            $editFL = strtoupper($editFL);
            $edit = $editFL.$otherLetter;
            if($i == count($arr)-1)
            {
                $str .= $edit;
            }else{
                $str .= $edit." ";
            }
        }
        return $str;
    }
    public function wordlower($text)
    {
        $arr = explode(" ",$text);
        $str = "";
        for($i=0; $i<count($arr); $i++)
        {
            $length = strlen($arr[$i]);
            $wordLower = mb_substr($arr[$i], 0, 1, "UTF-8");
            $otherLetter = mb_substr($arr[$i], 1, $length, "UTF-8");
            $editFL = str_replace($this->replaceUpper, $this->replaceLower, $wordLower);
            $editFL = strtolower($editFL);
            $edit = $editFL.$otherLetter;
            if($i == count($arr)-1)
            {
                $str .= $edit;
            }else{
                $str .= $edit." ";
            }
        }
        return $str;
    } 
}



?>
