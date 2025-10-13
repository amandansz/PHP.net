<?php

$hora = 18;

if ($hora > 6 && $hora < 12){
    echo "Bom dia!\n";
}  elseif ($hora >= 12 && $hora < 18){
    echo "Boa tarde!\n";
} else{
    echo "Boa noite!\n";
}

echo "Fim do programa!";