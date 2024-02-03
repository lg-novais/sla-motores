const lista = document.querySelector('[data-menu="lista"]');
const botao = document.querySelector('[data-menu="botao"]');

function menuMobile(){
    lista.classList.toggle('ativo');
    botao.classList.toggle('ativo');
}
botao.addEventListener("click", menuMobile);
   