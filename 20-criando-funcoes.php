<?php

// criando funções

function exibirnome($nome){

echo "meu nome é $nome";
}
exibirnome("Henrique");
echo "<hr>";

function Calcmedia ($nome,$nota1,$nota2,$nota3,$nota4){
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        if ($media >=7):
            echo " $nome você foi  Aprovado, sua nota foi $media";
        else:
            echo "$nome você foi Reprovado, sua nota foi $media";
        endif;

}
Calcmedia("Henrique",4,2,7,8);echo "<br>";
Calcmedia("zé",7,9,0,8);