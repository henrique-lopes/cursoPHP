<?php
//DATAS

date_default_timezone_set('America/Sao_Paulo');
echo date ('H:i:s');
echo "<hr>";
// modo como inserir data no banco de dados
$date = date('Y-m-d'); // FORMATO  DATE
echo $date; 
echo "<hr>";
// modo como inserir data no banco de dados
$datetime = date('Y-m-d H:i:s'); // FORMATO  DATETIME
echo $datetime; 
echo "<hr>";
// TIME
// quantidade de segunda de 1970 ate horario atual. 
echo time();
echo "<hr>";
$time = time();
echo date('d/m/Y', $time);

//MKTIME
echo "<hr>";
$data_pagamento = mktime(15,30,00,02,15, 2023);
echo date ('d/ - h:i',$data_pagamento );

//STRTOTIME
echo "<hr>";
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date ('d/m/Y', $data);
