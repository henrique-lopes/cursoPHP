<?php
// SUPERGLOBAIS
/*
$GLOBALS = acessar variasveis fora do escopo 
$_SERVER = 
$_REQUEST =
$_POST =
$_GET =
$_FILES =
$_ENV =
$_COOKIE =
$_SESSION = 
*/

$a = 34;
$b = 27;

function soma(){

  echo  $GLOBALS['a'] + $GLOBALS['b'] ;
}
soma();
echo "<hr>";


echo $_SERVER['PHP_SELF']. "<br>";
echo $_SERVER['PHP_NAME']. "<br>";
echo $_SERVER['SCRIPT_FILENAME']. "<br>";
echo $_SERVER['DOCUMENT_ROOT']. "<br>";
echo $_SERVER['SERVER_PORT']. "<br>";
echo $_SERVER['REMOTE_ADDR']. "<br>";
