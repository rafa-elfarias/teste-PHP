<?php
function verificarSequencia($array) {
    if (sizeof($array) == 1) {
        return true;
    }
    for ($i = 0; $i < sizeof($array); $i++) {
        $ordemCrescente = true;
        $arr = $array;

        // Remove um item do array
        array_splice($arr, $i, 1);

        // Verifica se a ordem é crescente
        for ($j = 0; $j < sizeof($arr) - 1; $j++) {
            if ($arr[$j] >= $arr[$j + 1]) {
                $ordemCrescente = false;
            }
        }

        // Retorna true se for uma sequencia crescente
        if ($ordemCrescente) {
            return true;
        }
    }

    return false;
}

$sequencias =[
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [3, 6, 5, 8, 10, 20, 15],
    [1, 1, 2, 3, 4, 4],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3],
];
foreach($sequencias as $s) {
    var_dump(verificarSequencia($s));
}
