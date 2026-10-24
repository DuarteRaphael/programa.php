<?php
echo "Hoje é dia " . date('d/m/Y');
echo " - Agora são " . date('H:i:s');

//Array com os nomes dos dias da semana
$diasSemana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

//Dia da semana atual
$hoje = date("w");
$diaNome = $diasSemana[$hoje];

echo " - O dia da semana é $diaNome!";
?>
