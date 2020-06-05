const menuSidebar = document.querySelector('.menu-sidebar');
const menuBtn = document.querySelector('.m-menu');
menuBtn.addEventListener('click', () => {
    menuSidebar.classList.toggle('active');
});