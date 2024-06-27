////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////NAVBAR///////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////CAROUSSEL/////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function fleche_opaque(Index, prevArrow, nextArrow, carouselItems){
    if (Index == 0){
        prevArrow.style.opacity = '0.4';
    }
    else {
        prevArrow.style.opacity = '1';
    }

    if(Index == carouselItems.children.length-1){
        nextArrow.style.opacity = '0.4';
    }
    else{
        nextArrow.style.opacity = '1';
    }
}

function nav_caroussel(carousel){
  let carouselItems = carousel.children[0];
  let navbar_caroussel = document.createElement('div');
  navbar_caroussel.classList.add('carousel-navbar');
  for(let i=0 ; i<carouselItems.children.length; i++)
    {
  let img = document.createElement('img');
  img.src = '../images/navbar_carousel.svg';
  img.alt ="bouton pour naviguer dans le caroussel"; 
  navbar_caroussel.append(img);

  }

  carousel.append(navbar_caroussel);
  

}

function changer_navbar_slide(navbar_caroussel, n, num){
  let actif =  document.getElementsByClassName('slide_active')[num];
  actif.classList.remove('slide_active');
  navbar_caroussel.children[n].classList.toggle('slide_active');
}

function caroussel(num){
  //const carousel = document.querySelector('.carousel');
  const div_carousel= document.getElementsByClassName("carousel");
  let carousel = div_carousel[num];
  let carouselItems = carousel.children[0];
  let prevArrow = carousel.children[1].children[0];
  let nextArrow = carousel.children[1].children[1];
  let carouselItemWidth = carouselItems.clientWidth;
  let currentIndex = 0;

  nav_caroussel(carousel);
  let navbar_caroussel = carousel.children[2];
  navbar_caroussel.children[0].classList.toggle("slide_active");

  fleche_opaque(currentIndex, prevArrow, nextArrow, carouselItems);

  prevArrow.addEventListener('click', () => {
    currentIndex--;

    if (currentIndex < 0) {
      currentIndex = carouselItems.children.length - 1;
    }
    fleche_opaque(currentIndex, prevArrow, nextArrow, carouselItems);
    changer_navbar_slide(navbar_caroussel, currentIndex, num);
    carouselItems.style.transform = `translateX(-${currentIndex * carouselItemWidth}px)`;
  });
  
  nextArrow.addEventListener('click', () => {
    currentIndex++;
    
    if (currentIndex > carouselItems.children.length - 1) {
      currentIndex = 0;
    }
    
    fleche_opaque(currentIndex, prevArrow, nextArrow, carouselItems);
    changer_navbar_slide(navbar_caroussel, currentIndex, num);
    carouselItems.style.transform = `translateX(-${currentIndex * carouselItemWidth}px)`;
  });
  

  for (let n=0 ; n<carouselItems.children.length; n++){
    navbar_caroussel.children[n].addEventListener('click', () => {
      
      currentIndex = n;
      fleche_opaque(currentIndex, prevArrow, nextArrow, carouselItems);
      carouselItems.style.transform = `translateX(-${currentIndex * carouselItemWidth}px)`;
      changer_navbar_slide(navbar_caroussel, n, num);
    
    });
  }
  }



const total_div = document.getElementsByClassName("carousel").length;
  for (let i=0 ; i < total_div; i++){
    caroussel(i);
    
  }
