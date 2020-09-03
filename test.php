<?php
function config($params, $default_value){
  $arr = include('settings.php');
  
  $pathArray = explode('.', $params);  // массив с элементами по строке, которую ввели
  $length = count($pathArray);      // длина массива
  
  $strParam =  '';
  for ($i = 0; $i < $length; $i++) {
   $strParam = $strParam . '["' . $pathArray[$i] . '"]';
  }
  $strConfig = 'if (isset($arr'.$strParam.') != NULL) {echo $arr'.$strParam.';} else{echo $default_value;}';
  eval($strConfig);
}
$myKey = "db.user";
$default = "default";

config($myKey,$default);
?>