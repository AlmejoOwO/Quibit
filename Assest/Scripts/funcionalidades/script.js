   function openNav(){
    document.getElementById("mobile-menu").style.width = "100%";
}

function closeNav(){
    document.getElementById("mobile-menu").style.width = "0%";
}
const navbar =  document.querySelector("#navbar");
const Abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click",() =>{
    navbar.classList.add("visible");
})

cerrar.addEventListener("click",() =>{
    navbar.classList.remove("visible");
})
document.querySelector('.first-button').addEventListener('click', function () {

    document.querySelector('.animated-icon1').classList.toggle('open');
    });
    document.querySelector('.second-button').addEventListener('click', function () {
    
    document.querySelector('.animated-icon2').classList.toggle('open');
    });
    document.querySelector('.third-button').addEventListener('click', function () {
    
    document.querySelector('.animated-icon3').classList.toggle('open');
    });