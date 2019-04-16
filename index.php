<?php
$name = 'Pol ink  a';

$array_name = str_split($name);
//var_dump($array_name);

foreach($array_name as $key => $values){
if($array_name[$key] == " "){
  unset($array_name[$key]);
}
}

var_dump($array_name);

?>

<!-- foreach (range('a', 'z') as $alphabet) {
  $alphabet = $i;
}


foreach($array_name as $key => $values){
if($array_name[$key] != $i){
  unset($array_name[$key]);
}
} -->




<!-- foreach (range('a', 'h') as $letter) {
  //return $letter;
}


function correctName($array_name){
  if(in_array("P", $array_name)){
    unset($array_name[key]);

  }
  var_dump($array_name);
} -->
