<?php
$nome = $_GET["nome"] ?? "Nome não informado";
$idade = $_GET["idade"] ?? "Idade não informada";

echo "Nome recebido: " . $nome . "<br>";
echo "Idade recebida: " . $idade . "<br>";
?>