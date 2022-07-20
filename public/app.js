
const nav = document.querySelector('.navLinks');
const openNavBtn = document.querySelector('nav #navToggleOpen');
const closeNavBtn = document.querySelector('nav #navToggleClose');
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

