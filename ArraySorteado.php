<?php
//Array com 20 números inteiros sorteados entre 1 e 10
$arr = array();
for($i=0; $i<20; $i++){
  $random_num = rand(1,10);
  array_push($arr, $random_num);
}
print_r($arr);

//Armazena os elementos, sem duplicações
$unique = array_unique($arr);

//Armazena os elementos duplicados
$duplicates = array_diff_assoc($arr, $unique);

//Diferença entre o array original e o array com números duplicados, eliminando os duplicados
$result = array_diff($arr,$duplicates);
print_r($result);
