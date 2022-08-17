
const nav = document.querySelector('.navLinks');
const openNavBtn = document.querySelector('nav #navToggleOpen');
const closeNavBtn = document.querySelector('nav #navToggleClose');
const elementsAppareance = document.querySelectorAll('.elementsScroll, h2');
let arrowScrollTop = document.querySelector('.arrowScrollTop');


// open Navbar

const openNav = () => {
    nav.classList.remove('none');
    nav.classList.add('flex');
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';
};
openNavBtn.addEventListener('click', openNav);


const closeNav = () => {
    nav.classList.remove('flex');
    nav.classList.add('none');
    openNavBtn.style.display = 'inline-block';
    closeNavBtn.style.display = 'none';
};
closeNavBtn.addEventListener('click', closeNav);



// * Appareance on scroll

let options = {
    // root: null
    rootMargin: "-15% 0px",
    threshold: 0
}

function handleIntersect(entries) {

    entries.forEach(entry => {
        // si entry est dans notre viewport alors opacity 1
        if (entry.isIntersecting) {
            entry.target.style.opacity = 1
        }
    });
}

const observer = new IntersectionObserver(handleIntersect, options);

elementsAppareance.forEach(element => {
    observer.observe(element);
});


// arrow scroll top appareance on scroll

window.onscroll = function() {
    appareanceArrowScrollTop();
};

function scrollTop() {
    window.scrollTo(0, 0)
    console.log(arrowScrollTop);
}
arrowScrollTop.addEventListener('click', scrollTop);

function appareanceArrowScrollTop() {
    if (window.pageYOffset >= 1800) {
      arrowScrollTop.classList.add("display")
    } else {
      arrowScrollTop.classList.remove("display");
    }
  }





