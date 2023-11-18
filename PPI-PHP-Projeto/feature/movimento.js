const scenario = window.getComputedStyle(area_jogo);
const salvo = window.getComputedStyle(alvo);
function movimento_alvo(){
    let minX = Math.ceil(parseInt(salvo.height,10));
    let minY = Math.ceil(parseInt(salvo.width,10));
    let maxX = Math.floor(parseInt(scenario.height, 10) - parseInt(salvo.height,10));
    let maxY = Math.floor(parseInt(scenario.width, 10) - parseInt(salvo.width,10));
    let rnd_top = Math.floor(Math.random() * (maxX - minX) + minX);
    let rnd_left = Math.floor(Math.random() * (maxY - minY) + minY);
    alvo.style.left = rnd_left + 'px';
    alvo.style.top = rnd_top + 'px';
}