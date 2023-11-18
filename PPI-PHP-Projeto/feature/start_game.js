//>>Elementos da página
let btn_start = document.getElementById("btn-start");
let timer = document.getElementById("timer");
let segs = 0;
let ms = 0;
let duracaoJogo;
//Valores de tempos
let str_segs = "";
let str_ms = "";
let formatted_time = "";
//Variáveis de texto para a formatação do timer
let popup = document.getElementById("popup");//Popup para cadastrar dados
//Temporizador
let inp_acertos = document.getElementById("inp-acertos");
let inp_erros = document.getElementById("inp-erros");
//Inputs do form
function start_game(){
    alvo.addEventListener("click",adiciona_pontuação_acertos,false);
    area_jogo.addEventListener("click",adiciona_pontuação_erros,false);
    alvo.addEventListener("click",movimento_alvo);
    area_jogo.addEventListener("click",movimento_alvo);
    btn_start.removeEventListener("click",start_game);
    alvo.style.visibility = "visible";
    duracaoJogo = setInterval(
        function(){
            if(segs == 10){
                popup.style.visibility = "visible";
                alvo.style.visibility = "hidden";
                area_jogo.style.cursor = "auto";
                alvo.removeEventListener("click",movimento_alvo);
                area_jogo.removeEventListener("click",adiciona_pontuação_erros);
                area_jogo.removeEventListener("click",movimento_alvo);
                inp_acertos.setAttribute("value",parseInt(acertos.innerHTML,10));
                inp_erros.setAttribute("value",parseInt(erros.innerHTML,10));
                timer.innerHTML = "terminou";
                clearInterval(duracaoJogo);
            }else{
                ms++;
                if (ms >= 60) {
                    segs++;
                    ms=0;
                }
                str_ms = ms;
                str_segs = segs;
                if (ms < 10) {
                    str_ms = "0"+ms;
                }
                if (segs < 10) {
                    str_segs = "0"+segs; 
                }
                //Checagem da formatação do tempo
                formatted_time = str_segs+":"+str_ms;
                console.log(formatted_time);
                timer.innerHTML = formatted_time;
            }
        },1);
}
btn_start.addEventListener("click",start_game,false);