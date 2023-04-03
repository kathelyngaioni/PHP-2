<?php
//arrays associativos em PHP
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

foreach($contascorrentes as $conta){
  echo $conta['titular'] . PHP_EOL;
}

//exibindo a chave das contas (chave nesse caso são cpf)
foreach($contascorrentes as $cpf => $conta){
  echo $cpf . PHP_EOL;
}
?>

