const data = new Date();
let inp_dia = document.getElementById("dia");
let inp_mes = document.getElementById("mes");
let inp_ano = document.getElementById("ano");
let inp_hora = document.getElementById("hora");
let inp_min = document.getElementById("min");

let dia = data.getDate();
let mes = data.getMonth()+1;
let ano = data.getFullYear();
let hora = data.getHours();
let minutos = data.getMinutes();

inp_min.setAttribute("value",minutos);
inp_hora.setAttribute("value",hora);
inp_dia.setAttribute("value",dia);
inp_mes.setAttribute("value",mes);
inp_ano.setAttribute("value",ano);

console.log(dia);