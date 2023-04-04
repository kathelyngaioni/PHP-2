<?php
$contascorrentes = [
  '123.456.789-10' => [
  'titular'=> 'Kathelyn', 
  'saldo'=> 1000 
  ], 
  '123.654.789-72' => [
  'titular' => 'João',
  'saldo'=> 5000
  ]
];

//como adicionar uma nova $conta3 em $contascorrentes?
/* $contascorrentes['147.258.369-10'] = [
  'titular' => 'Maria',
  'saldo' => 600
];
*/
 $contascorrentes[] = [
  'titular' => 'Maria',
  'saldo' => 600
];

 $contascorrentes[] = [
  'titular' => 'José',
  'saldo' => 200
];

foreach($contascorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
?>