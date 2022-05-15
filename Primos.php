<?php
function primos($inicial, $final) {
	echo "Números primos de ".$inicial." até ".$final." são \n\n";
	
	for ($i = $inicial; $i < $final; $i++) {
	    
	    // Não há números primos para 0 e 1
	    if ($i == 1 || $i == 0)
	        continue;
	    
	    $f = 1;
	    
	    for ($j = 2; $j < intval($i / 2) + 1; $j++) {
	        if ($i % $j == 0) {
	            $f = 0;
	            break;
	        }
	    }
	    
	    // f = 1 significa que i é um número primo e f = 0 significa que i não é um número primo
	    if ($f == 1)
	        echo $i." ";
	}
	echo "\n";
}

echo primos(10,29);
