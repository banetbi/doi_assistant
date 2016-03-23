<?php
/**
 * Created by IntelliJ IDEA.
 * User: jcdalton
 * Date: 3/22/16
 * Time: 8:39 AM
 */
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


$strAllDegrees = file_get_contents('/home/jcdalton/Dropbox/Development/ETDs/acceptable_degrees.txt');
$strAllDegrees = str_replace('; ', "\n", $strAllDegrees);
//$fileConvStep1 = fopen('/var/www/doi_assistant/resources/transform_keys/degrees_step1.txt');
file_put_contents('/var/www/doi_assistant/resources/transform_keys/degrees_step1.txt', $strAllDegrees);
$fileDegrees = fopen('/var/www/doi_assistant/resources/transform_keys/degrees_step1.txt', 'r');
$fileArrDegrees = fopen('/var/www/doi_assistant/resources/transform_keys/degrees_array.txt', 'w');
while(!feof($fileDegrees)) {
    $strLine = fgets($fileDegrees);
    $arrDegreeValues = explode('(', $strLine);
    $key = trim(str_replace(")", "", $arrDegreeValues[1]));
    $value = trim($arrDegreeValues[0]);
    fwrite($fileArrDegrees, "\t'$key' => '$value ($key)',\n");
}
fclose($fileArrDegrees);
fclose($fileDegrees);
