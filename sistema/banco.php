<?php

require_once 'funcoes.php';

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


//operação de saque
$contascorrentes['147.258.369-12']['saldo'] = saque($contascorrentes['147.258.369-12'],500);

$contascorrentes['123.654.789-72']['saldo'] = saque($contascorrentes['123.654.789-72'], 6000);

//operação de deposito
$contascorrentes['123.456.789-10']['saldo'] = deposito($contascorrentes['123.456.789-10'],200);

titularComLetrasMaiusculas($contascorrentes['123.456.789-10']);

foreach($contascorrentes as $cpf => $conta){
  echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}



