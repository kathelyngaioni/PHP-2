<?php

//declaração de um array
// $array = [] ou $array = array();

//mapeamento de um array (chave e valor)
//as chaves de um array precisam ser ou inteiro ou string
$array = [
  1 => 'um',
  2 => 'dois'
];

foreach ($array as $chave => $valor) {
  echo "chave:{$chave} valor:{$valor}" . PHP_EOL;
}
echo count($array);
