<?php

// estrurtura FOR
// for ($valorInicial = 0; $condição <=10; $incremento++)
for ($contador = 0; $contador <=10; $contador++):
    echo "8 x  $contador = ". ($contador * 8) . "<br>";
endfor;

echo"<hr>";

//estrutura foreach
//foreach / para cada. 

$cores =  array("verde", "vermelho", "azul","preto");

foreach ($cores as $indice => $valor):
    echo ($indice."-". $valor);
    echo "<br>";
endforeach;