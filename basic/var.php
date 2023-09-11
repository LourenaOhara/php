<?php
//boolean
$bool_true = true;
var_dump($bool_true);

echo '<br />' . PHP_EOL;

$bool_false = false;
var_dump($bool_false);

echo '<br />' . PHP_EOL;

$num_int = 263;
var_dump($num_int);

echo '<br />' . PHP_EOL;

$num_float = 3.89;
var_dump($num_float);

echo '<br />' . PHP_EOL;

$arr = array(
  'coisa1' => 4,
  'coisa2' => "crocodilo",
  'coisa3' => true
);

var_dump($arr['coisa2']);

echo '<br />' . PHP_EOL;

echo ($arr['coisa1']);


