<?php

$idadeList = [11,12,13,14,15,16];

//     $idadeList[0]  $idadeList[1] $idadeList[2]
//list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
[$idadeVinicius, $idadeJoao, $idadeMaria] = $idadeList;

//unset: exclui variavel
unset($idadeList[3]);

foreach($idadeList as $idade) {
  echo $idade . " ";
}