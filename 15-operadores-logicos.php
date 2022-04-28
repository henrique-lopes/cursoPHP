<?php
//OPERADORES LOGICOS
/*Nos permitem fazer comparações
 entre expressões.

E (&& - AND); retorna verdadeiro quando as duas expressões é vdd
ou (|| - OR); retona verdadeiro quando uma das expressões é vdd
ou exclusivo (XOR); 
negação (!);
*/

$idade = 25;
$nome = "rodrigo";

if (($idade == 25) AND ($nome=="rodrigo")):
    echo "é verdadeiro";
else:
    echo "é faldo";
endif;