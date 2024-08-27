function abrirMenu(){
    setTimeout(abrir, 700);

}

function abrir(){

    //Variaveis Locais
    let menu = document.querySelector("#menu_empreendimento");

    //Executar
    menu.click();
}

function menuMobile(){

    let menu_aberto = document.querySelector("#menu_aberto");
    let menu_fechado = document.querySelector("#menu_fechado");

    menu_aberto.classList.toggle("d-none");
    menu_fechado.classList.toggle("d-none");

    let menuDropdown = document.querySelector("#navbarNavDropdown");

    menuDropdown.classList.toggle("show");

}


