<?php
  $products = ['car', 'house', 'tv'];
  $phones = [
    'iphone' => 'Xs',
    'meizu' => 'M3s'
  ];
  $phones['samsung'] = 's9';
  unset($phones['iphone']);
  $phones['meizu'] = 'M10';
  var_dump($phones);
 ?>

 <!-- $street = 'Monitorna';
 $district = "Parus {$street}";   //интерполяция
 echo($district); -->

  <!-- $name = 'Polina';
  // echo ($name);
  $bool_value = true;
  $number = 123456;
  // var_dump($number);
  // echo (gettype($number));
  echo(is_int($number)); -->
