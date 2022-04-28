<?php
session_start();

$_SESSION['cor'] = "verde";
$_SESSION['carro'] = "palio";

echo $_SESSION['cor']."<br>". $_SESSION['carro'] ."<br>". session_id();