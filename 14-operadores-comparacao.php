<?php

/*
== igual
!= não igual
=== identidade (verifica se é identico)
!=== não identico (verifica se é identico)
<> diferente
< menor
> maior
<= menor ou igual
>= maior ou igual
<==> spacechip (arredonda valores para mais ou menos).
*/

if (1 <=> 1.99 ):
    echo "positivo";
else:
    echo "negativo";
endif;
