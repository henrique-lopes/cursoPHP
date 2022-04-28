<?php

//*****FUNÇÕES ARRAY *****//

//IS_array($array) verificar se uma determinada variaves é um array

$nomes = array("henrique","Fabiola","Fabio","Luiz");
var_dump( is_array($nomes)); 
echo "<br>";
if( is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<br>";echo "<hr>";

// IN_ARRAY ($valor, $array) = verifica se um determinado valor existe em alguma posição do array.

$nomes = array("henrique","Fabiola","Fabio","Luiz");
var_dump( in_array("Fabiola",$nomes)); 
echo in_array("henrique",$nomes) ;
echo "<br>";
if( in_array("henrique",$nomes)):
    echo "existe no array";
else:
    echo "não existe no array";
endif;
echo "<br>";echo "<hr>";

// ARRAY_KEYS ($array) = retorna um novo array com as chaves do array passado como parametro.
/// pega as chaves e não os valores
$nomes = array("EU"=>"henrique", "IRMÃ"=>"Fabiola", "IRMÃO"=>"Fabio", "PAI"=>"Luiz");
$keys =  array_keys($nomes) ;
print_r($keys);
echo "<br>";echo "<hr>";

// ARRAY_VALUES ($array) = retorna um novo array com os valores do array passado como parametro
/// pega os valores e nao as chaves.  
$nomes = array("EU"=>"henrique", "IRMÃ"=>"Fabiola", "IRMÃO"=>"Fabio", "PAI"=>"Luiz");
$values =  array_values($nomes) ;
print_r($values);
echo "<br>";echo "<hr>";

// ARRAY_MERGE($array1, $array2) = agrega o conteudo dos dois arrays

$carros = array("camaro","fusca","gol");
$motos = array("hornet","f800","kawazaki");
$veiculos = array_merge($carros,$motos);
print_r($veiculos);
echo "<br>";echo "<hr>";

// ARRAY_POP ($array) = exclui a ultima posição do array

$carros = array("camaro","fusca","gol");
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<br>";echo "<hr>";

//ARRAY_SHIFT($array) = exclui a primeira posição do array. 

$carros = array("camaro","fusca","gol");
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<br>";echo "<hr>";

// ARRAY_UNSHIFT($array,$valor)= adiciona um ou mais elementos no inicio do array. 

$carros = array("camaro","fusca","gol");
print_r($carros);
echo "<br>";
array_unshift($carros,"ferrari");
echo "<br>";
print_r($carros);
echo "<br>";echo "<hr>";

// ARRAY_PUSH ($array,$valor) =  adiciona um ou mais elementos no final do array. 

$carros = array("camaro","fusca","gol");
print_r($carros);
echo "<br>";
array_push($carros,"mercedes");
echo "<br>";
print_r($carros);
echo "<br>";echo "<hr>";

//ARRAY_COMBINE ($keys,$values) = mescla os dois arrays.

$keys = array ("campeão", "vice", "terceiro");
$values = array ("Santos","Guarani","Barcelona");
$times = array_combine($keys,$values);
print_r($times);
echo "<br>";echo "<hr>";

// ARRAY_SUM() = calcula a soma dos elementos de um array

$soma = array(3,8,7,4,10.8,9.03);
echo array_sum($soma);

echo "<br>";echo "<hr>";

// EXPLODE("/", "20/01/2001") = transforma string em array

$data = "23/04/2022";
$novaData = explode("/", $data);
print_r( $novaData);
echo "<br>";
$frase = "meu nome não é Jhonny";
$array = explode(" ",$frase);
print_r($array);
echo "<br>";echo "<hr>";

// Implode ("-", $array) = transforma array em string

$nomes = array("rodrigo","carlos","Neusa","Talita");
$string = implode(",", $nomes);
echo $string;