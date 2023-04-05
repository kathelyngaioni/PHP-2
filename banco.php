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

//função sacar
function saque($cpf, float $valor)
{
  if($valor > $cpf['saldo'])
    echo "Saldo insuficiente" . PHP_EOL;  
  else
  $cpf['saldo'] -= $valor;

  return $cpf['saldo'];
}

//função depositar
function deposito($cpf, float $valor)
{
  if($valor > 0)
    $cpf['saldo'] += $valor;
  else
    echo "Valor inválido" .  PHP_EOL;
  return $cpf['saldo'];
}

//operação de saque
$contascorrentes['147.258.369-12']['saldo'] = saque($contascorrentes['147.258.369-12'],500);

$contascorrentes['123.654.789-72']['saldo'] = saque($contascorrentes['123.654.789-72'], 6000);

//operação de deposito
$contascorrentes['123.456.789-10']['saldo'] = deposito($contascorrentes['123.456.789-10'],200);


foreach($contascorrentes as $cpf => $conta){
  echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}

?>