<?php

//ESCOPO GLOBAL  
$nome =  "Henrique";
$a = 1;
$b = 3; 
$c = 7;


function exibeNome() {
    global $nome; // variavel global
    echo $nome; // varial local
}
exibeNome();
echo '<hr>';
/////////////////////////

 function exibeCidade(){
     global $cidade; // escoppo global
     $cidade = "São Paulo"; // escolpo local
 }

 exibeCidade();
 echo $cidade;
 echo '<hr>';
 //////////////////////////
 echo "A soma da função 'Soma' é : ";
 function soma(){
        //global $a,$b,$c; //escolpo global
        //echo $a + $b + $c; // escopo local
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; // uma forma para somar variaveis globais.  
 }
 soma();
 echo '<hr>';