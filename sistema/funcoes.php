<?php

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

//passagem de parametro por referencia
function titularComLetrasMaiusculas(array &$conta) 
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
}
