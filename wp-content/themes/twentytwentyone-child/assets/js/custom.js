
window.onload = ()=> {
    console.log("Despues de cargar")

    var btn_menu = document.getElementById("btn_menu");
    var modal_menu = document.getElementById("modal_menu");

    btn_menu.addEventListener("click", () => {
        if (modal_menu.classList.contains('hidden')){
            modal_menu.classList.remove('hidden');
        }else{
            modal_menu.classList.add('hidden');
        }
    })

}


console.log("Antes de cargar")