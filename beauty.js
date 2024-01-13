// navbar
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    searchForm.classList.remove('active');
    navbar.classList.toggle('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    navbar.classList.remove('active');
    searchForm.classList.toggle('active');
}

document.onscroll = () => {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}
// fim da navbar

// escolha dos ingressos
function cItems() {
    let select = document.getElementById("Quant1");
    let valorSelecionado = select.value;
    let valorIngresso = 45;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}

function cItems2() {
    let select = document.getElementById("Quant2");
    let valorSelecionado = select.value;
    let valorIngresso = 90;
    let subtotal = valorSelecionado * valorIngresso;
    let subtotalSpan = document.getElementById("subtotal2");

    subtotalSpan.textContent = "R$ " + subtotal.toFixed(2);

    cItems7();
}

function cItems7() {
    let subtotal = parseFloat(document.getElementById("subtotal").textContent.replace("R$ ", ""));
    let subtotal2 = parseFloat(document.getElementById("subtotal2").textContent.replace("R$ ", ""));
    let valortotal = subtotal + subtotal2;
    let valortotalSpan = document.getElementById("valortotal");

    valortotalSpan.textContent = "R$ " + valortotal.toFixed(2);
}
// fim das escolhas de ingresso

// alerta 
function alerta() {
    alert('CADASTRE-SE PARA CONTINUAR!!');
}
// fim do alerta 