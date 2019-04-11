<?php
  const LAPTOP = 'asus';

  $number = 5;
  $increment_nuber = ++$number;
  $decrement_number = --$number;

  $a = 10;
  $b = 12;
  $a /= $b;
  $c = $a + $b;
  $d = $a - $b;
  $e = $a * $b;
  $f = $a / $b;

  $first_name = 'Polina';
  $last_name = 'Okhai';
  // $full_name = "{$first_name} {$last_name}";
  $full_name = $first_name . $last_name;  //конкатынация
  $first_name .= $last_name;
  echo $first_name;
  // echo $e;
  // echo $a ;
  // echo $increment_nuber ;
  // echo $decrement_number;
  $constant_result = getConstant();

  function getConstant() {
    return LAPTOP;
  }
 ?>
 <!-- $name = 'polina';
 $polina = 'Okhai';
 echo $$name;
 $laptop = 'asus';
 showMessage();
 function showMessage() {

   echo $laptop;
 } -->

 <!-- $products = ['car', 'house', 'tv'];
 $phones = [
 'iphone' => 'Xs',
 'meizu' => 'M3s'
 ];
 $phones['samsung'] = 's9';
 unset($phones['iphone']);
 $phones['meizu'] = 'M10';
 var_dump($phones); -->

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
