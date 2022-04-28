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
//FAZER UPLOAD PARA PASTA ARQUIVOS. 
// Realizando as validações de upload. 
if (isset($_POST['enviar-formulario'])):
$formatosPermitidos = array("png","jpeg","jpg","gif");
$quantidadeArquivos = count($_FILES['arquivo']['name']);
$contador = 0;

while ($contador < $quantidadeArquivos): 

$extensao = (pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION));

    if (in_array($extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporaio = $_FILES['arquivo']['tmp_name'][$contador];
        $novoNome = uniqid().".$extensao";
        // retorno e mensagens 
        if(move_uploaded_file($temporaio, $pasta.$novoNome)):
            //$mensagem = "Upload feito com sucesso!";
            echo "Upload feito com sucesso para $pasta.$novoNome";
            echo "<br>";
        else:
            //$mensagem = "Erro, não foi possivel fazer o upload";
            echo "Erro ao enviar o  arquivo $temporario";
        endif;
    else:
        //$mensagem = "formato invalido";
        echo "$extensao não é permitida";echo "<br>";
    endif;
$contador++;
endwhile;
endif;
?>


    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"
          enctype="multipart/form-data">
        <input type="file" name="arquivo[]"  multiple ><br>
        <input type="submit" name ="enviar-formulario">

</form>
</body>
</html>