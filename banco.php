<?php

$contascorrentes = [
  '123.456.789-10' => [
  'titular'=> 'Kathelyn', 
  'saldo'=> 1000 
  ], 
  '123.654.789-72' => [
  'titular' => 'João',
  'saldo'=> 5000
  ],
  '147.258.369-12' => [
  'titular' => 'Maria',
  'saldo' => 600
  ]
];

function saque(string $cpf, float $valor) :void
{
  if($valor > $contascorrentes[$cpf]['saldo'])
    echo "Saldo insuficiente" . PHP_EOL;
  else
    $contascorrentes[$cpf]['saldo'] -= $valor;
}

//operação de saque.
saque("147.258.369-12",500);
//$contascorrentes['147.258.369-12']['saldo'] -= 500;

foreach($contascorrentes as $cpf => $conta){
  echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}

?>