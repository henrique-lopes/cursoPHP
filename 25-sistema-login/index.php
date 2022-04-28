<?php 

/// conexão com o banco de dados
require_once 'db_conect.php';

//Sessão
session_start();

//BOTÃO ENVIAR
if(isset($_POST['btn-entrar'])):
   $erros = array();
   $login = mysqli_escape_string($connect , $_POST['login']);
   $senha = mysqli_escape_string($connect , $_POST['senha']);

    if (empty($login) or empty($senha)):
        $erros[]= "<li> O campo login/senha precisa ser preenchido</li>";
    else: 
        $sql = " SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0 ):
        $senha = md5($senha); // criptogravar a senha
         $sql = " SELECT * FROM usuarios WHERE login  = '$login' and  senha = '$senha' ";
         $resultado = mysqli_query($connect, $sql);
            if(mysqli_num_rows($resultado) == 1 ):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');

            else:
                $erros[] = "<li> Usuario e senha não conferem </li>";        
            endif;

        else:
                $erros[] = "<li> Resultado inexistente </li>";
        endif;


    endif;
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<h1> Login </h1>
<?php
//VERIFICA SE NÃO CONTEM ERROS.  
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach; 
endif;
?>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">

Login: <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
<button type="submit" name="btn-entrar" > Entrar </button>

</form>


</body>
</html>


