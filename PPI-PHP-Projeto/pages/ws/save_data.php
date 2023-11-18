<?php
require_once ("../../models/Partida.php");
$partida = new Partida();
//Connection
$conn = new PDO("sqlite:../../database/Tiro_ao_Alvo.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$nome = $_GET['nome'];
$acertos = $_GET['inp-acertos'];
$erros = $_GET['inp-erros'];
$horario = $_GET['hora']. ":" . $_GET['min'];
$data = $_GET['dia']. "/" .$_GET['mes']. "/" .$_GET['ano'];

$preparo_jogador = $conn->prepare("INSERT INTO Jogador (nome) VALUES (:nome);");
$preparo_jogador->bindParam(":nome",$nome);
$preparo_jogador->execute();
//Tabela Jogador
$query = $conn->query("SELECT id_jogador FROM Jogador WHERE nome = '$nome';");
$data_jogador = $query->fetchAll();
foreach ($data_jogador as $i) {
    $partida->setIdJogador($i->id_jogador);
}
$id_jogador = $partida->getIdJogador();
//Inserindo id_jogador na tabela partida como chave estrangeira
$preparo = $conn->prepare("INSERT INTO Partida (acertos, erros, horario, datas,id_jogador)
VALUES (:acertos, :erros, :horario, :datas, :id_jogador);");

$preparo->bindParam(":acertos",$acertos);
$preparo->bindParam(":erros",$erros);
$preparo->bindParam(":horario",$horario);
$preparo->bindParam(":datas",$data);
$preparo->bindParam(":id_jogador",$id_jogador);
//Tabela Partida
$preparo->execute();

header("Location:../index.php");
?>
