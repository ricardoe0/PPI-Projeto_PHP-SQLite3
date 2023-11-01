<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiro ao Alvo</title>
    <link rel="shortcut icon" href="../assets/source/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style_sheet/global.css">
    <script src="../feature/placar.js" defer></script>
    <script src="../feature/start_game.js" defer></script>
    <script src="../feature/movimento.js" defer></script>
    <script src="../feature/data.js" defer></script>
</head>
<body>
    <!-- Placar -->
    <section class="top-letter f-over">
        <div>
            <span>Acertos</span>
            <span id="n-acertos">00</span>
        </div>
        <div>
            <span>Erros</span>
            <span id="n-erros">00</span>
        </div>
        <div>
            <span>Tentativas</span>
            <span id="n-tentativas">00</span>
        </div>
        <button class="btn start main-letter" id="btn-start">Iniciar</button>
    </section>
    <!-- Área do Jogo -->
    <div class="sub-letter" id="wrap-area-jogo">
        <div class="cenario" id="area-jogo">
            <img src="../assets/source/images/alvo.png"
            class="alvo" id="alvo" alt="alvo do jogo" 
            onclick="event.stopPropagation()">
        </div>
        <div class="timer" id="timer">00:00</div>
        <div class="popup main-letter" id="popup">
            <h3 class="top-letter">Salve seu Progresso</h3>
            <form action="ws/save_data.php" method="get">
                <fieldset>
                    <legend>Jogador</legend>
                    <div class="wrap-inp main-letter" id="wrap-inp-user">
                        <label for="nome-usuario">nome</label>
                        <input type="text" oninvalid="setCustomValidity(' Deixe Sua Marca ')"
                        placeholder="New Doom Slayer" name="nome" class="inp main-letter" id="nome-usuario"
                        required>
                    </div>
                    <input type="text" name="inp-acertos" class="inp hide" id="inp-acertos" value="0">
                    <input type="text" name="inp-erros" class="inp hide" id="inp-erros" value="0">
                    <input type="text" name="min" class="inp hide" id="min" value="0">
                    <input type="text" name="hora" class="inp hide" id="hora" value="0">
                    <input type="text" name="dia" class="inp hide" id="dia" value="0">
                    <input type="text" name="ano" class="inp hide" id="ano" value="0">
                    <input type="text" name="mes" class="inp hide" id="mes" value="0">
                </fieldset>
                <input type="submit" class="btn submit top-letter" value="Salvar">
            </form>
        </div>
    </div>
    <!-- Classificação -->
    <div class="main-letter" id="rank-area">
        <div class="content-rank" id="wrap-content-rank">
            <h3>Ranking Dos Jogadores</h3>
            <table class="tab">
                <thead class="tab-head">
                    <th>n°</th>
                    <th>nome</th>
                    <th>pontuação</th>
                    <th>erros</th>
                    <th>Data</th>
                    <th>hora</th>
                </thead>
                <?php 
                //Connection
                $conn = new PDO("sqlite:../database/jogadores.sqlite");
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                require_once ("../models/jogador.php");
                $jogadores = new Jogador();
                $data_jogadores = array();
                $cont = 1;
                $query = $conn->query("SELECT * FROM jogadores ORDER BY acertos DESC,
                erros ASC, hora ASC, minuto ASC, dia ASC, mes ASC, ano ASC;");
                $data_jogadores = $query->fetchAll();
                foreach($data_jogadores as $j):
                    $jogadores->setNome($j->nome);
                    $jogadores->setAcertos($j->acertos);
                    $jogadores->setErros($j->erros);
                    $jogadores->setHora($j->hora);
                    $jogadores->setMinuto($j->minuto);
                    $jogadores->setDia($j->dia);
                    $jogadores->setHora($j->hora);
                    $jogadores->setAno($j->ano);
                    $jogadores->setMes($j->mes);
                ?>
                <tbody class="tab-body sub-letter">
                    <tr>
                        <td><?= $cont; ?></td>
                        <td><?= $jogadores->getNome(); ?></td>
                        <td><?= $jogadores->getAcertos(); ?></td>
                        <td><?= $jogadores->getErros(); ?></td>
                        <td><?= $jogadores->getData(); ?></td>
                        <td><?= $jogadores->getHorario(); ?></td>
                    </tr>
                <?php 
                $cont++; 
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Rodapé -->
    <footer class="f-content f-letter">
        <div id="wrap-content-footer">
            <div>
                <h3>Atividade</h3>
                <p>
                    Disciplina : Programação Para Internet<br>
                    Professor: Marcelo Figueredo Barbosa Junior<br>
                    IFRN - Campus Snata Cruz RN
                </p>
            </div>
            <div>
                <h3>&copy Todos os direitos reservados</h3>
            </div>
            <div>
                <h3>Desenvolvido por</h3>
                <p>Enzo Ricardo R. De Oliveira</p>
            </div>
        </div>
    </footer>
</body>
</html>