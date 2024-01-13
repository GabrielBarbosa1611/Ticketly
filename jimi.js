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

function cItems7() {
    let subtotal = parseFloat(document.getElementById("subtotal").textContent.replace("R$ ", ""));
    let valortotal = subtotal;
    let valortotalSpan = document.getElementById("valortotal");

    valortotalSpan.textContent = "R$ " + valortotal.toFixed(2);
}
// fim das escolhas de ingresso

// alerta 
function alerta() {
    alert('CADASTRE-SE PARA CONTINUAR!!');
}
// fim do alerta 