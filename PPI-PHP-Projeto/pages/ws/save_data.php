<?php
//Connection
$conn = new PDO("sqlite:../../database/jogadores.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$nome = $_GET['nome'];
$acertos = $_GET['inp-acertos'];
$erros = $_GET['inp-erros'];
$horario = $_GET['hora']. ":" . $_GET['min'];
$data = $_GET['dia']. "/" .$_GET['mes']. "/" .$_GET['ano'];

$preparo = $conn->prepare("INSERT INTO Jogador (nome) VALUES (:nome);");
//Inserindo id_jogador na tabela partida como chave estrangeira
$query = $conn->prepare("SELECT id_jogador FROM Jogador WHERE nome = '$nome';");
$id_jogador = $query;
$preparo = $conn->prepare("INSERT INTO Partida (acertos, erros, horario, datas,id_jogador)
VALUES (:acertos, :erros, :horaio, :datas, :id_jogador);");

$preparo->bindParam(":nome",$nome);
//Tabela Jogador
$preparo->bindParam(":acertos",$acertos);
$preparo->bindParam(":erros",$erros);
$preparo->bindParam(":horario",$horario);
$preparo->bindParam(":datas",$data);
$preparo->bindParam(":id_jogador",$id_jogador);
//Tabela Partida
$preparo->execute();

header("Location:../index.php");
?>
