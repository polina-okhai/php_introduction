<?php
ini_set('display_errors', 1);
$name_arry = [
  'male' => 'Andrei',
  'female' => 'Polinka',
  'pet' => 'Mashunya'];

  $test_array = ['dell', 'asus','male','bmw','core', 'female', 'pet'];

  $keys = array_keys($name_arry); //вывод ключей массива;
  $values = array_values($name_arry); //вывод элементов массива;
  $key_presence = key_exists('male', $name_arry); //есть ли ключь в массиве;
  $values_presence = in_array('Polinka', $name_arry); //есть ли элемент в массиве;
  array_push($test_array, 'dell'); //добавить в конец массива;
  array_unshift($test_array, 'dell'); //добавить в начало массива;
  $numbers_range_1 = range(1, 10);
  $numbers_range_2 = range(1, 6);
  $numbers_range_3 = range(4, 22);
  // checkArrayLength($numbers_range_1);
  // checkArrayLength($numbers_range_2);
  // checkArrayLength($numbers_range_3);
  // var_dump($numbers_range_1);
  // echo count($numbers_range_3);

  $test_array = ['dell', 'asus','male','bmw','core', 'female', 'pet'];

  // $last_element = array_pop($test_array); //вырезает последний элемент;
  // array_shift($test_array);  //вырезает первый элемент;
  // $first_element = array_shift($test_array);
  // var_dump($first_element);

  $laptops = range(1, 10);
  $phones = range(5, 15);
  $merged_arrays = array_merge($laptops,$phones); //oбъеденить массивы;
  $unique_values_array = array_unique($merged_arrays); //оставляет уникальные элеенты;
  // var_dump($unique_values_array);

  $difference_for_laptops = array_diff($laptops, $phones);  //найти отличие первго массива от второго;
  $difference_for_phones = array_diff($phones, $laptops);

  $similarity_for_laptops = array_intersect($laptops, $phones); //найти схожеть первого массива со вторым;
  $similarity_for_phones = array_intersect($phones, $laptops);

  $random_element = array_rand($laptops); //рандомный элемент из массива;
  $sum = array_sum($phones);  //сумма элементов массива;
  shuffle($test_array); //перемешать элементы;
  var_dump($test_array);

  function checkArrayLength($array) {
    $array_length = count($array);
    switch(true) {
      case $array_length > 10:
        array_push($array, 'more than 10');
        var_dump($array);
        break;
      case $array_length < 10:
        array_unshift($array, 'less than 10');
        var_dump($array);
        break;
      case $array_length == 10:
        echo 'equals 10';
        break;
    }
  }
    // $a = count($array);
    // if($a > 10) {
    //   echo ' more than 10';
    // }
    // else if($a < 10) {
    //   echo 'less than 10';
    // }
    // else {
    //   echo 'equals 10';
    // }

  // }


  // foreach ($test_array as $name) {
  //   if(key_exists($name, $name_arry)){
  //     echo"{$name} is in array \n";
  //   }
  //   else {
  //     echo"{$name} is not in array \n";
  //   }
  // }
  //  // foreach ($keys as $name => $element) {
  //  //   var_dump($name);
  //  // }
?>

<!-- $keys = '';
$values = '';
foreach ($name_arry as $key => $element ) {
  $keys .= $key;
  $values .=$element;
  // var_dump($keys);
}
echo"{$keys},{$values}"; -->

<!-- $i = 0;
for ($i; $i<=2; $i++) {
  echo $name_arry[$i];
} -->

<!-- $name_arry = ['Andrei', 'Polinka', 'Mashunya'];
$i = 0;
for ($i; $i<=2; $i++) {
  echo $name_arry[$i];
} -->

<!-- $i = 0;
$a = 0;
for($i; $i <= 10; $i++) {
  if ($i%2) {
    $a += $i;
  } else {
    $b += $i;
  }
}
echo $a . '->'.$b; -->

<!-- $i = 0;
$a = 0;
for($i; $i <= 10; $i++) {
$a += $i;
var_dump($a);
}
echo $a; -->

<!-- $i = 0;
while ($i <= 10) {
echo $i++;
} -->
