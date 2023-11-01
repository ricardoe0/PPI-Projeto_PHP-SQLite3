//>>Variáveis para os Eventos
let erros = document.querySelector("#n-erros");
let acertos = document.querySelector("#n-acertos");
let tentativas = document.querySelector("#n-tentativas");
//Valores do Placar
let alvo = document.getElementById("alvo");
let area_jogo = document.getElementById("area-jogo");
//Alvo e Cenário do jogo
let val_tenatativas,val_acertos,val_erros;
//Container para os valores passados no pacar do jogo

//>>Eventos do jogo
function adiciona_pontuação_tentativas(){
    val_tenatativas = parseInt(tentativas.innerHTML,10);
    tentativas.innerHTML = val_tenatativas + 1;
}
function adiciona_pontuação_erros(){
    val_erros = parseInt(erros.innerHTML,10);
    erros.innerHTML = val_erros + 1;
    adiciona_pontuação_tentativas();
}
function adiciona_pontuação_acertos(){
    val_acertos = parseInt(acertos.innerHTML,10);
    acertos.innerHTML = val_acertos + 1;
    adiciona_pontuação_tentativas();
}