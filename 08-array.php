<?php
// criando um array.

$carros = array(1=>"BMW",2=>"VELOSTER",3=>"HILUX");
print_r($carros);// forma de exibir um array.  
echo "<br>"; 
echo "<hr>";
$carros[]= "AMAROK "; // Adicionando um item no array. 
print_r($carros);
echo "<br>";
echo $carros[1];

echo "<br>"; 
echo "<hr>";
/// outra  forma de criar um array. 
$motos = array();
$motos [] = "yamaha";
$motos [] = "Honda";
$motos [5] = "Suzuki";
print_r($motos);
echo "<br>"; 
echo $motos[5];
echo "<br>"; 
echo "<hr>";
// ultima forma de se criar um array.  
$cliente = ["henrique","Fabiola","Fabio"];
print_r($cliente);

//count
echo "<br>"; 
echo "<hr>";
echo count($carros);
echo "<hr>";
$total_clientes = count($cliente);
echo $total_clientes;
echo "<hr>";

//foreach

foreach ($carros as $valor){
    echo $valor. "<br>";
}

echo "<hr>";
//array associativos

$pessoa = array("nome"=>"Henrique", "idade"=>26, "altura"=>1.72);
$pessoa ["cidade"] = "Franco da Rocha";
print_r( $pessoa);
echo "<br>";
foreach($pessoa as $indice => $valor){
    echo $indice. ":".$valor."<br>";
}
echo "<hr>";
//array multidimensionais

$times = array(
    "cariocas" => array ("Campeão"=>"Vasco", "Vice"=>"Flamengo","terceiro"=>"fluminense"),
    "Paulistas"=> array("Campeão"=>"Santos","Vice"=>"Ponte Preta","terceiro"=>"BragantinoRB"),
    "Mineiros"=> array ("Campeão"=>"AmericaMG","Vice"=>"Cruzeiro","terceiro"=>"AtleticoMG")
);
//print_r( $times);
foreach ($times["cariocas"] as $indice => $valor){
    echo $indice.':'.$valor."<br>";
}
echo "<br>";echo "<hr>";
foreach ($times["Paulistas"] as $indice => $valor){
    echo $indice.':'.$valor."<br>";
}
echo "<br>";echo "<hr>";
foreach ($times["Mineiros"] as $indice => $valor){
    echo $indice.':'.$valor."<br>";
}
echo "<br>";echo "<hr>";
