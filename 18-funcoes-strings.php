
<?php

/*
        Funções Strings
        
strtouper = passar a string para maiusculo. 
strtolower = passar tudo para minusculo. 
substr = retorna parte de uma string
str_pad = retona a string com a quantidade de caracteres qyue deseja. 
str_repeat = repate a quantidade de strings que deseja.  
strlen = retorna o cumprimento de uma string. 
str_replace = substitui palavra no texto
strpos = retorna posicião de uma palavra em um texto.  
*/

$nome = "henrique lopes";
$novoNome = strtoupper($nome);
echo$novoNome;
echo"<hr>";
$nome = "FABIOLA GERTZ";
$novoNome = strtolower($nome);
echo$novoNome;
echo"<hr>";
$mensagen= "ola mundo";
echo substr($mensagen,4);
echo"<hr>";  
$objeto = "mouse";
$novoobjeto = str_pad($objeto, 10,"*",STR_PAD_BOTH);
echo $novoobjeto;
echo"<hr>";
$string =str_repeat("sucesso <br>",10) ;
echo $string;
echo"<hr>";
$tamanho = strlen("eu sou fod@@") ;
echo ($tamanho) ;
echo"<hr>";
$texto ="A seleção  Argentina é a campeã do mundo da copa de 2022";
$novotexto= str_replace("Argentina","Brasileira",$texto);
echo $novotexto;
echo"<hr>";
echo strpos($texto,"campeã");