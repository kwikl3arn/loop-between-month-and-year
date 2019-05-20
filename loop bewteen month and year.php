<?php

$date1 = strtotime('2018-01');
$date2 =  strtotime(date('Y-m-d'));

while ($date1 <= $date2) {
  $stk=date('Ym', $date1);
  echo $stk;
  $date1 = strtotime('+1 month', $date1);
  echo '<br>';
}
?>
