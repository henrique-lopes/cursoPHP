<?php
// metodo POST =  COLETA DADOS DE UM FORULARIO.
/*$nome = $_POST['nome'];
$email = $_POST['email'];

echo "seu nome é $nome e seu email é $email.";
echo "<br>";
var_dump($_POST);
*/

// metodo GET  =COLETA DADOS DE UM FORULARIO. passando as inf pela URL do Browser

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "seu nome é $nome e seu email é $email.";
echo "<br>";
echo $_POST['idade'] ."<br>". $_POST['sobrenome'];echo "<br>";
var_dump($_POST);