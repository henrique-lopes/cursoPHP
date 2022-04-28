<?php

//************ Escalares  ************//

//String

$nome = "Dev Henrique Lopes ";
var_dump($nome); echo "<br>";
 if (is_string($nome)):
    echo "É uma String";
 else:
    echo " Não é uma String";
 endif;

 echo "<br>";
 echo "<hr>";
 // int

 $idade = 26;
 var_dump($idade);
 if (is_int($idade)):echo "<br>";
    echo "É um Inteiro";
 else:
    echo " Não é um Inteiro";
 endif;
 echo "<br>";
 echo "<hr>";
 

//float 
$altura = 1.71;
var_dump($altura);echo "<br>";
if (is_float($altura)):
    echo "É um float";
else:
    echo " Não é um float";
endif;
echo "<br>";
echo "<hr>";
//boolean

$admin = "oi";
var_dump($admin);echo "<br>";
if (is_bool($admin)):echo "<br>";
    echo "É um True";
else:
    echo " É um False";
endif;
echo "<br>";
echo "<hr>";
//********* Compostos *********//

$carros = array("gol","uno","palio",123,1.80,True);
var_dump($carros);
if (is_array($carros)):echo "<br>";
    echo "É um array";
else:
    echo " não é um array";
endif;
echo "<br>";
echo "<hr>";
//object

class cliente {
    public $nome;
    public function atribuirNome($nome){
        $this-> $nome = $nome;
    }
}

$cliente = new cliente();
$cliente -> atribuirNome("henrique");
var_dump($cliente);
if (is_object($cliente)):echo "<br>";
    echo "É um object";
else:
    echo " não é um object";
endif;
echo "<br>";
echo "<hr>";

//NULL

$cidade = NULL;
var_dump($cidade);
echo "<br>";
echo "<hr>";


