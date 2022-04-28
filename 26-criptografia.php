<?php

/*   
        CRIPTOGRAFIA DE SENHAS.
*/
// tem possibilidade de descriptogravar
$senha = "123456" ;
$nova_senha = base64_encode($senha);
echo "base64 : " .$nova_senha. "<br>";
echo "Sua senha é: :" .base64_decode($nova_senha). "<br>";

ECHO "<hr>";
// não tem como descriptogravar

echo "Md5: ". md5($senha).  "<br>";
echo "Sha1: ". sha1($senha). "<br>";
echo "Sha1: ". sha1($senha). "<br>";

//****************************************************** */
//cripto que o hash da senha muda.

$senha = "123456" ;

$senhadb = '$2y$10$df43ufEhEYNvDErs4qcZce9xKcvHzSnslcx2l0bXp2mvseyokrYiq';

$senhasegura = password_hash($senha,PASSWORD_DEFAULT);
ECHO "<hr>";
echo $senhasegura;
ECHO "<hr>";

if(password_verify($senha,$senhadb)):
        echo "Senha Valida";
else: 
        echo "senha invalida";
endif;