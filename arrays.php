<?php
//declaração de um array:
$idadeList = [11,12,13,14,15,16];
echo $idadeList[0];

for ($i = 0; $i< count($idadeList); $i++){
  echo "$idadeList[$i]" . PHP_EOL;
} 

?>