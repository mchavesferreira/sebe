<?php
$nome = $_POST["nome"] ?? "Nome não informado";
$idade = $_POST["idade"] ?? "Idade não informada";
$curso = $_POST["curso"] ?? "Curso não informado";

echo "<h1>Dados recebidos por POST</h1>";
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Curso: " . $curso . "<br>";
?>