<?php
Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17*/

function seculoAno($ano) 
{
    return ceil($ano / 100);
}

echo seculoAno(2022);
