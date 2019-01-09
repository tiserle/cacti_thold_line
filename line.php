<?php
error_reporting(-1);
require 'ifttt-php.class.php';

function line($a,$b,$c)
{
$maker = new Maker('cacti', 'putyourkeyhere');

// set values to send, optional
$values = array(
  'value1' => $a,
  'value2' => $b,
  'value3' => $c
);
$maker->set_values($values);

// trigger the ifttt event
if($maker->trigger()){
  echo 'event triggered!';
}
}
?>
