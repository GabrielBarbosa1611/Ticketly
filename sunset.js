// navbar
let navbar = document.querySelector('.navbar');


document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

document.onscroll = () => {
    navbar.classList.remove('active');
}
// fim da navbar

// escolha dos ingressos
function cItems() {
    let select = document.getElementById("Quant1");
    let valorSelecionado = select.value;
    let valorIngresso = 100;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}

function cItems2() {
    let select = document.getElementById("Quant2");
    let valorSelecionado = select.value;
    let valorIngresso = 110;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal2");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}
function cItems3() {
    let select = document.getElementById("Quant3");
    let valorSelecionado = select.value;
    let valorIngresso = 140;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal3");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}
function cItems4() {
    let select = document.getElementById("Quant4");
    let valorSelecionado = select.value;
    let valorIngresso = 160;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal4");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}
function cItems5() {
    let select = document.getElementById("Quant5");
    let valorSelecionado = select.value;
    let valorIngresso = 200;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal5");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}
function cItems6() {
    let select = document.getElementById("Quant6");
    let valorSelecionado = select.value;
    let valorIngresso = 230;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal6");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}

function cItems7() {
    let subtotal = parseFloat(document.getElementById("subtotal").textContent.replace("R$ ", ""));
    let subtotal2 = parseFloat(document.getElementById("subtotal2").textContent.replace("R$ ", ""));
    let subtotal3 = parseFloat(document.getElementById("subtotal3").textContent.replace("R$ ", ""));
    let subtotal4 = parseFloat(document.getElementById("subtotal4").textContent.replace("R$ ", ""));
    let subtotal5 = parseFloat(document.getElementById("subtotal5").textContent.replace("R$ ", ""));
    let subtotal6 = parseFloat(document.getElementById("subtotal6").textContent.replace("R$ ", ""));
    let valortotal = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5 + subtotal6;
    let valortotalSpan = document.getElementById("valortotal");

    valortotalSpan.textContent = "R$ " + valortotal.toFixed(2);
}
// fim das escolhas de ingresso

// alerta 
function alerta() {
    alert('CADASTRE-SE PARA CONTINUAR!!');
}
// fim do alerta 