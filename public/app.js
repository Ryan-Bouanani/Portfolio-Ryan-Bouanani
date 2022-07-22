
const nav = document.querySelector('.navLinks');
const openNavBtn = document.querySelector('nav #navToggleOpen');
const closeNavBtn = document.querySelector('nav #navToggleClose');
const elementsAppareance = document.querySelectorAll('.elementsScroll, h2')
console.log(nav, openNavBtn, closeNavBtn);

// open Navbar

const openNav = () => {
    nav.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';
};
openNavBtn.addEventListener('click', openNav);


const closeNav = () => {
    nav.style.display = 'none';
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
    console.log(entries);

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





