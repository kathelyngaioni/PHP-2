<?php
//se eu não adicionar o indice, o php vai adicionar o elemento no array
$arrayList = [1,2,3,4];
$arrayList[] = 5;

foreach($arrayList as $lista) {
  echo $lista . " ";
}
?>