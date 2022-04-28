<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

        /*VALIDAÇÕES
    ////////////////////////////////////////
        Funcções (filter_input - filter_var)
        FILTER_VALIDATE_INT
        FILTER_VALIDATE_EMAIL
        FILTER_VALIDATE_FLOAT
        FILTER_VALIDATE_IP
        FILTER_VALIDATE_UR
        */ 
 
///////////////////////////////////////////////////////////////
/*
if(isset($_POST['enviar-formulario'])):
    //array de erros
    $erros = array();
    // validações
    ////////////////////////////////
    if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)):
        $erros[]= "Idade precisa ser um inteiro";
    endif;

    if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
        $erros[]= "E-mail invalido";
    endif;

    if(!$peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)):
        $erros[]= "peso precisa ser um float";
    endif;

    if(!$ip = filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)):
        $erros[]= "IP invalido";
    endif;

    if(!$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)):
        $erros[]= "URL Invalida";
    endif;

    /// exibindo mensagens
    if(!empty($erros)):
        foreach ($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns seus Dados estão corretos";
    endif;
endif;
*/
/////////////////////////////////////

        /*sanitização
        Funcções (filter_input - filter_var)
        FILTER_SANITIZE_SPECIAL_CHARS
        FILTER_SANITIZE_NUMBER_INT
        FILTER_SANITIZE_EMAIL
        FILTER_SANITIZE_URL
        */ 
 ///////////////////////////////////////////////////


if(isset($_POST['enviar-formulario'])):
    //array de erros
    $erros = array();
///////////////////////////////////
        //sanitização
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS) ;
    echo  $nome;echo "<br>";

    $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade , FILTER_VALIDATE_INT)):
        $erros[]= "Idade precisa ser um inteiro";
    endif; 
    echo $idade;echo "<br>";

    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)):
        $erros[]= "Email invalido!";
    endif; 
    echo $email;echo "<br>";

    $url = filter_input(INPUT_POST,'url', FILTER_SANITIZE_URL);
    if(!filter_var($url , FILTER_VALIDATE_URL)):
        $erros[]= "URL invalido!";
    endif; 
    echo $url;echo "<br>";

    // exibir mensagens
    if(!empty($erros)):
        foreach ($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns seus Dados estão corretos";
    endif;
endif;
 ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
nome: <input type="text" name="nome"><br>
idade:<input  type="text" name="idade"><br>
email: <input type="text" name="email"><br>
url: <input type="text" name="url"><br>
<button type="submit"  name="enviar-formulario"> enviar </button><br>
</form>


</body>
</html>


<?php
        /*sanitização
        Funcções (filter_input - filter_var)
        FILTER_SANITIZE_SPECIAL_CHARS
        FILTER_SANITIZE_INT
        FILTER_SANITIZE_EMAIL
        FILTER_SANITIZE_URL
        */ 
 
 ?>