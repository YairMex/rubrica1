let ubicacionPrincipal = window.pageYOffset;

  AOS.init();

window.addEventListener("scroll", function(){
    let desplazamientoActual = window.pageYOffset;
    if(ubicacionPrincipal >= desplazamientoActual){
        document.getElementsByTagName("nav")[0].style.top = "0px"
    }else{
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicacionPrincipal= desplazamientoActual;

})

// Menu

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;

document.querySelectorAll(".hamburguer")[0].addEventListener("click", function(){
    if(semaforo){
        document.querySelectorAll(".hamburguer")[0].style.color ="#fff";
        semaforo= false;
    }else{
        document.querySelectorAll(".hamburguer")[0].style.color ="#000";
        semaforo= true;
    }
    enlacesHeader.classList.toggle("menudos")
})

//slider

let slider = document.querySelector('.slider-contenedor');
let sliderInd = document.querySelectorAll('.slider-serv');
let contador = 1;
let tamañoWitdth = sliderInd[0].clientWidth;
let intervalo = 2000;

window.addEventListener("resize", function(){
    tamañoWitdth = sliderInd[0].clientWidth;
})

setInterval(function tiempo(){
    slides();
}, intervalo);

function slides(){
    slider.style.transform = 'translate(' + (- tamañoWitdth * contador) + 'px)';
    slider.style.transition = 'transform 1s';
    contador++;

    if(contador === sliderInd.length){
        contador=0;
        setTimeout(function(){
            slider.style.transform = 'translate(0px)';
            slider.style.transition = 'transform 0s';
        }, intervalo)
    }
}