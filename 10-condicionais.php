<?php
//********Condicionais*********/
//if
//else
//elseif

$numero = 9;
if ($numero == 10):
    echo "é igual a 10";
elseif ($numero<= 9):
    echo "é menor ou igual a 9";
else:
    echo "não é igual a 10";
endif;

echo "<hr>";
$media = 7 ;
echo ($media >=7 ) ? "Aprovado" : "Reprovado!";
echo "<hr>";

//********Condicionais*********/
//switch
//case

$cor = "marrom";

switch($cor):
    case "vermelho":
        echo "sua cor preferida é o vermelho";
    break;
    case "verde":
        echo "sua cor preferida é o verde";
    break;
    case "azul":
        echo "sua cor preferida é o azul";
    break;
    default:
    echo "sua cor prefedida é: ".$cor ;
    endswitch;