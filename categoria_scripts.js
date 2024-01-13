// navbar
let navbar = document.querySelector('.navbar');


document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

document.onscroll = () => {
    navbar.classList.remove('active');
}
// fim da navbar

// pesquisar
// Função para exibir sugestões
const inputBox = document.querySelector(".search-txt");
const eventos = document.querySelectorAll(".card");

let eventList = [

];

// Extrair os nomes dos eventos da seção de eventos e criar a lista de eventos
eventos.forEach(event => {
    let eventName = event.querySelector(".card-text").textContent;
    eventList.push(eventName);
});

// Função para exibir sugestões
function showSuggestions(list) {
    let userInput = inputBox.value.toLowerCase();
    let suggestions = list.filter(event => event.toLowerCase().startsWith(userInput));

    // Exibir sugestões
    let html = suggestions.map(event => `<div class="suggestion">${event}</div>`).join('');
    document.querySelector(".suggestions").innerHTML = html;

    // Adicionar evento de clique às sugestões
    const suggestionItems = document.querySelectorAll(".suggestion");
    suggestionItems.forEach(item => {
        item.addEventListener("click", function() {
            inputBox.value = item.innerText;
            // Aqui você pode redirecionar para a página do evento clicado
            redirectToEventPage(item.innerText);
        });
    });
}

// Redirecionamento para a página do evento
function redirectToEventPage(eventName) {
    eventos.forEach(event => {
        if (event.querySelector(".card-text").textContent === eventName) {
            let eventPage = event.querySelector("img").parentNode.getAttribute("onclick");
            window.location.href = eventPage.split("'")[1];
        }
    });
}

inputBox.addEventListener("input", function() {
    showSuggestions(eventList);
});

// Fechar as sugestões ao clicar em qualquer lugar fora da barra de pesquisa
document.addEventListener("click", function(e) {
    if (!e.target.closest(".search-box")) {
        document.querySelector(".suggestions").innerHTML = '';
    }
});
// fim do pesquisar