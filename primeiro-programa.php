<?php
echo "Bem vindo ao screen match! \n";

echo "Digite o ano do lançamento do filme: ";
$anoLancamento = (int) readline();

if ($anoLancamento >= 2025) {
     echo "Esse filme é lançamento \n";
} elseif ($anoLancamento >= 2022) {
    echo "Esse filme não é lançamento, mas é recente\n";
} else {
    echo "Esse filme não é novo.\n";
}

echo "Digite o nome do filme: ";
$nomeFilme = readline();

$genero = match ($nomeFilme) {
   "Cinderela" => "Fantasia",
   "Um maluco no golf" => "Comédia",
   "Meu malvado favorito 3" => "Animação",
   default => "Desconhecido",

};

echo "Nome do filme: $nomeFilme\n";
echo "Ano de lançamento: $anoLancamento\n";
echo "Gênero do filme: $genero";
