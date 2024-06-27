"use strict";

let menu_hamburger = document.getElementById("menu_hamburger");
let nav_links = document.querySelector(".nav-links");

menu_hamburger.addEventListener('click',()=>{
    nav_links.classList.toggle("mobile-menu")
})

function supp_active(){
    let actif = document.querySelector(".active");
    if (actif != null){
    actif.classList.remove("active");
    }
}

function actif(rubrique_selectionnée){
    rubrique= document.getElementById(rubrique_selectionnée);
    supp_active();
    rubrique.classList.toggle("active");
}



document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector(".carousel-container");
    const gButton = document.getElementById("g");
    const dButton = document.getElementById("d");

    let currentIndex = 0;

    function showImage(index) {
        const newTransformValue = -index * 100 + "%";
        container.style.transform = `translateX(${newTransformValue})`;
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % 3;
        showImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + 3) % 3;
        showImage(currentIndex);
    }

    gButton.addEventListener("click", prevImage);
    dButton.addEventListener("click", nextImage);



    });
    


