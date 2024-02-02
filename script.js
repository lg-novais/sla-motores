const lista = document.querySelector('[data-menu="lista"]');
const botao = document.querySelector('[data-menu="botao"]');

function ativarMenu(){
    lista.classList.toggle('ativo');
    botao.classList.toggle('ativo');
}
botao.addEventListener("click", ativarMenu);
   