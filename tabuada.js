var itabuada = document.getElementById("itabuada");
var bgerar = document.getElementById("bgerar");
var blimpar = document.getElementById("blimpar");

var divtabuada = document.getElementById("divtabuada");

/* 
bgerar.onclick = dizola;

function dizola() {
    window.alert("ola");
    //bgerar.style.backgroundColor = "yellow";
}
bgerar.addEventListener("click",mudacor);



function mudacor() {
    blimpar.style.backgroundColor = "green";
}
*/

bgerar.addEventListener("click",geraTabuada);
blimpar.addEventListener("click",function () {
    divtabuada.innerHTML="";
});

function geraTabuada() {
    var numero = itabuada.value;
    //console.log(numero);
    var separador = document.createElement("hr");
    divtabuada.appendChild(separador);
    for(let i=0; i<=10; i++) {
        var novalinha = document.createElement("p");
        novalinha.innerHTML = numero + " x " + i + " = " + numero * i; 
        divtabuada.appendChild(novalinha);
    }
}