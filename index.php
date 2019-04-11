<?php
  $a = 10;
  $b = 10;
  // var_dump(!$a);
  if (compareNumbers($a, $b)) {
    echo 'correct';
  }

  if (compareNumbers($a, $b)) {
    echo 'correct';
  }
  else if (equalNumbers($a, $b)) {
    echo 'equal';
  }
  else {
    echo 'not correct';
  }

  function compareNumbers($a, $b) {
    return $a > $b;
  }

  function equalNumbers($a, $b) {
    return $a == $b;
  }
 ?>
