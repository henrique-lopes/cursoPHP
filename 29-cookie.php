<?PHP
//COOKIE

setcookie('user', 'henrique lopes', time()+3600);
setcookie('email', 'henrique-lopes@outlook.com.br', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);



var_dump($_COOKIE);