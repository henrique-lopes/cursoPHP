<?php
// tanto INCLUIDE QUANTO O REQUIRE exeutam a mesma coisa. 
// com o _ONCE ele verificar se o arquivo ja foi enserido. 
// sem o  _ONCE  ele repeti o bloco de codigo que esta na outra pagina, caso seja informado mais de uma vez.   
include_once 'header.php';?>
    
<?php echo "olá pessoal"; ?>


<?php
include 'footer.php';
?>
