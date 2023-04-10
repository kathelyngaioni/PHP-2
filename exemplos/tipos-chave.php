<?php
//OBSERVAÇÃO : as chaves em arrays associativos SÓ podem ser ou inteiros ou strings.
$array = [
  1 => 'a',
  2 => 'b',
  true => 'c',
  1.5 => 'd'
];

foreach($array as  $item){
  echo $item . " ";
}
?>