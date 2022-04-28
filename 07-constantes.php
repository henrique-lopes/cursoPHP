<?php
///Constantes

define('NOME', 'Henrique Lopes');//  não é possivel definer outra variavel com nome (NOME).  
define('IDADE', 26);
define('ALTURA', 1.72);
define('CASADO', FALSE);
define('TIMES', ['Santos','porco','gamba']);
echo NOME, IDADE, ALTURA, CASADO;
var_dump(NOME, IDADE, ALTURA, CASADO);
echo "<br>";echo "<Hr>";
echo TIMES[0]; echo "<br>";
var_dump(TIMES);
echo "<br>";echo "<Hr>";
echo 'Meu nome é '. NOME . ' minha idade é  '. IDADE. 'tenho de altura'. ALTURA .'e não  sou casado' . CASADO  ;
echo "<br>";echo "<Hr>";
////////////////////////////

function exibeNome(){
    echo NOME; //  variavel global porem constantes, é possivel acessar.  
}
exibeNome();