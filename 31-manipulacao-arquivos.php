<?php
//Manipulação de Arquivos
/*
fopen() = abre o arquivo
fclose() -  fecha o arquivo
fwrite() - envia o arquivo para outra pagina
!feof() - não é o final do arquivo
fgets() - atribui o valor na variavel.  
filesize-  tamanho do arquivo
*/

$arquivo = 'arquivo.txt';
$conteudo  = 'Conteudo de textos';

$tamanhoArquivo = filesize($arquivo);

$arquivo_aberto = fopen ($arquivo, 'r');

while(!feof($arquivo_aberto)):
    $linha = fgets($arquivo_aberto , $tamanhoArquivo);
    echo $linha."<br>";
endwhile;

fclose($arquivo_aberto);
