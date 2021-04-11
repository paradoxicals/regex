<?php
header('charset=utf-8');
ini_set('default_charset', 'utf-8');

//Character and character group select
$str = "Alooo burda ne oluyor acaba?";
$patternNotationOne = "/o+/";
echo preg_match($patternNotationOne,$str).'<br>';
echo preg_replace($patternNotationOne,"*",$str).'<br><br>' ;

//Word select
$count = 0;
$strTwo = "Alooo burda ne oluyor acaba? burada cok guzel seyler oluyor.";
$patternNotationTwo = "/bura?da/";
echo preg_replace($patternNotationTwo,"*",$strTwo,-1,$count).'<br>';
echo $count.'<br><br>';

//. => All character selected
$strThree = "Alooo burda ne oluyor acaba? burada cok guzel seyler oluyor.";
$patternNotationThree = "/./";
$patternNotationThreeDotOne = "/.+/";
$patternNotationThreeDotTwo = "/o.u/";
echo preg_replace($patternNotationThree,"*",$strThree).'<br>';
echo preg_replace($patternNotationThreeDotOne,"*",$strThree).'<br>';
echo preg_replace($patternNotationThreeDotTwo,"*",$strThree).'<br><br>';


// \w, \W, \s \S \d \D => words and inverse, spaces and inverse, digit and inverse
$str4 = "Alooo burda ne oluyor acaba? burada cok guzel seyler oluyor. 222 test";
$patternNotation4 = "/\w/";
$patternNotation4_1 = "/\W/";
$patternNotation4_2 = "/\s/";
$patternNotation4_3 = "/\S/";
$patternNotation4_4 = "/\d/";
$patternNotation4_5 = "/\D/";
echo preg_replace($patternNotation4,"*",$str4).'<br>';
echo preg_replace($patternNotation4_1,"*",$str4).'<br>';
echo preg_replace($patternNotation4_2,"*",$str4).'<br>';
echo preg_replace($patternNotation4_3,"*",$str4).'<br>';
echo preg_replace($patternNotation4_4,"*",$str4).'<br>';
echo preg_replace($patternNotation4_5,"*",$str4).'<br><br>';



// .{}
$str5 = "Alooo sds ddds x Ads 9ds ?ds gray grey";
$patternNotation5 = "/.{2,5}/"; // Select words with 5 letters, if dont it can be 2,3,4
$patternNotation5_1 = "/.{3,}/";// Select words with at least 3 letters, it can be more and more 
$patternNotation5_2 = "/[sd]ds/"; //Select same endings and use it
$patternNotation5_3 = "/[a-zA-Z0-9?_]ds/";//Select same endings and use it with range
$patternNotation5_4 = "/gr(a|e)y/"; //Grouping the words
$patternNotation5_5 = "/\D/";
echo preg_replace($patternNotation5,"*",$str5).'<br>';
echo preg_replace($patternNotation5_1,"*",$str5).'<br>';
echo preg_replace($patternNotation5_2,"-",$str5).'<br>';
echo preg_replace($patternNotation5_3,"*",$str5).'<br>';
echo preg_replace($patternNotation5_4,"&",$str5).'<br>';
echo preg_replace($patternNotation5_4,"*",$str5).'<br><br>';
