<?php
//FUNCÇÕES PARA Numeros

/*
number_format = utilizado para formatar o numeros.  
round = realiza o arredondanmento dos valores
ceil = realiza arredondamento , porem somente para cima.  
floor = realiza arredondamento , porem somente para baixo.   
rand = realiza sorteios
*/ 

$db = 1234.56;
$preco = number_format($db,2,",",".");
echo $preco;
echo "<hr>";
echo round(6.51);
echo "<hr>";
echo ceil(5.49);
echo "<hr>";
echo floor(9.32);
echo "<hr>";
echo rand(1,60);