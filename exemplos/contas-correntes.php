<?php


//arrays associativos em PHP
$conta1 = [
  'titular'=> 'Kathelyn', 
  'saldo'=> 1000 
];

$conta2 = [
  'titular' => 'João',
  'saldo'=> 5000
];

echo $conta1['titular'] . PHP_EOL;
$contascorrentes = [$conta1, $conta2];

for($i=0; $i<count($contascorrentes); $i++){
  echo $contascorrentes[$i]['titular'] . PHP_EOL;
}
