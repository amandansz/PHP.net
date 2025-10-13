<?php


echo "Por favor, digite o seu nome...:  ";
$nome = readline(); // lê o que o usuário digitar
echo "Seja bem vindo(a), $nome! \n";

echo "Insira a sua nota da prova de português...: ";
$nota1 = (float) readline();

echo "Insira a sua nota da prova de matemática...: ";
$nota2 = (float) readline();

echo "Insira a sua nota da prova de inglês...: ";
$nota3 = (float) readline();


$media = ($nota1 + $nota2 + $nota3) / 3;
    echo "A sua média é...: " . $media . "\n";

  if ($media >= 7) { 
    echo "Parabéns pelo desempenho, sua média é excelente! \n";

} else {
    echo "Que pena! Sua média não foi suficiente, mas calma! Você terá uma segunda oportunidade." . "\n";
}
    echo "Fim do programa!";