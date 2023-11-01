<?php
//Connection
$conn = new PDO("sqlite:../../database/jogadores.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$nome = $_GET['nome'];
$acertos = $_GET['inp-acertos'];
$erros = $_GET['inp-erros'];
$hora = $_GET['hora'];
$minuto = $_GET['min'];
$dia = $_GET['dia'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];


$preparo = $conn->prepare("INSERT INTO jogadores (nome, acertos, erros, hora, minuto, dia, mes, ano) 
                            VALUES (:nome, :acertos, :erros, :hora, :minuto, :dia, :mes, :ano);");
$preparo->bindParam(":nome",$nome);
$preparo->bindParam(":acertos",$acertos);
$preparo->bindParam(":erros",$erros);
$preparo->bindParam(":hora",$hora);
$preparo->bindParam(":minuto",$minuto);
$preparo->bindParam(":dia",$dia);
$preparo->bindParam(":mes",$mes);
$preparo->bindParam(":ano",$ano);
$preparo->execute();

header("Location:../index.php");
?>
